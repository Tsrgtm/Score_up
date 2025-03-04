import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    server: {
        // Listen on all addresses inside the container
        host: true,
        hmr: {
            // Force the Vite client to connect via SSL
            // This will also force a "https://" URL in the hot file 
            protocol: 'wss',
            // The host where the Vite dev server can be accessed
            // This will also force this host to be written to the hot file
            host: 'tsrgtm.tech',
        },
    },
    plugins: [
        basicSsl(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
});