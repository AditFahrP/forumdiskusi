import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: "0.0.0.0", // Railway butuh ini
        port: 5173, // Default port Vite
        strictPort: true,
        hmr: {
            host: process.env.VITE_APP_URL || "your-railway-app-url",
            protocol: "wss",
        },
    },
    build: {
        outDir: "public/build", // Pastikan file build masuk ke public
        emptyOutDir: true,
    },
});
