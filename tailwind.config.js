/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        prime: '#ec1c24',
      },

      aspectRatio: {
        '4/3': '4 / 3',
      },
    },
  },
  plugins: [],
}
