<div x-data="{ mobileMenuOpen: false, scrolled: false }"
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     class="sticky top-2 md:top-4 z-40 px-3 md:px-6 transition-all duration-500 font-sans"
     :class="scrolled ? 'top-2' : ''">

    <nav class="mx-auto max-w-7xl backdrop-blur-2xl border transition-all duration-500 rounded-2xl md:rounded-full px-5 md:px-8"
         :class="scrolled ? 'bg-white/95 border-gray-200/60 shadow-[0_15px_40px_rgba(0,0,0,0.08)] py-3' : 'bg-white/60 border-white/40 shadow-[0_8px_30px_rgba(0,0,0,0.04)] py-4'">

        <div class="hidden md:grid grid-cols-3 items-center w-full">

            <div class="flex items-center gap-8">
                <a href="#koleksiyon" class="text-xs font-bold uppercase tracking-widest text-gray-900 hover:text-amber-500 transition-colors relative group">
                    Koleksiyon
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#kadin" class="text-xs font-bold uppercase tracking-widest text-gray-600 hover:text-amber-500 transition-colors relative group">
                    Kadın
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#erkek" class="text-xs font-bold uppercase tracking-widest text-gray-600 hover:text-amber-500 transition-colors relative group">
                    Erkek
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <div class="flex justify-center items-center">
                <a href="/" class="flex items-center gap-2 group">
                    <div class="text-amber-500 transform group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11.5h8"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 11.5c-2 0-3-1-3-3s1-2 3-2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 11.5c2 0 3-1 3-3s-1-2-3-2"></path></svg>
                    </div>
                    <span class="text-xl md:text-2xl font-black tracking-tighter text-gray-900 uppercase">
                        Edremit <span class="text-amber-500 font-light italic">Moda</span>
                    </span>
                </a>
            </div>

            <div class="flex items-center justify-end gap-6">
                <a href="#firsatlar" class="text-xs font-black uppercase tracking-widest text-red-500 hover:text-red-600 animate-pulse">
                    Fırsatlar
                </a>
                <div class="w-px h-4 bg-gray-300"></div>
                <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905555555555' }}" target="_blank" class="flex items-center gap-2 bg-gray-900 text-white px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-amber-500 hover:text-gray-900 transition-all duration-300 shadow-lg hover:scale-105">
                    <svg class="w-4 h-4 text-whatsapp" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    Sipariş Ver
                </a>
            </div>
        </div>

        <div class="flex md:hidden items-center justify-between w-full">
            <button @click="mobileMenuOpen = true" class="p-1 -ml-1 text-gray-900 hover:text-amber-500 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"></path></svg>
            </button>

            <a href="/" class="flex items-center gap-1.5">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11.5h8"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 11.5c-2 0-3-1-3-3s1-2 3-2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 11.5c2 0 3-1 3-3s-1-2-3-2"></path></svg>
                <span class="text-lg font-black tracking-tighter text-gray-900 uppercase">
                    Edremit<span class="text-amber-500 font-light italic">Moda</span>
                </span>
            </a>

            <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905555555555' }}" target="_blank" class="p-1 -mr-1 text-gray-900 hover:text-amber-500 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            </a>
        </div>
    </nav>

    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-8"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-8"
         x-cloak
         class="md:hidden fixed inset-0 z-[100] bg-white flex flex-col p-6 overflow-y-auto">

        <div class="flex justify-between items-center mb-10 mt-2">
            <a href="/" @click="mobileMenuOpen = false" class="flex items-center gap-1.5">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11.5h8"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 11.5c-2 0-3-1-3-3s1-2 3-2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 11.5c2 0 3-1 3-3s-1-2-3-2"></path></svg>
                <span class="text-lg font-black tracking-tighter text-gray-900 uppercase">
                    Edremit<span class="text-amber-500 font-light italic">Moda</span>
                </span>
            </a>
            <button @click="mobileMenuOpen = false" class="p-2 bg-gray-100 rounded-full text-gray-900 hover:text-amber-500 hover:bg-gray-200 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="flex flex-col gap-6">
            <a href="/" @click="mobileMenuOpen = false" class="text-3xl font-black text-gray-900 tracking-tight hover:text-amber-500 flex items-center justify-between group">
                Ana Sayfa <svg class="w-6 h-6 text-gray-300 group-hover:text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
            <hr class="border-gray-50">
            <a href="#koleksiyon" @click="mobileMenuOpen = false" class="text-3xl font-black text-gray-900 tracking-tight hover:text-amber-500 flex items-center justify-between group">
                Koleksiyon <svg class="w-6 h-6 text-gray-300 group-hover:text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
            <hr class="border-gray-50">
            <a href="#kadin" @click="mobileMenuOpen = false" class="text-3xl font-black text-gray-900 tracking-tight hover:text-amber-500 flex items-center justify-between group">
                Kadın <svg class="w-6 h-6 text-gray-300 group-hover:text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
            <hr class="border-gray-50">
            <a href="#erkek" @click="mobileMenuOpen = false" class="text-3xl font-black text-gray-900 tracking-tight hover:text-amber-500 flex items-center justify-between group">
                Erkek <svg class="w-6 h-6 text-gray-300 group-hover:text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
            <hr class="border-gray-50">
            <a href="#firsatlar" @click="mobileMenuOpen = false" class="text-3xl font-black text-red-500 tracking-tight flex items-center justify-between group">
                Fırsatlar <svg class="w-6 h-6 text-red-300 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <div class="mt-auto pt-8">
            <div class="flex justify-center gap-6 mb-8">
                <a href="#" class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-amber-500 hover:border-amber-500 hover:text-white transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <a href="#" class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-amber-500 hover:border-amber-500 hover:text-white transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
            </div>

            <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905555555555' }}" target="_blank" class="w-full bg-gray-900 text-white px-4 py-4 rounded-xl text-sm font-black uppercase tracking-widest flex items-center justify-center gap-3 shadow-[0_10px_20px_rgba(0,0,0,0.1)] active:scale-95 transition-transform">
                <svg class="w-5 h-5 text-whatsapp" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
            WhatsApp İletişim
        </a>
    </div>
</div>
</div>
