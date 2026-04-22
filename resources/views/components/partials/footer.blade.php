<footer class="w-full bg-gray-950 border-t border-white/5 pt-20 pb-8 font-sans">
    <div class="container mx-auto px-6 md:px-12 max-w-[90rem]">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">

            <div class="space-y-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="text-amber-500 transform group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11.5h8"></path></svg>
                    </div>
                    <span class="text-2xl font-black tracking-tighter text-white uppercase">Edremit<span class="text-amber-500 font-light italic">Moda</span></span>
                </a>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                    Kuzey Ege'nin en seçkin optik ve güneş gözlüğü koleksiyonu. Lüksü dijital deneyimle buluşturuyoruz.
                </p>
                <div class="flex items-center gap-4">
                    <a href="https://instagram.com/{{ $settings['instagram'] ?? 'edremitmoda' }}" target="_blank" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:border-amber-500 hover:text-amber-500 transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8">Keşfet</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('collection') }}" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">Tüm Koleksiyon</a></li>
                    <li><a href="{{ route('home') }}#markalar" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">Markalar</a></li>
                    <li><a href="{{ route('vip') }}" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest text-amber-500/80">VIP Deneyim</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">Manifesto</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8">Yasal</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('legal.kvkk') }}" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">KVKK & Çerezler</a></li>
                    <li><a href="{{ route('legal.sales') }}" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">Satış Sözleşmesi</a></li>
                    <li><a href="{{ route('legal.return') }}" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">İade Politikası</a></li>
                    <li><a href="/sitemap.xml" class="text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">Site Haritası</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8">İletişim</h4>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-gray-500 text-xs font-bold uppercase tracking-widest">
                        <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        Edremit / Balıkesir
                    </li>
                    <li>
                        <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905448995965' }}" class="flex items-center gap-3 text-gray-500 hover:text-amber-500 transition-colors text-xs font-bold uppercase tracking-widest">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            VIP Destek Hattı
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em]">
                &copy; {{ date('Y') }} Edremit Moda. Tüm Hakları Saklıdır.
            </div>

            <div class="flex items-center gap-2 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">
                <span>Architected by</span>
                <a href="https://ugurcanmurathosver.com" target="_blank" class="group flex items-center gap-1.5 text-white hover:text-amber-500 transition-all duration-300">
                    <span class="bg-white/5 px-2 py-1 rounded border border-white/10 group-hover:border-amber-500/50">Uğurcan Murat Hoşver</span>
                </a>
            </div>
        </div>
    </div>
</footer>
