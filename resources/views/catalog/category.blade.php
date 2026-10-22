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
<section class="bg-slate-950 text-white py-16 sm:py-20 border-b border-slate-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-3xl space-y-4">
            @if($category->parent)
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-blue-400">
                    {{ $category->parent->name }}
                </span>
            @endif
            <h1 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight text-white leading-tight">
                {{ $category->name }}
            </h1>
            @if($category->description)
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-2xl">
                    {{ $category->description }}
                </p>
            @endif
        </div>
    </div>
</section>

<!-- Product Listing Section -->
<section class="py-16 sm:py-24 bg-slate-50" x-data="{ brandFilter: 'all' }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <!-- Filter Bar -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between pb-6 mb-10 border-b border-slate-200 gap-4">
            <span class="text-xs font-bold text-slate-700 uppercase tracking-wider">
                Total Modelos: {{ $category->products->count() }}
            </span>
            <div class="flex items-center gap-2">
                <span class="text-xs text-slate-500 font-medium">Filtrar por fabricante:</span>
                <button type="button" @click="brandFilter = 'all'" :class="brandFilter === 'all' ? 'bg-blue-600 text-white' : 'bg-white text-slate-700 border-slate-200'" class="px-4 py-1.5 rounded-lg text-xs font-bold border transition-colors cursor-pointer">
                    Todos
                </button>
                <button type="button" @click="brandFilter = 'MEP'" :class="brandFilter === 'MEP' ? 'bg-blue-600 text-white' : 'bg-white text-slate-700 border-slate-200'" class="px-4 py-1.5 rounded-lg text-xs font-bold border transition-colors cursor-pointer">
                    MEP Italia
                </button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($category->products as $product)
                <div x-show="brandFilter === 'all' || '{{ $product->brand }}' === brandFilter">
                    @include('partials.product-card', ['product' => $product, 'showCategory' => false])
                </div>
            @empty
                <div class="col-span-3 text-center py-16 bg-white rounded-2xl border border-slate-200 p-8 space-y-3">
                    <p class="text-slate-500 text-sm">No hay productos listados actualmente en esta sección.</p>
                    <button type="button" @click="$dispatch('open-quote-modal', { product: '{{ $category->name }}' })" class="px-6 py-2.5 bg-blue-600 text-white rounded-xl text-xs font-bold cursor-pointer hover:bg-blue-500 transition-colors">
                        Consultar Disponibilidad de Fábrica
                    </button>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Direct Technical Assistance Strip -->
<section class="py-16 bg-white border-t border-slate-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="bg-blue-50/80 border border-blue-200/80 rounded-2xl p-8 sm:p-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="space-y-1.5 max-w-2xl">
                <h3 class="text-lg font-bold text-slate-900">¿No encuentra las dimensiones o capacidad exacta para su taller?</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Personalizamos líneas de corte completas: suministramos caminos de rodillos motorizados, topes de medición digitales y mordazas especiales para cortes de paquete.
                </p>
            </div>
            <button type="button" @click="$dispatch('open-quote-modal', { product: '{{ $category->name }}' })" class="px-7 py-3.5 bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-sm transition-colors shrink-0 cursor-pointer">
                Solicitar Asesoría a Medida
            </button>
        </div>
    </div>
</section>
@endsection
