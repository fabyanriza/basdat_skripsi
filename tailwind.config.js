/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                bgColor: "#9969E3",
                loginColor: "#1C1D21",
                notifColor: "#A472F5",
                dashboard: "#6264D5",
            },
            fontFamily: {
                istok: ["Istok Web", "sans-serif"], // Menambahkan font Istok Web
            },
        },
    },
    plugins: [],
};
