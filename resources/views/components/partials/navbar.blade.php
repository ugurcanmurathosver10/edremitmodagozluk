<div x-data="{ mobileMenuOpen: false, scrolled: false }"
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     class="fixed w-full inset-x-0 top-0 z-50 transition-all duration-500 font-sans px-4 md:px-8"
     :class="scrolled ? 'pt-2 md:pt-4' : 'pt-4 md:pt-6'">

    <nav class="mx-auto max-w-[90rem] transition-all duration-500 rounded-2xl md:rounded-full px-4 md:px-6 lg:px-8"
         :class="scrolled ? 'bg-gray-950/90 backdrop-blur-2xl border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] py-3 md:py-4' : 'bg-transparent border border-transparent py-3 md:py-4'">

        <div class="flex items-center w-full">

            <div class="hidden md:flex flex-1 justify-end items-center gap-5 lg:gap-8 pr-6 lg:pr-12">
                <a href="{{ route('home') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest {{ request()->routeIs('home') ? 'text-amber-500' : 'text-gray-300 hover:text-amber-500' }} transition-colors relative group">
                    Anasayfa
                    <span class="absolute -bottom-1 left-0 {{ request()->routeIs('home') ? 'w-full' : 'w-0' }} h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('collection') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest {{ request()->routeIs('collection') ? 'text-amber-500' : 'text-gray-300 hover:text-amber-500' }} transition-colors relative group">
                    Koleksiyon
                    <span class="absolute -bottom-1 left-0 {{ request()->routeIs('collection') ? 'w-full' : 'w-0' }} h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

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
                <a href="{{ route('about') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest {{ request()->routeIs('about') ? 'text-amber-500' : 'text-gray-300 hover:text-amber-500' }} transition-colors relative group">
                    Hakkımızda
                    <span class="absolute -bottom-1 left-0 {{ request()->routeIs('about') ? 'w-full' : 'w-0' }} h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('vip') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest text-amber-500 hover:text-white transition-colors relative group">
                    VIP
                    <span class="absolute -bottom-1 left-0 w-0 h-px bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('contact') }}" class="text-[10px] lg:text-xs font-bold uppercase tracking-widest {{ request()->routeIs('contact') ? 'text-amber-500' : 'text-gray-300 hover:text-amber-500' }} transition-colors relative group">
                    İletişim
                    <span class="absolute -bottom-1 left-0 {{ request()->routeIs('contact') ? 'w-full' : 'w-0' }} h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <div class="ml-auto flex items-center gap-3 lg:gap-4">
                    <a href="https://wa.me/{{ $siteSettings['whatsapp'] ?? '905448995965' }}" target="_blank" class="flex items-center gap-2 bg-transparent border border-white/20 text-white px-4 py-2 lg:px-5 lg:py-2.5 rounded-full text-[9px] lg:text-[10px] font-black uppercase tracking-[0.2em] hover:border-amber-500 hover:bg-amber-500 hover:text-gray-950 transition-all duration-300 shadow-lg ml-2">
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
                <span class="text-xl font-black tracking-tighter text-white uppercase">Edremit<span class="text-amber-500 font-light italic">Moda</span></span>
            </a>
            <button @click="mobileMenuOpen = false" class="p-2 rounded-full border border-white/10 text-gray-400 hover:text-amber-500 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="flex flex-col gap-6 px-2">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="text-3xl font-black text-white hover:text-amber-500 transition-colors">Anasayfa</a>
            <a href="{{ route('collection') }}" @click="mobileMenuOpen = false" class="text-3xl font-black text-white hover:text-amber-500 transition-colors">Koleksiyon</a>
            <a href="{{ route('home') }}#markalar" @click="mobileMenuOpen = false" class="text-3xl font-black text-white hover:text-amber-500 transition-colors">Markalar</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="text-3xl font-black text-white hover:text-amber-500 transition-colors">Hakkımızda</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="text-3xl font-black text-white hover:text-amber-500 transition-colors">İletişim</a>

            <a href="https://wa.me/{{ $siteSettings['whatsapp'] ?? '905448995965' }}" target="_blank" class="mt-4 w-full bg-[#25D366] text-white px-4 py-4 rounded-xl text-sm font-black uppercase tracking-widest flex items-center justify-center gap-3 active:scale-95 transition-transform">
                VIP DANIŞMANA BAĞLAN
            </a>
        </div>
    </div>
</div>
