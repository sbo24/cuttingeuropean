@extends('layouts.app')

@section('title', 'Plan Renove Maquinaria de Corte de Metal | Tasación de su Antigua Máquina | Cutting European')
@section('meta_description', 'Actualice el parque de maquinaria de su taller con el Plan Renove de Cutting European. Tasamos su sierra de cinta o disco usada y descontamos su valor de su nueva máquina.')

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        'Plan Renove' => route('plan-renove')
    ]
])

<!-- Hero Header -->
<section class="bg-gray-950 text-white py-16 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block px-3 py-1 bg-amber-500/20 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider rounded">
                Plan Renove Industrial
            </span>
            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white leading-tight">
                Modernice su Taller con el Plan Renove de Maquinaria
            </h1>
            <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                Entregue su sierra de cinta o tronzadora antigua de cualquier marca y descuente su valoración directamente en la compra de su nueva máquina de corte de alta eficiencia.
            </p>
        </div>
    </div>
</section>

<!-- 3 Steps Grid -->
<section class="py-16 bg-white border-b border-gray-200">
    <div class="container mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block mb-1">Proceso Ágil</span>
            <h2 class="text-3xl font-display font-black text-gray-950">Cómo Funciona el Plan Renove</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 text-center space-y-4">
                <div class="w-14 h-14 bg-amber-500 text-white rounded-2xl flex items-center justify-center font-black text-xl mx-auto shadow-md">
                    1
                </div>
                <h3 class="text-lg font-bold text-gray-900">Solicite Tasación</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Indíquenos la marca, modelo y estado operativo de su máquina usada a través de nuestro formulario o enviándonos fotos por WhatsApp.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 text-center space-y-4">
                <div class="w-14 h-14 bg-amber-500 text-white rounded-2xl flex items-center justify-center font-black text-xl mx-auto shadow-md">
                    2
                </div>
                <h3 class="text-lg font-bold text-gray-900">Valoración Justa Garantizada</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Nuestros peritos técnicos valoran la máquina en base al mercado industrial real y le emitimos una oferta formal con descuento directo sobre la máquina nueva.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 text-center space-y-4">
                <div class="w-14 h-14 bg-amber-500 text-white rounded-2xl flex items-center justify-center font-black text-xl mx-auto shadow-md">
                    3
                </div>
                <h3 class="text-lg font-bold text-gray-900">Entrega y Retirada Simultánea</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Coordinamos el transporte para que la retirada de la máquina vieja y la descarga de la nueva se realicen sin interrumpir el ritmo de trabajo de su taller.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Valuation Request Form -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto max-w-4xl">
        <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold font-display text-gray-950">Solicitar Tasación para Plan Renove</h2>
                <p class="text-xs text-gray-600 mt-1">Recibirá nuestra propuesta económica en menos de 24 horas.</p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="type" value="presupuesto">
                <input type="hidden" name="subject" value="Solicitud Plan Renove Maquinaria">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Nombre de Contacto *</label>
                        <input type="text" name="name" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Empresa / Razón Social *</label>
                        <input type="text" name="company" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Email Profesional *</label>
                        <input type="email" name="email" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Teléfono Directo *</label>
                        <input type="tel" name="phone" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Máquina Actual a Entregar (Marca / Modelo / Año) *</label>
                        <input type="text" name="product_ref" required placeholder="Ej: FAT 280, año 2008, operativa" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Tipo de Máquina Nueva que Desea Adquirir *</label>
                        <input type="text" name="company_interest" placeholder="Ej: Sierra de cinta automática MEP Shark 281" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Detalles del Estado de la Máquina y Observaciones *</label>
                    <textarea name="message" rows="3" required placeholder="Indique si funciona actualmente, si tiene holguras, fugas de refrigerante o si incluye accesorios como caminos de rodillos..." class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-amber-500"></textarea>
                </div>

                <div class="flex items-center gap-2 pt-2">
                    <input type="checkbox" name="privacy_accepted" id="renove_privacy" required class="h-4 w-4 text-amber-600 rounded border-gray-300">
                    <label for="renove_privacy" class="text-xs text-gray-600">
                        Acepto la <a href="{{ route('legal.privacidad') }}" class="underline text-amber-700">política de privacidad</a> para la valoración de mi maquinaria.
                    </label>
                </div>

                <div class="pt-4 text-center">
                    <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-amber-500 hover:bg-amber-400 text-gray-950 font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition-colors cursor-pointer">
                        Enviar Datos para Tasación Gratuita
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
