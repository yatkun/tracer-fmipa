/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      lineHeight: {
        
        '12': '4rem',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'] // Ensure fonts with spaces have " " surrounding it.
      },
      colors: {
        'primary' : '#4a2798',
        'active' : '#5d34b7',
        'hover' : '#775FCA',
        'secondary' : '#FE9F45',
        'subtitle' : '#2E3E5C',
        'purple-soft':'#845bdf',
        'divider': '#ECF0F5',
        'navy': '#21304F',
        'softnavy': '#8F99CC',
        'menu': '#646FA7',
        'hovermenu' :'#F7F9FF'
      }
    },
    
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}
