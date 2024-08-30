import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vuePlugin from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        vuePlugin(),
        laravel({
            input: [
                'resources/scss/stylesheet.scss',
                'resources/js/spa/admin/app.js',
                'resources/js/spa/user/app.js',
            ],
            refresh: true,
        }),
    ],
});
