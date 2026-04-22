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
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>

    <div class="absolute left-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-r from-gray-950 to-transparent z-10 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-l from-gray-950 to-transparent z-10 pointer-events-none"></div>

    <div class="animate-marquee group">

        {{-- 1. SET: Admin Panelden Gelen Gerçek Logolar --}}
        <div class="flex items-center justify-center space-x-12 md:space-x-24 px-6 md:px-12">
            @forelse($brands as $brand)
                <div class="flex items-center justify-center h-8 md:h-10 w-auto">
                    <img src="{{ asset('storage/' . $brand->logo) }}"
                         alt="{{ $brand->name }}"
                         class="h-full w-auto object-contain filter grayscale invert opacity-40 hover:opacity-100 hover:grayscale-0 transition-all duration-500"
                         loading="lazy">
                </div>
            @empty
                {{-- Eğer panelde hiç marka yoksa boş görünmesin diye şık bir yazı --}}
                <span class="text-gray-700 text-xs uppercase tracking-[0.3em]">Edremit Moda Koleksiyonu</span>
            @endforelse
        </div>

        {{-- 2. SET: Sonsuz Döngü İçin Kopya (Kral, burası akışın bozulmaması için şart) --}}
        <div class="flex items-center justify-center space-x-12 md:space-x-24 px-6 md:px-12">
            @foreach($brands as $brand)
                <div class="flex items-center justify-center h-8 md:h-10 w-auto">
                    <img src="{{ asset('storage/' . $brand->logo) }}"
                         alt="{{ $brand->name }}"
                         class="h-full w-auto object-contain filter grayscale invert opacity-40 hover:opacity-100 hover:grayscale-0 transition-all duration-500">
                </div>
            @endforeach
        </div>

    </div>
</section>
