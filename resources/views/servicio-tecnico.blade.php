@extends('layouts.app')

@section('title', 'Servicio Técnico Oficial SAT | Reparación de Sierras de Cinta y Disco | Cutting European')
@section('meta_description', 'Servicio técnico especializado SAT para sierras de cinta y disco. Distribuidor oficial MEP en España. Mantenimiento preventivo, reparación urgente y recambios originales.')

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        'Servicio Técnico Oficial' => route('servicio-tecnico')
    ]
])

<!-- Header -->
<section class="bg-gray-950 text-white py-16 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block px-3 py-1 bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-wider rounded">
                Soporte Técnico Directo
            </span>
            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white leading-tight">
                Servicio Técnico Especializado (SAT) & Recambios Originales
            </h1>
            <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                Evite costosas paradas de producción. Ponemos a su disposición técnicos especialistas en sierras de cinta y disco para asistencia in situ, diagnóstico de averías, revisiones preventivas y suministro inmediato de recambios oficiales MEP.
            </p>
        </div>
    </div>
</section>

<!-- Direct Hotline Strip -->
<section class="py-6 bg-blue-600 text-white">
    <div class="container mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center font-bold">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <div>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Línea de Asistencia Técnica Inmediata</h3>
                <p class="text-xs text-blue-100">Atención directa con técnicos especialistas de lunes a viernes</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <a href="tel:+34938498456" class="px-5 py-2.5 rounded-lg bg-white text-blue-700 font-bold text-xs uppercase tracking-wider hover:bg-blue-50 transition-colors shadow-sm">
                Llamar SAT: +34 93 849 84 56
            </a>
            <a href="https://wa.me/34938498456?text={{ urlencode('Hola, necesito asistencia técnica urgente para una máquina de corte.') }}" target="_blank" class="px-4 py-2.5 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-white font-bold text-xs uppercase tracking-wider transition-colors shadow-sm">
                WhatsApp SAT
            </a>
        </div>
    </div>
</section>

<!-- SAT Services Detailed Grid -->
<section class="py-16 bg-white border-b border-gray-200">
    <div class="container mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-1">Capacidades SAT</span>
            <h2 class="text-3xl font-display font-black text-gray-950">Cobertura Técnica Integral para su Taller</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- 1. Reparación In Situ & Taller -->
            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 space-y-4">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Reparación Mecánica y Eléctrica</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Solucionamos averías en grupos reductores, sistemas electrohidráulicos de descenso de arco, sustitución de rodamientos de volantes y reprogramación de autómatas y controles NC/CNC.
                </p>
            </div>

            <!-- 2. Mantenimiento Preventivo -->
            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 space-y-4">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Mantenimiento Preventivo Planificado</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Contratos de mantenimiento periódico: verificación de la tensión hidráulica de la hoja, comprobación de desgaste en guías de widia, alineación de mordazas y limpieza de circuitos de refrigeración.
                </p>
            </div>

            <!-- 3. Recambios Originales MEP -->
            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 space-y-4">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Recambios Originales & Consumibles</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Suministro de piezas 100% originales de fábrica para máquinas MEP y otras marcas de corte. Bombas de taladrina, cilindros hidráulicos, reductores, correas y hojas de sierra bimetálicas soldadas a medida.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SAT Ticket / Request Form -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto max-w-4xl">
        <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold font-display text-gray-950">Solicitar Intervención Técnica o Recambios</h2>
                <p class="text-xs text-gray-600 mt-1">Cumplimente este formulario para abrir un parte de asistencia técnica prioritaria.</p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="type" value="tecnico">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Nombre de Contacto *</label>
                        <input type="text" name="name" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Empresa / Razón Social *</label>
                        <input type="text" name="company" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Email *</label>
                        <input type="email" name="email" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Teléfono Directo *</label>
                        <input type="tel" name="phone" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Marca y Modelo de la Máquina *</label>
                        <input type="text" name="product_ref" required placeholder="Ej: MEP SHARK 281, FMB, etc." class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Tipo de Solicitud *</label>
                        <select name="subject" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500">
                            <option value="Avería urgente / Parada de máquina">Avería urgente / Parada de máquina</option>
                            <option value="Petición de recambios originales">Petición de recambios originales</option>
                            <option value="Mantenimiento preventivo / Puesta a punto">Mantenimiento preventivo / Puesta a punto</option>
                            <option value="Calibración y alineación de corte">Calibración y alineación de corte</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Descripción de la Avería o Referencias de Piezas Solicitadas *</label>
                    <textarea name="message" rows="4" required placeholder="Indique síntomas de la avería, ruidos, códigos de error en pantalla o números de referencia de las piezas si dispone del manual de despiece..." class="w-full px-3 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="flex items-center gap-2 pt-2">
                    <input type="checkbox" name="privacy_accepted" id="sat_privacy" required class="h-4 w-4 text-blue-600 rounded border-gray-300">
                    <label for="sat_privacy" class="text-xs text-gray-600">
                        Acepto la <a href="{{ route('legal.privacidad') }}" class="underline text-blue-600">política de privacidad</a> para la gestión de este parte de asistencia técnica.
                    </label>
                </div>

                <div class="pt-4 text-center">
                    <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition-colors cursor-pointer">
                        Enviar Solicitud al Servicio Técnico
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
