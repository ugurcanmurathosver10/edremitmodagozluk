<x-layouts.app>
    <x-slot:title>Prada Symbole | Edremit Moda</x-slot>

    @php
        // ANA ÜRÜN VERİSİ
        $product = [
            'title' => 'Symbole Geometrik',
            'brand' => 'PRADA',
            'price' => '7.500',
            'oldPrice' => '8.900',
            'badge' => 'Sınırlı Stok',
            'description' => 'Dünyaca ünlü markaların ikonik tasarımları şimdi Edremit Moda farkıyla sizinle. Zarif çizgileri ve UV korumalı premium camları ile bu model, tarzınızı bir üst seviyeye taşıyacak.',
            'images' => [
                'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=1200',
                'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1200',
                'https://images.unsplash.com/photo-1577803645773-f96470509666?q=80&w=1200'
            ]
        ];

        // DİĞER MODELLER (İlişkili Ürünler)
        $relatedProducts = [
            ['brand' => 'RAY-BAN', 'title' => 'Wayfarer Classic', 'price' => '4.200', 'oldPrice' => '5.100', 'badge' => 'Çok Satan', 'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=800'],
            ['brand' => 'TOM FORD', 'title' => 'Fausto Square', 'price' => '6.800', 'oldPrice' => null, 'badge' => 'Yeni Sezon', 'img' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=800'],
            ['brand' => 'OAKLEY', 'title' => 'Holbrook XL', 'price' => '3.450', 'oldPrice' => '3.900', 'badge' => '%15 İndirim', 'img' => 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=800'],
            ['brand' => 'GUCCI', 'title' => 'Oversize Butterfly', 'price' => '11.200', 'oldPrice' => '13.500', 'badge' => 'Lüks Seri', 'img' => 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=800']
        ];
    @endphp

    <main class="w-full bg-gray-950 pt-24 md:pt-32 pb-16 font-sans text-gray-300">

        <div class="container mx-auto px-4 md:px-8 max-w-[90rem]">

            <nav class="flex items-center gap-2 text-[10px] md:text-xs font-bold uppercase tracking-widest text-gray-500 mb-8 md:mb-12">
                <a href="/" class="hover:text-amber-500 transition-colors">Anasayfa</a>
                <span>/</span>
                <a href="/#koleksiyon" class="hover:text-amber-500 transition-colors">Koleksiyon</a>
                <span>/</span>
                <span class="text-white">{{ $product['brand'] }}</span>
            </nav>

            <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 relative">

                <div class="w-full lg:w-3/5 flex lg:flex-col gap-4 overflow-x-auto lg:overflow-visible snap-x snap-mandatory hide-scrollbar">
                    @foreach($product['images'] as $image)
                        <div class="w-full shrink-0 snap-center rounded-[2rem] overflow-hidden border border-white/5 bg-gray-900 relative">
                            <img src="{{ $image }}" alt="{{ $product['brand'] }} {{ $product['title'] }}" class="w-full h-[55vh] lg:h-[80vh] object-cover hover:scale-105 transition-transform duration-[2000ms]">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/60 via-transparent to-transparent pointer-events-none"></div>

                            @if($loop->first && isset($product['badge']))
                                <div class="absolute top-6 left-6 z-10">
                                    <span class="bg-amber-500 text-gray-950 px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-[0.2em] shadow-xl">
                                        {{ $product['badge'] }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="w-full lg:w-2/5">
                    <div class="sticky top-32 flex flex-col gap-8">

                        <div>
                            <h2 class="text-amber-500 font-bold text-xs md:text-sm tracking-[0.3em] uppercase mb-3">{{ $product['brand'] }}</h2>
                            <h1 class="text-3xl md:text-5xl font-black text-white tracking-tighter leading-tight mb-4">{{ $product['title'] }}</h1>

                            <div class="flex items-end gap-4 mt-4">
                                <span class="text-3xl md:text-4xl font-black text-white tracking-tighter">{{ $product['price'] }} ₺</span>
                                @if(isset($product['oldPrice']))
                                    <span class="text-gray-500 text-lg line-through decoration-red-500/50 decoration-2 mb-1">{{ $product['oldPrice'] }} ₺</span>
                                @endif
                            </div>
                        </div>

                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            {{ $product['description'] }}
                        </p>

                        <div class="pt-2">
                            <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905448995965' }}?text=Merhaba, {{ $product['brand'] }} {{ $product['title'] }} modeli hakkında detaylı bilgi almak istiyorum."
                               target="_blank"
                               class="w-full group relative flex items-center justify-center gap-4 bg-transparent border border-white/20 p-5 md:p-6 rounded-2xl overflow-hidden cursor-pointer hover:border-amber-500 transition-all duration-500 shadow-2xl active:scale-95">

                                <div class="absolute inset-0 bg-amber-500 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0"></div>

                                <svg class="w-6 h-6 md:w-8 md:h-8 text-white group-hover:text-gray-950 transition-colors z-10 relative" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>

                                <div class="flex flex-col items-start z-10 relative">
                                    <span class="text-white group-hover:text-gray-950 font-black text-sm md:text-base uppercase tracking-widest transition-colors">VIP Danışmana Bağlan</span>
                                    <span class="text-gray-400 group-hover:text-gray-900 font-bold text-[9px] md:text-[10px] uppercase tracking-widest transition-colors mt-1">Hemen Sipariş Ver</span>
                                </div>
                            </a>
                        </div>

                        <div class="mt-2 border-y border-white/10 py-6 flex flex-col gap-4">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center shrink-0 text-amber-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-xs uppercase tracking-widest">Sertifikalı Seçki</h4>
                                    <p class="text-gray-500 text-xs mt-1">Orijinal kutusu, silme bezi ve distribütör garanti belgesi ile gönderilir.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center shrink-0 text-amber-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-xs uppercase tracking-widest">VIP Teslimat</h4>
                                    <p class="text-gray-500 text-xs mt-1">Körfez bölgesine özel VIP kurye ile anında güvenli teslimat.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <section class="w-full mt-24 pt-16 border-t border-white/5">
            <div class="container mx-auto px-4 md:px-8 max-w-[90rem]">

                <div class="flex items-end justify-between mb-10">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-px bg-amber-500"></div>
                            <span class="text-amber-500 font-bold text-[10px] md:text-xs tracking-[0.3em] uppercase">Keşfetmeye Devam Edin</span>
                        </div>
                        <h3 class="text-2xl md:text-4xl font-black text-white tracking-tighter uppercase">İlginizi Çekebilecek Modeller</h3>
                    </div>

                    <a href="/#urunler" class="hidden md:flex items-center gap-2 text-gray-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest">
                        Tüm Koleksiyon
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>

                <div class="flex md:grid md:grid-cols-4 gap-6 overflow-x-auto md:overflow-visible pb-8 snap-x snap-mandatory hide-scrollbar">
                    @foreach($relatedProducts as $item)
                        <div class="snap-center shrink-0 w-[80vw] md:w-auto">
                            <x-product-card
                                :title="$item['title']"
                                :brand="$item['brand']"
                                :newPrice="$item['price']"
                                :oldPrice="$item['oldPrice']"
                                :image="$item['img']"
                                :badge="$item['badge']"
                            />
                        </div>
                    @endforeach
                </div>

                <div class="flex md:hidden justify-center mt-4">
                    <a href="/#urunler" class="px-8 py-4 border border-white/10 rounded-full text-[10px] font-black text-white uppercase tracking-widest active:scale-95 transition-transform">
                        Tüm Koleksiyonu Gör
                    </a>
                </div>

            </div>
        </section>

    </main>

    <x-home.trust-band />
    <x-partials.footer />

    <style>
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</x-layouts.app>
