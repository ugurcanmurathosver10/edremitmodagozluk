@props(['products'])

<section class="w-full py-12 md:py-20 bg-gray-950 border-t border-white/5 font-sans" x-data="{
    search: '',
    activeCategory: 'Hepsi',
    {{-- Kategorileri veritabanından dinamik olarak alıyoruz --}}
    categories: ['Hepsi', @foreach(\App\Models\Category::all() as $cat) '{{ $cat->name }}', @endforeach]
}">

    <div class="container mx-auto px-3 md:px-8 max-w-[90rem]">

        <div class="flex flex-col gap-6 md:gap-8 mb-12 md:mb-16">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <h2 class="text-3xl md:text-5xl font-black text-white tracking-tighter uppercase">VİTRİNİMİZ</h2>
                    <p class="text-gray-500 text-xs md:text-sm mt-2 uppercase tracking-widest font-bold">Edremit'in En Özel Koleksiyonu</p>
                </div>

                <div class="relative w-full md:w-96 group">
                    <input type="text" x-model="search" placeholder="Model veya marka ara..."
                           class="w-full bg-gray-900/50 border border-white/10 rounded-full py-3 md:py-4 px-12 text-white text-sm focus:outline-none focus:border-amber-500 transition-all backdrop-blur-xl">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="flex overflow-x-auto gap-2 md:gap-3 pb-2 hide-scrollbar">
                <template x-for="cat in categories" :key="cat">
                    <button @click="activeCategory = cat"
                            :class="activeCategory === cat ? 'bg-amber-500 text-gray-950 border-amber-500 shadow-lg shadow-amber-500/20' : 'bg-transparent text-gray-400 border-white/10 hover:border-amber-500/50'"
                            class="px-5 py-2 md:px-6 md:py-2.5 rounded-full border text-[10px] md:text-xs font-black uppercase tracking-widest transition-all whitespace-nowrap"
                            x-text="cat"></button>
                </template>
            </div>
        </div>

        <div class="mb-16 md:mb-20">
            <div class="flex items-center gap-3 mb-6 md:mb-8">
                <div class="w-8 md:w-10 h-[2px] bg-amber-500"></div>
                <h3 class="text-white font-black text-lg md:text-xl uppercase tracking-tighter">Haftanın Yıldızları</h3>
            </div>

            <div class="flex overflow-x-auto gap-4 md:gap-6 snap-x snap-mandatory pb-6 md:pb-8 hide-scrollbar">
                @forelse($products as $product)
                    <div class="snap-center shrink-0 w-[75vw] md:w-[320px]">
                        <x-product-card
                            :title="$product->name"
                            :brand="$product->brand->name"
                            :newPrice="number_format($product->price, 0, ',', '.')"
                            :oldPrice="$product->old_price ? number_format($product->old_price, 0, ',', '.') : null"
                            :image="asset('storage/' . ($product->images[0] ?? 'no-image.webp'))"
                            :badge="$product->badge"
                            :slug="$product->slug"
                        />
                    </div>
                @empty
                    <div class="w-full py-12 text-center text-gray-600 uppercase text-xs tracking-widest border border-dashed border-white/10 rounded-3xl">
                        Yıldız ürünler yolda...
                    </div>
                @endforelse
            </div>
        </div>

        <div class="mt-4 flex justify-center">
            <a href="{{ route('collection') }}"
               class="inline-flex items-center justify-center px-10 py-4 md:px-12 md:py-5 bg-transparent border border-white/10 rounded-full text-white font-black text-[10px] md:text-xs uppercase tracking-[0.2em] hover:bg-white hover:text-gray-950 hover:border-white transition-all duration-500 transform hover:scale-105">
                Tüm Koleksiyonu Keşfet
            </a>
        </div>

    </div>
</section>

<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
