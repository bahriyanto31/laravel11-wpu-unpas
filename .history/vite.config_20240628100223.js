import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        outDir: "public/build",
        sourcemap: mode === "development", // Only generate sourcemaps in development
    },
    server: {
        hmr: {
            host: "localhost",
        },
    },
});
