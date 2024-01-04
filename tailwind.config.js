/** @type {import('tailwindcss').Config} */
export default {
    jit: true,
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                "theme-light-red": "#422121",
                "theme-red": "#FA1A1A",
            },
            screens: {
                "theme-screen": "1440px",
            },
        },
    },
    safelist: [],
    plugins: [],
};
