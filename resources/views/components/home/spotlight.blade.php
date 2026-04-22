<section class="w-full bg-gray-950 py-12 md:py-24 border-t border-white/5 overflow-hidden">
    <div class="container mx-auto px-4 md:px-8">

        <div class="flex flex-col-reverse md:grid md:grid-cols-2 gap-0 rounded-[2.5rem] md:rounded-[3.5rem] overflow-hidden border border-white/10 shadow-2xl group">

            <div class="bg-gray-900/80 p-10 md:p-20 flex flex-col justify-center relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-amber-500/10 rounded-full blur-[80px] pointer-events-none"></div>

                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-[2px] bg-amber-500"></div>
                        <span class="text-amber-500 font-bold text-[10px] md:text-xs tracking-[0.3em] uppercase">2026 Yaz Koleksiyonu</span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-black text-white tracking-tighter leading-[1.1] mb-6">
                        İtalyan Zarafeti, <br>
                        <span class="font-light italic text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-600">Edremit Güneşi.</span>
                    </h2>

                    <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-10 max-w-md">
                        Sadece bir aksesuar değil, tarzınızın imzası. El işçiliğiyle üretilmiş limitli İtalyan asetat çerçevelerle güneşin tadını lüksle çıkarın. VIP kurye ile aynı gün kapınızda.
                    </p>

                    <a href="{{ route('collection') }}" class="inline-flex items-center gap-4 text-white hover:text-amber-500 font-bold text-xs uppercase tracking-widest transition-colors group/btn">
                        <span>Koleksiyonu Keşfet</span>
                        <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center group-hover/btn:border-amber-500 group-hover/btn:bg-amber-500/10 transition-all">
                            <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </a>
                </div>
            </div>

            <div class="relative aspect-square md:aspect-auto h-[50vh] md:h-full overflow-hidden">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop"
                     alt="Lifestyle Gözlük Modeli"
                     class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-[2000ms] ease-out group-hover:scale-105">

                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent opacity-80 md:opacity-0 md:group-hover:opacity-40 transition-opacity duration-700"></div>
            </div>

        </div>

    </div>
</section>
