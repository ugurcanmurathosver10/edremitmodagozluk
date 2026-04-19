<nav x-data="{ mobileMenuOpen: false }" class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100 shadow-sm transition-all duration-300">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <a href="/" class="flex-shrink-0 flex items-center gap-2">
                <span class="text-2xl font-bold tracking-tighter text-primary uppercase">
                    Edremit <span class="text-accent font-light">Moda</span>
                </span>
            </a>

            <div class="hidden md:flex space-x-8 items-center">
                <a href="#" class="text-gray-600 hover:text-primary font-medium transition-colors">Ana Sayfa</a>
                <a href="#" class="text-gray-600 hover:text-primary font-medium transition-colors">Güneş Gözlükleri</a>
                <a href="#" class="text-gray-600 hover:text-primary font-medium transition-colors">Kadın</a>
                <a href="#" class="text-gray-600 hover:text-primary font-medium transition-colors">Erkek</a>
                <a href="#" class="text-accent hover:text-orange-600 font-bold transition-colors animate-pulse">Fırsatlar</a>
            </div>

            <div class="hidden md:flex items-center">
                <a href="https://wa.me/905555555555" target="_blank" class="bg-primary hover:bg-gray-800 text-white px-6 py-2.5 rounded-full font-medium transition-all transform hover:scale-105 shadow-md flex items-center gap-2">
                    Sipariş Ver
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-gray-600 hover:text-primary focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         x-cloak
         class="md:hidden absolute w-full bg-white border-b border-gray-100 shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-2 flex flex-col">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-50 rounded-md">Ana Sayfa</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-50 rounded-md">Güneş Gözlükleri</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-50 rounded-md">Kadın</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-50 rounded-md">Erkek</a>
            <a href="#" class="block px-3 py-2 text-base font-bold text-accent hover:bg-gray-50 rounded-md">Fırsatlar</a>

            <a href="https://wa.me/905555555555" target="_blank" class="mt-4 block w-full text-center bg-whatsapp hover:bg-green-600 text-white px-4 py-3 rounded-xl font-bold transition-colors shadow-md">
                WhatsApp ile Sipariş
            </a>
        </div>
    </div>
</nav>
