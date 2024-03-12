import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
            manifest: '/build/manifest.json', // Добавьте эту строку
        }),
    ],
    build: {
        outDir: 'htdocs/build', // Измените директорию сборки на htdocs/build
    },
});