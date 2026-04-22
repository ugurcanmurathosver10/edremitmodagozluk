<x-layouts.app>
    <x-slot:title>Koleksiyon | Edremit Moda Luxury Selection</x-slot>

    <main class="w-full bg-gray-950 pt-32 pb-24 text-gray-300 font-sans"
        x-data="{
            search: '',
            activeCategory: 'Hepsi',
            activeBrand: 'Tümü',
            {{-- Hata önleyici ?? yapısı eklendi --}}
            products: {{ $products->map(fn($p) => [
                'id' => $p->id,
                'slug' => $p->slug ?? '',
                'brand' => $p->brand->name ?? 'Bilinmeyen Marka',
                'name' => $p->name ?? '',
                'cat' => $p->category->name ?? 'Kategorisiz',
                'price' => number_format($p->price ?? 0, 0, ',', '.'),
                'oldPrice' => $p->old_price ? number_format($p->old_price, 0, ',', '.') : null,
                'img' => asset('storage/' . ($p->images[0] ?? 'no-image.webp')),
                'badge' => $p->badge ?? ''
            ])->toJson() }},

            init() {
                // Eğer buton çalışmazsa F12'ye basıp bu listeye bak kralım
                console.log('Yüklenen Ürünler:', this.products);
            },

            get filteredProducts() {
                return this.products.filter(p => {
                    const matchSearch = p.name.toLowerCase().includes(this.search.toLowerCase()) || p.brand.toLowerCase().includes(this.search.toLowerCase());
                    const matchCat = this.activeCategory === 'Hepsi' || p.cat === this.activeCategory;
                    const matchBrand = this.activeBrand === 'Tümü' || p.brand === this.activeBrand;
                    return matchSearch && matchCat && matchBrand;
                });
            }
        }">

        <div class="container mx-auto px-4 md:px-8 max-w-[90rem]">

            {{-- Üst Başlık ve Arama --}}
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
                    <input type="text" x-model="search" placeholder="Model veya Marka ara..."
                           class="w-full bg-white/5 border border-white/10 rounded-full py-4 px-12 text-sm text-white focus:outline-none focus:border-amber-500 transition-all backdrop-blur-xl">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            {{-- Dinamik Marka Slider (Admin Panelden Gelenler) --}}
            <div class="w-full bg-gray-950 border-y border-white/5 py-10 mb-12 overflow-hidden relative group">
                <div class="flex animate-marquee whitespace-nowrap items-center">
                    <div class="flex items-center gap-16 md:gap-24 px-8">
                        @foreach(array_merge($brands->toArray(), $brands->toArray()) as $brand)
                            <div @click="activeBrand = '{{ $brand['name'] }}'; search = ''"
                                 class="w-32 h-12 md:w-40 md:h-16 flex items-center justify-center filter grayscale invert opacity-30 hover:opacity-100 hover:grayscale-0 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('storage/' . $brand['logo']) }}" alt="{{ $brand['name'] }}" class="max-w-full max-h-full object-contain">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Dinamik Kategori Filtreleri --}}
            <div class="flex flex-wrap items-center justify-center gap-3 md:gap-4 mb-16">
                <button @click="activeCategory = 'Hepsi'"
                        :class="activeCategory === 'Hepsi' ? 'bg-amber-500 text-gray-950' : 'text-gray-400 border-white/10'"
                        class="px-8 py-3 rounded-full border text-[10px] font-black uppercase tracking-[0.2em] transition-all">Hepsi</button>

                @foreach($categories as $cat)
                    <button @click="activeCategory = '{{ $cat->name }}'"
                            :class="activeCategory === '{{ $cat->name }}' ? 'bg-amber-500 text-gray-950 border-amber-500 shadow-xl' : 'bg-transparent text-gray-400 border-white/10 hover:border-amber-500/50 hover:text-white'"
                            class="px-8 py-3 rounded-full border text-[10px] md:text-xs font-black uppercase tracking-[0.2em] transition-all">
                        {{ $cat->name }}
                    </button>
                @endforeach

                <button @click="activeCategory = 'Hepsi'; activeBrand = 'Tümü'; search = ''"
                        x-show="activeBrand !== 'Tümü' || activeCategory !== 'Hepsi' || search !== ''"
                        class="text-[10px] font-black uppercase tracking-widest text-amber-500 hover:text-white transition-colors ml-4 underline decoration-2 underline-offset-4">
                    Sıfırla
                </button>
            </div>

            {{-- Ürün Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-12 md:gap-x-8 md:gap-y-16 min-h-[400px]">
                <template x-for="product in filteredProducts" :key="product.id">
                    <div class="group flex flex-col">
                        <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-900 border border-white/5 mb-6">
                            <img :src="product.img" :alt="product.name" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1500ms]">
                            <div class="absolute top-4 left-4" x-show="product.badge">
                                <span class="bg-white/90 backdrop-blur-md text-gray-950 px-3 py-1.5 rounded-full text-[9px] font-black uppercase tracking-widest" x-text="product.badge"></span>
                            </div>
                            <div class="absolute inset-0 bg-gray-950/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                <a :href="'/urun/' + product.slug" class="bg-white text-gray-950 px-6 py-3 rounded-xl text-[10px] font-black uppercase tracking-widest transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    Detaylı İncele
                                </a>
                            </div>
                        </div>
                        <div class="px-2 text-center md:text-left">
                            <span class="text-amber-500 font-bold text-[10px] tracking-[0.2em] uppercase mb-2 block" x-text="product.brand"></span>
                            <h3 class="text-white font-bold text-lg md:text-xl tracking-tight leading-tight group-hover:text-amber-500 transition-colors" x-text="product.name"></h3>
                            <div class="mt-3 flex items-center justify-center md:justify-start gap-3">
                                <span class="text-white font-black text-base md:text-lg" x-text="product.price + ' ₺'"></span>
                                <span x-show="product.oldPrice" class="text-gray-600 line-through text-xs md:text-sm" x-text="product.oldPrice + ' ₺'"></span>
                            </div>
                        </div>
                    </div>
                </template>

                <div x-show="filteredProducts.length === 0" class="col-span-full py-20 text-center border border-dashed border-white/10 rounded-[3rem]">
                    <p class="text-gray-500 uppercase tracking-widest text-xs">Aradığınız kriterlere uygun ürün bulunamadı.</p>
                </div>
            </div>

        </div>
    </main>

    <x-home.trust-band />
    <x-partials.footer />
</x-layouts.app>
