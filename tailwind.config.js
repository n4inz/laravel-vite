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
    extend: {
      colors : {
        'backround' : '#E5E5E5',
        'palet' : '#3BD7CF',
        'hover' : '#DAF2F1',
        'bgbody' : '#FCFCFC',
        'textcolor' : '#868B90',
        'colorelips': '#2CA6A0'
      },
      fontFamily: {
        roboto: ['Roboto', 'font-sans'],
      },
    },
  },
  plugins: [],
}
