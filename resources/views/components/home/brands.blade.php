<section class="w-full bg-gray-950 py-4 md:py-6 border-b border-white/5 relative overflow-hidden flex items-center select-none">

    <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 35s linear infinite;
            display: flex;
            width: max-content;
        }
        /* Üzerine gelince yavaşlasın/dursun istersen */
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>

    <div class="absolute left-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-r from-gray-950 to-transparent z-10 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-l from-gray-950 to-transparent z-10 pointer-events-none"></div>

    <div class="animate-marquee group">

        <div class="flex items-center justify-center space-x-12 md:space-x-24 px-6 md:px-12">
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-bold text-xl md:text-2xl tracking-tight">Ray-Ban</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-black text-lg md:text-xl tracking-[0.2em] uppercase">OAKLEY</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif text-xl md:text-2xl tracking-widest uppercase">PRADA</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif italic text-2xl md:text-3xl tracking-wide">Vogue</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-sans font-bold text-lg md:text-xl tracking-[0.2em] uppercase">GUCCI</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-sans font-medium text-lg md:text-xl tracking-[0.25em] uppercase">TOM FORD</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif text-xl md:text-2xl tracking-widest uppercase">DIOR</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif text-lg md:text-xl tracking-widest uppercase">VERSACE</span>
        </div>

        <div class="flex items-center justify-center space-x-12 md:space-x-24 px-6 md:px-12">
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-bold text-xl md:text-2xl tracking-tight">Ray-Ban</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-black text-lg md:text-xl tracking-[0.2em] uppercase">OAKLEY</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif text-xl md:text-2xl tracking-widest uppercase">PRADA</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif italic text-2xl md:text-3xl tracking-wide">Vogue</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-sans font-bold text-lg md:text-xl tracking-[0.2em] uppercase">GUCCI</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-sans font-medium text-lg md:text-xl tracking-[0.25em] uppercase">TOM FORD</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif text-xl md:text-2xl tracking-widest uppercase">DIOR</span>
            <span class="text-gray-500/80 hover:text-white transition-colors duration-300 font-serif text-lg md:text-xl tracking-widest uppercase">VERSACE</span>
        </div>

    </div>
</section>
