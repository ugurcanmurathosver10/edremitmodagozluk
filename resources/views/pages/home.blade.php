<x-layouts.app>
    <x-slot:title>Edremit Moda | Premium Gözlük Koleksiyonu</x-slot>
    <x-slot:description>Edremit, Akçay, Güre ve Altınoluk'a özel aynı gün VIP teslimat! Dünyaca ünlü gözlük markaları Edremit Moda'da.</x-slot>

    <main class="w-full bg-gray-950 flex flex-col">
        <x-home.hero />

        <div class="-mt-12 relative z-20">
            <x-home.brands />
        </div>

        <div class="pt-8 pb-4">
            <x-home.category-banners />
        </div>

        <div class="py-4">
            <x-home.spotlight />
        </div>

        <div id="urunler" class="scroll-mt-24 pt-8">
            <x-home.featured-products />
        </div>

        <div class="mt-8">
            <x-home.trust-band />
        </div>

        <div>
            <x-home.vip-experience />
        </div>

    </main>

    <x-partials.footer />
</x-layouts.app>
