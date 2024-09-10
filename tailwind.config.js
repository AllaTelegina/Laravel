/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        keyframes: {
            rotate: {
                '0%': { transform: 'perspective(1000px) rotateY(0deg)'},
                '100%': { transform: 'perspective(1000px) rotateY(360deg)'}
            }
        },
        animation: {
            rotate: 'rotate 30s linear infinite',
        },
        colors: {
            'regal_violet': '#01021D',
            'regal_blue': '#3828c7',
            'regal_blue_light': '#3826c6',
            'regal_yellow': '#efdf0a',
            'regal_pink': '#f579f3',
        },
    },
  },
    plugins: [
        require("@tailwindcss/typography"),
        require("daisyui")
    ],

    daisyui: {
        themes: ["light", "dark", "cupcake"],
    },



}
