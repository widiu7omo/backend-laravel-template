const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
const brandColor = {
    '50': '#B3DCF6',
    '100': '#A1D4F4',
    '200': '#7CC3EF',
    '300': '#58B2EB',
    '400': '#33A1E6',
    '500': '#1A8ED7',
    '600': '#146DA5',
    '700': '#0E4C73',
    '800': '#082B41',
    '900': '#020A0F'
}
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/filament/**/*.blade.php"
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                gray: colors.slate,
                danger: colors.rose,
                primary: brandColor,
                success: colors.emerald,
                warning: colors.orange,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
