@php
    // İleride veritabanından (Controller'dan) gelecek verinin birebir simülasyonu
    $products = [
        [ 'id' => 1, 'brand' => 'TOM FORD', 'name' => 'Siyah Asimetrik', 'price' => '3.850', 'oldPrice' => '5.500', 'image' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=600', 'badge' => '%30 İndirim' ],
        [ 'id' => 2, 'brand' => 'RAY-BAN', 'name' => 'Wayfarer Classic', 'price' => '3.490', 'oldPrice' => '4.200', 'image' => 'https://images.unsplash.com/photo-1577803645773-f96470509666?q=80&w=600', 'badge' => 'Yeni' ],
        [ 'id' => 3, 'brand' => 'PRADA', 'name' => 'Symbole Geometrik', 'price' => '7.500', 'oldPrice' => '8.900', 'image' => 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=600', 'badge' => 'Sınırlı' ],
        [ 'id' => 4, 'brand' => 'GUCCI', 'name' => 'Oversize Kare', 'price' => '9.900', 'oldPrice' => '12.000', 'image' => 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=600', 'badge' => 'VIP' ],
        [ 'id' => 5, 'brand' => 'DIOR', 'name' => 'Black Tie', 'price' => '6.200', 'oldPrice' => '7.500', 'image' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=600', 'badge' => 'Popüler' ],
        [ 'id' => 6, 'brand' => 'OAKLEY', 'name' => 'Holbrook XL', 'price' => '2.850', 'oldPrice' => '3.600', 'image' => 'https://images.unsplash.com/photo-1577803645773-f96470509666?q=80&w=600', 'badge' => 'Sport' ],
        [ 'id' => 7, 'brand' => 'VERSACE', 'name' => 'Medusa Biggie', 'price' => '5.400', 'oldPrice' => '6.800', 'image' => 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=600', 'badge' => 'İkonik' ],
        [ 'id' => 8, 'brand' => 'VOGUE', 'name' => 'Gigi Hadid Seri', 'price' => '2.250', 'oldPrice' => '2.900', 'image' => 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=600', 'badge' => 'Fırsat' ]
    ];
@endphp

<section class="w-full py-12 md:py-20 bg-gray-950 border-t border-white/5 font-sans" x-data="{
    search: '',
    activeCategory: 'Hepsi',
    categories: ['Hepsi', 'Güneş Gözlüğü', 'Optik Gözlük', 'Lüks Seri', 'Sportif']
}">

    <div class="container mx-auto px-4 md:px-8">

        <div class="flex flex-col gap-8 mb-16">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tighter">VİTRİNİMİZ</h2>
                    <p class="text-gray-500 text-xs md:text-sm mt-2 uppercase tracking-widest font-bold">Edremit'in En Geniş Koleksiyonu</p>
                </div>

                <div class="relative w-full md:w-96 group">
                    <input type="text" x-model="search" placeholder="Model veya marka ara..."
                           class="w-full bg-gray-900/50 border border-white/10 rounded-full py-4 px-12 text-white text-sm focus:outline-none focus:border-amber-500 transition-all backdrop-blur-xl">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="flex overflow-x-auto gap-3 pb-2 hide-scrollbar">
                <template x-for="cat in categories" :key="cat">
                    <button @click="activeCategory = cat"
                            :class="activeCategory === cat ? 'bg-amber-500 text-gray-950 border-amber-500' : 'bg-transparent text-gray-400 border-white/10 hover:border-amber-500/50'"
                            class="px-6 py-2.5 rounded-full border text-[10px] md:text-xs font-black uppercase tracking-widest transition-all whitespace-nowrap"
                            x-text="cat"></button>
                </template>
            </div>
        </div>

        <div class="mb-20">
            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-[2px] bg-amber-500"></div>
                <h3 class="text-white font-black text-xl uppercase tracking-tighter">Haftanın Yıldızları</h3>
            </div>

            <div class="flex overflow-x-auto gap-6 snap-x snap-mandatory pb-8 hide-scrollbar">
                @foreach($products as $product)
                    <div class="snap-center shrink-0 w-[75vw] md:w-[320px]">
                        <x-product-card
                            title="{{ $product['name'] }}"
                            brand="{{ $product['brand'] }}"
                            newPrice="{{ $product['price'] }}"
                            oldPrice="{{ $product['oldPrice'] }}"
                            image="{{ $product['image'] }}"
                            badge="{{ $product['badge'] }}"
                        />
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-[2px] bg-white/20"></div>
                <h3 class="text-white font-black text-xl uppercase tracking-tighter">Tüm Koleksiyon</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @for($i = 1; $i <= 12; $i++)
                    <x-product-card
                        title="Premium Model #{{ $i }}"
                        brand="EDREMIT MODA"
                        newPrice="4.250"
                        oldPrice="5.100"
                        image="https://images.unsplash.com/photo-1577803645773-f96470509666?q=80&w=600"
                        badge="VİTRİN"
                    />
                @endfor
            </div>

            <div class="mt-16 flex justify-center">
                <button class="px-12 py-5 bg-transparent border border-white/10 rounded-full text-white font-black text-xs uppercase tracking-[0.3em] hover:bg-white hover:text-gray-950 transition-all duration-500">
                    Tüm Koleksiyonu Yükle
                </button>
            </div>
        </div>

    </div>
</section>

<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
