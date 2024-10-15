import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app/App.tsx", "resources/js/orchid/dashboard.js", "resources/admin/css/tailwind.css", "resources/admin/js/app.js"],
            refresh: true,
        }),
        react(),
    ],

    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./resources/js"),
            "@resources": path.resolve(__dirname, "./resources"),
            "@public": path.resolve(__dirname, "./public"),
        },
    },

    server: {
        host: "0.0.0.0",
        hmr: {
            host: "localhost",
        },
    },
});
