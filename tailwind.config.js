/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/css/**/*.css', // ⬅️ WAJIB kalau pakai @apply custom
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
