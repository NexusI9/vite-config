import path from 'path';
import fg from 'fast-glob';

const FILES_CONFIG = [
  {
    extensions: ['css'],
    folder: 'css',
  },
  {
    extensions: ['png', 'jpg', 'ico', 'svg'],
    folder: 'image',
  },
  {
    extensions: ['ttf', 'otf', 'woff', 'woff2'],
    folder: 'fonts',
  },
];

const DEFAULT_ASSET_FOLDER = 'assets';
const DEFAULT_ENTRY_FOLDER = 'js';

const watchExternal = () => {
  return ({
    name: 'watch-external', // https://stackoverflow.com/questions/63373804/rollup-watch-include-directory/63548394#63548394
    async buildStart() {
      const files = await fg(['src/**/*', 'public/**/*']);
      for (let file of files) {
        this.addWatchFile(file);
      }
    }
  });
}

const routeAssets = (asset) => {
  const extension = asset.name.split('.').pop();
  for (let config of FILES_CONFIG) {
    for (let configExtension of config.extensions) {
      if (configExtension.includes(extension)) {
        return (config.folder || DEFAULT_ASSET_FOLDER) + '/'
          + (config.filename || '[name]')
          + (config.extension || '[extname]')
      }
    }
  }
}

export default {
  root: 'src',
  server: {
    host: true
  },
  base: './',
  publicDir: '../public',
  build: {
    minify: false,
    outDir: '../dist',
    emptyOutDir: true,
    polyfill: false,
    modulePreload: false,
    rollupOptions: {
      input: '/index.js',
      output: {
        assetFileNames: routeAssets,
        entryFileNames: DEFAULT_ENTRY_FOLDER + '/' + `[name]` + `.js`,
      }
    }
  },
  plugins:[watchExternal()],
  resolve: {
    alias: {
      '@styles': path.resolve(__dirname, './styles'),
      '@lib': path.resolve(__dirname, './lib'),
      '@assets': path.resolve(__dirname, './assets'),
    }
  }
}