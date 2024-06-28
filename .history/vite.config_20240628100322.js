import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig(({ mode }) => ({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/css/app.css"],
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
}));
