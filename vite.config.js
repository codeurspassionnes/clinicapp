import { defineConfig } from 'vite';
import vue from "@vitejs/plugin-vue"
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', 
                'resources/js/adminlte.js'
            ],
            refresh: true,
        }),
        vue()
    ],
    resolve: {
        alias: {
            $: 'jquery',
            jquery: 'jquery',
        },
    },
});
