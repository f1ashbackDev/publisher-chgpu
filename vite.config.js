import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css',
                    'resources/css/sb-admin-2.css',
                    'resources/css/bootstrap.min.css',
                    'resources/css/all.css',
                    'resources/js/sb-admin-2.js',
                    'resources/js/admin/bootstrap.bundle.min.js',
                    'resources/js/admin/jquery.min.js',
                    'resources/js/admin/jquery.easing.min.js'],
            refresh: true,
        }),

    ],

    publicDir: 'public',
    base: '/',
    build: {
        assetsDir: '',
        copyPublicDir: false,
        commonjsOptions: { transformMixedEsModules: false } // Change
    },
});
