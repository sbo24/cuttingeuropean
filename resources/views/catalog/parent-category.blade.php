@extends('layouts.app')

@section('title', $category->meta_title ?: "{$category->name} Industriales | Cutting European")
@section('meta_description', $category->meta_description ?: "Descubra nuestra gama de {$category->name} para corte industrial de metal. Distribuidor oficial MEP, asistencia técnica y asesoramiento.")

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        $category->name => route(request()->route()->getName())
    ]
])

<!-- Category Header -->
<section class="bg-gray-950 text-white py-14 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block px-3 py-1 bg-blue-900/50 border border-blue-500/30 text-blue-300 text-xs font-bold uppercase tracking-wider rounded">
                Catálogo Industrial
            </span>
            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white">
                {{ $category->name }}
            </h1>
            <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                {{ $category->description }}
            </p>
        </div>

        <!-- Subcategories Quick Bar -->
        @if($category->children->count() > 0)
            <div class="mt-8 pt-6 border-t border-gray-800">
                <span class="text-xs uppercase font-bold tracking-wider text-gray-400 block mb-3">Subcategorías disponibles:</span>
                <div class="flex flex-wrap gap-2">
                    @foreach($category->children as $child)
                        <a href="{{ route('legacy.' . $child->slug) }}" 
                           class="px-3.5 py-1.5 rounded-lg bg-gray-900 hover:bg-blue-600 hover:text-white text-gray-300 text-xs font-semibold border border-gray-800 transition-colors">
                            {{ $child->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Subcategories with Machines Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto space-y-16">
        @php
            $hasAnyProducts = false;
        @endphp

        @foreach($category->children as $child)
            @if($child->products->count() > 0)
                @php $hasAnyProducts = true; @endphp
                <div class="bg-white rounded-2xl border border-gray-200 p-6 md:p-8 shadow-xs">
                    <div class="flex flex-col md:flex-row md:items-center justify-between pb-6 mb-6 border-b border-gray-200 gap-4">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-bold font-display text-gray-950">
                                {{ $child->name }}
                            </h2>
                            @if($child->description)
                                <p class="text-xs sm:text-sm text-gray-600 mt-1 max-w-2xl">
                                    {{ $child->description }}
                                </p>
                            @endif
                        </div>
                        <a href="{{ route('legacy.' . $child->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700 shrink-0">
                            <span>Ver todos los modelos ({{ $child->products->count() }})</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($child->products as $product)
                            @include('partials.product-card', ['product' => $product, 'showCategory' => false])
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach

        @if(!$hasAnyProducts)
            <!-- If no children had products, check direct products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($category->products as $product)
                    @include('partials.product-card', ['product' => $product])
                @empty
                    <div class="col-span-3 text-center py-16 bg-white rounded-2xl border border-gray-200 p-8">
                        <p class="text-gray-500 text-sm">Disponemos de modelos adicionales bajo pedido o consulta personalizada.</p>
                        <button type="button" @click="$dispatch('open-quote-modal')" class="mt-4 px-6 py-2.5 bg-blue-600 text-white rounded-lg text-xs font-bold">
                            Consultar Modelos Específicos
                        </button>
                    </div>
                @endforelse
            </div>
        @endif
    </div>
</section>

<!-- Industrial Consultation CTA -->
<section class="py-14 bg-gray-900 text-white">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <h3 class="text-2xl font-bold font-display text-white">¿Dudas sobre qué modelo se adapta a su cadencia de corte?</h3>
            <p class="text-sm text-gray-400 mt-1">Facilítenos las secciones de sus piezas y le calculamos el tiempo de ciclo estimado.</p>
        </div>
        <div class="flex items-center gap-3">
            <button type="button" @click="$dispatch('open-quote-modal', { product: '{{ $category->name }}' })" class="px-6 py-3 bg-blue-600 hover:bg-blue-500 font-bold text-xs uppercase tracking-wider rounded-xl transition-colors cursor-pointer">
                Pedir Estudio Técnico Gratuito
            </button>
        </div>
    </div>
</section>
@endsection
