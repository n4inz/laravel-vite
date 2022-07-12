/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        // colors : {
        //   'regal-blue': '#243c5a',
        // },
        // colors: {
        //   nain: '#3BD7CF'
        // },
        extend: {
            colors: {
                backround: "#E5E5E5",
                palet: "#3BD7CF",
                hover: "#DAF2F1",
                bgbody: "#FCFCFC",
                textcolor: "#868B90",
                colorelips: "#2CA6A0",
                colorStatusCard1: "#FA9D6B",
                colorStatusCard2: "#FFE2D2",
                colortext: "#222222",
            },
            fontFamily: {
                roboto: ["Roboto", "font-sans"],
            },
        },
    },
    plugins: [],
};
