@extends('layouts.app')

@section('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal, Sierras de Cinta y Disco')
@section('meta_description', 'Líderes en comercialización de sierras de cinta para metal, sierras de disco MEP, líneas de corte, maquinaria de ocasión revisada y servicio técnico oficial en toda España.')

@section('content')
<!-- ─── HERO SECTION ────────────────────────────────────────────────── -->
<section class="relative bg-gray-950 text-white overflow-hidden py-20 lg:py-28 border-b border-gray-800">
    <!-- Subtle Industrial Grid Background Pattern -->
    <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    
    <!-- Accent Gradient Glow -->
    <div class="absolute top-1/4 -right-48 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 -left-48 w-96 h-96 bg-blue-500/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Copy -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-900/40 border border-blue-500/30 text-blue-300 text-xs font-semibold tracking-wide uppercase">
                    <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping"></span>
                    <span>Ingeniería de Corte & Distribución Oficial MEP</span>
                </div>

                <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl tracking-tight leading-[1.08] text-white">
                    Precisión Absoluta en <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-200 to-white">
                        Maquinaria de Corte
                    </span> de Metal
                </h1>

                <p class="text-base sm:text-lg text-gray-300 leading-relaxed max-w-2xl font-light">
                    Optimizamos los tiempos de ciclo y la rentabilidad de su taller o fábrica con sierras de cinta automáticas, tronzadoras de disco de alta velocidad y líneas completas de corte para perfiles de acero, aluminio y PVC.
                </p>

                <!-- Action CTAs -->
                <div class="pt-2 flex flex-wrap items-center gap-4">
                    <button type="button" 
                            @click="$dispatch('open-quote-modal')"
                            class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm tracking-wider uppercase shadow-lg hover:shadow-blue-600/30 transition-all flex items-center gap-3 cursor-pointer">
                        <span>Solicitar Asesoramiento Técnico</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                    <a href="{{ route('catalog.sierras-cinta') }}" class="px-7 py-4 rounded-xl bg-gray-900 hover:bg-gray-800 text-gray-200 font-bold text-sm tracking-wide rounded-xl border border-gray-700 hover:border-gray-600 transition-colors">
                        Ver Catálogo de Máquinas
                    </a>
                </div>

                <!-- Fast Trust Highlights -->
                <div class="pt-6 border-t border-gray-800/80 grid grid-cols-3 gap-4 text-left">
                    <div>
                        <span class="block text-xl lg:text-2xl font-black text-white font-display">+30 Años</span>
                        <span class="text-xs text-gray-400">Especialistas en corte</span>
                    </div>
                    <div>
                        <span class="block text-xl lg:text-2xl font-black text-white font-display">&lt; 24h</span>
                        <span class="text-xs text-gray-400">Respuesta SAT técnica</span>
                    </div>
                    <div>
                        <span class="block text-xl lg:text-2xl font-black text-white font-display">Oficial MEP</span>
                        <span class="text-xs text-gray-400">Garantía europea</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Card / Featured Highlight -->
            <div class="lg:col-span-5">
                <div class="relative bg-gray-900/90 rounded-2xl border border-gray-800 p-6 shadow-2xl backdrop-blur-md">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-800">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-400">Gama Destacada 2026</span>
                        <span class="px-2 py-0.5 text-[11px] font-bold uppercase bg-blue-600/20 text-blue-400 border border-blue-500/30 rounded">
                            Industry 4.0 Ready
                        </span>
                    </div>

                    <div class="py-6 flex items-center justify-center">
                        <img src="https://cuttingeuropean.com/wp-content/uploads/2024/12/SHARK-281-NC-50_segatrice-a-nastro-automatica.webp" 
                             alt="MEP SHARK 281 NC-50 Sierra de cinta automática"
                             class="max-h-64 object-contain filter drop-shadow-2xl hover:scale-105 transition-transform duration-500"
                             onerror="this.style.display='none'">
                    </div>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-white">MEP SHARK 281 NC-50</h3>
                            <span class="text-xs font-semibold px-2 py-1 bg-gray-800 text-gray-300 rounded">Cap. Ø 281 mm</span>
                        </div>
                        <p class="text-xs text-gray-400 leading-relaxed">
                            Sierra de cinta automática electrohidráulica con control programable NC-50 para ciclos desatendidos de alta producción.
                        </p>
                        <div class="pt-3 flex items-center gap-3">
                            <a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="flex-1 py-2.5 px-3 bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold rounded-lg text-center transition-colors">
                                Consultar Disponibilidad
                            </a>
                            <a href="tel:+34938498456" class="p-2.5 bg-gray-800 hover:bg-gray-700 text-gray-300 rounded-lg border border-gray-700 transition-colors" title="Llamar para asesoramiento">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── MAIN CATEGORIES SECTION ────────────────────────────────────── -->
<section class="py-20 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-2">Soluciones Integrales</span>
            <h2 class="text-3xl sm:text-4xl font-display font-black text-gray-950 tracking-tight">
                Líneas de Maquinaria Especializada
            </h2>
            <p class="text-sm sm:text-base text-gray-600 mt-3 leading-relaxed">
                Seleccionamos y configuramos la tecnología idónea según la geometría, aleación, volumen de cortes y tolerancias exigidas en su proceso productivo.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Sierras de Cinta -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-8 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="16" rx="2" stroke-width="2"/>
                            <line x1="3" y1="12" x2="21" y2="12" stroke-width="2" stroke-dasharray="2 2"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block mb-1">Corte Férrico & Inox</span>
                    <h3 class="text-2xl font-bold text-gray-950 mb-3 group-hover:text-blue-600 transition-colors">
                        Sierras de Cinta
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-6">
                        Maquinaria de gran capacidad para perfiles, vigas y macizos. Modelos automáticos CNC, semiautomáticos y manuales con regulación precisa de avance de arco y tensión hidráulica.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 mb-6">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Automáticas con alimentador de barra</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Cortes en inglete continuo (-60° / +60°)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Capacidades de corte hasta Ø650 mm</span>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('catalog.sierras-cinta') }}" class="inline-flex items-center justify-between py-3 px-4 rounded-xl bg-gray-50 hover:bg-blue-600 text-gray-900 hover:text-white text-xs font-bold transition-all">
                    <span>Ver Modelos y Fichas</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Card 2: Sierras de Disco -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-8 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke-width="2"/>
                            <circle cx="12" cy="12" r="3" fill="currentColor"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block mb-1">Corte Rápido & Acabado</span>
                    <h3 class="text-2xl font-bold text-gray-950 mb-3 group-hover:text-blue-600 transition-colors">
                        Sierras de Disco
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-6">
                        Tronzadoras de disco HSS y metal duro para corte limpio, sin rebaba y de alta velocidad. Máquinas automáticas Velocex y modelos de cabezal móvil Tiger/Cobra.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 mb-6">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Corte ultra-rápido en producción masiva</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Excelente acabado de corte y perpendicularidad</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Modelos manuales, semiautomáticos y CNC</span>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('catalog.sierras-disco') }}" class="inline-flex items-center justify-between py-3 px-4 rounded-xl bg-gray-50 hover:bg-blue-600 text-gray-900 hover:text-white text-xs font-bold transition-all">
                    <span>Ver Modelos y Fichas</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Card 3: Aluminio & PVC -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-8 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block mb-1">Carpintería & Fachadas</span>
                    <h3 class="text-2xl font-bold text-gray-950 mb-3 group-hover:text-blue-600 transition-colors">
                        Aluminio y PVC
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-6">
                        Maquinaria integral para cerramientos y carpintería metálica: tronzadoras de doble cabezal electrónico, líneas automáticas de corte, pantógrafos y centros de mecanizado.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 mb-6">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Doble cabezal con posicionamiento CNC</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Pantógrafos y copiadoras de cerraduras</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Centros de mecanizado de 3, 4 y 5 ejes</span>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('catalog.aluminio-pvc') }}" class="inline-flex items-center justify-between py-3 px-4 rounded-xl bg-gray-50 hover:bg-blue-600 text-gray-900 hover:text-white text-xs font-bold transition-all">
                    <span>Ver Modelos y Fichas</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ─── FEATURED MACHINERY GRID ───────────────────────────────────── -->
<section class="py-20 bg-white">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-2">Gama Industrial</span>
                <h2 class="text-3xl sm:text-4xl font-display font-black text-gray-950 tracking-tight">
                    Máquinas Destacadas en Stock
                </h2>
                <p class="text-sm text-gray-600 mt-2 max-w-xl">
                    Modelos con entrega inmediata o plazos reducidos para producción industrial continua.
                </p>
            </div>
            <a href="{{ route('catalog.sierras-cinta') }}" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700">
                <span>Ver Todas las Máquinas</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($featuredProducts as $product)
                @include('partials.product-card', ['product' => $product])
            @empty
                <div class="col-span-3 text-center py-12 text-gray-500">
                    No hay productos destacados disponibles en este momento.
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ─── MEP DISTRIBUTOR PARTNERSHIP BANNER ─────────────────────────── -->
<section class="py-16 bg-gray-900 text-white relative overflow-hidden">
    <div class="container mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-600/30 text-blue-400 rounded-md text-xs font-bold uppercase tracking-wider border border-blue-500/30">
                    Alianza Tecnológica
                </div>
                <h2 class="text-2xl sm:text-3xl font-display font-black text-white">
                    Distribuidor Oficial MEP: Rendimiento, Calidad y Tecnología Italiana
                </h2>
                <p class="text-xs sm:text-sm text-gray-300 leading-relaxed max-w-2xl">
                    MEP es referencia mundial en sierras de cinta y disco desde 1964. Como distribuidores oficiales, suministramos maquinaria nueva con garantía de fábrica, recambios 100% originales, útiles de amarre y asistencia técnica directa sin intermediarios.
                </p>
                <div class="flex flex-wrap items-center gap-6 pt-2 text-xs font-semibold text-gray-300">
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Garantía Oficial de Fábrica</span>
                    </span>
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Stock de Recambios 48h</span>
                    </span>
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Conectividad RC KONNECT 4.0</span>
                    </span>
                </div>
            </div>
            <div class="lg:col-span-4 flex flex-col items-center justify-center bg-gray-950 p-8 rounded-2xl border border-gray-800 text-center">
                <span class="text-xs uppercase font-bold text-gray-400 tracking-wider mb-2">¿Tienes una máquina MEP?</span>
                <h4 class="text-base font-bold text-white mb-4">¿Necesitas repuestos, revisión o puesta a punto?</h4>
                <a href="{{ route('servicio-tecnico') }}" class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-colors">
                    Contactar Servicio SAT MEP
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ─── SECOND HAND & PLAN RENOVE ─────────────────────────────────── -->
<section class="py-20 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <!-- Left Info -->
            <div class="lg:col-span-5 space-y-5">
                <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block">Oportunidades Revisadas</span>
                <h2 class="text-3xl sm:text-4xl font-display font-black text-gray-950 tracking-tight">
                    Maquinaria de Ocasión y Plan Renove
                </h2>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Ponemos a su disposición máquinas de ocasión completamente revisadas en nuestros propios talleres por técnicos especializados. Cada máquina se entrega verificada con prueba de corte, tolerancias de precisión garantizadas y garantía de funcionamiento.
                </p>

                <!-- Plan Renove Box -->
                <div class="p-5 bg-white rounded-xl border border-amber-200 shadow-sm space-y-2">
                    <div class="flex items-center gap-2 text-amber-700 font-bold text-sm">
                        <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>Plan Renove de Maquinaria</span>
                    </div>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Tasamos su máquina de corte usada y descontamos su valor directamente de la adquisición de su nueva sierra de cinta o disco. Reduzca la inversión inicial y actualice su parque de maquinaria sin complicaciones.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('plan-renove') }}" class="text-xs font-bold text-amber-700 hover:text-amber-800 underline">
                            Calcular tasación para Plan Renove →
                        </a>
                    </div>
                </div>

                <div>
                    <a href="{{ route('catalog.ocasion') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gray-950 hover:bg-gray-800 text-white font-bold text-xs uppercase tracking-wider transition-colors shadow-sm">
                        <span>Ver Stock de Ocasión Disponible</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right: Stock Teaser Grid -->
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @forelse($secondHandProducts as $product)
                        @include('partials.product-card', ['product' => $product, 'showCategory' => false])
                    @empty
                        <div class="col-span-2 bg-white rounded-xl border border-gray-200 p-8 text-center text-gray-500">
                            Consultar stock disponible de ocasión llamando al <a href="tel:+34938498456" class="text-blue-600 font-bold">+34 93 849 84 56</a>.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── TECHNICAL SERVICE (SAT) ────────────────────────────────────── -->
<section class="py-20 bg-white">
    <div class="container mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-2">Servicio Técnico Integral</span>
            <h2 class="text-3xl sm:text-4xl font-display font-black text-gray-950 tracking-tight">
                Mantenimiento, Reparación y Recambios Oficiales
            </h2>
            <p class="text-sm sm:text-base text-gray-600 mt-3 leading-relaxed">
                Minimizamos las paradas de producción de su planta mediante asistencia in situ, diagnosis rápida y suministro de piezas originales y consumibles.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="p-6 rounded-xl bg-gray-50 border border-gray-200 space-y-3">
                <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-bold">1</div>
                <h3 class="text-base font-bold text-gray-900">Puesta en Marcha</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Instalación, calibración geométrica, prueba con material real y formación técnica personalizada a sus operarios.
                </p>
            </div>

            <div class="p-6 rounded-xl bg-gray-50 border border-gray-200 space-y-3">
                <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-bold">2</div>
                <h3 class="text-base font-bold text-gray-900">Mantenimiento Preventivo</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Revisiones periódicas de tensión de cinta, guías de widia, circuitos hidráulicos, mordazas y variadores.
                </p>
            </div>

            <div class="p-6 rounded-xl bg-gray-50 border border-gray-200 space-y-3">
                <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-bold">3</div>
                <h3 class="text-base font-bold text-gray-900">Recambios y Desgaste</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Almacén permanente de rodamientos, bombas de taladrina, platos de corte, mordazas, correas y retenes.
                </p>
            </div>

            <div class="p-6 rounded-xl bg-gray-50 border border-gray-200 space-y-3">
                <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-bold">4</div>
                <h3 class="text-base font-bold text-gray-900">Hojas de Sierra & Discos</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Suministro de cintas bimetálicas M42, M51, metal duro y discos HSS adaptados a su aleación exacta.
                </p>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('servicio-tecnico') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider transition-colors shadow-sm">
                <span>Conocer todos los servicios SAT</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- ─── FAQ INDUSTRIAL SECTION (SEO RICH) ─────────────────────────── -->
<section class="py-20 bg-gray-50 border-t border-gray-200" x-data="{ active: null }">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-12">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-2">Preguntas Frecuentes</span>
            <h2 class="text-3xl font-display font-black text-gray-950">Dudas Técnicas sobre Maquinaria de Corte</h2>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-xs">
                <button type="button" @click="active = active === 1 ? null : 1" class="w-full p-5 text-left font-bold text-sm text-gray-900 flex items-center justify-between hover:bg-gray-50">
                    <span>¿Cuándo conviene elegir una sierra de cinta y cuándo una de disco?</span>
                    <svg class="w-5 h-5 text-gray-400 transform transition-transform" :class="{ 'rotate-180': active === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 1" x-collapse class="px-5 pb-5 text-xs text-gray-600 leading-relaxed border-t border-gray-100 pt-3">
                    Las <strong>sierras de cinta</strong> son ideales para cortar piezas macizas de gran tamaño (desde Ø150 mm hasta más de Ø600 mm), cortes en paquete y perfiles estructurales pesados, con un corte frío y mínimo desperdicio de viruta. Las <strong>sierras de disco</strong> (o tronzadoras) son la mejor elección cuando se precisa velocidad punta en tubos y perfiles delgados o medios, logrando un acabado superficial casi pulido y tolerancias muy estrictas.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-xs">
                <button type="button" @click="active = active === 2 ? null : 2" class="w-full p-5 text-left font-bold text-sm text-gray-900 flex items-center justify-between hover:bg-gray-50">
                    <span>¿Qué tipo de garantía y revisión tienen las máquinas de ocasión?</span>
                    <svg class="w-5 h-5 text-gray-400 transform transition-transform" :class="{ 'rotate-180': active === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 2" x-collapse class="px-5 pb-5 text-xs text-gray-600 leading-relaxed border-t border-gray-100 pt-3">
                    Toda máquina usada que entra en nuestras instalaciones pasa por un protocolo de verificación de más de 30 puntos: rectificado de bancadas, sustitución de rodamientos de guiado, revisión de bomba refrigerante, prueba de presión de mordaza y comprobación de componentes eléctricos. Ofrecemos garantía de taller y la posibilidad de ver la máquina funcionando antes de la compra.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-xs">
                <button type="button" @click="active = active === 3 ? null : 3" class="w-full p-5 text-left font-bold text-sm text-gray-900 flex items-center justify-between hover:bg-gray-50">
                    <span>¿Ofrecéis suministro continuado de hojas de sierra de cinta?</span>
                    <svg class="w-5 h-5 text-gray-400 transform transition-transform" :class="{ 'rotate-180': active === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 3" x-collapse class="px-5 pb-5 text-xs text-gray-600 leading-relaxed border-t border-gray-100 pt-3">
                    Sí. Contamos con servicio de soldadura y suministro a medida de hojas de cinta bimetálicas M42, M51 y con pastillas de metal duro para aceros inoxidables, titanio e inconel. Nuestro equipo le asesora sobre el paso de diente (TPI) óptimo según el espesor de pared y macizo a cortar.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── FINAL CTA BANNER ───────────────────────────────────────────── -->
<section class="py-16 bg-blue-600 text-white text-center">
    <div class="container mx-auto px-4 max-w-3xl space-y-6">
        <h2 class="text-3xl sm:text-4xl font-display font-black">
            ¿Necesita una solución de corte a medida para su taller?
        </h2>
        <p class="text-blue-100 text-sm sm:text-base leading-relaxed">
            Nuestros ingenieros analizan su producción, tipo de material y volúmenes para recomendarle la máquina más rentable. Sin compromiso.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <button type="button" 
                    @click="$dispatch('open-quote-modal')"
                    class="px-8 py-3.5 bg-gray-950 hover:bg-gray-900 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg transition-colors cursor-pointer">
                Solicitar Estudio / Presupuesto
            </button>
            <a href="tel:+34938498456" class="px-8 py-3.5 bg-white hover:bg-blue-50 text-blue-700 font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg transition-colors">
                Llamar Directamente: +34 93 849 84 56
            </a>
        </div>
    </div>
</section>
@endsection
