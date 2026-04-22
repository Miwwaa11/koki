/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    // Tambahkan path lain jika diperlukan, misalnya untuk komponen Vue/React
  ],
  darkMode: 'class', // Mengaktifkan mode gelap berdasarkan kelas 'dark' pada elemen induk
  theme: {
    extend: {},
  },
  plugins: [],
}
