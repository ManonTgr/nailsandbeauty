import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/foo.css',
                'resources/js/app.js',
                'resources/js/foo.js'
            ],
            refresh: true,
        }),
    ],
});