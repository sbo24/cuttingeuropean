@extends('layouts.app')

@section('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal, Sierras de Cinta y Disco')
@section('meta_description', 'Líderes en comercialización de sierras de cinta para metal, sierras de disco MEP, líneas de corte, maquinaria de ocasión revisada y servicio técnico oficial en toda España.')

@section('content')
<!-- ─── HERO: APPLE PRO INDUSTRIAL KEYNOTE STAGE ────────────────────── -->
<section class="relative bg-apple-hero text-white overflow-hidden py-24 lg:py-32 border-b border-white/10">
    <!-- Subtle Ambient Specular Rings & 3D Depth Lights -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[650px] h-[350px] bg-blue-600/20 blur-[130px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-10 w-96 h-96 bg-blue-500/10 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Left: Typography & Apple CTA Pills -->
            <div class="lg:col-span-7 space-y-8">
                <!-- Apple Keynote Pill Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/5 border border-white/15 backdrop-blur-xl shadow-[inset_0_1px_0_rgba(255,255,255,0.2)]">
                    <span class="w-2 h-2 rounded-full bg-blue-400 shadow-[0_0_10px_rgba(96,165,250,0.8)] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wide text-gray-200">Gama Profesional 2026 &bull; Distribución Oficial MEP</span>
                </div>

                <!-- Giant Apple Pro Headline -->
                <h1 class="font-display font-black text-4xl sm:text-6xl lg:text-7xl tracking-[-0.03em] leading-[1.05]">
                    El nuevo estándar en <br>
                    <span class="text-gradient-apple">corte industrial</span> <br>
                    <span class="text-gradient-blue">de alta precisión.</span>
                </h1>

                <p class="text-base sm:text-lg text-gray-400 font-light leading-relaxed max-w-xl">
                    Sierras de cinta automáticas, tronzadoras de disco de alta velocidad y centros de corte diseñados para maximizar la productividad y eliminar tolerancias en su fábrica o taller.
                </p>

                <!-- Action Pills -->
                <div class="pt-2 flex flex-wrap items-center gap-4">
                    <button type="button" 
                            @click="$dispatch('open-quote-modal')"
                            class="apple-btn-primary px-8 py-4 text-white text-sm tracking-wide flex items-center gap-3 cursor-pointer">
                        <span>Solicitar Asesoramiento</span>
                        <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                    <a href="{{ route('catalog.sierras-cinta') }}" class="apple-btn-secondary px-7 py-4 text-gray-200 text-sm font-semibold tracking-wide">
                        Explorar Catálogo
                    </a>
                </div>

                <!-- Industrial Metric Pills (Apple Hardware Specs) -->
                <div class="pt-8 border-t border-white/10 grid grid-cols-3 gap-6">
                    <div>
                        <span class="block text-2xl lg:text-3xl font-black font-display text-white tracking-tight">+30 Años</span>
                        <span class="text-xs text-gray-400 font-light mt-0.5 block">Ingeniería especializada</span>
                    </div>
                    <div>
                        <span class="block text-2xl lg:text-3xl font-black font-display text-white tracking-tight">&lt; 24h</span>
                        <span class="text-xs text-gray-400 font-light mt-0.5 block">Respuesta SAT oficial</span>
                    </div>
                    <div>
                        <span class="block text-2xl lg:text-3xl font-black font-display text-blue-400 tracking-tight">MEP Italia</span>
                        <span class="text-xs text-gray-400 font-light mt-0.5 block">Distribuidor homologado</span>
                    </div>
                </div>
            </div>

            <!-- Right: 3D Hardware Display Showcase with Floating Holographic Pills -->
            <div class="lg:col-span-5 relative stage-3d">
                <div class="relative apple-glass-dark p-8 rounded-3xl hardware-float shadow-[0_40px_100px_-20px_rgba(0,0,0,0.8)] border border-white/15">
                    
                    <!-- Top Status Bar -->
                    <div class="flex items-center justify-between pb-4 border-b border-white/10">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-400">Modelo Destacado</span>
                        <span class="px-3 py-1 rounded-full bg-blue-500/20 text-blue-300 border border-blue-400/30 text-[10px] font-bold tracking-wider">
                            Industry 4.0
                        </span>
                    </div>

                    <!-- 3D Centered Machine Graphic with Ambient Glow -->
                    <div class="py-8 relative flex items-center justify-center">
                        <div class="absolute w-56 h-56 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
                        <img src="https://cuttingeuropean.com/wp-content/uploads/2024/12/SHARK-281-NC-50_segatrice-a-nastro-automatica.webp" 
                             alt="MEP SHARK 281 NC-50 Sierra de cinta automática"
                             class="max-h-64 object-contain filter drop-shadow-[0_20px_40px_rgba(0,0,0,0.8)] relative z-10 transition-transform duration-700 hover:scale-105"
                             onerror="this.style.display='none'">
                    </div>

                    <!-- Floating 3D Spec Pills Orbiting the Hardware -->
                    <div class="grid grid-cols-2 gap-2.5 pt-2 text-xs">
                        <div class="p-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                            <span class="text-[9px] uppercase font-bold text-gray-400 tracking-wider block">Capacidad Corte</span>
                            <span class="text-white font-bold text-sm">Ø 281 mm</span>
                        </div>
                        <div class="p-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                            <span class="text-[9px] uppercase font-bold text-gray-400 tracking-wider block">Sistema Control</span>
                            <span class="text-white font-bold text-sm">NC-50 CNC</span>
                        </div>
                    </div>

                    <!-- Card Bottom CTA -->
                    <div class="mt-5 pt-4 border-t border-white/10 flex items-center justify-between">
                        <div>
                            <h3 class="text-base font-bold text-white">MEP SHARK 281 NC-50</h3>
                            <p class="text-[11px] text-gray-400 font-light">Ciclos automáticos desatendidos</p>
                        </div>
                        <button type="button" 
                                @click="$dispatch('open-quote-modal', { product: 'MEP SHARK 281 NC-50', ref: 'NC-50' })"
                                class="apple-btn-primary px-4 py-2 text-xs text-white font-semibold">
                            Cotizar
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── APPLE BENTO GRID: MAIN MACHINERY FAMILIES ───────────────────── -->
<section class="py-24 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.2em] block">Gama de Ingeniería</span>
            <h2 class="text-3xl sm:text-5xl font-display font-black text-gray-950 tracking-tight">
                Diseñadas para el máximo rendimiento.
            </h2>
            <p class="text-sm sm:text-base text-gray-600 font-light leading-relaxed">
                Cada máquina ha sido concebida para ofrecer precisión micrométrica, bajo mantenimiento y una durabilidad extrema en ciclos intensivos.
            </p>
        </div>

        <!-- Apple Bento Box 3-Card Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Bento 1: Sierras de Cinta -->
            <div class="apple-card-3d p-8 flex flex-col justify-between group overflow-hidden bg-white">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100/80 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="16" rx="2" stroke-width="2"/>
                            <line x1="3" y1="12" x2="21" y2="12" stroke-width="2" stroke-dasharray="2 2"/>
                        </svg>
                    </div>

                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 block">Capacidad Masiva</span>
                    <h3 class="text-2xl font-bold font-display text-gray-950 group-hover:text-blue-600 transition-colors">
                        Sierras de Cinta
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 font-light leading-relaxed">
                        Control electrohidráulico para perfiles, vigas y macizos de gran envergadura. Modelos con doble ingletador y alimentador automático CNC.
                    </p>

                    <div class="space-y-2 pt-2 text-xs font-medium text-gray-700">
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Capacidades de corte hasta Ø650 mm</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Inglete continuo desde -60° hasta +60°</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Mínimo desperdicio de viruta y corte frío</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="{{ route('catalog.sierras-cinta') }}" class="w-full py-3 px-4 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-900 font-semibold text-xs flex items-center justify-between transition-colors">
                        <span>Ver catálogo de Sierras de Cinta</span>
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bento 2: Sierras de Disco -->
            <div class="apple-card-3d p-8 flex flex-col justify-between group overflow-hidden bg-white">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100/80 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke-width="2"/>
                            <circle cx="12" cy="12" r="3" fill="currentColor"/>
                        </svg>
                    </div>

                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 block">Velocidad Punta</span>
                    <h3 class="text-2xl font-bold font-display text-gray-950 group-hover:text-blue-600 transition-colors">
                        Sierras de Disco
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 font-light leading-relaxed">
                        Corte ultra-rápido y limpio para tubos y perfiles metálicos. Modelos de alta producción Velocex y tronzadoras industriales Tiger y Cobra.
                    </p>

                    <div class="space-y-2 pt-2 text-xs font-medium text-gray-700">
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Acabado pulido sin rebaba</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Tronzadoras con cabezal basculante</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Producción masiva en serie</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="{{ route('catalog.sierras-disco') }}" class="w-full py-3 px-4 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-900 font-semibold text-xs flex items-center justify-between transition-colors">
                        <span>Ver catálogo de Sierras de Disco</span>
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bento 3: Aluminio y PVC -->
            <div class="apple-card-3d p-8 flex flex-col justify-between group overflow-hidden bg-white">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100/80 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>

                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 block">Cerramientos & Fachadas</span>
                    <h3 class="text-2xl font-bold font-display text-gray-950 group-hover:text-blue-600 transition-colors">
                        Aluminio y PVC
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 font-light leading-relaxed">
                        Centros de mecanizado de 3 y 4 ejes, tronzadoras de doble cabezal de posicionamiento electrónico y líneas automáticas para carpintería.
                    </p>

                    <div class="space-y-2 pt-2 text-xs font-medium text-gray-700">
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Doble cabezal CNC sincronizado</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Pantógrafos y fresadoras copiadoras</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            <span>Centros de corte integral de barras</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="{{ route('catalog.aluminio-pvc') }}" class="w-full py-3 px-4 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-900 font-semibold text-xs flex items-center justify-between transition-colors">
                        <span>Ver catálogo Aluminio y PVC</span>
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── FEATURED MACHINERY: 3D CARDS GRID ──────────────────────────── -->
<section class="py-24 bg-white">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-4">
            <div class="space-y-2">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.2em] block">Modelos Disponibles</span>
                <h2 class="text-3xl sm:text-4xl font-display font-black text-gray-950 tracking-tight">
                    Máquinas en Stock y Entrega Preferente
                </h2>
                <p class="text-sm text-gray-500 font-light max-w-xl">
                    Tecnología probada en fábrica con servicio de instalación y formación presencial en sus instalaciones.
                </p>
            </div>
            <a href="{{ route('catalog.sierras-cinta') }}" class="inline-flex items-center gap-2 text-xs font-bold tracking-wider text-blue-600 hover:text-blue-700">
                <span>Ver Todos los Modelos</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuredProducts as $product)
                @include('partials.product-card', ['product' => $product])
            @empty
                <div class="col-span-3 text-center py-12 text-gray-400">
                    No hay productos destacados disponibles en este momento.
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ─── APPLE PRO MEP PARTNERSHIP SHOWCASE ─────────────────────────── -->
<section class="py-24 bg-apple-dark text-white relative overflow-hidden border-t border-b border-white/10">
    <div class="absolute inset-0 bg-radial from-blue-600/15 via-transparent to-transparent pointer-events-none"></div>

    <div class="container mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-8 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/20 text-blue-300 border border-blue-400/30 text-xs font-bold uppercase tracking-wider">
                    Alianza Oficial de Fabricación
                </div>

                <h2 class="text-3xl sm:text-5xl font-display font-black text-white tracking-tight">
                    MEP Italia: Más de 60 años perfeccionando el corte de metales.
                </h2>

                <p class="text-sm sm:text-base text-gray-300 font-light leading-relaxed max-w-2xl">
                    Como distribuidores oficiales de MEP en España, le ofrecemos acceso directo al catálogo de última generación, soporte de ingeniería directo de fábrica y suministro de repuestos con garantía original.
                </p>

                <!-- 3 Spec Badges -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 text-xs">
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                        <span class="block text-blue-400 font-bold mb-1">Repuestos Oficiales</span>
                        <span class="text-gray-300 font-light">Envío en 24/48h directo de almacén</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                        <span class="block text-blue-400 font-bold mb-1">Garantía Certificada</span>
                        <span class="text-gray-300 font-light">Marcado CE y directiva de máquinas</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                        <span class="block text-blue-400 font-bold mb-1">Conectividad 4.0</span>
                        <span class="text-gray-300 font-light">Telemetría y control remoto RC</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4">
                <div class="apple-glass-dark p-8 rounded-3xl text-center space-y-4 border border-white/15">
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 block">Soporte Técnico Especializado</span>
                    <h3 class="text-xl font-bold font-display text-white">¿Ya cuenta con maquinaria MEP?</h3>
                    <p class="text-xs text-gray-400 font-light leading-relaxed">
                        Nuestro SAT oficial realiza mantenimiento preventivo, revisiones de reductores y suministro de consumibles.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('servicio-tecnico') }}" class="apple-btn-primary block w-full py-3 text-white text-xs font-semibold tracking-wide">
                            Solicitar Asistencia SAT MEP
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── APPLE TRADE-IN STYLE: PLAN RENOVE & OCASIÓN ────────────────── -->
<section class="py-24 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs font-bold text-amber-600 uppercase tracking-[0.2em] block">Programa de Recompra</span>
                
                <h2 class="text-3xl sm:text-5xl font-display font-black text-gray-950 tracking-tight">
                    Plan Renove. <br>
                    <span class="text-gray-400 font-light">Entregue su máquina.</span> <br>
                    Estrene precisión.
                </h2>

                <p class="text-sm text-gray-600 font-light leading-relaxed">
                    Tasamos su sierra de cinta o disco usada sin importar la marca ni los años de servicio. Su valor se descuenta de forma inmediata de su nueva inversión, con recogida y puesta en marcha coordinadas.
                </p>

                <div class="p-6 rounded-2xl bg-white border border-gray-200/80 shadow-xs space-y-3">
                    <div class="flex items-center gap-2 text-amber-700 font-bold text-sm">
                        <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>Ventajas del Plan Renove</span>
                    </div>
                    <ul class="text-xs text-gray-600 space-y-1.5 font-light">
                        <li>&bull; Tasación técnica en menos de 24 horas laborables.</li>
                        <li>&bull; Retirada y transporte gestionado por nuestros técnicos.</li>
                        <li>&bull; Transición sin paradas improductivas en su línea de corte.</li>
                    </ul>
                </div>

                <div class="pt-2 flex flex-wrap gap-3">
                    <a href="{{ route('plan-renove') }}" class="apple-btn-primary px-6 py-3.5 text-white text-xs font-semibold">
                        Tasación Gratuita Online
                    </a>
                    <a href="{{ route('catalog.ocasion') }}" class="px-6 py-3.5 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-800 text-xs font-semibold transition-colors">
                        Ver Stock de Ocasión
                    </a>
                </div>
            </div>

            <!-- Right: Stock Cards Showcase -->
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @forelse($secondHandProducts as $product)
                        @include('partials.product-card', ['product' => $product, 'showCategory' => false])
                    @empty
                        <div class="col-span-2 apple-card-3d p-8 text-center text-gray-500">
                            Consulte el stock disponible en taller llamando al <a href="tel:+34938498456" class="text-blue-600 font-bold">+34 93 849 84 56</a>.
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── TECHNICAL SERVICE (SAT) SECTION ────────────────────────────── -->
<section class="py-24 bg-white">
    <div class="container mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.2em] block">Soporte Post-Venta</span>
            <h2 class="text-3xl sm:text-4xl font-display font-black text-gray-950 tracking-tight">
                Servicio Técnico Propio de Principio a Fin
            </h2>
            <p class="text-sm text-gray-600 font-light leading-relaxed">
                Nuestros ingenieros mecánicos y eléctricos se encargan de la instalación, calibración con galgas de precisión y suministro continuo de recambios y consumibles.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="apple-card-3d p-6 bg-gray-50/60 flex flex-col justify-between">
                <div>
                    <span class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm mb-4">01</span>
                    <h3 class="text-base font-bold text-gray-950">Puesta en Marcha</h3>
                    <p class="text-xs text-gray-500 font-light mt-2 leading-relaxed">
                        Calibración geométrica in situ, comprobación de perpendicularidad y formación operativa a su personal.
                    </p>
                </div>
            </div>

            <div class="apple-card-3d p-6 bg-gray-50/60 flex flex-col justify-between">
                <div>
                    <span class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm mb-4">02</span>
                    <h3 class="text-base font-bold text-gray-950">Mantenimiento Preventivo</h3>
                    <p class="text-xs text-gray-500 font-light mt-2 leading-relaxed">
                        Planes programados para evitar averías: revisión de guías de widia, presión de mordazas y circuitos hidráulicos.
                    </p>
                </div>
            </div>

            <div class="apple-card-3d p-6 bg-gray-50/60 flex flex-col justify-between">
                <div>
                    <span class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm mb-4">03</span>
                    <h3 class="text-base font-bold text-gray-950">Recambios Originales</h3>
                    <p class="text-xs text-gray-500 font-light mt-2 leading-relaxed">
                        Más de 5.000 referencias en almacén: bombas de taladrina, platos de corte, reductores y sensores de fin de carrera.
                    </p>
                </div>
            </div>

            <div class="apple-card-3d p-6 bg-gray-50/60 flex flex-col justify-between">
                <div>
                    <span class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm mb-4">04</span>
                    <h3 class="text-base font-bold text-gray-950">Cintas & Discos a Medida</h3>
                    <p class="text-xs text-gray-500 font-light mt-2 leading-relaxed">
                        Soldadura de hojas de cinta bimetálicas M42, M51 y discos de corte adaptados al tipo exacto de acero o aleación.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('servicio-tecnico') }}" class="apple-btn-secondary inline-flex items-center gap-2 px-8 py-3.5 text-gray-900 border-gray-300 font-semibold text-xs tracking-wider">
                <span>Ver Servicios Técnicos SAT</span>
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- ─── FAQ INDUSTRIAL SECTION ──────────────────────────────────────── -->
<section class="py-24 bg-gray-50 border-t border-gray-200" x-data="{ active: null }">
    <div class="container mx-auto max-w-3xl">
        <div class="text-center mb-14 space-y-2">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.2em] block">Dudas Habituales</span>
            <h2 class="text-3xl font-display font-black text-gray-950">Preguntas Frecuentes</h2>
        </div>

        <div class="space-y-3">
            <div class="apple-card-3d bg-white overflow-hidden p-6 transition-all">
                <button type="button" @click="active = active === 1 ? null : 1" class="w-full text-left font-bold text-sm text-gray-900 flex items-center justify-between">
                    <span>¿Cuándo elegir sierra de cinta frente a sierra de disco?</span>
                    <svg class="w-5 h-5 text-gray-400 transform transition-transform" :class="{ 'rotate-180 text-blue-600': active === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 1" x-collapse class="text-xs text-gray-600 font-light leading-relaxed pt-3 border-t border-gray-100 mt-3">
                    Las <strong>sierras de cinta</strong> son la elección idónea para cortes macizos de gran diámetro, perfiles estructurales pesados y paquetes de barras con un corte frío y mínimo desperdicio. Las <strong>sierras de disco</strong> destacan por su velocidad y acabado pulido en tubos y perfiles delgados.
                </div>
            </div>

            <div class="apple-card-3d bg-white overflow-hidden p-6 transition-all">
                <button type="button" @click="active = active === 2 ? null : 2" class="w-full text-left font-bold text-sm text-gray-900 flex items-center justify-between">
                    <span>¿Qué garantía ofrecen las máquinas de ocasión?</span>
                    <svg class="w-5 h-5 text-gray-400 transform transition-transform" :class="{ 'rotate-180 text-blue-600': active === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 2" x-collapse class="text-xs text-gray-600 font-light leading-relaxed pt-3 border-t border-gray-100 mt-3">
                    Cada máquina usada se somete a un protocolo de verificación de más de 30 puntos en nuestro taller (revisión de tolerancias, rectificado de bancadas, bombas y mandos eléctricos). Se entregan garantizadas y con opción de prueba presencial previa.
                </div>
            </div>

            <div class="apple-card-3d bg-white overflow-hidden p-6 transition-all">
                <button type="button" @click="active = active === 3 ? null : 3" class="w-full text-left font-bold text-sm text-gray-900 flex items-center justify-between">
                    <span>¿Realizan envíos y puesta en marcha en toda España?</span>
                    <svg class="w-5 h-5 text-gray-400 transform transition-transform" :class="{ 'rotate-180 text-blue-600': active === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 3" x-collapse class="text-xs text-gray-600 font-light leading-relaxed pt-3 border-t border-gray-100 mt-3">
                    Sí, coordinamos el transporte industrial con descarga y disponemos de técnicos de campo para la puesta en marcha, nivelación y formación técnica de sus operarios en toda la península.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── FINAL CTA: APPLE LUXURY MINIMALIST BANNER ───────────────────── -->
<section class="py-20 bg-apple-dark text-white text-center relative overflow-hidden">
    <div class="container mx-auto px-4 max-w-2xl relative z-10 space-y-6">
        <h2 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white">
            Eleve la precisión de su taller.
        </h2>
        <p class="text-gray-400 text-sm sm:text-base font-light leading-relaxed">
            Consulte con nuestros ingenieros de corte para recibir una propuesta técnica a medida de sus piezas y materiales.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
            <button type="button" 
                    @click="$dispatch('open-quote-modal')"
                    class="apple-btn-primary px-8 py-4 text-white text-xs uppercase tracking-wider font-bold shadow-xl">
                Solicitar Estudio Técnico
            </button>
            <a href="tel:+34938498456" class="apple-btn-secondary px-8 py-4 text-white text-xs uppercase tracking-wider font-bold">
                Llamar: +34 93 849 84 56
            </a>
        </div>
    </div>
</section>
@endsection
