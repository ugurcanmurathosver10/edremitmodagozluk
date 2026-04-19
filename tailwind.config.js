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
        // İleride markamıza özel renkleri buraya ekleyeceğiz
        primary: '#111827', // Koyu ve asil bir renk
        accent: '#F59E0B', // İndirimler ve dikkat çekici alanlar için
        whatsapp: '#25D366' // WhatsApp butonu rengi
      },
      fontFamily: {
        // Gözlük moda sitesi olacağı için zarif bir font ekleyebiliriz (örn: Poppins veya Playfair)
        sans: ['Figtree', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
