/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'huruf': '#65451F',
        'bege': '#EAC696',
        'gelap': '#765827',
        'terang': '#C8AE7D',
      },
    },
  },
  plugins: [],
}

