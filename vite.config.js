import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { quasar, transformAssetUrls } from '@quasar/vite-plugin'
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        quasar({
            sassVariables: 'resources/js/quasar-variables.sass'
        })
    ],
    resolve: {
        alias: {
          '@shared': path.resolve(__dirname, './resources/shared/'),
          '@composables': path.resolve(__dirname, './resources/js/Composables'),
          '@components': path.resolve(__dirname, './resources/js/Components'),
        },
    }
});
