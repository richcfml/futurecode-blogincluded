import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { fontsource } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                fontsource('Source serif 4', {
                    alias: 'serif',
                    weights: [200,300,400,500,600,700],
                    styles: ['normal', 'italic'],
                    subset: ['latin'],
                    display: 'swap',
                    preload: [
                        { weight: 400 },
                        { weight: 500 },
                    ],
                }),
                fontsource('Public sans', {
                    alias: 'sans',
                    weights: [200,300,400,500,600,700],
                    styles: ['normal', 'italic'],
                    subset: ['latin'],
                    display: 'swap',
                    preload: [
                        { weight: 400 },
                        { weight: 500 },
                    ],
                }),
                fontsource('JetBrains Mono', {
                    alias: 'mono',
                    weights: [200,300,400,500,600,700],
                    styles: ['normal', 'italic'],
                    subset: ['latin'],
                    display: 'swap',
                    preload: [
                        { weight: 400 },
                        { weight: 500 },
                    ],
                })
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
