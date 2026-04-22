<x-layouts.app>
    <x-slot:title>Koleksiyon | Edremit Moda Luxury Selection</x-slot>

    <main class="w-full bg-gray-950 pt-32 pb-24 text-gray-300 font-sans"
        x-data="{
            search: '',
            activeCategory: 'Hepsi',
            activeBrand: 'Tümü',
            products: [
                { id: 1, brand: 'PRADA', name: 'Symbole Geometrik', cat: 'Kadın', price: '7.500', oldPrice: '8.900', img: 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=800', badge: 'Yeni Sezon' },
                { id: 2, brand: 'GUCCI', name: 'Oversize Kare', cat: 'Unisex', price: '9.900', oldPrice: '12.000', img: 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=800', badge: 'Sınırlı Stok' },
                { id: 3, brand: 'RAY-BAN', name: 'Aviator Classic', cat: 'Erkek', price: '3.250', oldPrice: '4.500', img: 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=800', badge: 'Efsane' },
                { id: 4, brand: 'TOM FORD', name: 'Fausto Square', cat: 'Erkek', price: '8.450', oldPrice: '10.200', img: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=800', badge: 'Lüks Seri' },
                { id: 5, brand: 'DIOR', name: 'Signature S1U', cat: 'Kadın', price: '12.500', oldPrice: null, img: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=800', badge: 'Özel Seri' },
                { id: 6, brand: 'VERSACE', name: 'Medusa Biggie', cat: 'Unisex', price: '6.400', oldPrice: '7.800', img: 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=800', badge: 'İkonik' }
            ],
            get filteredProducts() {
                return this.products.filter(p => {
                    const matchSearch = p.name.toLowerCase().includes(this.search.toLowerCase()) || p.brand.toLowerCase().includes(this.search.toLowerCase());
                    const matchCat = this.activeCategory === 'Hepsi' || p.cat === this.activeCategory;
                    const matchBrand = this.activeBrand === 'Tümü' || p.brand === this.activeBrand.toUpperCase();
                    return matchSearch && matchCat && matchBrand;
                });
            }
        }">

        <div class="container mx-auto px-4 md:px-8 max-w-[90rem]">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-px bg-amber-500"></div>
                        <span class="text-amber-500 font-bold text-[10px] md:text-xs tracking-[0.4em] uppercase">Size Özel Seçki</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black text-white tracking-tighter uppercase leading-none">
                        Koleksiyon<span class="text-amber-500 italic font-light">.</span>
                    </h1>
                </div>

                <div class="relative w-full md:w-96 group">
                    <input type="text"
                           x-model="search"
                           placeholder="Model veya Marka ara..."
                           class="w-full bg-white/5 border border-white/10 rounded-full py-4 px-12 text-sm text-white focus:outline-none focus:border-amber-500 transition-all backdrop-blur-xl">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <button x-show="search.length > 0" @click="search = ''" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <div class="w-full bg-gray-950 border-y border-white/5 py-10 mb-12 overflow-hidden relative group">
                <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-gray-950 to-transparent z-10 pointer-events-none"></div>
                <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-gray-950 to-transparent z-10 pointer-events-none"></div>

                <div class="flex animate-marquee whitespace-nowrap items-center">
                    @php
                        $marqueeBrands = [
                            ['name' => 'Prada', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Prada-Logo.svg/1280px-Prada-Logo.svg.png'],
                            ['name' => 'Gucci', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Gucci_logo.svg/2560px-Gucci_logo.svg.png'],
                            ['name' => 'Tom Ford', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Tom_Ford_logo.svg/2560px-Tom_Ford_logo.svg.png'],
                            ['name' => 'Ray-Ban', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Ray-Ban_logo.svg/2560px-Ray-Ban_logo.svg.png'],
                            ['name' => 'Dior', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Christian_Dior_logo.svg/2560px-Christian_Dior_logo.svg.png'],
                            ['name' => 'Versace', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Versace_logo.svg/2560px-Versace_logo.svg.png'],
                        ];
                    @endphp

                    <div class="flex items-center gap-16 md:gap-24 px-8">
                        @foreach(array_merge($marqueeBrands, $marqueeBrands) as $brand)
                            <div @click="activeBrand = '{{ $brand['name'] }}'; search = ''"
                                 class="w-32 h-12 md:w-40 md:h-16 flex items-center justify-center filter grayscale invert opacity-30 hover:opacity-100 hover:grayscale-0 transition-all duration-500 cursor-pointer">
                                <img src="{{ $brand['logo'] }}" alt="{{ $brand['name'] }}" class="max-w-full max-h-full object-contain">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-3 md:gap-4 mb-16">
                <template x-for="cat in ['Hepsi', 'Kadın', 'Erkek', 'Unisex']">
                    <button @click="activeCategory = cat"
                            :class="activeCategory === cat ? 'bg-amber-500 text-gray-950 border-amber-500 shadow-xl' : 'bg-transparent text-gray-400 border-white/10 hover:border-amber-500/50 hover:text-white'"
                            class="px-8 py-3 md:px-10 md:py-4 rounded-full border text-[10px] md:text-xs font-black uppercase tracking-[0.2em] transition-all"
                            x-text="cat"></button>
                </template>

                <button @click="activeCategory = 'Hepsi'; activeBrand = 'Tümü'; search = ''"
                        x-show="activeBrand !== 'Tümü' || activeCategory !== 'Hepsi' || search !== ''"
                        class="text-[10px] font-black uppercase tracking-widest text-amber-500 hover:text-white transition-colors ml-4 underline decoration-2 underline-offset-4">
                    Sıfırla
                </button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-12 md:gap-x-8 md:gap-y-16 min-h-[400px]">
                <template x-for="product in filteredProducts" :key="product.id">
                    <div class="group flex flex-col">
                        <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-900 border border-white/5 mb-6">
                            <img :src="product.img" :alt="product.name" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1500ms]">

                            <div class="absolute top-4 left-4" x-show="product.badge">
                                <span class="bg-white/90 backdrop-blur-md text-gray-950 px-3 py-1.5 rounded-full text-[9px] font-black uppercase tracking-widest" x-text="product.badge"></span>
                            </div>

                            <div class="absolute inset-0 bg-gray-950/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                <a :href="'/urun/' + product.id" class="bg-white text-gray-950 px-6 py-3 rounded-xl text-[10px] font-black uppercase tracking-widest transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    Detayı İncele
                                </a>
                            </div>
                        </div>

                        <div class="px-2 text-center md:text-left">
                            <span class="text-amber-500 font-bold text-[10px] tracking-[0.2em] uppercase mb-2 block" x-text="product.brand"></span>
                            <h3 class="text-white font-bold text-lg md:text-xl tracking-tight leading-tight group-hover:text-amber-500 transition-colors" x-text="product.name"></h3>

                            <div class="mt-3 flex items-center justify-center md:justify-start gap-3">
                                <span class="text-white font-black text-base md:text-lg" x-text="product.price + ' ₺'"></span>
                                <span x-show="product.oldPrice" class="text-gray-600 line-through text-xs md:text-sm decoration-red-500/50" x-text="product.oldPrice + ' ₺'"></span>
                            </div>
                        </div>
                    </div>
                </template>

                <div x-show="filteredProducts.length === 0" class="col-span-full py-32 flex flex-col items-center justify-center text-center">
                    <div class="w-20 h-20 bg-white/5 rounded-full flex items-center justify-center text-gray-600 mb-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-white font-black text-xl uppercase tracking-tighter mb-2">Sonuç Bulunamadı</h3>
                    <p class="text-gray-500 text-sm">Aradığınız kriterlere uygun bir model şu an vitrinimizde yok.</p>
                </div>
            </div>

            <div class="mt-24 pt-12 border-t border-white/5 text-center" x-show="filteredProducts.length > 0">
                <p class="text-[10px] font-black text-gray-600 uppercase tracking-[0.4em]">Tüm Koleksiyon Listelendi</p>
            </div>

        </div>
    </main>

    <x-home.trust-band />
    <x-partials.footer />

    <style>
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { animation: marquee 35s linear infinite; display: flex; width: max-content; }
        .group:hover .animate-marquee { animation-play-state: paused; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</x-layouts.app>
