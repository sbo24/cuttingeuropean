@php
    $showCategory = $showCategory ?? true;
@endphp

<div class="apple-card-3d group flex flex-col justify-between overflow-hidden shadow-[0_10px_30px_-15px_rgba(0,0,0,0.06)] hover:shadow-[0_30px_60px_-15px_rgba(37,99,235,0.18)]">
    <!-- Top Badges with 3D Depth Layer -->
    <div class="p-6 pb-0 flex items-center justify-between z-10">
        <div class="flex items-center gap-2 flex-wrap">
            @if($product->brand)
                <span class="pop-badge px-3 py-1 text-[10px] font-black tracking-widest uppercase bg-gray-950 text-white rounded-full shadow-[0_2px_8px_rgba(0,0,0,0.2)] border border-white/10">
                    {{ $product->brand }}
                </span>
            @endif
            @if($product->is_second_hand)
                <span class="pop-badge px-3 py-1 text-[10px] font-bold uppercase bg-amber-400 text-gray-950 rounded-full shadow-[0_2px_10px_rgba(251,191,36,0.3)]">
                    Ocasión &bull; {{ $product->condition ?? 'Revisada' }}
                </span>
            @endif
        </div>
        @if($product->featured && !$product->is_second_hand)
            <span class="pop-badge px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-blue-600 rounded-full border border-blue-200/80">
                Top Ventas
            </span>
        @endif
    </div>

    <!-- 3D Image Showcase Stage -->
    <a href="{{ route('catalog.product', [$product->category ?? 'maquinaria', $product->slug]) }}" 
       class="relative block aspect-[16/11] p-8 flex items-center justify-center overflow-hidden stage-3d group/img">
        <!-- Subtle Radial Light Halo -->
        <div class="absolute inset-0 bg-radial from-blue-50/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

        @if($product->main_image)
            <img src="{{ $product->main_image }}" 
                 alt="{{ $product->name }} - {{ $product->brand }}" 
                 loading="lazy"
                 class="pop-3d max-h-full max-w-full object-contain filter drop-shadow-[0_15px_25px_rgba(0,0,0,0.12)] group-hover/img:drop-shadow-[0_25px_35px_rgba(37,99,235,0.25)] transition-all duration-500"
                 onerror="this.onerror=null; this.parentElement.innerHTML='<div class=\'w-full h-full flex flex-col items-center justify-center text-gray-300\'><svg class=\'w-16 h-16 stroke-current stroke-1 mb-2\' fill=\'none\' viewBox=\'0 0 24 24\'><circle cx=\'12\' cy=\'12\' r=\'9\'/><path d=\'M12 3v18M3 12h18\'/><circle cx=\'12\' cy=\'12\' r=\'3\'/></svg><span class=\'text-[10px] font-bold uppercase tracking-widest text-gray-400\'>Ficha Técnica Oficial</span></div>';">
        @else
            <div class="w-full h-full flex flex-col items-center justify-center text-gray-300">
                <svg class="w-16 h-16 stroke-current stroke-1 mb-2 text-gray-300" fill="none" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 3v18M3 12h18"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Corte Industrial</span>
            </div>
        @endif
    </a>

    <!-- Card Content: Apple Minimalist Layout -->
    <div class="p-6 pt-2 flex-1 flex flex-col justify-between">
        <div>
            @if($showCategory && $product->category)
                <p class="text-[11px] font-bold text-blue-600 uppercase tracking-widest mb-1.5 truncate">
                    {{ $product->category->name }}
                </p>
            @endif

            <h3 class="text-lg font-bold font-display text-gray-950 group-hover:text-blue-600 transition-colors leading-snug">
                <a href="{{ route('catalog.product', [$product->category ?? 'maquinaria', $product->slug]) }}">
                    {{ $product->name }}
                </a>
            </h3>

            @if($product->short_description)
                <p class="text-xs text-gray-500 mt-2 line-clamp-2 leading-relaxed font-light">
                    {{ $product->short_description }}
                </p>
            @endif

            <!-- Apple-style Spec Badges -->
            @if(!empty($product->specifications) && is_array($product->specifications))
                <div class="mt-4 pt-3 border-t border-gray-100 grid grid-cols-2 gap-2 text-xs">
                    @php $count = 0; @endphp
                    @foreach($product->specifications as $key => $val)
                        @if($count < 4)
                            <div class="bg-gray-50/80 rounded-xl px-2.5 py-1.5 border border-gray-100 flex flex-col">
                                <span class="text-gray-400 text-[9px] uppercase font-bold tracking-wider truncate">{{ $key }}</span>
                                <span class="text-gray-900 font-semibold text-xs truncate mt-0.5">{{ $val }}</span>
                            </div>
                            @php $count++; @endphp
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Apple-style Action Pill Buttons -->
        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center gap-2">
            <a href="{{ route('catalog.product', [$product->category ?? 'maquinaria', $product->slug]) }}" 
               class="flex-1 py-2.5 px-3 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-semibold text-center transition-all duration-200">
                Ficha Técnica
            </a>
            <button type="button" 
                    @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }}', ref: '{{ addslashes($product->model_ref ?? $product->brand) }}' })"
                    class="apple-btn-primary py-2.5 px-4 text-white text-xs font-semibold flex items-center justify-center gap-1.5 cursor-pointer">
                <span>Cotizar</span>
                <svg class="w-3.5 h-3.5 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </div>
</div>
