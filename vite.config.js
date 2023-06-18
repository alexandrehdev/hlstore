import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                 'resources/js/app.js',
                 'resources/js/scripts/main.js',
                 'resources/js/scripts/slide-behavior/home-slide.js',
                 'resources/js/scripts/slide-behavior/show-slide.js'
                ],
            refresh: false,
        }),
    ],
});
