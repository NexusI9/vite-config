import path from 'path';

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
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`
      }
    }
  },
  resolve: {
    alias: {
      '@styles': path.resolve(__dirname, './src/styles'),
      '@assets': path.resolve(__dirname, './src/assets'),
      '@lib': path.resolve(__dirname, './src/lib'),
      '@public': path.resolve(__dirname, './public'),
    }
  }
}