/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,js}',
  ],
  theme: {
    extend: {
      fontFamily:{
        body:['Dancing Script']
      }
    },
  },
  plugins: [],
  variants: {
    extend: {
        display: ["group-hover"],
    },
},
}
