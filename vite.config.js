import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
const env = loadEnv('all', process.cwd());

export default defineConfig({
    build: {
        manifest: 'manifest.json',
    },
    plugins: [
        laravel({
            input: ['resources/assets/css/app.css',
                'resources/assets/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: env.VITE_ASSET_PORT,
        strictPort: true,
        hmr: {
            host: env.VITE_ASSET_HOST,
            port: env.VITE_ASSET_PORT,
        },
        https: {
            key: fs.readFileSync(env.VITE_PRIVKEY_PATH),
            cert: fs.readFileSync(env.VITE_CERT_PATH),
        },
    },
});
