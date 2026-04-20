<section x-data="{
        active: 0,
        interval: null,
        progress: 0,
        slides: [
            {
                image: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1920&auto=format&fit=crop',
                subtitle: 'YENİ SEZON KOLEKSİYONU',
                title1: 'GÜNEŞİN',
                title2: 'YENİ KURALLARI',
            },
            {
                image: 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=1920&auto=format&fit=crop',
                subtitle: 'SPORTİF & DİNAMİK',
                title1: 'SINIRLARI',
                title2: 'AŞMA VAKTİ',
            },
            {
                image: 'https://images.unsplash.com/photo-1625591340203-2e21251e6008?q=80&w=1920&auto=format&fit=crop',
                subtitle: 'PREMIUM SERİ',
                title1: 'ZARAFETİN',
                title2: 'SAF HALİ',
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
            }, 60); // 6 saniyede bir değişir
        },
        goTo(index) {
            this.active = index;
            this.startTimer();
        }
    }"
    x-init="startTimer()"
    class="relative w-full h-[85vh] md:h-[95vh] bg-gray-950 overflow-hidden font-sans group select-none">

    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="active === index" class="absolute inset-0 z-0">
            <img :src="slide.image"
                 x-transition:enter="transition duration-[1500ms] ease-out"
                 x-transition:enter-start="opacity-0 scale-100"
                 x-transition:enter-end="opacity-100 scale-110"
                 x-transition:leave="transition duration-[1500ms] ease-in absolute inset-0"
                 x-transition:leave-start="opacity-100 scale-110"
                 x-transition:leave-end="opacity-0 scale-125"
                 class="w-full h-full object-cover object-center"
                 alt="Edremit Moda Premium Gözlükler">

            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(10,10,10,0.8)_100%)]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/40 to-transparent"></div>
        </div>
    </template>

    <div class="absolute inset-0 z-10 flex flex-col items-center justify-center px-4 text-center pointer-events-none mt-4 md:mt-0">

        <div class="overflow-hidden mb-3 md:mb-4">
            <template x-for="(slide, index) in slides" :key="'sub-'+index">
                <span x-show="active === index"
                      x-transition:enter="transition duration-700 delay-300 ease-out"
                      x-transition:enter-start="opacity-0 translate-y-full"
                      x-transition:enter-end="opacity-100 translate-y-0"
                      class="block text-amber-500 font-bold tracking-[0.3em] md:tracking-[0.4em] uppercase text-[10px] md:text-sm">
                    <span x-text="slide.subtitle"></span>
                </span>
            </template>
        </div>

        <div class="relative min-h-[100px] sm:min-h-[140px] md:min-h-[180px] w-full flex justify-center items-center px-2">
            <template x-for="(slide, index) in slides" :key="'title-'+index">
                <h1 x-show="active === index" class="absolute w-full flex flex-col items-center pointer-events-auto">
                    <span x-transition:enter="transition duration-1000 delay-400 ease-out"
                          x-transition:enter-start="opacity-0 scale-90 blur-sm"
                          x-transition:enter-end="opacity-100 scale-100 blur-0"
                          x-transition:leave="transition duration-500 ease-in absolute"
                          x-transition:leave-start="opacity-100"
                          x-transition:leave-end="opacity-0"
                          class="text-3xl sm:text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tight md:tracking-tighter leading-[1.1]"
                          x-text="slide.title1"></span>

                    <span x-transition:enter="transition duration-1000 delay-600 ease-out"
                          x-transition:enter-start="opacity-0 scale-110 blur-sm"
                          x-transition:enter-end="opacity-100 scale-100 blur-0"
                          x-transition:leave="transition duration-500 ease-in absolute"
                          x-transition:leave-start="opacity-100"
                          x-transition:leave-end="opacity-0"
                          class="text-4xl sm:text-6xl md:text-8xl lg:text-9xl font-black text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-amber-400 to-amber-600 tracking-tight md:tracking-tighter leading-[1.1] italic mt-1"
                          x-text="slide.title2"></span>
                </h1>
            </template>
        </div>

        <div class="mt-8 md:mt-12 pointer-events-auto z-20">
            <a href="#koleksiyon" class="group relative flex items-center justify-center px-6 py-3.5 md:px-8 md:py-4 font-black text-gray-900 bg-amber-500 rounded-full overflow-hidden transition-all duration-500 hover:scale-105 hover:shadow-[0_0_40px_rgba(245,158,11,0.4)]">
                <span class="absolute inset-0 w-full h-full bg-gradient-to-tr from-amber-400 to-amber-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                <span class="relative flex items-center gap-2 md:gap-3 uppercase tracking-widest text-[10px] md:text-xs">
                    Koleksiyonu İncele
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m-7-7H3"></path></svg>
                </span>
            </a>
        </div>
    </div>

    <div class="absolute bottom-6 md:bottom-10 inset-x-0 z-20 flex justify-center px-4 pointer-events-auto">
        <div class="bg-gray-950/85 backdrop-blur-2xl border border-white/10 rounded-[1.5rem] md:rounded-full px-5 md:px-8 py-4 md:py-4 shadow-[0_10px_40px_rgba(0,0,0,0.5)] flex flex-col md:flex-row items-center gap-4 md:gap-8 w-full max-w-4xl">

            <div class="flex items-center gap-4 w-full md:w-auto">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-amber-500/20 border border-amber-500/30 flex items-center justify-center text-amber-500 shrink-0">
                    <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div class="flex flex-col text-left flex-1 justify-center">
                    <span class="text-white font-extrabold text-[12px] md:text-sm uppercase tracking-wide leading-tight">Gün İçinde VIP Teslimat</span>
                    <span class="text-amber-500/90 text-[10px] md:text-xs uppercase tracking-wide font-bold leading-tight mt-0.5">Edremit • Akçay • Güre • Altınoluk</span>
                </div>
            </div>

            <div class="hidden md:block w-px h-10 bg-white/10 shrink-0"></div>
            <div class="md:hidden w-full h-px bg-white/10 opacity-50 shrink-0 mt-1 mb-1"></div>

            <div class="flex items-center gap-4 w-full md:w-auto">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/10 border border-white/20 flex items-center justify-center text-white shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                </div>
                <div class="flex flex-col text-left flex-1 justify-center">
                    <span class="text-white font-extrabold text-[12px] md:text-sm uppercase tracking-wide leading-tight">Tüm Türkiye'ye Kargo</span>
                    <span class="text-gray-400 text-[10px] md:text-xs uppercase tracking-wide font-bold leading-tight mt-0.5">Ücretsiz ve Sigortalı Gönderim</span>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute top-1/2 right-2 md:right-8 transform -translate-y-1/2 z-20 flex flex-col items-center gap-4 pointer-events-auto hidden sm:flex">
        <template x-for="(slide, index) in slides" :key="'prog-'+index">
            <button @click="goTo(index)" class="relative w-1.5 h-12 md:h-16 bg-white/20 rounded-full overflow-hidden focus:outline-none transition-all duration-300" :class="active === index ? 'h-20 md:h-24' : 'hover:bg-white/40'">
                <div x-show="active === index" class="absolute top-0 left-0 w-full bg-amber-500 rounded-full transition-all duration-75 ease-linear" :style="`height: ${progress}%`"></div>
            </button>
        </template>
    </div>

</section>
