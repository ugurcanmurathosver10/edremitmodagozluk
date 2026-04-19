<x-layouts.app>
    <x-slot:title>Edremit Moda Gözlük | Özel Tasarımlar</x-slot>
    <x-slot:description>Edremit'in en trend gözlük modelleri. Hemen WhatsApp üzerinden sipariş verin.</x-slot>

    <x-home.hero />

    <section id="urunler" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-primary mb-4">Öne Çıkan Modeller</h2>
                <div class="w-24 h-1 bg-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <x-product-card
                    title="Ray-Ban Aviator Classic"
                    oldPrice="4.500"
                    newPrice="3.250"
                    image="https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=800&auto=format&fit=crop"
                    badge="Haftanın Fırsatı"
                />

                <x-product-card
                    title="Vogue Eyewear Kadın"
                    newPrice="2.100"
                    image="https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=800&auto=format&fit=crop"
                />

                <x-product-card
                    title="Oakley Spor Serisi"
                    oldPrice="5.200"
                    newPrice="4.800"
                    image="https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=800&auto=format&fit=crop"
                    badge="Yeni Sezon"
                />

                <x-product-card
                    title="Prada Symbole"
                    newPrice="8.500"
                    image="https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=800&auto=format&fit=crop"
                />

            </div>

            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center gap-2 text-primary font-bold hover:text-accent transition-colors border-b-2 border-transparent hover:border-accent pb-1">
                    Tüm Koleksiyonu Gör
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>
    </section>

</x-layouts.app>
