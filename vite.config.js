import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/bootstrap.min.css', 'resources/css/tiny-slider.css', 'resources/js/bootstrap.bundle.min.js', 'resources/js/app.js'],
            refresh: true,
        })
    ],
    build: {
        sourcemap: true, // Add this line to enable source maps
    },
});