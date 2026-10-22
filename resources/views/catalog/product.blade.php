@extends('layouts.app')

@section('title', $product->meta_title)
@section('meta_description', $product->meta_description)
@section('og_type', 'product')
@section('og_image', $product->main_image ?: asset('images/cutting-european-og.jpg'))

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org/",
    "@@type": "Product",
    "name": "{{ addslashes($product->name) }}",
    "image": "{{ $product->main_image ?? 'https://cuttingeuropean.com/images/default-machine.jpg' }}",
    "description": "{{ addslashes($product->short_description ?? $product->description) }}",
    "brand": {
        "@@type": "Brand",
        "name": "{{ $product->brand ?? 'MEP' }}"
    },
    "category": "{{ $category->name }}",
    "offers": {
        "@@type": "AggregateOffer",
        "priceCurrency": "EUR",
        "availability": "https://schema.org/InStock"
    }
}
</script>
@endpush

@section('content')
@php
    $breadcrumbItems = [];
    if ($category->parent) {
        $parentRoute = match($category->parent->slug) {
            'sierras-de-cinta' => route('catalog.sierras-cinta'),
            'sierras-de-disco' => route('catalog.sierras-disco'),
            'aluminio-pvc'    => route('catalog.aluminio-pvc'),
            default            => route('catalog.category', $category->parent),
        };
        $breadcrumbItems[$category->parent->name] = $parentRoute;
    }
    $breadcrumbItems[$category->name] = route('catalog.category', $category);
    $breadcrumbItems[$product->name] = '';
@endphp

@include('partials.breadcrumbs', ['items' => $breadcrumbItems])

<!-- Product Hero & Overview -->
<section class="py-12 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left: Product Image Gallery -->
            <div class="lg:col-span-6 space-y-4">
                <div class="bg-gray-50 rounded-2xl border border-gray-200 aspect-[4/3] p-8 flex items-center justify-center relative overflow-hidden group">
                    @if($product->main_image)
                        <img src="{{ $product->main_image }}" 
                             alt="{{ $product->name }} - Maquinaria de corte industrial {{ $product->brand }}"
                             class="max-h-full max-w-full object-contain filter drop-shadow-md group-hover:scale-105 transition-transform duration-500"
                             onerror="this.onerror=null; this.parentElement.innerHTML='<div class=\'text-center text-gray-400\'><svg class=\'w-20 h-20 mx-auto stroke-current stroke-1 mb-2\' fill=\'none\' viewBox=\'0 0 24 24\'><circle cx=\'12\' cy=\'12\' r=\'9\'/><path d=\'M12 3v18M3 12h18\'/><circle cx=\'12\' cy=\'12\' r=\'3\'/></svg><span class=\'text-xs uppercase font-bold text-gray-400 tracking-wider\'>Esquema Técnico de Máquina</span></div>';">
                    @else
                        <div class="text-center text-gray-400">
                            <svg class="w-20 h-20 mx-auto stroke-current stroke-1 mb-2" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 3v18M3 12h18"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            <span class="text-xs uppercase font-bold text-gray-400 tracking-wider">Esquema Técnico de Máquina</span>
                        </div>
                    @endif

                    <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                        @if($product->brand)
                            <span class="px-3 py-1 bg-gray-950 text-white text-xs font-black uppercase tracking-wider rounded shadow-sm">
                                {{ $product->brand }}
                            </span>
                        @endif
                        @if($product->is_second_hand)
                            <span class="px-3 py-1 bg-amber-500 text-gray-950 text-xs font-bold uppercase tracking-wider rounded shadow-sm">
                                Maquinaria de Ocasión: {{ $product->condition ?? 'Revisada' }}
                            </span>
                        @endif
                    </div>
                </div>

                <!-- Quality Badges Under Image -->
                <div class="grid grid-cols-3 gap-3 text-center">
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <span class="block text-[11px] font-bold uppercase text-gray-400">Garantía</span>
                        <span class="text-xs font-bold text-gray-800">Oficial y SAT Propio</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <span class="block text-[11px] font-bold uppercase text-gray-400">Entrega</span>
                        <span class="text-xs font-bold text-gray-800">Inmediata / A consultar</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <span class="block text-[11px] font-bold uppercase text-gray-400">Normativa</span>
                        <span class="text-xs font-bold text-gray-800">Marcado CE Seguridad</span>
                    </div>
                </div>
            </div>

            <!-- Right: Product Information & CTAs -->
            <div class="lg:col-span-6 space-y-6">
                <div>
                    <a href="{{ route('catalog.category', $category) }}" class="text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700">
                        {{ $category->name }}
                    </a>
                    <h1 class="text-3xl sm:text-4xl font-display font-black text-gray-950 mt-1">
                        {{ $product->name }}
                    </h1>
                    @if($product->model_ref)
                        <p class="text-xs text-gray-500 font-mono mt-1">Referencia técnica: {{ $product->model_ref }}</p>
                    @endif
                </div>

                @if($product->short_description)
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed font-light">
                        {{ $product->short_description }}
                    </p>
                @endif

                <!-- Quick Specs Summary Box -->
                @if(!empty($product->specifications) && is_array($product->specifications))
                    <div class="p-5 bg-gray-50 rounded-xl border border-gray-200">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3">Especificaciones Clave:</h3>
                        <div class="grid grid-cols-2 gap-3 text-xs">
                            @foreach($product->specifications as $key => $val)
                                <div class="bg-white p-2.5 rounded-lg border border-gray-100 shadow-2xs">
                                    <span class="text-gray-400 block text-[10px] uppercase font-bold">{{ $key }}</span>
                                    <span class="text-gray-900 font-bold text-xs">{{ $val }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Renting Highlight Box -->
                <div class="p-3.5 bg-emerald-50/80 border border-emerald-200/80 rounded-2xl text-xs text-emerald-950 flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Disponible en <strong>Renting B2B</strong> desde <strong>{{ $product->renting_data['fee_48'] }} &euro;/mes</strong> (+IVA)</span>
                    </div>
                    <span class="px-2.5 py-1 bg-emerald-600 text-white text-[10px] font-bold rounded-full uppercase tracking-wider">
                        100% Deducible
                    </span>
                </div>

                <!-- CTAs -->
                <div class="pt-1 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <button type="button" 
                            @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }}', ref: '{{ addslashes($product->model_ref ?? $product->brand) }}' })"
                            class="flex-1 py-4 px-6 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg hover:shadow-blue-600/30 transition-all flex items-center justify-center gap-2 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>Solicitar Presupuesto y Plazo</span>
                    </button>
                    <button type="button"
                            @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }}', ref: 'CITA-SHOWROOM' })"
                            class="py-4 px-5 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-colors flex items-center justify-center gap-2 cursor-pointer">
                        <span>Prueba en Showroom</span>
                    </button>
                    <a href="https://wa.me/34938498456?text={{ urlencode('Hola, deseo consultar disponibilidad y precio para la máquina ' . $product->name) }}"
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="py-4 px-5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition-colors flex items-center justify-center gap-2">
                        <span>WhatsApp</span>
                    </a>
                </div>

                <div class="pt-1 text-xs text-gray-500 flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>¿Necesita adaptar longitud de carrera, rodillos de carga o mordazas para paquete? Indíquelo en la solicitud.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Technical Navigation Tabs Section -->
<section class="py-16 bg-gray-50 border-t border-gray-200" x-data="{ activeTab: 'capacities' }">
    <div class="container mx-auto space-y-10">

        <!-- Tabs Navigation Bar -->
        <div class="flex items-center gap-2 overflow-x-auto pb-2 border-b border-gray-200 scrollbar-none">
            <button type="button" 
                    @click="activeTab = 'capacities'"
                    class="py-3 px-5 rounded-xl text-xs font-bold whitespace-nowrap transition-all cursor-pointer flex items-center gap-2"
                    :class="activeTab === 'capacities' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span>Capacidades de Corte</span>
            </button>

            <button type="button" 
                    @click="activeTab = 'parameters'"
                    class="py-3 px-5 rounded-xl text-xs font-bold whitespace-nowrap transition-all cursor-pointer flex items-center gap-2"
                    :class="activeTab === 'parameters' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>Especificaciones Técnicas</span>
            </button>

            <button type="button" 
                    @click="activeTab = 'video'"
                    class="py-3 px-5 rounded-xl text-xs font-bold whitespace-nowrap transition-all cursor-pointer flex items-center gap-2"
                    :class="activeTab === 'video' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'">
                <svg class="w-4 h-4 text-rose-500" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                <span>Vídeo en Funcionamiento</span>
            </button>

            <button type="button" 
                    @click="activeTab = 'equipment'"
                    class="py-3 px-5 rounded-xl text-xs font-bold whitespace-nowrap transition-all cursor-pointer flex items-center gap-2"
                    :class="activeTab === 'equipment' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                <span>Equipamiento & Opciones</span>
            </button>

            <button type="button" 
                    @click="activeTab = 'renting'"
                    class="py-3 px-5 rounded-xl text-xs font-bold whitespace-nowrap transition-all cursor-pointer flex items-center gap-2"
                    :class="activeTab === 'renting' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Simulador de Renting</span>
            </button>

            <button type="button" 
                    @click="activeTab = 'description'"
                    class="py-3 px-5 rounded-xl text-xs font-bold whitespace-nowrap transition-all cursor-pointer flex items-center gap-2"
                    :class="activeTab === 'description' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                <span>Descripción & Ventajas</span>
            </button>
        </div>

        <!-- ═══ TAB 1: CAPACIDADES DE CORTE (TABLA OFICIAL MEP) ═══ -->
        <div x-show="activeTab === 'capacities'" class="bg-white rounded-3xl border border-gray-200 p-8 sm:p-10 shadow-sm space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-100 pb-5">
                <div>
                    <span class="text-[11px] font-bold text-blue-600 uppercase tracking-widest block">Geometría de Producción</span>
                    <h3 class="text-2xl font-bold font-display text-gray-950 mt-0.5">Tabla de Capacidades de Corte Oficial MEP</h3>
                </div>
                <div class="flex items-center gap-2 text-xs text-gray-500 font-medium">
                    <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                    <span>Tolerancias ensayadas con acero C40 y perfiles HEB</span>
                </div>
            </div>

            <!-- Cutting Capacity Table -->
            <div class="overflow-x-auto rounded-2xl border border-gray-200">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="bg-slate-900 text-white text-[11px] uppercase tracking-wider font-bold">
                            <th class="py-4 px-5">Ángulo de Corte</th>
                            <th class="py-4 px-5">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-3.5 h-3.5 rounded-full border border-current inline-block"></span>
                                    <span>Redondo (&Oslash;)</span>
                                </div>
                            </th>
                            <th class="py-4 px-5">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-3.5 h-3.5 border border-current inline-block"></span>
                                    <span>Cuadrado (&FilledSmallSquare;)</span>
                                </div>
                            </th>
                            <th class="py-4 px-5">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-4 h-2.5 border border-current inline-block"></span>
                                    <span>Rectangular (W &times; H)</span>
                                </div>
                            </th>
                            <th class="py-4 px-5">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                    <span>Paquete / Barras</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-800">
                        @foreach($product->cutting_capacities as $row)
                            <tr class="hover:bg-blue-50/50 transition-colors {{ $loop->odd ? 'bg-white' : 'bg-gray-50/50' }}">
                                <td class="py-4 px-5 font-bold text-gray-950 flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                    <span>{{ $row['angle'] }}</span>
                                </td>
                                <td class="py-4 px-5 font-mono font-semibold text-slate-900">{{ $row['round'] }}</td>
                                <td class="py-4 px-5 font-mono font-semibold text-slate-900">{{ $row['square'] }}</td>
                                <td class="py-4 px-5 font-mono font-bold text-blue-600">{{ $row['rect'] }}</td>
                                <td class="py-4 px-5 font-mono text-gray-600">{{ $row['bundle'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4 text-xs text-gray-600">
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-3">
                    <svg class="w-5 h-5 text-blue-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><strong>Inglete continuo:</strong> Giro angular con escala graduada grabada al milímetro y topes de parada mecánicos a 0°, 45° y 60°.</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-3">
                    <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><strong>Mordaza hidráulica:</strong> Sistema de traslación rápida con corredera de posicionamiento y válvula de control de presión para tubos.</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-3">
                    <svg class="w-5 h-5 text-blue-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    <span><strong>Tensado electrónico:</strong> Transductor dinamométrico con paro de seguridad automático en caso de pérdida de tensión o rotura.</span>
                </div>
            </div>
        </div>

        <!-- ═══ TAB 2: ESPECIFICACIONES TÉCNICAS COMPLETAS ═══ -->
        <div x-show="activeTab === 'parameters'" class="bg-white rounded-3xl border border-gray-200 p-8 sm:p-10 shadow-sm space-y-6" style="display: none;">
            <div class="border-b border-gray-100 pb-5">
                <span class="text-[11px] font-bold text-blue-600 uppercase tracking-widest block">Parámetros Mecánicos & Eléctricos</span>
                <h3 class="text-2xl font-bold font-display text-gray-950 mt-0.5">Ficha de Ingeniería Completa</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($product->technical_parameters as $label => $value)
                    <div class="p-4 bg-gray-50 rounded-2xl border border-gray-200/80 flex items-center justify-between">
                        <span class="text-xs font-bold text-gray-600 uppercase tracking-wider">{{ $label }}</span>
                        <span class="text-xs font-extrabold text-gray-950 font-mono text-right ml-4">{{ $value }}</span>
                    </div>
                @endforeach
            </div>

            <div class="p-5 bg-blue-50/80 border border-blue-200/80 rounded-2xl text-xs text-blue-900 flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    <div>
                        <span class="font-bold block">¿Precisa plano de implantación o diagrama eléctrico para su nave?</span>
                        <span class="text-blue-700">Facilitamos cotas de cimentación, potencia acometida y conexionado neumático.</span>
                    </div>
                </div>
                <button type="button" 
                        @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }}', ref: 'PLANO-TECNICO' })"
                        class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider transition-colors cursor-pointer shrink-0">
                    Solicitar Plano Técnico
                </button>
            </div>
        </div>

        <!-- ═══ TAB 3: VÍDEO DEMOSTRATIVO EN FUNCIONAMIENTO ═══ -->
        <div x-show="activeTab === 'video'" class="bg-white rounded-3xl border border-gray-200 p-8 sm:p-10 shadow-sm space-y-8" style="display: none;">
            <div class="border-b border-gray-100 pb-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <span class="text-[11px] font-bold text-rose-600 uppercase tracking-widest block flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-rose-600 animate-pulse"></span>
                        Demostración en Directo
                    </span>
                    <h3 class="text-2xl font-bold font-display text-gray-950 mt-0.5">{{ $product->video_data['title'] }}</h3>
                </div>
                <span class="px-3.5 py-1.5 rounded-full bg-slate-900 text-white text-xs font-bold uppercase tracking-wider shrink-0">
                    Vídeo Oficial MEP
                </span>
            </div>

            <!-- Video Player Stage -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <div class="relative w-full rounded-2xl overflow-hidden aspect-video bg-slate-950 shadow-2xl border border-slate-800">
                        <iframe class="w-full h-full" 
                                src="{{ $product->video_data['embed_url'] }}" 
                                title="{{ $product->name }} Video Demostrativo" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="lg:col-span-4 space-y-4">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Puntos Clave del Ciclo</span>
                        <ul class="space-y-3 text-xs text-slate-700">
                            <li class="flex items-start gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0 mt-1.5"></span>
                                <span><strong>Aproximación rápida:</strong> El cabezal desciende a velocidad rápida hasta 5 mm del material.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0 mt-1.5"></span>
                                <span><strong>Descenso regulado:</strong> Válvula proporcional que adapta el avance según la resistencia de la sección.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-600 shrink-0 mt-1.5"></span>
                                <span><strong>Retorno y apertura:</strong> Finalizado el corte, el arco retorna y la mordaza libera la pieza en &lt; 2s.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6 bg-slate-900 text-white rounded-2xl space-y-3">
                        <h4 class="text-sm font-bold font-display text-white">¿Desea probar esta máquina con su material?</h4>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            Organizamos una prueba de corte personalizada en nuestro showroom o mediante envío de muestra.
                        </p>
                        <button type="button" 
                                @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }}', ref: 'DEMO-VIDEO' })"
                                class="w-full py-3 px-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider transition-colors cursor-pointer text-center block">
                            Agendar Demostración
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ TAB 4: EQUIPAMIENTO DE SERIE & OPCIONES ═══ -->
        <div x-show="activeTab === 'equipment'" class="bg-white rounded-3xl border border-gray-200 p-8 sm:p-10 shadow-sm space-y-8" style="display: none;">
            <div class="border-b border-gray-100 pb-5">
                <span class="text-[11px] font-bold text-blue-600 uppercase tracking-widest block">Dotación de Fábrica & Accesorios</span>
                <h3 class="text-2xl font-bold font-display text-gray-950 mt-0.5">Equipamiento de Serie y Opciones Disponibles</h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Standard Equipment -->
                <div class="p-6 sm:p-8 bg-slate-50 rounded-2xl border border-slate-200 space-y-4">
                    <div class="flex items-center gap-2 text-slate-900 font-bold text-sm">
                        <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs font-bold">✓</span>
                        <span>Equipamiento de Serie Incluido</span>
                    </div>
                    <ul class="space-y-3 text-xs text-slate-700">
                        @foreach($product->equipment['standard'] as $std)
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span>{{ $std }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Optional Accessories -->
                <div class="p-6 sm:p-8 bg-white rounded-2xl border border-slate-200 shadow-2xs space-y-4">
                    <div class="flex items-center gap-2 text-slate-900 font-bold text-sm">
                        <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-800 flex items-center justify-center text-xs font-bold">+</span>
                        <span>Accesorios Opcionales & Periféricos</span>
                    </div>
                    <div class="space-y-3">
                        @foreach($product->equipment['optional'] as $opt)
                            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                                <span class="font-bold text-xs text-slate-900 block">{{ $opt['name'] }}</span>
                                <span class="text-[11px] text-slate-500 leading-snug block mt-0.5">{{ $opt['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ TAB 5: SIMULADOR DE RENTING B2B PARA ESTA MÁQUINA ═══ -->
        <div x-show="activeTab === 'renting'" class="bg-white rounded-3xl border border-gray-200 p-8 sm:p-10 shadow-sm space-y-8" style="display: none;"
             x-data="{ term: 48 }">
            <div class="border-b border-gray-100 pb-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <span class="text-[11px] font-bold text-emerald-600 uppercase tracking-widest block">Financiación Industrial</span>
                    <h3 class="text-2xl font-bold font-display text-gray-950 mt-0.5">Plan de Renting para {{ $product->name }}</h3>
                </div>
                <span class="px-3.5 py-1.5 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold">
                    Cero Entrada & Cuotas 100% Deducibles
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Term Selection & Fee Display -->
                <div class="lg:col-span-7 bg-slate-50 p-6 sm:p-8 rounded-2xl border border-slate-200 space-y-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-3">Seleccione el Plazo Deseado</label>
                        <div class="grid grid-cols-3 gap-3">
                            <button type="button" @click="term = 36" class="p-3.5 rounded-xl border text-center transition-all cursor-pointer" :class="term === 36 ? 'bg-blue-600 text-white font-bold shadow-md shadow-blue-600/20 border-blue-500' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'">
                                <span class="text-xs block font-bold">36 Meses</span>
                                <span class="text-[10px] opacity-75">3 años</span>
                            </button>
                            <button type="button" @click="term = 48" class="p-3.5 rounded-xl border text-center transition-all cursor-pointer" :class="term === 48 ? 'bg-blue-600 text-white font-bold shadow-md shadow-blue-600/20 border-blue-500' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'">
                                <span class="text-xs block font-bold">48 Meses</span>
                                <span class="text-[10px] opacity-75">Recomendado</span>
                            </button>
                            <button type="button" @click="term = 60" class="p-3.5 rounded-xl border text-center transition-all cursor-pointer" :class="term === 60 ? 'bg-blue-600 text-white font-bold shadow-md shadow-blue-600/20 border-blue-500' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'">
                                <span class="text-xs block font-bold">60 Meses</span>
                                <span class="text-[10px] opacity-75">5 años</span>
                            </button>
                        </div>
                    </div>

                    <!-- Computed Fee Output -->
                    <div class="p-6 bg-white rounded-xl border border-slate-200 flex items-center justify-between">
                        <div>
                            <span class="text-[11px] font-bold uppercase text-slate-400 block tracking-wider">Cuota Mensual Estimada</span>
                            <div class="flex items-baseline gap-2 mt-1">
                                <span class="text-3xl sm:text-4xl font-extrabold font-display text-slate-900" 
                                      x-text="(term === 36 ? '{{ $product->renting_data['fee_36'] }}' : (term === 48 ? '{{ $product->renting_data['fee_48'] }}' : '{{ $product->renting_data['fee_60'] }}')) + ' €/mes'"></span>
                                <span class="text-xs text-slate-500">+ IVA</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-[11px] text-slate-400 block">Equivalente diario:</span>
                            <span class="text-lg font-bold text-emerald-600" 
                                  x-text="'~' + (term === 36 ? Math.round({{ $product->renting_data['fee_36'] }} / 22) : (term === 48 ? Math.round({{ $product->renting_data['fee_48'] }} / 22) : Math.round({{ $product->renting_data['fee_60'] }} / 22))) + ' €/día'"></span>
                        </div>
                    </div>

                    <button type="button" 
                            @click="$dispatch('open-quote-modal', { product: '{{ addslashes($product->name) }} (Renting ' + term + ' meses)', ref: 'RENTING-' + term + 'M' })"
                            class="w-full py-4 px-6 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-lg shadow-blue-600/20 transition-all cursor-pointer">
                        <span>Solicitar Estudio de Renting para este Modelo</span>
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>

                <!-- 4 Highlights -->
                <div class="lg:col-span-5 space-y-3 text-xs text-slate-600">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <strong class="text-slate-900 block text-xs">100% Gasto Deducible (OPEX)</strong>
                        <span>La cuota íntegra se desgrava fiscalmente en el Impuesto sobre Sociedades.</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <strong class="text-slate-900 block text-xs">Sin afectación CIRBE</strong>
                        <span>No computa como deuda bancaria, manteniendo libres sus líneas de crédito operativas.</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <strong class="text-slate-900 block text-xs">Seguro a Todo Riesgo Incluido</strong>
                        <span>Cobertura contra averías internas, siniestros y contingencias durante todo el contrato.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ TAB 6: DESCRIPCIÓN & VENTAJAS ═══ -->
        <div x-show="activeTab === 'description'" class="bg-white rounded-3xl border border-gray-200 p-8 sm:p-10 shadow-sm space-y-8" style="display: none;">
            <div class="border-b border-gray-100 pb-5">
                <span class="text-[11px] font-bold text-blue-600 uppercase tracking-widest block">Información del Fabricante</span>
                <h3 class="text-2xl font-bold font-display text-gray-950 mt-0.5">Descripción Técnica del Modelo</h3>
            </div>

            <div class="prose max-w-none text-sm text-gray-700 leading-relaxed space-y-4">
                <p>{{ $product->description }}</p>
            </div>

            @if(!empty($product->features) && is_array($product->features))
                <div class="pt-6 border-t border-gray-100">
                    <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-4">Ventajas Operativas Destacadas</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach($product->features as $feature)
                            <div class="flex items-start gap-2.5 text-xs text-gray-700 bg-gray-50 p-3.5 rounded-xl border border-gray-100">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span>{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(!empty($product->applications) && is_array($product->applications))
                <div class="pt-6 border-t border-gray-100">
                    <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-4">Sectores y Materiales Recomendados</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($product->applications as $app)
                            <span class="px-3.5 py-2 bg-blue-50 text-blue-900 text-xs font-semibold rounded-xl border border-blue-100">
                                {{ $app }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <!-- Fast Direct Inquiry Form Box -->
        <div class="bg-gray-900 text-white rounded-2xl p-8 border border-gray-800">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-400">Atención Técnica Personalizada</span>
                    <h3 class="text-2xl font-bold font-display text-white">Solicitar Oferta Formal para {{ $product->name }}</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">
                        Indíquenos si precisa accesorios como caminos de rodillos motorizados, evacuadores de viruta, micrometros digitales o suministro regular de hojas de cinta. Le enviaremos una propuesta desglosada y plazo de entrega exacto.
                    </p>
                </div>
                <div class="lg:col-span-7">
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-3">
                        @csrf
                        <input type="hidden" name="type" value="presupuesto">
                        <input type="hidden" name="product_ref" value="{{ $product->name }} ({{ $product->model_ref ?? $product->brand }})">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="text" name="name" required placeholder="Nombre *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                            <input type="text" name="company" required placeholder="Empresa / Razón Social *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="email" name="email" required placeholder="Email corporativo *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                            <input type="tel" name="phone" required placeholder="Teléfono de contacto *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                        </div>

                        <textarea name="message" rows="2" required placeholder="Detalles de su corte: dimensiones, espesor de pared, aleación, volumen previsto..." class="w-full px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none"></textarea>

                        <div class="flex items-center justify-between pt-1 flex-wrap gap-2">
                            <label class="flex items-center gap-2 text-[11px] text-gray-400">
                                <input type="checkbox" name="privacy_accepted" required class="rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                                <span>Acepto la <a href="{{ route('legal.privacidad') }}" class="underline text-blue-400">política de privacidad</a></span>
                            </label>

                            <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider rounded-lg transition-colors cursor-pointer">
                                Enviar Consulta Rápida
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Related Machines -->
        @if($related->count() > 0)
            <div class="pt-8">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold font-display text-gray-950">Otros Modelos en {{ $category->name }}</h2>
                    <a href="{{ route('catalog.category', $category) }}" class="text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700">Ver gama completa →</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($related as $rel)
                        @include('partials.product-card', ['product' => $rel, 'showCategory' => false])
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
