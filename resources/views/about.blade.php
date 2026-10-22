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
<section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-20 lg:py-24 border-b border-slate-800">
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[550px] h-[300px] bg-blue-600/20 blur-[130px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-slate-900 border border-slate-700 text-xs font-semibold text-slate-200 shadow-sm">
                <span class="inline-block w-2 h-2 rounded-full bg-blue-400"></span>
                <span>Trayectoria & Confianza Industrial &bull; Desde 1994</span>
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-display font-extrabold tracking-tight text-white leading-tight">
                Ingeniería, Precisión y <br>
                <span class="text-blue-400">Servicio Técnico Especializado</span>
            </h1>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-2xl">
                En Cutting European combinamos más de 30 años de especialización técnica con la distribución de marcas de referencia mundial como MEP para dotar a las empresas metalmecánicas de la maquinaria de corte más eficiente, duradera y rentable.
            </p>
        </div>
    </div>
</section>

<!-- Core Pillars Section -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl border border-slate-200/90 p-8 space-y-4 shadow-xs">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center font-bold text-base shadow-sm">
                    01
                </div>
                <h3 class="text-xl font-bold font-display text-slate-900">Especialización Exclusiva</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    No somos intermediarios genéricos. Nos dedicamos de forma especializada y exhaustiva a la tecnología de corte: sierras de cinta, sierras de disco y tronzadoras para perfiles férricos, aluminio y PVC.
                </p>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200/90 p-8 space-y-4 shadow-xs">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center font-bold text-base shadow-sm">
                    02
                </div>
                <h3 class="text-xl font-bold font-display text-slate-900">Alianza Oficial con MEP</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Representamos al fabricante italiano líder en maquinaria de corte. Garantizamos acceso directo a repuestos 100% originales, manuales de despiece, software de control y garantía directa de fábrica.
                </p>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200/90 p-8 space-y-4 shadow-xs">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center font-bold text-base shadow-sm">
                    03
                </div>
                <h3 class="text-xl font-bold font-display text-slate-900">SAT y Taller Propio</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Disponemos de técnicos mecánicos y eléctricos en plantilla fija para puesta en marcha, calibración con durómetros y galgas de precisión, y reparación urgente in situ o en taller central.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company History & Facilities -->
<section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block">Instalaciones & Showroom</span>
                <h2 class="text-2xl sm:text-4xl font-display font-extrabold text-slate-900">
                    Instalaciones en Fuenlabrada (Madrid)
                </h2>
                <div class="text-xs sm:text-sm text-slate-600 leading-relaxed space-y-3">
                    <p>
                        Nuestras instalaciones centrales albergan un showroom técnico donde nuestros clientes pueden realizar pruebas de corte con sus propios materiales y perfiles antes de tomar una decisión de inversión.
                    </p>
                    <p>
                        Asimismo, contamos con un almacén regulador con stock permanente de máquinas nuevas para entrega rápida, banco de soldadura de sierras de cinta a medida y más de 5.000 referencias de recambios originales en stock para envío en 24/48 horas.
                    </p>
                </div>

                <div class="pt-2 grid grid-cols-2 gap-4">
                    <div class="p-5 bg-white rounded-xl border border-slate-200 shadow-xs">
                        <span class="text-3xl font-extrabold text-blue-600 font-display block">+1.500</span>
                        <span class="text-xs text-slate-500 mt-1 block">Máquinas activas instaladas</span>
                    </div>
                    <div class="p-5 bg-white rounded-xl border border-slate-200 shadow-xs">
                        <span class="text-3xl font-extrabold text-slate-900 font-display block">&lt; 24h</span>
                        <span class="text-xs text-slate-500 mt-1 block">Plazo medio de recambios</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="bg-slate-900 rounded-2xl p-8 sm:p-10 border border-slate-800 text-white space-y-6 shadow-xl">
                    <h3 class="text-2xl font-bold font-display text-white">Nuestros Compromisos de Calidad</h3>
                    <ul class="space-y-4 text-xs sm:text-sm text-slate-300">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5 font-bold">✓</span>
                            <span><strong class="text-white font-medium">Asesoramiento Técnico Pre-Venta:</strong> Analizamos sus requerimientos para que no pague por funciones que no necesita ni se quede corto en cadencia de corte.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5 font-bold">✓</span>
                            <span><strong class="text-white font-medium">Puesta en Marcha y Formación:</strong> Dejamos la máquina lista para producir y formamos al personal operario en seguridad y optimización de corte.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5 font-bold">✓</span>
                            <span><strong class="text-white font-medium">Seguridad CE Certificada:</strong> Toda máquina suministrada cumple escrupulosamente con la directiva europea de seguridad en máquinas.</span>
                        </li>
                    </ul>

                    <div class="pt-4 border-t border-slate-800">
                        <a href="{{ route('contact') }}" class="block w-full py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider text-center transition-colors cursor-pointer">
                            Contactar con un Especialista Técnico
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
