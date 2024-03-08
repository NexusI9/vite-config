import path from 'path';

const FILES_CONFIG = [
  {
    extensions: ['css'],
    folder: 'styles',
  },
  {
    extensions: ['png', 'jpg', 'ico', 'svg'],
    folder: 'images',
  },
  {
    extensions: ['ttf', 'otf', 'woff', 'woff2'],
    folder: 'fonts',
  },
];

const DEFAULT_ASSET_FOLDER = 'assets';
const DEFAULT_ENTRY_FOLDER = 'js';

//remove crossorigin attribute from build
const noAttr = () => {
  return {
    name: "no-attribute",
    transformIndexHtml(html) {
      return html.replace('crossorigin', '');
    }
  }
}

export default {
  root: 'src',
  server: {
    host: true
  },
  publicDir: '../public',
  build: {
    minify: false,
    outDir: '../dist',
    emptyOutDir: true,
    polyfill: false,
    modulePreload: false,
    rollupOptions: {
      output: {
        assetFileNames: (asset) => {

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
        },
        entryFileNames: DEFAULT_ENTRY_FOLDER + '/' + `[name]` + `.js`,
      }
    }
  },
  plugins:[noAttr()],
  resolve: {
    alias: {
      '@styles': path.resolve(__dirname, './src/styles'),
      '@js': path.resolve(__dirname, './src/js'),
      '@assets': path.resolve(__dirname, './src/assets'),
    }
  }
}