/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    colors: {
      transparrent: 'transparent',
      current: 'currentColor',
      gray: colors.gray,
      black: colors.black,
      white: colors.white,
      green: colors.green,
      blue: colors.blue,
      sky: colors.sky,
      red: colors.red,
      yellow: colors.yellow,
      hacklab_green:  '#5ab576',
      hacklab_blue: '#3b82f6',
      hacklab_background: '#1b233f'
    },
    extend: {
      fontFamily: {
        display: 'Inter,sans-serif',
      }
    },
  },
  plugins: [],
}


