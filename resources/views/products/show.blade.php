<x-layouts.app>
    <x-slot:title>{{ $product['name'] }} | Edremit Moda</x-slot>
    <x-slot:description>{{ Str::limit($product['description'], 160) }}</x-slot>
    <x-slot:schema>
        <meta property="og:title" content="{{ $product['name'] }} - Edremit Moda" />
        <meta property="og:description" content="{{ Str::limit($product['description'], 160) }}" />
        <meta property="og:image" content="{{ $product['images'][0] ?? '' }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="product" />
    </x-slot:schema>

    <div class="bg-gray-50 min-h-screen text-gray-900 pb-24 font-sans">

        <div class="container mx-auto px-4 lg:px-8 py-4">
            <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold tracking-widest uppercase text-gray-400">
                <a href="/" class="hover:text-amber-600 transition-colors">Ana Sayfa</a>
                <span>/</span>
                <span class="text-amber-600">{{ $product['name'] }}</span>
            </div>
        </div>

        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 bg-white p-4 sm:p-6 lg:p-10 rounded-3xl shadow-sm border border-gray-100">

                <div class="lg:w-1/2 w-full" x-data="{ activeImage: '{{ $product['images'][0] ?? '' }}' }">
                    <div class="relative w-full aspect-square bg-gray-50 rounded-2xl overflow-hidden mb-4 border border-gray-100 group">
                        @if(isset($product['old_price']))
                            <div class="absolute top-4 left-4 z-10 bg-red-600 text-white text-xs font-black px-4 py-2 rounded-lg uppercase tracking-widest shadow-lg shadow-red-500/30 animate-bounce">
                                % İndirimli Fırsat
                            </div>
                        @elseif(isset($product['badge']))
                            <div class="absolute top-4 left-4 z-10 bg-amber-500 text-white text-xs font-black px-4 py-2 rounded-lg uppercase tracking-widest shadow-lg">
                                {{ $product['badge'] }}
                            </div>
                        @endif
                        <img :src="activeImage" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="{{ $product['name'] }}" x-transition.opacity>
                    </div>

                    <div class="flex gap-3 overflow-x-auto hide-scrollbar snap-x pb-2">
                        @foreach($product['images'] as $image)
                            <button @click="activeImage = '{{ $image }}'"
                                    class="shrink-0 w-20 h-24 rounded-xl overflow-hidden border-2 transition-all duration-300 snap-center bg-gray-50"
                                    :class="activeImage === '{{ $image }}' ? 'border-amber-500 shadow-md' : 'border-transparent opacity-70 hover:opacity-100'">
                                <img src="{{ $image }}" loading="lazy" class="w-full h-full object-cover">
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="lg:w-1/2 w-full flex flex-col">

                    <div class="mb-5">
                        <h1 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-3 leading-tight">{{ $product['name'] }}</h1>
                        <div class="flex items-end gap-4 mb-2">
                            <span class="text-4xl md:text-5xl font-black text-amber-600 leading-none">{{ $product['new_price'] }} ₺</span>
                            @if(isset($product['old_price']))
                                <span class="text-lg text-gray-400 line-through mb-1">{{ $product['old_price'] }} ₺</span>
                            @endif
                        </div>
                    </div>

                    <div class="bg-red-50 border border-red-100 rounded-xl p-4 mb-6 flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-red-600 font-bold text-sm">
                            <svg class="w-5 h-5 animate-pulse" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                            🔥 Hızlı tükeniyor! Şu an 8 kişi bu ürünü inceliyor.
                        </div>
                        <div class="w-full bg-red-200 rounded-full h-2">
                            <div class="bg-red-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                        <div class="text-xs text-red-500 font-medium text-right">Son stoklar</div>
                    </div>

                    <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-6 font-medium">
                        {{ Str::limit($product['description'], 200) }}
                    </p>

                    <div class="grid grid-cols-2 gap-3 mb-8">
                        <div class="flex flex-col gap-1 p-3 bg-green-50 border border-green-100 rounded-xl">
                            <span class="flex items-center gap-2 text-green-700 font-bold text-xs uppercase tracking-wider">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Ücretsiz Kargo
                            </span>
                            <span class="text-xs text-green-600">Tüm Türkiye'ye aynı gün gönderim.</span>
                        </div>
                        <div class="flex flex-col gap-1 p-3 bg-blue-50 border border-blue-100 rounded-xl">
                            <span class="flex items-center gap-2 text-blue-700 font-bold text-xs uppercase tracking-wider">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                %100 Orijinal
                            </span>
                            <span class="text-xs text-blue-600">2 Yıl distribütör garantilidir.</span>
                        </div>
                    </div>

                    <div class="hidden lg:block mb-6 mt-auto">
                        <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905555555555' }}?text=Merhaba, sitenizdeki *{{ $product['name'] }}* modeli ile ilgileniyorum. Ürün linki: {{ url()->current() }}"
                           target="_blank"
                           class="w-full bg-whatsapp hover:bg-green-600 text-white font-extrabold text-lg py-5 rounded-2xl flex items-center justify-center gap-3 transition-transform hover:scale-[1.02] active:scale-95 shadow-xl shadow-green-500/30">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            Siparişi Hemen Tamamla
                        </a>
                    </div>

                    <div class="flex items-center justify-center lg:justify-start gap-4 pt-4 border-t border-gray-100">
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Arkadaşlarına Gönder:</span>
                        <a href="https://wa.me/?text=Şu gözlüğe bak, tam senlik! {{ url()->current() }}" target="_blank" class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-600 hover:bg-green-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white border-y border-gray-200 py-6 overflow-hidden relative flex items-center select-none">
        <div class="kayan-slider-kutusu flex items-center gap-16 px-8">
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Ray-Ban</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Vogue</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Oakley</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Prada</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Gucci</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity ml-16">Ray-Ban</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Vogue</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Oakley</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Prada</span>
            <span class="text-2xl font-black text-gray-300 uppercase tracking-widest opacity-60 hover:opacity-100 transition-opacity">Gucci</span>
        </div>
    </div>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <h3 class="text-2xl font-extrabold text-gray-900 mb-8 flex items-center gap-3">
                Bunlar da İlginizi Çekebilir
            </h3>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
                <x-product-card title="Vogue Eyewear" newPrice="2.100" image="https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=800&auto=format&fit=crop" />
                <x-product-card title="Prada Symbole" newPrice="8.500" image="https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=800&auto=format&fit=crop" />
                <x-product-card title="Ray-Ban Classic" oldPrice="4.500" newPrice="3.250" image="https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=800&auto=format&fit=crop" badge="Son 2 Ürün" />
                <x-product-card title="Oakley Spor" newPrice="4.800" image="https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=800&auto=format&fit=crop" />
            </div>
        </div>
    </section>

    <div class="lg:hidden fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 p-3 z-50 shadow-[0_-10px_20px_rgba(0,0,0,0.1)]">
        <div class="flex items-center gap-4">
            <div class="flex flex-col pl-2">
                <span class="text-xs text-gray-500 font-bold">Toplam</span>
                <span class="text-xl font-black text-amber-600 leading-none">{{ $product['new_price'] }} ₺</span>
            </div>
            <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905555555555' }}?text=Merhaba, sitenizdeki *{{ $product['name'] }}* modeli ile ilgileniyorum. Ürün linki: {{ url()->current() }}"
               target="_blank"
               class="flex-grow bg-whatsapp text-white font-extrabold px-4 py-4 rounded-xl text-center flex items-center justify-center gap-2 shadow-lg shadow-green-500/30 active:scale-95 transition-transform">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                WhatsApp Sipariş
            </a>
        </div>
    </div>
</x-layouts.app>
