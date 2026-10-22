@php
    $showCategory = $showCategory ?? true;
@endphp

<div class="group bg-white rounded-xl border border-gray-200 hover:border-blue-500 hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden relative">
    <!-- Top Badges -->
    <div class="absolute top-3 left-3 right-3 flex items-center justify-between z-10 pointer-events-none">
        <div class="flex items-center gap-1.5 flex-wrap">
            @if($product->brand)
                <span class="px-2.5 py-1 text-xs font-black tracking-wider uppercase bg-gray-900 text-white rounded shadow-sm">
                    {{ $product->brand }}
                </span>
            @endif
            @if($product->is_second_hand)
                <span class="px-2 py-1 text-xs font-bold uppercase bg-amber-500 text-gray-950 rounded shadow-sm">
                    Ocasión: {{ $product->condition ?? 'Revisada' }}
                </span>
            @endif
        </div>
        @if($product->featured && !$product->is_second_hand)
            <span class="px-2 py-0.5 text-[11px] font-bold uppercase bg-blue-600 text-white rounded-full shadow-sm">
                Destacada
            </span>
        @endif
    </div>

    <!-- Image Container with Fallback -->
    <a href="{{ route('catalog.product', [$product->category ?? 'maquinaria', $product->slug]) }}" class="relative block bg-gray-50 aspect-[4/3] overflow-hidden p-6 border-b border-gray-100 flex items-center justify-center">
        @if($product->main_image)
            <img src="{{ $product->main_image }}" 
                 alt="{{ $product->name }} - {{ $product->brand }}" 
                 loading="lazy"
                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500"
                 onerror="this.onerror=null; this.parentElement.innerHTML='<div class=\'w-full h-full flex flex-col items-center justify-center text-gray-400\'><svg class=\'w-16 h-16 stroke-current stroke-1 mb-2\' fill=\'none\' viewBox=\'0 0 24 24\'><circle cx=\'12\' cy=\'12\' r=\'9\'/><path d=\'M12 3v18M3 12h18\'/><circle cx=\'12\' cy=\'12\' r=\'3\'/></svg><span class=\'text-xs font-semibold uppercase tracking-wider text-gray-400\'>Imagen Técnica en Preparación</span></div>';">
        @else
            <div class="w-full h-full flex flex-col items-center justify-center text-gray-400">
                <svg class="w-16 h-16 stroke-current stroke-1 mb-2" fill="none" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 3v18M3 12h18"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                <span class="text-xs font-semibold uppercase tracking-wider text-gray-400">Corte Industrial</span>
            </div>
        @endif
        <div class="absolute inset-0 bg-blue-600/0 group-hover:bg-blue-600/5 transition-colors pointer-events-none"></div>
    </a>

    <!-- Card Content -->
    <div class="p-5 flex-1 flex flex-col justify-between">
        <div>
            @if($showCategory && $product->category)
                <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1 truncate">
                    {{ $product->category->name }}
                </p>
            @endif
            <h3 class="text-base font-bold text-gray-900 group-hover:text-blue-600 transition-colors leading-snug">
                <a href="{{ route('catalog.product', [$product->category ?? 'maquinaria', $product->slug]) }}">
                    {{ $product->name }}
                </a>
            </h3>

            @if($product->short_description)
                <p class="text-xs text-gray-600 mt-2 line-clamp-2 leading-relaxed">
                    {{ $product->short_description }}
                </p>
            @endif

            <!-- Key Specs pills -->
            @if(!empty($product->specifications) && is_array($product->specifications))
                <div class="mt-4 pt-3 border-t border-gray-100 grid grid-cols-2 gap-2 text-xs">
                    @php $count = 0; @endphp
                    @foreach($product->specifications as $key => $val)
                        @if($count < 4)
                            <div class="bg-gray-50 rounded px-2 py-1 border border-gray-100">
                                <span class="text-gray-400 block text-[10px] uppercase font-bold truncate">{{ $key }}</span>
                                <span class="text-gray-800 font-semibold truncate block">{{ $val }}</span>
                            </div>
                            @php $count++; @endphp
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Action CTAs -->
        <div class="mt-5 pt-4 border-t border-gray-100 flex items-center gap-2">
            <a href="{{ route('catalog.product', [$product->category ?? 'maquinaria', $product->slug]) }}" 
               class="flex-1 text-center py-2 px-3 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-bold transition-colors">
                Ver Detalles
            </a>
            <button type="button" 
                    @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }}', ref: '{{ addslashes($product->model_ref ?? $product->brand) }}' })"
                    class="py-2 px-3 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors shadow-sm flex items-center justify-center gap-1.5 cursor-pointer">
                <span>Cotizar</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </div>
</div>
