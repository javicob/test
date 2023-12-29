/** @type {import('tailwindcss').Config} */
/* eslint-env node */
const colors = require('tailwindcss/colors')
export default {
  content: [
    "./resources/views/*.blade.php",
    "./resources/views/**/*.blade.php",
    "./resources/views/**/**/*.blade.php",
  ],
  theme: {
    extend: {},
    colors: {
      'dok-gray': '#373737',
      'dok-gold': '#EFB810',
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,
    }
  },
  plugins: [],
}

