import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/bootstrap.css', 'resources/css/styles.css'],
            refresh: true,
        }),
    ],
});
