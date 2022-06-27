/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,js}',
    './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily:{
        body:['Dancing Script']
      }
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
  variants: {
    extend: {
        display: ["group-hover"],
    },
},
}
