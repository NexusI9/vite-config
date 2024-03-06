// vite.config.js
import path from 'path';
import glsl from 'vite-plugin-glsl';
import gltf from 'vite-plugin-gltf';

export default {
    root: 'src',
    publicDir: '../public',
    base: './',
    server:{
        host:true
    },
    build: {
        minify: false,
        minifySyntax: false,
        outDir: '../dist',
        emptyOutDir: true,
        //remove hash
        rollupOptions: {
            input: {
                index: 'src/index.html'
            },
            output: {
                entryFileNames: 'scripts/[name].js',
                chunkFileNames: 'scripts/[name].js',
                assetFileNames: 'assets/[name].[ext]',
                manualChunks: {
                    'three': ['three']
                }
            }
        }
    },
    optimizeDeps: {
        include: ['three'],
    },
    resolve: {
        alias: {
            '@styles': path.resolve(__dirname, './src/styles'),
            '@assets': path.resolve(__dirname, './src/assets'),
            '@lib': path.resolve(__dirname, './src/lib'),
            '@public': path.resolve(__dirname, './public'),
        }
    },
    assetsInclude: ['**/*.gltf'],
    plugins: [glsl(), gltf()]
}