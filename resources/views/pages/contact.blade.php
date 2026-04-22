<x-layouts.app>
    <x-slot:title>İletişim | Edremit Moda VIP Destek</x-slot>

    <main class="w-full bg-gray-950 pt-32 pb-24 text-gray-300">
        <div class="container mx-auto px-6 max-w-7xl">

            <div class="max-w-3xl mb-20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-px bg-amber-500"></div>
                    <span class="text-amber-500 font-bold text-xs tracking-[0.4em] uppercase">Bize Ulaşın</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-white tracking-tighter leading-none mb-8">
                    Sizin İçin <br>
                    <span class="font-light italic text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-600">Buradayız.</span>
                </h1>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Koleksiyonumuz hakkında bilgi almak veya özel sipariş oluşturmak için VIP destek hatlarımız üzerinden bize ulaşabilirsiniz.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <a href="https://wa.me/{{ $settings['whatsapp'] }}" target="_blank"
                   class="group bg-gray-900/50 border border-white/5 p-10 rounded-[2.5rem] hover:border-green-500/30 transition-all duration-500">
                    <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-500 mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </div>
                    <h4 class="text-white font-black text-xl uppercase mb-2">WhatsApp VIP</h4>
                    <p class="text-gray-500 text-sm mb-6">7/24 Stil Danışmanlığı ve Sipariş Hattı</p>
                    <span class="text-green-500 font-bold text-xs tracking-widest uppercase">Mesaj Gönder →</span>
                </a>

                <a href="mailto:{{ $settings['email'] }}"
                   class="group bg-gray-900/50 border border-white/5 p-10 rounded-[2.5rem] hover:border-amber-500/30 transition-all duration-500">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 flex items-center justify-center text-amber-500 mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-white font-black text-xl uppercase mb-2">E-Posta</h4>
                    <p class="text-gray-500 text-sm mb-6">Kurumsal işbirlikleri ve sorularınız için</p>
                    <span class="text-amber-500 font-bold text-xs tracking-widest uppercase">E-Posta Yaz →</span>
                </a>

                <a href="https://instagram.com/{{ $settings['instagram'] }}" target="_blank"
                   class="group bg-gray-900/50 border border-white/5 p-10 rounded-[2.5rem] hover:border-pink-500/30 transition-all duration-500">
                    <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </div>
                    <h4 class="text-white font-black text-xl uppercase mb-2">Instagram</h4>
                    <p class="text-gray-500 text-sm mb-6">Yeni modelleri ve tarzları takip edin</p>
                    <span class="text-pink-500 font-bold text-xs tracking-widest uppercase">Takip Et →</span>
                </a>

            </div>

        </div>
    </main>

    <x-partials.footer />
</x-layouts.app>
