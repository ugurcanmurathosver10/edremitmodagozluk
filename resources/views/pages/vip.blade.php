<x-layouts.app>
    <x-slot:title>VIP Hizmetlerimiz | Size Özel Ayrıcalıklar</x-slot>

    <main class="w-full bg-gray-950 pt-32 pb-24 text-gray-300">
        <div class="container mx-auto px-6 max-w-7xl">

            <div class="text-center mb-24">
                <h1 class="text-5xl md:text-8xl font-black text-white uppercase tracking-tighter mb-6">VIP <span class="text-amber-500 italic font-light">Experience</span></h1>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto uppercase tracking-widest font-bold">Lüksü bir alışverişten öteye, bir deneyime taşıyoruz.</p>
            </div>

            <div class="space-y-12">
                <div class="group flex flex-col md:flex-row rounded-[3rem] overflow-hidden bg-white/5 border border-white/5 hover:border-amber-500/30 transition-all duration-700">
                    <div class="w-full md:w-1/2 p-12 md:p-20">
                        <h2 class="text-4xl font-black text-white uppercase mb-6 leading-tight">Aynı Gün <br>VIP Kurye Teslimat</h2>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            Körfez bölgesine (Edremit, Akçay, Güre, Altınoluk) özel sunduğumuz bu hizmetle, siparişinizi birkaç saat içerisinde kapınıza getiriyoruz. Kargo beklemek lüks değildir; istediğiniz anda ona sahip olmak lükstür.
                        </p>
                        <div class="inline-flex items-center gap-3 text-amber-500 font-bold text-xs uppercase tracking-widest">
                            <span>Bölgeye Özel Hizmet</span>
                            <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?q=80&w=1200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000" alt="VIP Delivery">
                    </div>
                </div>

                <div class="group flex flex-col md:flex-row-reverse rounded-[3rem] overflow-hidden bg-white/5 border border-white/5 hover:border-amber-500/30 transition-all duration-700">
                    <div class="w-full md:w-1/2 p-12 md:p-20 text-right md:text-left">
                        <h2 class="text-4xl font-black text-white uppercase mb-6 leading-tight">Dijital Stil <br>Danışmanlığı</h2>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            Doğru gözlüğü seçmek uzmanlık gerektirir. WhatsApp hattımız üzerinden uzman stil danışmanımızla iletişime geçin; yüz tipinize, yaşam tarzınıza ve ten renginize en uygun modelleri birlikte seçelim.
                        </p>
                        <a href="https://wa.me/905448995965" target="_blank" class="bg-amber-500 text-gray-950 px-8 py-4 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-white transition-all">Sohbeti Başlat</a>
                    </div>
                    <div class="w-full md:w-1/2 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000" alt="Style Consultant">
                    </div>
                </div>
            </div>

        </div>
    </main>

    <x-partials.footer />
</x-layouts.app>
