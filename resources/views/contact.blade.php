@extends('layouts.app')

@section('title', 'Contacto y Asesoramiento Técnico | Cutting European')
@section('meta_description', 'Contacte con el equipo técnico y comercial de Cutting European. Showroom y oficinas en Granollers (Barcelona). Teléfono +34 93 849 84 56 y asistencia técnica.')

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        'Contacto' => route('contact')
    ]
])

<!-- Header -->
<section class="bg-gray-950 text-white py-14 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-3">
            <span class="inline-block px-3 py-1 bg-blue-900/50 border border-blue-500/30 text-blue-300 text-xs font-bold uppercase tracking-wider rounded">
                Atención Directa
            </span>
            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white leading-tight">
                Contacto Técnico y Comercial
            </h1>
            <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                Estamos a su disposición para resolver cualquier duda sobre capacidades de corte, compatibilidad de materiales, ofertas formales, recambios o asistencia SAT in situ.
            </p>
        </div>
    </div>
</section>

<!-- Content Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left: Contact Details & Direct Channels -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-xs space-y-6">
                    <h3 class="text-xl font-bold font-display text-gray-950">Oficinas Centrales & Showroom</h3>
                    
                    <div class="space-y-4 text-sm text-gray-700">
                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 border border-blue-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-bold">Dirección:</strong>
                                <span>Polígono Industrial Palou Nord<br>08401 Granollers (Barcelona), España</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 border border-blue-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-bold">Teléfono Central:</strong>
                                <a href="tel:+34938498456" class="text-blue-600 font-bold hover:underline">+34 93 849 84 56</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 border border-blue-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-bold">Email Comercial:</strong>
                                <a href="mailto:info@cuttingeuropean.com" class="text-blue-600 font-semibold hover:underline">info@cuttingeuropean.com</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 border border-blue-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-bold">Horario de Atención:</strong>
                                <span>Lunes a Viernes: 08:00 - 18:00 (Ininterrumpido)</span>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp CTA -->
                    <div class="pt-4 border-t border-gray-100">
                        <a href="https://wa.me/34938498456?text={{ urlencode('Hola, deseo realizar una consulta comercial.') }}" target="_blank" class="w-full py-3 px-4 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-colors flex items-center justify-center gap-2">
                            <span>Contactar por WhatsApp Directo</span>
                        </a>
                    </div>
                </div>

                <!-- Showroom Visit Card -->
                <div class="bg-gray-900 text-white rounded-2xl p-6 border border-gray-800 space-y-3">
                    <span class="text-xs uppercase font-bold text-blue-400 tracking-wider">Demostraciones en Vivo</span>
                    <h4 class="text-base font-bold text-white">¿Desea probar una máquina antes de comprar?</h4>
                    <p class="text-xs text-gray-400 leading-relaxed">
                        Envíenos una muestra de su perfil o barra metálica y realizaremos pruebas de corte en nuestro showroom con cronometraje de tiempos de ciclo y verificación de rebaba.
                    </p>
                </div>
            </div>

            <!-- Right: Interactive Contact Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-xs">
                    <h3 class="text-xl font-bold font-display text-gray-950 mb-2">Formulario de Contacto y Solicitud</h3>
                    <p class="text-xs text-gray-600 mb-6">Seleccione el motivo de su consulta para dirigirla inmediatamente al departamento correspondiente.</p>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Tipo de Solicitud *</label>
                            <select name="type" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                                <option value="general">Información General / Asesoramiento</option>
                                <option value="presupuesto">Solicitud de Presupuesto para Maquinaria</option>
                                <option value="tecnico">Servicio Técnico Oficial (SAT) / Avería / Recambios</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Nombre Completo *</label>
                                <input type="text" name="name" value="{{ old('name') }}" required placeholder="Su nombre" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                                @error('name')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Empresa / Razón Social</label>
                                <input type="text" name="company" value="{{ old('company') }}" placeholder="Nombre de su empresa" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Email Profesional *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required placeholder="nombre@empresa.com" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                                @error('email')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Teléfono Directo</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+34 600 000 000" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Máquina o Referencia de Interés (Opcional)</label>
                            <input type="text" name="product_ref" value="{{ old('product_ref') }}" placeholder="Ej: SHARK 281 NC-50, tronzadora de disco, repuesto..." class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Mensaje o Requerimientos de Corte *</label>
                            <textarea name="message" rows="5" required placeholder="Explique las necesidades de su taller, materiales a cortar, dimensiones, cadencia..." class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">{{ old('message') }}</textarea>
                            @error('message')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div class="flex items-start gap-2 pt-1">
                            <input type="checkbox" name="privacy_accepted" id="contact_privacy" required class="mt-1 h-4 w-4 text-blue-600 rounded border-gray-300">
                            <label for="contact_privacy" class="text-xs text-gray-600">
                                He leído y acepto la <a href="{{ route('legal.privacidad') }}" class="underline text-blue-600 hover:text-blue-700">política de privacidad</a> para el tratamiento de mis datos de contacto comercial.
                            </label>
                        </div>
                        @error('privacy_accepted')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror

                        <div class="pt-4">
                            <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition-colors cursor-pointer">
                                Enviar Consulta al Equipo Técnico
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
