import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/firebase.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Enable manifest generation
        outDir: "public/vendor/courier/build", // Outputs files to the 'build' folder instead of 'dist'
    },
});
