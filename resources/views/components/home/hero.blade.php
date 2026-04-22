<div class="container mx-auto px-3 md:px-8 pt-4 md:pt-8 pb-12 font-sans">

    <section x-data="{
            active: 0,
            interval: null,
            progress: 0,
            slides: [
                {
                    image: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1920&auto=format&fit=crop',
                    subtitle: 'LÜKSÜN YENİ YÜZÜ',
                    line1: 'TARZINI',
                    line2: 'ÖZGÜR BIRAK',
                },
                {
                    image: 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=1920&auto=format&fit=crop',
                    subtitle: 'DİNAMİK RUH',
                    line1: 'SINIRLARI',
                    line2: 'YENİDEN ÇİZ',
                },
                {
                    image: 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=1920&auto=format&fit=crop',
                    subtitle: 'İKONİK DURUŞ',
                    line1: 'ZARAFETİ',
                    line2: 'KEŞFET',
                }
            ],
            startTimer() {
                this.progress = 0;
                clearInterval(this.interval);
                this.interval = setInterval(() => {
                    this.progress += 1;
                    if(this.progress >= 100) {
                        this.active = this.active === this.slides.length - 1 ? 0 : this.active + 1;
                        this.progress = 0;
                    }
                }, 50);
            },
            goTo(index) {
                this.active = index;
                this.startTimer();
            }
        }"
        x-init="startTimer()"
        class="relative w-full h-[65vh] md:h-[80vh] bg-gray-950 rounded-[2.5rem] md:rounded-[3.5rem] overflow-hidden shadow-2xl group select-none border border-white/5">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="active === index" class="absolute inset-0 z-0">
                <img :src="slide.image"
                     x-transition:enter="transition duration-[1500ms] ease-out"
                     x-transition:enter-start="opacity-0 scale-100"
                     x-transition:enter-end="opacity-100 scale-110"
                     class="w-full h-full object-cover object-center"
                     alt="Edremit Moda">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-950/80 via-gray-950/20 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-transparent to-transparent"></div>
            </div>
        </template>

        <div class="absolute inset-0 z-10 flex flex-col justify-center px-6 md:px-20 pointer-events-none">
            <template x-for="(slide, index) in slides" :key="'content-'+index">
                <div x-show="active === index" class="max-w-4xl">

                    <p x-transition:enter="transition duration-700 delay-300 ease-out"
                       class="text-amber-500 font-bold tracking-[0.3em] text-[10px] md:text-xs mb-2 md:mb-4 drop-shadow-[0_2px_4px_rgba(0,0,0,0.5)]"
                       x-text="slide.subtitle"></p>

                    <div class="flex flex-col">
                        <h1 x-transition:enter="transition duration-1000 delay-400 ease-out"
                            class="text-5xl md:text-8xl font-black text-white tracking-tighter leading-none drop-shadow-[0_10px_20px_rgba(0,0,0,0.8)]"
                            x-text="slide.line1"></h1>

                        <h2 x-transition:enter="transition duration-1000 delay-600 ease-out"
                            class="text-4xl md:text-7xl font-light italic text-amber-500 pb-6 drop-shadow-[0_4px_10px_rgba(245,158,11,0.4)]"
                            x-text="slide.line2"></h2>
                    </div>

                    <div class="mt-4 md:mt-8 pointer-events-auto">
                        <a href="#urunler" class="inline-flex items-center gap-3 bg-amber-500 text-gray-900 px-6 py-3.5 md:px-10 md:py-5 rounded-full font-black text-[10px] md:text-xs uppercase tracking-widest hover:bg-white transition-all duration-300 hover:scale-105 shadow-2xl">
                            ALIŞVERİŞE BAŞLA
                        </a>
                    </div>
                </div>
            </template>
        </div>

        <div class="absolute bottom-0 inset-x-0 z-20 flex justify-center pointer-events-auto md:px-12 md:pb-8">
            <div class="bg-gray-950/90 backdrop-blur-2xl border-t md:border border-white/10 w-full md:rounded-full px-6 py-4 md:py-3 flex flex-row items-center justify-between">

                <div class="flex items-center gap-2 md:gap-4">
                    <div class="w-6 h-6 md:w-8 md:h-8 rounded-full bg-amber-500/20 flex items-center justify-center text-amber-500">
                        <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <span class="text-white font-bold text-[9px] md:text-xs uppercase tracking-wider">Hızlı Teslimat</span>
                </div>

                <div class="w-px h-4 bg-white/10 mx-2"></div>

                <div class="flex items-center gap-2 md:gap-4 flex-1 justify-center md:justify-start">
                    <span class="text-amber-500 font-bold text-[8px] md:text-xs uppercase tracking-tight md:tracking-widest">Edremit • Akçay • Güre • Altınoluk</span>
                </div>

                <div class="hidden md:flex items-center gap-3 ml-6">
                    <template x-for="(slide, index) in slides" :key="'dot-'+index">
                        <button @click="goTo(index)" class="w-1.5 h-1.5 rounded-full transition-all duration-300" :class="active === index ? 'bg-amber-500 w-6' : 'bg-white/20'"></button>
                    </template>
                </div>
            </div>
        </div>

        <div class="absolute right-4 md:right-6 top-1/2 transform -translate-y-1/2 z-20 hidden md:flex flex-col items-center gap-5 pointer-events-auto bg-gray-950/40 backdrop-blur-md border border-white/10 rounded-full py-6 px-2 shadow-[0_10px_30px_rgba(0,0,0,0.5)]">

            <span class="text-[9px] font-bold tracking-[0.3em] text-amber-500 uppercase [writing-mode:vertical-rl] rotate-180 mb-1 drop-shadow-md">
                Bağlantıda Kalın
            </span>

            <div class="w-px h-8 bg-amber-500/30"></div>

            <div class="flex flex-col gap-4">
                <a href="#" class="text-amber-500/80 hover:text-amber-400 transition-all transform hover:-translate-y-1 drop-shadow-md" title="Instagram">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <a href="#" class="text-amber-500/80 hover:text-amber-400 transition-all transform hover:-translate-y-1 drop-shadow-md" title="Facebook">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://wa.me/{{ $settings['whatsapp'] ?? '905555555555' }}" target="_blank" class="text-amber-500/80 hover:text-[#25D366] transition-all transform hover:-translate-y-1 drop-shadow-md" title="WhatsApp">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                </a>
            </div>
        </div>

    </section>
</div>
