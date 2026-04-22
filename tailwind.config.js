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
        // --- ŞAMPİYONLAR LİGİ RENK PALETİ ---
        primary: '#0F172A',   // Gece Yarısı Siyahı: Dümdüz siyah yerine çok hafif lacivert alt tonlu, premium ve göz yormayan asil siyah.
        secondary: '#475569', // Lüks Gri: Uzun okuma metinleri (SEO) için en ideal, yormayan ton.
        accent: '#D4AF37',    // Saf Altın (Rolex Gold): Basit bir sarı veya turuncu değil, gerçek altın rengi.
        surface: '#FDFBF7',   // İnci Beyazı: Patlayan hastane beyazı (#FFF) yerine, lüks butiklerin kullandığı kırık, sıcak beyaz.
        whatsapp: '#25D366',
      },
      fontFamily: {
        // Dünyanın en okunaklı ve modern UI fontu
        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
      },
      backgroundImage: {
        // Lüks Altın Parlama Efekti (Butonlar ve rozetler için)
        'gold-shine': 'linear-gradient(135deg, #BF953F 0%, #FCF6BA 50%, #B38728 100%)',
      },
      // --- KUSURSUZ ANİMASYONLAR BURADA ---
      keyframes: {
        // Markalar Slider'ı için kesintisiz kayma
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        // Sayfa açılırken elemanların aşağıdan yumuşakça belirmesi
        'fade-in-up': {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        // "8 Kişi inceliyor" gibi satış tetikleyiciler için yumuşak nabız
        'pulse-soft': {
          '0%, 100%': { opacity: '1' },
          '50%': { opacity: '0.5' },
        }
      },
      animation: {
        marquee: 'marquee 25s linear infinite',
        'fade-in-up': 'fade-in-up 0.8s ease-out forwards',
        'pulse-soft': 'pulse-soft 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
