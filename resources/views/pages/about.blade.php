<x-layouts.app>
    <x-slot:title>Biz Kimiz? | Edremit Moda Manifesto</x-slot>

    <main class="w-full bg-gray-950 pt-32 pb-24 text-gray-300">
        <div class="container mx-auto px-6 md:px-12 max-w-7xl">

            <section class="mb-32">
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-px bg-amber-500"></div>
                            <span class="text-amber-500 font-bold text-xs tracking-[0.4em] uppercase">Marka Manifestosu</span>
                        </div>
                        <h1 class="text-5xl md:text-7xl font-black text-white tracking-tighter leading-none mb-8">
                            Gözlerinizdeki <br>
                            <span class="font-light italic text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-600">İmza.</span>
                        </h1>
                        <p class="text-lg md:text-xl text-gray-400 leading-relaxed italic">
                            "Lüks, sadece pahalı olan değil; nadir olan ve size özel hissettirendir."
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 rounded-[3rem] overflow-hidden border border-white/10 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1200" class="w-full h-[500px] object-cover" alt="Luxury Eyewear">
                    </div>
                </div>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 gap-px bg-white/5 border border-white/5 rounded-[3rem] overflow-hidden mb-32">
                <div class="p-12 md:p-20 bg-gray-950 flex flex-col justify-center">
                    <h2 class="text-3xl font-black text-white uppercase tracking-tighter mb-6">Küratörlük Anlayışı</h2>
                    <p class="text-gray-400 leading-relaxed">
                        Edremit Moda olarak biz, binlerce ürünün içinde kaybolacağınız bir pazar yeri değiliz. Dünyanın en ikonik markalarının koleksiyonlarından, stil sahibi ve karakteri olan parçaları sizin için seçiyoruz. Her ürün, birer sanat eseri titizliğiyle incelenir ve seçkimize dahil edilir.
                    </p>
                </div>
                <div class="p-12 md:p-20 bg-gray-900 flex flex-col justify-center">
                    <h2 class="text-3xl font-black text-white uppercase tracking-tighter mb-6">Kuzey Ege Ruhu</h2>
                    <p class="text-gray-400 leading-relaxed">
                        Akçay'dan Altınoluk'a, Kazdağları'nın esintisinden Ege'nin güneşine... Edremit Moda, bu toprakların zarafetini modern dünya trendleriyle harmanlayan bir dijital butiktir. Fiziksel sınırları aşan butik hizmet anlayışımızla, bölgenin en seçkin gözlük vitrini olmaktan gurur duyuyoruz.
                    </p>
                </div>
            </section>

            <section class="text-center max-w-4xl mx-auto">
                <div class="w-20 h-20 rounded-full bg-amber-500/10 flex items-center justify-center text-amber-500 mx-auto mb-8">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h2 class="text-4xl font-black text-white uppercase tracking-tighter mb-8">Orijinallik ve Güven Sorumluluğu</h2>
                <p class="text-gray-500 text-lg leading-relaxed">
                    Edremit Moda'da sergilenen her bir parça, resmi distribütör onaylı ve uluslararası garanti sertifikalıdır. Dijital dünyada güvenin ne kadar kıymetli olduğunun farkındayız. Bu yüzden sadece gözlük değil, satış sonrasında da sürecek bir dostluk ve hizmet sözü veriyoruz.
                </p>
            </section>
        </div>
    </main>

    <x-partials.footer />
</x-layouts.app>
