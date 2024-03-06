
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

export default {
  root: 'src',
  server: {
    host: true
  },
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
  }
}