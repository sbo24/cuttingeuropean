@extends('layouts.app')

@section('title', $category->meta_title ?: "{$category->name} | Catálogo Cutting European")
@section('meta_description', $category->meta_description ?: "Consulte las especificaciones, capacidades de corte y opciones técnicas de {$category->name}. Solicite presupuesto inmediato.")

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
    $breadcrumbItems[$category->name] = '';
@endphp

@include('partials.breadcrumbs', ['items' => $breadcrumbItems])

<!-- Category Header -->
<section class="bg-gray-950 text-white py-12 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-3">
            @if($category->parent)
                <span class="inline-block text-xs font-bold uppercase tracking-wider text-blue-400">
                    {{ $category->parent->name }}
                </span>
            @endif
            <h1 class="text-3xl sm:text-4xl font-display font-black tracking-tight text-white">
                {{ $category->name }}
            </h1>
            @if($category->description)
                <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                    {{ $category->description }}
                </p>
            @endif
        </div>
    </div>
</section>

<!-- Product Listing Section -->
<section class="py-14 bg-gray-50" x-data="{ brandFilter: 'all' }">
    <div class="container mx-auto">
        <!-- Filter Bar -->
        <div class="flex flex-col sm:flex-row items-center justify-between pb-6 mb-8 border-b border-gray-200 gap-4">
            <span class="text-xs font-bold text-gray-700 uppercase tracking-wider">
                Total Modelos: {{ $category->products->count() }}
            </span>
            <div class="flex items-center gap-2">
                <span class="text-xs text-gray-500 font-medium">Filtrar por fabricante:</span>
                <button type="button" @click="brandFilter = 'all'" :class="brandFilter === 'all' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 border-gray-200'" class="px-3 py-1 rounded text-xs font-bold border transition-colors cursor-pointer">
                    Todos
                </button>
                <button type="button" @click="brandFilter = 'MEP'" :class="brandFilter === 'MEP' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 border-gray-200'" class="px-3 py-1 rounded text-xs font-bold border transition-colors cursor-pointer">
                    MEP
                </button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($category->products as $product)
                <div x-show="brandFilter === 'all' || '{{ $product->brand }}' === brandFilter">
                    @include('partials.product-card', ['product' => $product, 'showCategory' => false])
                </div>
            @empty
                <div class="col-span-3 text-center py-16 bg-white rounded-2xl border border-gray-200 p-8">
                    <p class="text-gray-500 text-sm">No hay productos listados actualmente en esta sección.</p>
                    <button type="button" @click="$dispatch('open-quote-modal', { product: '{{ $category->name }}' })" class="mt-4 px-6 py-2.5 bg-blue-600 text-white rounded-lg text-xs font-bold">
                        Consultar Disponibilidad de Fábrica
                    </button>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Direct Technical Assistance Strip -->
<section class="py-12 bg-white border-t border-gray-200">
    <div class="container mx-auto">
        <div class="bg-blue-50 border border-blue-200 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-1">
                <h3 class="text-lg font-bold text-blue-950">¿No encuentra las dimensiones exactas para su material?</h3>
                <p class="text-xs sm:text-sm text-blue-800">
                    Suministramos mesas de rodillos de entrada/salida, topes de medición digitales y mordazas especiales para cortes en paquete.
                </p>
            </div>
            <button type="button" @click="$dispatch('open-quote-modal', { product: '{{ $category->name }}' })" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-md transition-colors shrink-0 cursor-pointer">
                Solicitar Asesoría a Medida
            </button>
        </div>
    </div>
</section>
@endsection
