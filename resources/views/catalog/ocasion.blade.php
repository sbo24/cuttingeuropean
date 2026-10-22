@extends('layouts.app')

@section('title', 'Maquinaria de Ocasión y Segunda Mano | Sierras de Cinta y Disco Revisadas | Cutting European')
@section('meta_description', 'Amplio stock de sierras de cinta y disco de segunda mano y ocasión revisadas en taller propio. Garantía de funcionamiento y puesta en marcha.')

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        'Maquinaria de Ocasión' => route('catalog.ocasion')
    ]
])

<!-- Header -->
<section class="bg-gray-950 text-white py-14 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block px-3 py-1 bg-amber-500/20 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider rounded">
                Stock Verificado y Garantizado
            </span>
            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white">
                Maquinaria de Ocasión y Segunda Mano
            </h1>
            <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                Oportunidades de ocasión para talleres y fábricas que buscan maquinaria industrial robusta con entrega inmediata y ahorro frente a equipo nuevo, con la total tranquilidad de una revisión completa en nuestros propios talleres.
            </p>
        </div>
    </div>
</section>

<!-- Trust Verification Bar -->
<section class="py-8 bg-amber-50 border-b border-amber-200">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-xs text-amber-950">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold shrink-0">✓</div>
                <div>
                    <strong class="block font-bold">Protocolo de 30 Puntos</strong>
                    <span class="text-amber-800">Revisión mecánica, eléctrica e hidráulica</span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold shrink-0">✓</div>
                <div>
                    <strong class="block font-bold">Prueba Real de Corte</strong>
                    <span class="text-amber-800">Comprobación de tolerancias y escuadrado</span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold shrink-0">✓</div>
                <div>
                    <strong class="block font-bold">Garantía de Taller Propio</strong>
                    <span class="text-amber-800">Soporte directo y recambios garantizados</span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold shrink-0">✓</div>
                <div>
                    <strong class="block font-bold">Plan Renove Aceptado</strong>
                    <span class="text-amber-800">Aceptamos su máquina usada como parte de pago</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Machinery Stock Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="flex flex-col sm:flex-row items-center justify-between pb-6 mb-8 border-b border-gray-200 gap-4">
            <div>
                <h2 class="text-xl sm:text-2xl font-bold font-display text-gray-950">
                    Máquinas Disponibles en Instalaciones
                </h2>
                <p class="text-xs text-gray-500 mt-1">El stock de ocasión varía semanalmente. Si busca un modelo específico, consúltenos.</p>
            </div>
            <button type="button" @click="$dispatch('open-quote-modal', { product: 'Consulta Maquinaria de Ocasión' })" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg shadow-sm transition-colors cursor-pointer">
                Consultar Máquinas en Proceso de Revisión
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($products as $product)
                @include('partials.product-card', ['product' => $product])
            @empty
                <div class="col-span-3 text-center py-16 bg-white rounded-2xl border border-gray-200 p-8 space-y-4">
                    <p class="text-gray-700 font-semibold text-base">Actualmente todas las máquinas de ocasión están en fase de revisión o reservadas.</p>
                    <p class="text-xs text-gray-500 max-w-md mx-auto">Contáctenos indicando el tipo de sierra que busca y le avisaremos en cuanto entre una unidad en taller antes de ser publicada.</p>
                    <button type="button" @click="$dispatch('open-quote-modal', { product: 'Aviso de Entrada Maquinaria Ocasión' })" class="px-6 py-3 bg-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-md">
                        Darme de alta en alertas de ocasión
                    </button>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Plan Renove Teaser -->
<section class="py-14 bg-gray-900 text-white border-t border-gray-800">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400">¿Desea renovar su maquinaria actual?</span>
                <h3 class="text-2xl sm:text-3xl font-display font-black text-white">Plan Renove: Tasamos su máquina de corte usada</h3>
                <p class="text-xs sm:text-sm text-gray-300 leading-relaxed max-w-2xl">
                    No deje que su maquinaria obsoleta pierda valor. En Cutting European tasamos su sierra de cinta o disco actual y deducimos su importe del precio de compra de una máquina nueva o seminueva.
                </p>
            </div>
            <div class="lg:col-span-4 flex justify-start lg:justify-end">
                <a href="{{ route('plan-renove') }}" class="px-8 py-3.5 bg-amber-500 hover:bg-amber-400 text-gray-950 font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg transition-colors">
                    Solicitar Tasación de mi Máquina
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
