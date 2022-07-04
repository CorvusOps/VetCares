/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,js,php}',
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
