<div x-data="{ mobileMenuOpen: false, scrolled: false }"
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     class="fixed w-full inset-x-0 top-0 z-50 transition-all duration-500 font-sans px-4 md:px-8"
     :class="scrolled ? 'pt-2 md:pt-4' : 'pt-4 md:pt-6'">

    <nav class="mx-auto max-w-[90rem] transition-all duration-500 rounded-2xl md:rounded-full px-4 md:px-6 lg:px-8"
         :class="scrolled ? 'bg-gray-950/90 backdrop-blur-2xl border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] py-3 md:py-4' : 'bg-transparent border border-transparent py-3 md:py-4'">

        <div class="flex items-center w-full">

            <div class="hidden md:flex flex-1 justify-end items-center gap-5 lg:gap-8 pr-6 lg:pr-12">
                <a href="{{ route('home') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-gray-300 hover:text-amber-500 transition-colors relative group">
                    Anasayfa
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false" class="relative py-2">
                    <button class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-gray-300 hover:text-amber-500 transition-colors flex items-center gap-1.5 focus:outline-none group">
                        Koleksiyonlar
                        <svg class="w-3 h-3 text-gray-500 group-hover:text-amber-500 transform transition-transform duration-300" :class="dropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>

                    <div x-show="dropdownOpen"
                         style="display: none;"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-gray-900/95 backdrop-blur-2xl border border-white/10 rounded-2xl shadow-2xl overflow-hidden py-3 z-50">
                        <a href="{{ route('home') }}#kadin" class="block px-6 py-2.5 text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-amber-500 hover:bg-white/5 transition-colors">Kadın Serisi</a>
                        <a href="{{ route('home') }}#erkek" class="block px-6 py-2.5 text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-amber-500 hover:bg-white/5 transition-colors">Erkek Serisi</a>
                        <a href="{{ route('home') }}#unisex" class="block px-6 py-2.5 text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-amber-500 hover:bg-white/5 transition-colors">Unisex</a>
                        <a href="{{ route('home') }}#cocuk" class="block px-6 py-2.5 text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-amber-500 hover:bg-white/5 transition-colors">Çocuk</a>
                    </div>
                </div>

                <a href="{{ route('home') }}#markalar" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-gray-300 hover:text-amber-500 transition-colors relative group">
                    Markalar
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <div class="flex justify-center items-center shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="text-amber-500 transform group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11.5h8"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 11.5c-2 0-3-1-3-3s1-2 3-2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 11.5c2 0 3-1 3-3s-1-2-3-2"></path></svg>
                    </div>
                    <span class="text-lg lg:text-2xl font-black tracking-tighter text-white uppercase">
                        Edremit<span class="text-amber-500 font-light italic">Moda</span>
                    </span>
                </a>
            </div>

            <div class="hidden md:flex flex-1 items-center justify-start gap-5 lg:gap-8 pl-6 lg:pl-12">
                <a href="{{ route('about') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-gray-300 hover:text-amber-500 transition-colors relative group">
                    Hakkımızda
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('vip') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-amber-500 hover:text-white transition-colors relative group">
                    VIP
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('contact') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-gray-300 hover:text-amber-500 transition-colors relative group">
                    İletişim
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <div class="ml-auto flex items-center gap-3 lg:gap-4">
                    <button class="text-gray-300 hover:text-amber-500 transition-colors">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>

                    <div class="w-px h-4 bg-white/10"></div>

                    <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905448995965' }}" target="_blank" class="flex items-center gap-2 bg-transparent border border-white/20 text-white px-4 py-2 lg:px-5 lg:py-2.5 rounded-full text-[9px] lg:text-[10px] font-black uppercase tracking-[0.2em] hover:border-amber-500 hover:bg-amber-500 hover:text-gray-950 transition-all duration-300 shadow-lg ml-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        ULAŞIN
                    </a>
                </div>
            </div>

            <div class="flex md:hidden items-center justify-end flex-1">
                <button @click="mobileMenuOpen = true" class="text-white hover:text-amber-500 focus:outline-none transition-colors p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7h16M4 12h16M4 17h16"></path></svg>
                </button>
            </div>

        </div>
    </nav>

    <div x-show="mobileMenuOpen"
         style="display: none;"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 -translate-y-full"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-400"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-full"
         class="md:hidden fixed inset-0 z-[100] bg-gray-950/95 backdrop-blur-3xl flex flex-col p-6 overflow-y-auto">

        <div class="flex justify-between items-center mb-10 mt-2">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="flex items-center gap-2">
                <div class="text-amber-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11.5h8"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 11.5c-2 0-3-1-3-3s1-2 3-2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 11.5c2 0 3-1 3-3s-1-2-3-2"></path></svg>
                </div>
                <span class="text-xl font-black tracking-tighter text-white uppercase">Edremit<span class="text-amber-500 font-light italic">Moda</span></span>
            </a>
            <button @click="mobileMenuOpen = false" class="p-2 rounded-full border border-white/10 text-gray-400 hover:text-amber-500 hover:border-amber-500 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="flex flex-col gap-5 px-2">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="text-2xl font-black text-white hover:text-amber-500 flex items-center justify-between group transition-colors">
                Anasayfa
            </a>
            <div class="w-full h-px bg-white/5"></div>

            <div x-data="{ collOpen: false }">
                <button @click="collOpen = !collOpen" class="w-full text-2xl font-black text-white hover:text-amber-500 flex items-center justify-between group transition-colors focus:outline-none">
                    Koleksiyonlar
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-amber-500 transform transition-transform" :class="collOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="collOpen"
                     style="display: none;"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 -translate-y-2"
                     class="flex flex-col gap-4 mt-4 pl-4 border-l border-white/10">
                    <a href="{{ route('home') }}#kadin" @click="mobileMenuOpen = false" class="text-lg font-bold text-gray-400 hover:text-amber-500 transition-colors">Kadın Serisi</a>
                    <a href="{{ route('home') }}#erkek" @click="mobileMenuOpen = false" class="text-lg font-bold text-gray-400 hover:text-amber-500 transition-colors">Erkek Serisi</a>
                    <a href="{{ route('home') }}#unisex" @click="mobileMenuOpen = false" class="text-lg font-bold text-gray-400 hover:text-amber-500 transition-colors">Unisex</a>
                    <a href="{{ route('home') }}#cocuk" @click="mobileMenuOpen = false" class="text-lg font-bold text-gray-400 hover:text-amber-500 transition-colors">Çocuk</a>
                </div>
            </div>
            <div class="w-full h-px bg-white/5"></div>

            <a href="{{ route('home') }}#markalar" @click="mobileMenuOpen = false" class="text-2xl font-black text-white hover:text-amber-500 flex items-center justify-between group transition-colors">
                Markalar
            </a>
            <div class="w-full h-px bg-white/5"></div>

            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="text-2xl font-black text-white hover:text-amber-500 flex items-center justify-between group transition-colors">
                Hakkımızda
            </a>
            <div class="w-full h-px bg-white/5"></div>

            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="text-2xl font-black text-white hover:text-amber-500 flex items-center justify-between group transition-colors">
                İletişim
            </a>
        </div>

        <div class="mt-auto pt-10">
            <div class="flex justify-center gap-6 mb-8">
                <a href="#" class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:bg-amber-500 hover:border-amber-500 hover:text-gray-950 transition-all shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
            </div>
            <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905448995965' }}" target="_blank" class="w-full bg-[#25D366] text-white px-4 py-4 rounded-xl text-sm font-black uppercase tracking-widest flex items-center justify-center gap-3 active:scale-95 transition-transform">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                VIP DANIŞMANA BAĞLAN
            </a>
        </div>
    </div>
</div>
