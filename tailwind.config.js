/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins"]
      },  
      colors: {
        body: '#000000',
        dark: '#000000',
        'soft-dark': '#09090A',
        secondary: {
          DEFAULT: '#1F1F22',
          '50': '#eeeef0',
          '100': '#dadadd',
          '200': '#b9bac0',
          '300': '#92939e',
          '400': '#757682',
          '500': '#5f5f6a',
          '600': '#4d4d57',
          '700': '#42424a',
          '800': '#3a3a40',
          '900': '#1f1f22',
        },
        primary: {
          DEFAULT: '#5d5fef',
          '50': '#eef2ff',
          '100': '#e0e7ff',
          '200': '#c7d2fe',
          '300': '#a6b4fb',
          '400': '#828cf7',
          '500': '#5d5fef',
          '600': '#5147e4',
          '700': '#4539c9',
          '800': '#3931a2',
          '900': '#332f80',
          foreground: '#ffffff'
        }
      }
    },
  },
  plugins: [],
}