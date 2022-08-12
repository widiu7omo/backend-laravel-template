import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

let inputs = [];

if (process.env.TAILWIND_CONFIG) {
    inputs = [`resources/css/${process.env.TAILWIND_CONFIG}.css`];
} else {
    inputs = ["resources/css/app.css", "resources/js/app.js"];
}

export default defineConfig({
    plugins: [
        laravel({
            input: inputs,
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [
                require("tailwindcss/nesting"),
                require("tailwindcss")({
                    config: process.env?.TAILWIND_CONFIG
                        ? `tailwind-${process.env.TAILWIND_CONFIG}.config.js`
                        : "./tailwind.config.js",
                }),
                require("autoprefixer"),
            ],
        },
    },
    build: {
        outDir: process.env?.TAILWIND_CONFIG
            ? `./public/build/${process.env.TAILWIND_CONFIG}`
            : "./public/build/frontend",
    },
});

// import { defineConfig } from 'vite'
// import laravel, { refreshPaths } from 'laravel-vite-plugin'
//
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/css/app.css',
//                 'resources/js/app.js',
//             ],
//             refresh: [
//                 ...refreshPaths,
//                 'app/Http/Livewire/**',
//                 'app/Forms/Components/**',
//             ],
//         }),
//     ],
// })
