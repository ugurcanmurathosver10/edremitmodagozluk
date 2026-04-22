<x-layouts.app>
    <x-slot:title>404 - Sayfa Bulunamadı | Edremit Moda</x-slot>

    <main class="relative w-full min-h-screen bg-gray-950 flex flex-col items-center justify-center overflow-hidden font-sans px-6 pt-32 pb-12">

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-amber-500/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="relative z-10 w-full max-w-4xl mx-auto flex flex-col items-center">

            <div class="mb-6">
                <span class="inline-block text-amber-500 font-bold text-[10px] md:text-xs tracking-[0.5em] uppercase border-b border-amber-500/20 pb-2">
                    Hata Kodu: 404
                </span>
            </div>

            <h1 class="text-5xl md:text-8xl lg:text-9xl font-black text-white tracking-tighter text-center leading-[0.9] mb-8">
                GÖRÜŞ <br>
                <span class="italic font-light text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-600">KAYBI.</span>
            </h1>

            <div class="max-w-md text-center mb-12">
                <p class="text-gray-400 text-xs md:text-sm leading-relaxed uppercase tracking-[0.2em] font-medium opacity-80">
                    Aradığınız sayfa odağımızdan çıktı. <br class="hidden md:block">
                    Koleksiyonumuza geri dönmeye ne dersiniz?
                </p>
            </div>

            <div class="w-12 h-px bg-white/10 mb-12"></div>

            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-6 w-full max-w-md">
                <a href="{{ route('home') }}"
                   class="px-10 py-4 bg-white text-gray-950 rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all duration-500 hover:bg-amber-500 w-full text-center">
                    Ana Sayfa
                </a>

                <a href="{{ route('collection') }}"
                   class="px-10 py-4 border border-white/10 text-white rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all duration-500 hover:border-amber-500/50 w-full text-center">
                    Koleksiyon
                </a>
            </div>

            <div class="mt-16 flex items-center gap-6 text-[9px] font-bold text-gray-600 uppercase tracking-widest">
                <a href="{{ route('about') }}" class="hover:text-amber-500 transition-colors">Hakkımızda</a>
                <div class="w-1 h-1 bg-gray-800 rounded-full"></div>
                <a href="{{ route('contact') }}" class="hover:text-amber-500 transition-colors">İletişim</a>
            </div>
        </div>
    </main>
</x-layouts.app>
