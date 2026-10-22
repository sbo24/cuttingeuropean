@extends('layouts.app')

@section('title', 'Sobre Nosotros | Especialistas en Maquinaria de Corte Industrial | Cutting European')
@section('meta_description', 'Conozca la trayectoria de Cutting European: más de 30 años de experiencia en ingeniería de corte de metales, distribución oficial MEP y servicio técnico integral.')

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        'Sobre Nosotros' => route('about')
    ]
])

<!-- Hero Header -->
<section class="bg-gray-950 text-white py-16 lg:py-20 border-b border-gray-800">
    <div class="container mx-auto">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block px-3 py-1 bg-blue-900/50 border border-blue-500/30 text-blue-300 text-xs font-bold uppercase tracking-wider rounded">
                Trayectoria & Confianza Industrial
            </span>
            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white leading-tight">
                Ingeniería, Precisión y Servicio Técnico al Servicio del Metal
            </h1>
            <p class="text-sm sm:text-base text-gray-300 leading-relaxed font-light">
                En Cutting European combinamos más de 30 años de especialización técnica con la distribución de marcas de referencia mundial como MEP para dotar a las empresas metalmecánicas de la maquinaria de corte más eficiente, duradera y rentable.
            </p>
        </div>
    </div>
</section>

<!-- Core Pillars Section -->
<section class="py-16 bg-white border-b border-gray-200">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 space-y-4">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center font-bold text-lg shadow-md">
                    01
                </div>
                <h3 class="text-xl font-bold text-gray-950">Especialización Exclusiva</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    No somos intermediarios genéricos. Nos dedicamos de forma especializada y exhaustiva a la tecnología de corte: sierras de cinta, sierras de disco y tronzadoras para perfiles férricos, aluminio y PVC.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 space-y-4">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center font-bold text-lg shadow-md">
                    02
                </div>
                <h3 class="text-xl font-bold text-gray-950">Alianza Oficial con MEP</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Representamos al fabricante italiano líder en maquinaria de corte. Garantizamos acceso directo a repuestos 100% originales, manuales de despiece, software de control y garantía directa de fábrica.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 border border-gray-200 space-y-4">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center font-bold text-lg shadow-md">
                    03
                </div>
                <h3 class="text-xl font-bold text-gray-950">SAT y Taller Propio</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Disponemos de técnicos mecánicos y eléctricos en plantilla fija para puesta en marcha, calibración con durómetros y galgas de precisión, y reparación urgente in situ o en taller central.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company History & Facilities -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">Instalaciones & Showroom</span>
                <h2 class="text-3xl font-display font-black text-gray-950">
                    Instalaciones en Granollers (Barcelona)
                </h2>
                <div class="prose text-xs sm:text-sm text-gray-600 leading-relaxed space-y-3">
                    <p>
                        Nuestras instalaciones centrales albergan un showroom técnico donde nuestros clientes pueden realizar pruebas de corte con sus propios materiales y perfiles antes de tomar una decisión de inversión.
                    </p>
                    <p>
                        Asimismo, contamos con un almacén regulador con stock permanente de máquinas nuevas para entrega rápida, banco de soldadura de sierras de cinta a medida y más de 5.000 referencias de recambios originales en stock para envío en 24/48 horas.
                    </p>
                </div>

                <div class="pt-2 grid grid-cols-2 gap-4">
                    <div class="p-4 bg-white rounded-xl border border-gray-200">
                        <span class="text-2xl font-black text-gray-950 font-display block">+1.500</span>
                        <span class="text-xs text-gray-500">Máquinas activas instaladas</span>
                    </div>
                    <div class="p-4 bg-white rounded-xl border border-gray-200">
                        <span class="text-2xl font-black text-gray-950 font-display block">24 / 48 h</span>
                        <span class="text-xs text-gray-500">Plazo medio de recambios</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="bg-gray-900 rounded-2xl p-8 border border-gray-800 text-white space-y-6">
                    <h3 class="text-xl font-bold font-display text-white">Nuestros Compromisos de Calidad</h3>
                    <ul class="space-y-4 text-xs sm:text-sm text-gray-300">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-600/30 text-blue-400 flex items-center justify-center shrink-0 mt-0.5 font-bold">✓</span>
                            <span><strong>Asesoramiento Técnico Pre-Venta:</strong> Analizamos sus requerimientos para que no pague por funciones que no necesita ni se quede corto en cadencia de corte.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-600/30 text-blue-400 flex items-center justify-center shrink-0 mt-0.5 font-bold">✓</span>
                            <span><strong>Puesta en Marcha y Formación:</strong> Dejamos la máquina lista para producir y formamos al personal operario en seguridad y optimización de corte.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-600/30 text-blue-400 flex items-center justify-center shrink-0 mt-0.5 font-bold">✓</span>
                            <span><strong>Seguridad CE Certificada:</strong> Toda máquina suministrada cumple escrupulosamente con la directiva europea de seguridad en máquinas.</span>
                        </li>
                    </ul>

                    <div class="pt-4 border-t border-gray-800">
                        <a href="{{ route('contact') }}" class="w-full py-3 bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl transition-colors block text-center">
                            Contactar con un Especialista Técnico
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
