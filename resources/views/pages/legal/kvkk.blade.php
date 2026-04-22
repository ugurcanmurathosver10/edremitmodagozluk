<x-layouts.app>
    <x-slot:title>KVKK ve Çerez Politikası | Edremit Moda</x-slot>

    <main class="w-full bg-gray-950 pt-32 pb-24 text-gray-300 font-sans">
        <div class="container mx-auto px-6 max-w-4xl">

            <div class="mb-16 border-b border-white/10 pb-8">
                <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter mb-4">
                    KVKK ve <span class="text-amber-500 italic font-light font-serif lowercase">çerez politikası</span>
                </h1>
                <p class="text-xs text-gray-500 uppercase tracking-[0.3em]">Son Güncelleme: 22 Nisan 2026</p>
            </div>

            <div class="prose prose-invert prose-amber max-w-none space-y-8 text-sm md:text-base leading-relaxed text-gray-400">

                <section>
                    <h2 class="text-white font-bold text-xl uppercase tracking-wider mb-4">1. Veri Sorumlusu</h2>
                    <p>Edremit Moda olarak, kişisel verilerinizin güvenliği hususuna azami hassasiyet göstermekteyiz. Bu kapsamda, 6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) uyarınca veri sorumlusu sıfatıyla hareket etmekteyiz.</p>
                </section>

                <section>
                    <h2 class="text-white font-bold text-xl uppercase tracking-wider mb-4">2. Kişisel Verilerin İşlenme Amacı</h2>
                    <p>Toplanan kişisel verileriniz, lüks hizmet standartlarımızın sürdürülmesi, VIP stil danışmanlığı süreçlerinin yönetilmesi ve sizlere özel koleksiyon duyurularının iletilmesi amacıyla işlenmektedir.</p>
                </section>

                <section class="bg-white/5 p-8 rounded-3xl border border-white/10">
                    <h2 class="text-amber-500 font-bold text-xl uppercase tracking-wider mb-4 text-center">Çerezler Hakkında</h2>
                    <p class="text-center italic text-gray-300">Sitemizde size en iyi deneyimi sunmak, trafiği analiz etmek ve tercihlerinizi hatırlamak için minimal düzeyde çerez (cookie) kullanılmaktadır.</p>
                </section>

                <section>
                    <h2 class="text-white font-bold text-xl uppercase tracking-wider mb-4">3. İletişim</h2>
                    <p>Veri sahibi olarak haklarınızla ilgili sorularınız için <a href="{{ route('contact') }}" class="text-amber-500 underline">İletişim</a> sayfamızdan bize ulaşabilirsiniz.</p>
                </section>

            </div>

        </div>
    </main>

    <x-partials.footer />
</x-layouts.app>
