@extends('layouts.app')

@section('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal, Sierras de Cinta y Disco')
@section('meta_description', 'Líderes en comercialización de sierras de cinta para metal, sierras de disco MEP, líneas de corte, maquinaria de ocasión revisada y servicio técnico oficial en toda España.')

@section('content')
<!-- ─── HERO CAROUSEL: INDUSTRIAL SPECIALIST ────────────────────── -->
<section class="relative bg-slate-950 text-white overflow-hidden py-14 sm:py-20 lg:py-24 border-b border-slate-800"
         x-data="{
             activeSlide: 0,
             totalSlides: 3,
             timer: null,
             init() {
                 this.startTimer();
             },
             startTimer() {
                 this.stopTimer();
                 this.timer = setInterval(() => { this.next(); }, 7000);
             },
             stopTimer() {
                 if (this.timer) clearInterval(this.timer);
             },
             next() {
                 this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
             },
             prev() {
                 this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
             },
             goTo(index) {
                 this.activeSlide = index;
                 this.startTimer();
             }
         }"
         @mouseenter="stopTimer()"
         @mouseleave="startTimer()">

    <!-- Ambient Subtle Glows -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-blue-600/10 blur-[140px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-10 w-96 h-96 bg-blue-500/5 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">

        <!-- ══ SLIDES CONTAINER (Fixed Coordinates for Soft Cross-Fade) ══ -->
        <div class="relative min-h-[580px] sm:min-h-[520px] lg:min-h-[490px]">

            <!-- ── SLIDE 0: SIERRAS DE CINTA MEP ── -->
            <div x-show="activeSlide === 0"
                 x-transition:enter="transition-opacity duration-300 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-200 ease-in absolute inset-0 pointer-events-none"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                    <!-- Left: Content -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900 border border-slate-700/80 text-xs font-semibold text-slate-200">
                            <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                            <span>Distribución Oficial MEP España</span>
                        </div>

                        <h1 class="font-display font-extrabold text-3xl sm:text-5xl lg:text-6xl tracking-tight leading-[1.12] text-white">
                            Maquinaria industrial para el <span class="text-blue-400">corte de metal</span> de alta precisión.
                        </h1>

                        <p class="text-base sm:text-lg text-slate-300 font-normal leading-relaxed max-w-2xl">
                            Suministramos sierras de cinta automáticas, tronzadoras de alta cadencia y centros de mecanizado diseñados para maximizar la productividad de su taller, con servicio técnico oficial directo en toda España.
                        </p>

                        <div class="pt-2 flex flex-wrap items-center gap-4">
                            <button type="button" 
                                    @click="$dispatch('open-quote-modal')"
                                    class="px-7 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-sm font-bold tracking-wide flex items-center gap-3 shadow-lg shadow-blue-600/20 transition-all cursor-pointer">
                                <span>Solicitar Estudio Técnico</span>
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                            <a href="{{ route('catalog.sierras-cinta') }}" class="px-6 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white text-sm font-semibold tracking-wide border border-slate-700 transition-all">
                                Explorar Catálogo de Sierras
                            </a>
                        </div>

                        <!-- Metric Badges -->
                        <div class="pt-6 border-t border-slate-800/80 grid grid-cols-3 gap-6">
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-white tracking-tight">+30 Años</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Ingeniería especializada</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-white tracking-tight">&lt; 24h</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Respuesta SAT oficial</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-blue-400 tracking-tight">MEP Italia</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Distribuidor homologado</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Premium White Studio Showcase Card -->
                    <div class="lg:col-span-5">
                        <div class="bg-white rounded-3xl p-6 sm:p-7 shadow-2xl border border-slate-200/90 text-slate-900 flex flex-col justify-between h-[460px] min-h-[460px] relative">
                            <!-- Card Header -->
                            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-bold border border-blue-200/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                                    Sierra Automática CNC
                                </span>
                                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                                    Gama Shark
                                </span>
                            </div>

                            <!-- Machine Stage -->
                            <div class="relative flex items-center justify-center bg-slate-50/70 rounded-2xl p-4 border border-slate-100/90 h-52 my-1 group">
                                <img src="https://cuttingeuropean.com/wp-content/uploads/2024/12/SHARK-281-NC-50_segatrice-a-nastro-automatica.webp" 
                                     alt="MEP SHARK 281 NC-50 Sierra de cinta automática"
                                     class="max-h-44 w-auto object-contain filter drop-shadow-md transition-transform duration-300 group-hover:scale-105">
                            </div>

                            <!-- Technical Specs -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Capacidad de Corte</span>
                                    <span class="text-slate-900 font-extrabold text-sm block mt-0.5">Ø 280 mm</span>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Sistema de Control</span>
                                    <span class="text-slate-900 font-extrabold text-sm block mt-0.5">NC-50 CNC Automático</span>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-extrabold text-slate-900">MEP SHARK 281 NC-50</h3>
                                    <p class="text-xs text-slate-500">Ciclos automáticos desatendidos</p>
                                </div>
                                <button type="button" 
                                        @click="$dispatch('open-quote-modal', { product: 'MEP SHARK 281 NC-50', ref: 'NC-50' })"
                                        class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-xs text-white font-bold transition-colors cursor-pointer">
                                    Pedir Oferta
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ── SLIDE 1: MAQUINARIA DE OCASIÓN ── -->
            <div x-show="activeSlide === 1"
                 x-transition:enter="transition-opacity duration-300 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-200 ease-in absolute inset-0 pointer-events-none"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full"
                 style="display: none;">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                    <!-- Left: Content -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-950/60 border border-amber-600/40 text-xs font-semibold text-amber-300">
                            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                            <span>Ocasión Certificada &bull; Entrega en 48/72h</span>
                        </div>

                        <h2 class="font-display font-extrabold text-3xl sm:text-5xl lg:text-6xl tracking-tight leading-[1.12] text-white">
                            Maquinaria de ocasión <span class="text-amber-400">100% revisada</span> con garantía oficial.
                        </h2>

                        <p class="text-base sm:text-lg text-slate-300 font-normal leading-relaxed max-w-2xl">
                            Ahorre hasta un 50% de inversión sin comprometer fiabilidad. Equipos puestos a punto por el servicio técnico oficial MEP con componentes originales, garantía de funcionamiento y entrega inmediata.
                        </p>

                        <div class="pt-2 flex flex-wrap items-center gap-4">
                            <a href="{{ route('catalog.ocasion') }}" class="px-7 py-3.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-slate-950 text-sm font-bold tracking-wide flex items-center gap-3 shadow-lg shadow-amber-500/20 transition-all">
                                <span>Ver Parque de Ocasión</span>
                                <svg class="w-4 h-4 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="{{ route('plan-renove') }}" class="px-6 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white text-sm font-semibold tracking-wide border border-slate-700 transition-all">
                                Tasación Plan Renove
                            </a>
                        </div>

                        <!-- Metric Badges -->
                        <div class="pt-6 border-t border-slate-800/80 grid grid-cols-3 gap-6">
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-white tracking-tight">Hasta -50%</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Ahorro sobre nueva</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-white tracking-tight">Madrid</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Showroom y taller</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-amber-400 tracking-tight">Garantía</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">SAT propio certificado</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Premium White Studio Showcase Card -->
                    <div class="lg:col-span-5">
                        <div class="bg-white rounded-3xl p-6 sm:p-7 shadow-2xl border border-slate-200/90 text-slate-900 flex flex-col justify-between h-[460px] min-h-[460px] relative">
                            <!-- Card Header -->
                            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-800 text-xs font-bold border border-amber-200/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                    Ocasión Garantizada
                                </span>
                                <span class="text-[11px] font-bold text-emerald-600 uppercase tracking-wider flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Stock Inmediato
                                </span>
                            </div>

                            <!-- Machine Stage -->
                            <div class="relative flex items-center justify-center bg-slate-50/70 rounded-2xl p-4 border border-slate-100/90 h-52 my-1 group">
                                <img src="https://cuttingeuropean.com/wp-content/uploads/2024/12/SHARK-281-SXI-EVO_segatrice-a-nastro-semiautomatica.webp" 
                                     alt="MEP SHARK 281 SXI EVO Sierra semiautomática de ocasión"
                                     class="max-h-44 w-auto object-contain filter drop-shadow-md transition-transform duration-300 group-hover:scale-105">
                            </div>

                            <!-- Technical Specs -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Estado Técnico</span>
                                    <span class="text-amber-700 font-extrabold text-sm block mt-0.5">Revisión 50 Puntos</span>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Capacidad de Corte</span>
                                    <span class="text-slate-900 font-extrabold text-sm block mt-0.5">Ø 280 mm (60° Inglete)</span>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-extrabold text-slate-900">MEP SHARK 281 SXI EVO</h3>
                                    <p class="text-xs text-slate-500">Semiautomática hidráulica</p>
                                </div>
                                <a href="{{ route('catalog.ocasion') }}" 
                                   class="px-5 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-600 text-xs text-slate-950 font-bold transition-colors">
                                    Ver Ficha
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ── SLIDE 2: ALTA PRODUCCIÓN / DISCO ── -->
            <div x-show="activeSlide === 2"
                 x-transition:enter="transition-opacity duration-300 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-200 ease-in absolute inset-0 pointer-events-none"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full"
                 style="display: none;">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                    <!-- Left: Content -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/60 border border-emerald-600/40 text-xs font-semibold text-emerald-300">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>Alta Cadencia Industrial &bull; Corte sin Rebaba</span>
                        </div>

                        <h2 class="font-display font-extrabold text-3xl sm:text-5xl lg:text-6xl tracking-tight leading-[1.12] text-white">
                            Sierras de disco automáticas para <span class="text-emerald-400">corte ultra-rápido</span>.
                        </h2>

                        <p class="text-base sm:text-lg text-slate-300 font-normal leading-relaxed max-w-2xl">
                            Líneas de corte con hoja de metal duro diseñadas para producciones en masa de perfiles, macizos y tubos de acero. Tiempos de ciclo reducidos al segundo con acabado pulido.
                        </p>

                        <div class="pt-2 flex flex-wrap items-center gap-4">
                            <a href="{{ route('catalog.sierras-disco') }}" class="px-7 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-sm font-bold tracking-wide flex items-center gap-3 shadow-lg shadow-emerald-600/20 transition-all">
                                <span>Ver Gama Sierras de Disco</span>
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="{{ route('servicio-tecnico') }}" class="px-6 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white text-sm font-semibold tracking-wide border border-slate-700 transition-all">
                                Servicio Técnico Oficial
                            </a>
                        </div>

                        <!-- Metric Badges -->
                        <div class="pt-6 border-t border-slate-800/80 grid grid-cols-3 gap-6">
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-white tracking-tight">Velocex</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Corte de alta velocidad</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-white tracking-tight">TCT</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Hojas de metal duro</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-extrabold font-display text-emerald-400 tracking-tight">0 Rebaba</span>
                                <span class="text-xs text-slate-400 mt-0.5 block">Tolerancias micrométricas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Premium White Studio Showcase Card -->
                    <div class="lg:col-span-5">
                        <div class="bg-white rounded-3xl p-6 sm:p-7 shadow-2xl border border-slate-200/90 text-slate-900 flex flex-col justify-between h-[460px] min-h-[460px] relative">
                            <!-- Card Header -->
                            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                    Corte Ultra Rápido
                                </span>
                                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                                    Velocex Line
                                </span>
                            </div>

                            <!-- Machine Stage -->
                            <div class="relative flex items-center justify-center bg-slate-50/70 rounded-2xl p-4 border border-slate-100/90 h-52 my-1 group">
                                <img src="https://cuttingeuropean.com/wp-content/uploads/2024/12/VELOCEX-65_segatrice-a-disco-automatica-per-il-taglio-veloce.webp" 
                                     alt="MEP VELOCEX 65 Tronzadora automática de alta velocidad"
                                     class="max-h-44 w-auto object-contain filter drop-shadow-md transition-transform duration-300 group-hover:scale-105">
                            </div>

                            <!-- Technical Specs -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Capacidad Macizo</span>
                                    <span class="text-slate-900 font-extrabold text-sm block mt-0.5">Ø 65 mm / Cuadro 55mm</span>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Hoja de Sierra</span>
                                    <span class="text-slate-900 font-extrabold text-sm block mt-0.5">T.C.T. Metal Duro</span>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-extrabold text-slate-900">MEP VELOCEX 65</h3>
                                    <p class="text-xs text-slate-500">Automática CNC alta velocidad</p>
                                </div>
                                <a href="{{ route('catalog.sierras-disco') }}" 
                                   class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-xs text-white font-bold transition-colors">
                                    Ver Ficha
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- ══ CAROUSEL CONTROLS & PAGINATION ══ -->
        <div class="mt-10 sm:mt-12 pt-6 border-t border-slate-800/80 flex items-center justify-between">
            <!-- Slide Indicators -->
            <div class="flex items-center gap-3">
                <template x-for="(label, idx) in ['Sierras Industriales MEP', 'Maquinaria de Ocasión', 'Servicio Técnico SAT']" :key="idx">
                    <button type="button" 
                            @click="goTo(idx)" 
                            class="group flex items-center gap-2 py-2 px-3 rounded-lg text-xs font-semibold transition-all cursor-pointer"
                            :class="activeSlide === idx ? 'bg-slate-800 text-white border border-slate-700' : 'text-slate-400 hover:text-slate-200'">
                        <span class="w-2 h-2 rounded-full transition-all"
                              :class="activeSlide === idx ? 'bg-blue-400 w-4' : 'bg-slate-600 group-hover:bg-slate-400'"></span>
                        <span class="hidden sm:inline" x-text="label"></span>
                    </button>
                </template>
            </div>

            <!-- Arrow Buttons -->
            <div class="flex items-center gap-2">
                <button type="button" 
                        @click="prev()" 
                        class="w-10 h-10 rounded-xl bg-slate-900 border border-slate-800 hover:bg-slate-800 hover:border-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-colors cursor-pointer"
                        aria-label="Diapositiva anterior">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button type="button" 
                        @click="next()" 
                        class="w-10 h-10 rounded-xl bg-slate-900 border border-slate-800 hover:bg-slate-800 hover:border-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-colors cursor-pointer"
                        aria-label="Diapositiva siguiente">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- ─── INDUSTRIAL TRUST STRIP ──────────────────────────────────── -->
<section class="py-8 bg-white border-b border-slate-200 fade-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center lg:text-left">
            <div class="flex items-center justify-center lg:justify-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Distribuidor Homologado</h4>
                    <p class="text-xs text-slate-500">MEP Italia en España</p>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Respuesta SAT Rápida</h4>
                    <p class="text-xs text-slate-500">Técnicos propios en taller y campo</p>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Almacén de Recambios</h4>
                    <p class="text-xs text-slate-500">+5.000 referencias originales</p>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Garantía Certificada CE</h4>
                    <p class="text-xs text-slate-500">Puesta en marcha y formación</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── BENTO GRID: MAIN MACHINERY FAMILIES ───────────────────── -->
<section class="py-24 sm:py-32 bg-slate-50 border-b border-slate-200 fade-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20 space-y-4">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Gama de Ingeniería</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-slate-900 tracking-tight">
                Diseñadas para el máximo rendimiento industrial.
            </h2>
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                Cada máquina ha sido concebida para ofrecer precisión micrométrica, bajo mantenimiento y una durabilidad extrema en ciclos intensivos.
            </p>
        </div>

        <!-- 3-Card Bento Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            
            <!-- Bento 1: Sierras de Cinta -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-10 flex flex-col justify-between shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="16" rx="2" stroke-width="2"/>
                            <line x1="3" y1="12" x2="21" y2="12" stroke-width="2" stroke-dasharray="2 2"/>
                        </svg>
                    </div>

                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Capacidad Masiva</span>
                        <h3 class="text-2xl font-bold font-display text-slate-900 group-hover:text-blue-600 transition-colors">
                            Sierras de Cinta
                        </h3>
                    </div>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Control electrohidráulico para perfiles, vigas y macizos de gran envergadura. Modelos con doble ingletador y alimentador automático CNC.
                    </p>

                    <div class="space-y-3 pt-3 text-xs font-medium text-slate-700 border-t border-slate-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Capacidades de corte hasta Ø650 mm</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Inglete continuo desde -60° hasta +60°</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Mínimo desperdicio de viruta y corte frío</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="{{ route('catalog.sierras-cinta') }}" class="w-full py-3.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs flex items-center justify-between transition-colors">
                        <span>Ver catálogo de Sierras de Cinta</span>
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bento 2: Sierras de Disco -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-10 flex flex-col justify-between shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke-width="2"/>
                            <circle cx="12" cy="12" r="3" fill="currentColor"/>
                        </svg>
                    </div>

                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Velocidad Punta</span>
                        <h3 class="text-2xl font-bold font-display text-slate-900 group-hover:text-blue-600 transition-colors">
                            Sierras de Disco
                        </h3>
                    </div>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Corte ultra-rápido y limpio para tubos y perfiles metálicos. Modelos de alta producción Velocex y tronzadoras industriales Tiger y Cobra.
                    </p>

                    <div class="space-y-3 pt-3 text-xs font-medium text-slate-700 border-t border-slate-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Acabado pulido sin rebaba</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Tronzadoras con cabezal basculante</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Producción masiva en serie</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="{{ route('catalog.sierras-disco') }}" class="w-full py-3.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs flex items-center justify-between transition-colors">
                        <span>Ver catálogo de Sierras de Disco</span>
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bento 3: Aluminio y PVC -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-10 flex flex-col justify-between shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>

                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Cerramientos & Fachadas</span>
                        <h3 class="text-2xl font-bold font-display text-slate-900 group-hover:text-blue-600 transition-colors">
                            Aluminio y PVC
                        </h3>
                    </div>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Centros de mecanizado de 3 y 4 ejes, tronzadoras de doble cabezal de posicionamiento electrónico y líneas automáticas para carpintería.
                    </p>

                    <div class="space-y-3 pt-3 text-xs font-medium text-slate-700 border-t border-slate-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Doble cabezal CNC sincronizado</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Pantógrafos y fresadoras copiadoras</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 flex-shrink-0"></span>
                            <span>Centros de corte integral de barras</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="{{ route('catalog.aluminio-pvc') }}" class="w-full py-3.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs flex items-center justify-between transition-colors">
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

<!-- ─── FEATURED MACHINERY GRID ──────────────────────────── -->
<section class="py-24 sm:py-32 bg-white fade-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="space-y-2">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Modelos Disponibles</span>
                <h2 class="text-3xl sm:text-4xl font-display font-extrabold text-slate-900 tracking-tight">
                    Máquinas en Stock y Entrega Preferente
                </h2>
                <p class="text-base text-slate-500 max-w-xl">
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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            @forelse($featuredProducts as $product)
                @include('partials.product-card', ['product' => $product])
            @empty
                <div class="col-span-3 text-center py-16 text-slate-400">
                    No hay productos destacados disponibles en este momento.
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ─── INTERACTIVE MACHINE SELECTOR / ADVISOR ────────────────── -->
<section class="py-24 sm:py-32 bg-slate-950 text-white relative overflow-hidden border-t border-slate-800"
         x-data="{
             material: 'perfiles',
             cadence: 'serie',
             diameter: 'medium',
             getRecommendation() {
                 if (this.material === 'aluminio') {
                     return {
                         name: 'Línea de Corte o Tronzadora Doble Cabezal para Aluminio',
                         ref: 'MEP Cobra / Velox',
                         type: 'Disco Widia TCT (Carburo)',
                         reason: 'Corte a alta velocidad (hasta 3.000 RPM) con micro-lubricación y giro angular hasta 45°/90° sin rebabas ni deformación de perfilería lacada o extrusionada.',
                         speed: 'Ultra Rápido (< 5 seg / corte)',
                         finish: 'Espejo / Sin rebaba',
                         waste: 'Mínimo en viruta',
                         route: '{{ route('catalog.aluminio-pvc') }}',
                         tag: 'Recomendada para Carpintería & Fachadas'
                     };
                 }
                 if (this.material === 'tubos' && this.cadence !== 'taller') {
                     return {
                         name: 'Sierra de Disco Rápida Automática MEP Tiger / Velocex',
                         ref: 'TIGER 372 CNC / VELOCEX',
                         type: 'Sierra Circular HSS / Metal Duro',
                         reason: 'La solución óptima para tubos de pared fina y perfiles en grandes series. Ciclos automáticos ultracortos con alimentador CNC continuo y desbarbado integrado.',
                         speed: '3 a 8 segundos por ciclo',
                         finish: 'Corte limpio perpendicular',
                         waste: 'Disco de 2.5 mm',
                         route: '{{ route('catalog.sierras-disco') }}',
                         tag: 'Máxima Cadencia en Serie'
                     };
                 }
                 if (this.material === 'macizos' || this.diameter === 'large') {
                     return {
                         name: 'Sierra de Cinta Automática MEP Shark CNC de Doble Columna',
                         ref: 'SHARK 452 / 652 SXI EVO',
                         type: 'Sierra de Cinta Bimetal / Carburo',
                         reason: 'Estructura rígida de fundición para absorción de vibraciones en cortes de gran sección. Control electrohidráulico y velocidad de cinta inverter para aceros aleados e inox.',
                         speed: 'Corte frío constante',
                         finish: 'Tolerancia ±0.15 mm',
                         waste: 'Ancho de corte 1.1 mm (Mínima merma)',
                         route: '{{ route('catalog.sierras-cinta') }}',
                         tag: 'Alta Capacidad & Aceros Especiales'
                     };
                 }
                 if (this.cadence === 'taller') {
                     return {
                         name: 'Sierra de Cinta Manual o Semiautomática MEP Shark',
                         ref: 'SHARK 281 / 282 CCS',
                         type: 'Sierra de Cinta Versátil',
                         reason: 'Flexibilidad total para cambios frecuentes de perfil, corte a inglete continuo hasta 60° y fácil manejo con inversión contenida y fiabilidad contrastada.',
                         speed: 'Adaptado a piezas unitarias',
                         finish: 'Calidad industrial garantizada',
                         waste: 'Hoja bimetálica M42 estándar',
                         route: '{{ route('catalog.sierras-cinta') }}',
                         tag: 'Polivalencia para Taller Mecánico'
                     };
                 }
                 return {
                     name: 'Sierra de Cinta Automática MEP Shark NC 5.0 con CNC',
                     ref: 'SHARK 332-1 NC 5.0',
                     type: 'Sierra de Cinta Electrohidráulica',
                     reason: 'El estándar industrial por excelencia: corte automático programable en series mixtas, doble ingletador y alimentador automático paso a paso.',
                     speed: 'Ciclo continuo desatendido',
                     finish: 'Acabado homogéneo certificado',
                     waste: '1.2 mm de sangría',
                     route: '{{ route('catalog.sierras-cinta') }}',
                     tag: 'El estándar industrial más vendido'
                 };
             }
         }">

    <!-- Ambient Glows -->
    <div class="absolute -top-32 left-1/3 w-[600px] h-[350px] bg-blue-600/10 blur-[130px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-500/15 border border-blue-400/30 text-blue-300 text-xs font-bold uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                <span>Configurador Técnico Interactivo</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-white tracking-tight">
                ¿Qué máquina necesita exactamente su taller?
            </h2>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Seleccione las variables de su proceso productivo y nuestro recomendador técnico le indicará al instante la tecnología de corte más rentable.
            </p>
        </div>

        <!-- 2-Column Selector Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Left: Interactive Selectors -->
            <div class="lg:col-span-7 space-y-8 bg-slate-900/90 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-sm">
                
                <!-- Variable 1: Material -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-3 flex items-center justify-between">
                        <span>1. Material Principal a Cortar</span>
                        <span class="text-blue-400 font-normal lowercase">Paso 1 de 3</span>
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                        <button type="button" 
                                @click="material = 'perfiles'" 
                                class="p-3.5 rounded-2xl border text-left transition-all cursor-pointer flex flex-col justify-between h-24"
                                :class="material === 'perfiles' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block">Perfiles & Vigas</span>
                            <span class="text-[10px] opacity-75 leading-tight">Estructural, IPE, UPN</span>
                        </button>
                        <button type="button" 
                                @click="material = 'macizos'" 
                                class="p-3.5 rounded-2xl border text-left transition-all cursor-pointer flex flex-col justify-between h-24"
                                :class="material === 'macizos' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block">Macizos & Inox</span>
                            <span class="text-[10px] opacity-75 leading-tight">F-114, F-125, 316</span>
                        </button>
                        <button type="button" 
                                @click="material = 'tubos'" 
                                class="p-3.5 rounded-2xl border text-left transition-all cursor-pointer flex flex-col justify-between h-24"
                                :class="material === 'tubos' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block">Tubos Redondos</span>
                            <span class="text-[10px] opacity-75 leading-tight">Pared delgada/media</span>
                        </button>
                        <button type="button" 
                                @click="material = 'aluminio'" 
                                class="p-3.5 rounded-2xl border text-left transition-all cursor-pointer flex flex-col justify-between h-24"
                                :class="material === 'aluminio' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block">Aluminio / PVC</span>
                            <span class="text-[10px] opacity-75 leading-tight">No férricos y perfiles</span>
                        </button>
                    </div>
                </div>

                <!-- Variable 2: Cadence / Volume -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-3 flex items-center justify-between">
                        <span>2. Volumen y Frecuencia de Corte</span>
                        <span class="text-blue-400 font-normal lowercase">Paso 2 de 3</span>
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <button type="button" 
                                @click="cadence = 'taller'" 
                                class="p-4 rounded-2xl border text-left transition-all cursor-pointer"
                                :class="cadence === 'taller' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block mb-1">Mantenimiento / Taller</span>
                            <p class="text-[11px] opacity-75 leading-snug">Cortes unitarios o pequeños lotes bajo demanda manual.</p>
                        </button>
                        <button type="button" 
                                @click="cadence = 'serie'" 
                                class="p-4 rounded-2xl border text-left transition-all cursor-pointer"
                                :class="cadence === 'serie' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block mb-1">Producción Media</span>
                            <p class="text-[11px] opacity-75 leading-snug">Series regulares con ciclos semiautomáticos o NC.</p>
                        </button>
                        <button type="button" 
                                @click="cadence = 'continuo'" 
                                class="p-4 rounded-2xl border text-left transition-all cursor-pointer"
                                :class="cadence === 'continuo' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-xs font-bold block mb-1">Ciclo Continuo 24/7</span>
                            <p class="text-[11px] opacity-75 leading-snug">Alimentador automático para trabajo desatendido intensivo.</p>
                        </button>
                    </div>
                </div>

                <!-- Variable 3: Section / Diameter -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-3 flex items-center justify-between">
                        <span>3. Diámetro o Sección Máxima</span>
                        <span class="text-blue-400 font-normal lowercase">Paso 3 de 3</span>
                    </label>
                    <div class="grid grid-cols-3 gap-3">
                        <button type="button" 
                                @click="diameter = 'small'" 
                                class="p-3.5 rounded-2xl border text-center transition-all cursor-pointer"
                                :class="diameter === 'small' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-sm font-bold block">&lt; Ø 150 mm</span>
                            <span class="text-[10px] opacity-75">Piezas compactas</span>
                        </button>
                        <button type="button" 
                                @click="diameter = 'medium'" 
                                class="p-3.5 rounded-2xl border text-center transition-all cursor-pointer"
                                :class="diameter === 'medium' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-sm font-bold block">Ø 150 - 330 mm</span>
                            <span class="text-[10px] opacity-75">Gama media estándar</span>
                        </button>
                        <button type="button" 
                                @click="diameter = 'large'" 
                                class="p-3.5 rounded-2xl border text-center transition-all cursor-pointer"
                                :class="diameter === 'large' ? 'bg-blue-600 border-blue-500 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-800/80 border-slate-700/80 text-slate-300 hover:border-slate-600'">
                            <span class="text-sm font-bold block">&gt; Ø 330 mm</span>
                            <span class="text-[10px] opacity-75">Gran sección / vigas</span>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Right: Dynamic Live Recommendation Card -->
            <div class="lg:col-span-5 sticky top-28">
                <div class="bg-gradient-to-br from-slate-900 to-slate-850 border border-blue-500/30 rounded-3xl p-7 sm:p-8 shadow-2xl relative overflow-hidden">
                    
                    <!-- Decorative subtle accent -->
                    <div class="absolute -top-16 -right-16 w-40 h-40 bg-blue-500/20 blur-2xl rounded-full"></div>

                    <!-- Badge -->
                    <div class="flex items-center justify-between mb-5">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-500/20 text-blue-300 text-[11px] font-bold border border-blue-400/30">
                            <svg class="w-3.5 h-3.5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span x-text="getRecommendation().tag"></span>
                        </span>
                        <span class="text-[11px] text-slate-400 font-mono" x-text="getRecommendation().ref"></span>
                    </div>

                    <h3 class="text-2xl font-bold font-display text-white mb-2 leading-snug" x-text="getRecommendation().name"></h3>
                    <p class="text-xs text-blue-400 font-semibold mb-4" x-text="'Herramienta de corte: ' + getRecommendation().type"></p>

                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6 border-b border-slate-800 pb-5" x-text="getRecommendation().reason"></p>

                    <!-- Technical Specs Grid -->
                    <div class="grid grid-cols-3 gap-2.5 mb-7 text-center">
                        <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3">
                            <span class="text-[10px] text-slate-400 uppercase font-bold block mb-1">Velocidad</span>
                            <span class="text-xs font-bold text-white block" x-text="getRecommendation().speed"></span>
                        </div>
                        <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3">
                            <span class="text-[10px] text-slate-400 uppercase font-bold block mb-1">Acabado</span>
                            <span class="text-xs font-bold text-white block" x-text="getRecommendation().finish"></span>
                        </div>
                        <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3">
                            <span class="text-[10px] text-slate-400 uppercase font-bold block mb-1">Merma</span>
                            <span class="text-xs font-bold text-emerald-400 block" x-text="getRecommendation().waste"></span>
                        </div>
                    </div>

                    <!-- Direct Actions -->
                    <div class="space-y-3">
                        <button type="button" 
                                @click="$dispatch('open-quote-modal', { product: getRecommendation().name, ref: getRecommendation().ref })"
                                class="w-full py-4 px-6 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-lg shadow-blue-600/30 transition-all cursor-pointer">
                            <span>Solicitar Oferta Técnica</span>
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                        <a :href="getRecommendation().route" 
                           class="w-full py-3 px-6 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-300 hover:text-white font-semibold text-xs text-center block border border-slate-700 transition-colors">
                            Explorar Gama de Esta Categoría
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- ─── MEP PARTNERSHIP SHOWCASE ─────────────────────────── -->
<section class="py-24 sm:py-32 bg-slate-900 text-white relative overflow-hidden border-t border-b border-slate-800 fade-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-8 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-500/20 text-blue-300 border border-blue-400/30 text-xs font-bold uppercase tracking-wider">
                    Alianza Oficial de Fabricación
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-white tracking-tight leading-tight">
                    MEP Italia: Más de 60 años perfeccionando el corte de metales.
                </h2>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl">
                    Como distribuidores oficiales de MEP en España, le ofrecemos acceso directo al catálogo de última generación, soporte de ingeniería directo de fábrica y suministro de repuestos con garantía original.
                </p>

                <!-- 3 Spec Badges -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 pt-4 text-xs">
                    <div class="p-5 rounded-2xl bg-slate-800/80 border border-slate-700">
                        <span class="block text-blue-400 font-bold text-sm mb-1">Repuestos Oficiales</span>
                        <span class="text-slate-300 text-xs">Envío en 24/48h directo de almacén</span>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-800/80 border border-slate-700">
                        <span class="block text-blue-400 font-bold text-sm mb-1">Garantía Certificada</span>
                        <span class="text-slate-300 text-xs">Marcado CE y directiva de máquinas</span>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-800/80 border border-slate-700">
                        <span class="block text-blue-400 font-bold text-sm mb-1">Conectividad 4.0</span>
                        <span class="text-slate-300 text-xs">Telemetría y control remoto RC</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4">
                <div class="bg-slate-800/95 p-8 sm:p-10 rounded-3xl text-center space-y-5 border border-slate-700 shadow-2xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Soporte Técnico Especializado</span>
                    <h3 class="text-2xl font-bold font-display text-white">¿Ya cuenta con maquinaria MEP?</h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Nuestro SAT oficial realiza mantenimiento preventivo, revisiones de reductores y suministro de consumibles.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('servicio-tecnico') }}" class="block w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider transition-colors shadow-lg">
                            Solicitar Asistencia SAT MEP
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── INDUSTRY SECTORS & APPLICATIONS ────────────────────────── -->
<section class="py-24 sm:py-32 bg-white border-b border-slate-200 fade-up" x-data="{ activeSector: 0 }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="space-y-3">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Sectores de Aplicación</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-slate-900 tracking-tight">
                    Ingeniería adaptada a cada exigencia industrial.
                </h2>
                <p class="text-base sm:text-lg text-slate-600 max-w-2xl leading-relaxed">
                    Nuestras máquinas operan en las líneas de producción más exigentes de España, garantizando tolerancias críticas y retorno de inversión acelerado.
                </p>
            </div>
            
            <!-- Sector Selector Navigation Pills -->
            <div class="flex flex-wrap items-center gap-2 p-1.5 bg-slate-100 rounded-2xl border border-slate-200">
                <template x-for="(sec, idx) in [
                    { title: 'Estructuras & Vigas', icon: 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10' },
                    { title: 'Automoción & Tubo', icon: 'M13 10V3L4 14h7v7l9-11h-7z' },
                    { title: 'Calderería & Macizos', icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z' },
                    { title: 'Aluminio & Fachadas', icon: 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z' }
                ]" :key="idx">
                    <button type="button" 
                            @click="activeSector = idx"
                            class="px-4 py-2.5 rounded-xl text-xs font-bold transition-all cursor-pointer flex items-center gap-2"
                            :class="activeSector === idx ? 'bg-white text-blue-600 shadow-sm border border-slate-200/80' : 'text-slate-600 hover:text-slate-900'">
                        <span x-text="sec.title"></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- Dynamic Sector Showcase Card -->
        <div class="bg-slate-50 border border-slate-200/90 rounded-3xl p-8 sm:p-12 relative overflow-hidden">
            
            <!-- Sector 0: Estructuras & Vigas -->
            <div x-show="activeSector === 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0" class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-bold">
                        Estructuras Metálicas & Prefabricados
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-display font-extrabold text-slate-900 leading-tight">
                        Corte de vigas IPE, HEB y celosías con inglete continuo de 60° a izquierda y derecha.
                    </h3>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        En la construcción metálica, cada milímetro de desviación en el corte a inglete encarece el posterior armado y soldadura. Las sierras MEP incorporan bancadas sobredimensionadas con rotación angular micrométrica y apriete hidráulico sin deformación.
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-2">
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Capacidad Máx</span>
                            <span class="text-base font-extrabold text-slate-900 mt-1 block">Hasta 650 mm</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Inglete Dinámico</span>
                            <span class="text-base font-extrabold text-blue-600 mt-1 block">-60° / 0° / +60°</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Ahorro Soldadura</span>
                            <span class="text-base font-extrabold text-emerald-600 mt-1 block">Cero holguras</span>
                        </div>
                    </div>
                    <div class="pt-4 flex flex-wrap gap-4">
                        <a href="{{ route('catalog.sierras-cinta') }}" class="px-6 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold transition-colors">
                            Ver Sierras para Estructuras
                        </a>
                        <button type="button" @click="$dispatch('open-quote-modal', { product: 'Sierra para Estructuras y Vigas', ref: 'SECTOR-ESTRUCTURAS' })" class="px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 text-xs font-bold border border-slate-200 transition-colors cursor-pointer">
                            Consultar Estudio de Corte
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Máquina Destacada en Sector</span>
                    <h4 class="text-lg font-bold text-slate-900">MEP SHARK 452 / 652 SXI EVO</h4>
                    <p class="text-xs text-slate-500">Sierra semiautomática electrohidráulica para grandes perfiles estructurales.</p>
                    <div class="p-4 bg-slate-50 rounded-xl space-y-2 text-xs text-slate-700">
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Desarrollo de cinta</span>
                            <span class="font-bold">4500 x 34 x 1.1 mm</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Capacidad corte 0°</span>
                            <span class="font-bold">450 x 320 mm</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Control de cabezal</span>
                            <span class="font-bold text-blue-600">Hidráulico proporcional</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sector 1: Automoción & Tubo -->
            <div x-show="activeSector === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0" class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center" style="display: none;">
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">
                        Automoción & Componentes de Precisión
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-display font-extrabold text-slate-900 leading-tight">
                        Corte masivo continuo de tubos y ejes con ciclos de 3 a 7 segundos por pieza.
                    </h3>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        Para la fabricación de amortiguadores, conductos hidráulicos y casquillos mecanizados, la velocidad y la perpendicularidad son críticas. Las tronzadoras automáticas de disco garantizan ausencia total de rebaba interior y exterior con alimentador por paquete.
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-2">
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Cadencia</span>
                            <span class="text-base font-extrabold text-slate-900 mt-1 block">Hasta 1.200 pz/h</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Tolerancia Longitud</span>
                            <span class="text-base font-extrabold text-emerald-600 mt-1 block">± 0.08 mm</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Acabado</span>
                            <span class="text-base font-extrabold text-blue-600 mt-1 block">Sin desbarbado</span>
                        </div>
                    </div>
                    <div class="pt-4 flex flex-wrap gap-4">
                        <a href="{{ route('catalog.sierras-disco') }}" class="px-6 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold transition-colors">
                            Ver Tronzadoras Rápidas
                        </a>
                        <button type="button" @click="$dispatch('open-quote-modal', { product: 'Línea de Corte Rápido Automoción', ref: 'SECTOR-AUTO' })" class="px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 text-xs font-bold border border-slate-200 transition-colors cursor-pointer">
                            Solicitar Cadencia Estimada
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Máquina Destacada en Sector</span>
                    <h4 class="text-lg font-bold text-slate-900">MEP TIGER 372 CNC RC 4.0</h4>
                    <p class="text-xs text-slate-500">Sierra circular automática electrohidráulica de alta productividad con CNC táctil.</p>
                    <div class="p-4 bg-slate-50 rounded-xl space-y-2 text-xs text-slate-700">
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Diámetro de disco</span>
                            <span class="font-bold">Ø 370 mm HSS</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Carrera alimentador</span>
                            <span class="font-bold">1.000 mm (repetible)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Conectividad</span>
                            <span class="font-bold text-emerald-600">Industria 4.0 IoT</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sector 2: Calderería & Macizos -->
            <div x-show="activeSector === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0" class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center" style="display: none;">
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold">
                        Calderería Pesada & Mecanizado General
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-display font-extrabold text-slate-900 leading-tight">
                        Corte de barras macizas y aceros aleados para moldes con mínimo ancho de corte.
                    </h3>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        En aceros de alto valor (F-125 tratables, aceros de herramientas 1.2379 o inoxidables dúplex), cada milímetro de merma por corte supone miles de euros al año en viruta. La hoja fina bimetálica o de metal duro reduce al mínimo la pérdida de material.
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-2">
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Grosor de Sangría</span>
                            <span class="text-base font-extrabold text-emerald-600 mt-1 block">Solo 1.1 mm</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Dureza Material</span>
                            <span class="text-base font-extrabold text-slate-900 mt-1 block">Hasta 62 HRC</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Desviación Máx</span>
                            <span class="text-base font-extrabold text-blue-600 mt-1 block">&lt; 0.1 mm / 100mm</span>
                        </div>
                    </div>
                    <div class="pt-4 flex flex-wrap gap-4">
                        <a href="{{ route('catalog.sierras-cinta') }}" class="px-6 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold transition-colors">
                            Ver Sierras para Macizos
                        </a>
                        <button type="button" @click="$dispatch('open-quote-modal', { product: 'Sierra para Macizos y Calderería', ref: 'SECTOR-CALDERERIA' })" class="px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 text-xs font-bold border border-slate-200 transition-colors cursor-pointer">
                            Consultar Compatibilidad
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Máquina Destacada en Sector</span>
                    <h4 class="text-lg font-bold text-slate-900">MEP SHARK 332-1 NC 5.0</h4>
                    <p class="text-xs text-slate-500">Sierra automática electrohidráulica de doble columna con CNC para macizos y paquetes.</p>
                    <div class="p-4 bg-slate-50 rounded-xl space-y-2 text-xs text-slate-700">
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Corte redondo 0°</span>
                            <span class="font-bold">Ø 300 mm</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Inverter velocidad</span>
                            <span class="font-bold">15 - 100 m/min</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Tensado de cinta</span>
                            <span class="font-bold text-blue-600">Electrónico digital</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sector 3: Aluminio & Fachadas -->
            <div x-show="activeSector === 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0" class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center" style="display: none;">
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-100 text-cyan-800 text-xs font-bold">
                        Carpintería de Aluminio & Muro Cortina
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-display font-extrabold text-slate-900 leading-tight">
                        Corte simultáneo de doble inglete para perfilería lacada y rotura de puente térmico.
                    </h3>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        Los cerramientos contemporáneos y muros cortina requieren un ángulo de corte matemáticamente exacto para que el sellado de las juntas sea estanco. Las tronzadoras automáticas de doble cabezal sincronizan electrónicamente los dos cortes con posicionamiento brushless.
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-2">
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Velocidad Giro</span>
                            <span class="text-base font-extrabold text-slate-900 mt-1 block">3.000 RPM</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Longitud de Corte</span>
                            <span class="text-base font-extrabold text-cyan-600 mt-1 block">Hasta 5.000 mm</span>
                        </div>
                        <div class="bg-white p-4 rounded-2xl border border-slate-200">
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Presión Mordazas</span>
                            <span class="text-base font-extrabold text-blue-600 mt-1 block">Anti-marcado perfil</span>
                        </div>
                    </div>
                    <div class="pt-4 flex flex-wrap gap-4">
                        <a href="{{ route('catalog.aluminio-pvc') }}" class="px-6 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold transition-colors">
                            Ver Maquinaria Aluminio y PVC
                        </a>
                        <button type="button" @click="$dispatch('open-quote-modal', { product: 'Tronzadora Doble Cabezal Aluminio', ref: 'SECTOR-ALUMINIO' })" class="px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 text-xs font-bold border border-slate-200 transition-colors cursor-pointer">
                            Configurar Línea Completa
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Máquina Destacada en Sector</span>
                    <h4 class="text-lg font-bold text-slate-900">MEP COBRA 352 / VELOX</h4>
                    <p class="text-xs text-slate-500">Tronzadora de disco de widia con cabezal basculante y lubricación por microgoteo.</p>
                    <div class="p-4 bg-slate-50 rounded-xl space-y-2 text-xs text-slate-700">
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Disco TCT</span>
                            <span class="font-bold">Ø 350 mm widia</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-200/60 pb-2">
                            <span class="text-slate-500">Rotación angular</span>
                            <span class="font-bold">45° izq - 45° der</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Superficie de mesa</span>
                            <span class="font-bold text-cyan-600">Rectificada anti-rayaduras</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ─── PLAN RENOVE & OCASIÓN ────────────────── -->
<section class="py-24 sm:py-32 bg-slate-50 border-b border-slate-200 fade-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block">Programa de Recompra</span>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-slate-900 tracking-tight leading-tight">
                    Plan Renove. <br>
                    <span class="text-slate-400 font-normal">Entregue su máquina.</span> <br>
                    Estrene precisión.
                </h2>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    Tasamos su sierra de cinta o disco usada sin importar la marca ni los años de servicio. Su valor se descuenta de forma inmediata de su nueva inversión, con recogida y puesta en marcha coordinadas.
                </p>

                <div class="p-6 sm:p-8 rounded-2xl bg-white border border-slate-200 shadow-sm space-y-3">
                    <div class="flex items-center gap-2 text-amber-700 font-bold text-sm">
                        <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>Ventajas del Plan Renove</span>
                    </div>
                    <ul class="text-xs sm:text-sm text-slate-600 space-y-2 font-normal">
                        <li>&bull; Tasación técnica en menos de 24 horas laborables.</li>
                        <li>&bull; Retirada y transporte gestionado por nuestros técnicos.</li>
                        <li>&bull; Transición sin paradas improductivas en su línea de corte.</li>
                    </ul>
                </div>

                <div class="pt-2 flex flex-wrap gap-4">
                    <a href="{{ route('plan-renove') }}" class="px-7 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold tracking-wide transition-colors">
                        Tasación Gratuita Online
                    </a>
                    <a href="{{ route('catalog.ocasion') }}" class="px-7 py-4 rounded-xl bg-slate-200 hover:bg-slate-300 text-slate-800 text-xs font-bold tracking-wide transition-colors">
                        Ver Stock de Ocasión
                    </a>
                </div>
            </div>

            <!-- Right: Stock Cards Showcase -->
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    @forelse($secondHandProducts as $product)
                        @include('partials.product-card', ['product' => $product, 'showCategory' => false])
                    @empty
                        <div class="col-span-2 bg-white rounded-3xl border border-slate-200 p-10 text-center text-slate-500">
                            Consulte el stock disponible en taller llamando al <a href="tel:+34938498456" class="text-blue-600 font-bold">+34 93 849 84 56</a>.
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── TECHNICAL SERVICE (SAT) SECTION ────────────────────────────── -->
<section class="py-24 sm:py-32 bg-white fade-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20 space-y-4">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Soporte Post-Venta</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-slate-900 tracking-tight">
                Servicio Técnico Propio de Principio a Fin
            </h2>
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                Nuestros ingenieros mecánicos y eléctricos se encargan de la instalación, calibración con galgas de precisión y suministro continuo de recambios y consumibles.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-slate-50 rounded-2xl border border-slate-200 p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <span class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-base mb-5">01</span>
                    <h3 class="text-lg font-bold text-slate-900">Puesta en Marcha</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed">
                        Calibración geométrica in situ, comprobación de perpendicularidad y formación operativa a su personal.
                    </p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200 p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <span class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-base mb-5">02</span>
                    <h3 class="text-lg font-bold text-slate-900">Mantenimiento</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed">
                        Planes programados para evitar paradas: revisión de guías de widia, presión de mordazas y circuitos hidráulicos.
                    </p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200 p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <span class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-base mb-5">03</span>
                    <h3 class="text-lg font-bold text-slate-900">Recambios Originales</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed">
                        Más de 5.000 referencias en almacén: bombas de taladrina, platos de corte, reductores y sensores de fin de carrera.
                    </p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200 p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <span class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-base mb-5">04</span>
                    <h3 class="text-lg font-bold text-slate-900">Cintas & Discos</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed">
                        Soldadura de hojas de cinta bimetálicas M42, M51 y discos de corte adaptados al tipo exacto de acero o aleación.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-14 text-center">
            <a href="{{ route('servicio-tecnico') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs tracking-wider transition-colors shadow-md">
                <span>Ver Servicios Técnicos SAT Oficial</span>
                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- ─── SHOWROOM & TESTING CENTER SECTION ───────────────────────── -->
<section class="py-24 sm:py-32 bg-slate-900 text-white relative overflow-hidden border-t border-slate-800 fade-up">
    <!-- Subtle ambient glow -->
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 blur-[130px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Info -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-500/20 text-blue-300 border border-blue-400/30 text-xs font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span>Showroom Permanente & Banco de Pruebas</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-white tracking-tight leading-tight">
                    No decida sobre plano: <br class="hidden sm:inline">
                    <span class="text-blue-400">corte su material</span> antes de comprar.
                </h2>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl">
                    Cada aleación reacciona de forma única al avance y velocidad de la cinta. Le invitamos a comprobar las tolerancias reales, la rugosidad superficial y los tiempos de ciclo con sus propias piezas.
                </p>

                <!-- 2 Action Paths Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pt-3">
                    <div class="p-6 rounded-2xl bg-slate-800/90 border border-slate-700/80 space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <h4 class="text-base font-bold text-white">Opción A: Visita Showroom</h4>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            Venga a nuestras instalaciones centrales en Fuenlabrada (Madrid). Maquinaria conectada bajo tensión para demostraciones en directo.
                        </p>
                        <button type="button" @click="$dispatch('open-quote-modal', { product: 'Cita en Showroom Madrid', ref: 'VISITA-SHOWROOM' })" class="text-xs font-bold text-blue-400 hover:text-blue-300 inline-flex items-center gap-1.5 cursor-pointer pt-1">
                            <span>Agendar visita técnica</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-800/90 border border-slate-700/80 space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h4 class="text-base font-bold text-white">Opción B: Envío de Muestra</h4>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            Envíenos una barra o muestra de su perfil por mensajería. Le devolvemos el informe técnico de corte y vídeo 4K del ciclo.
                        </p>
                        <button type="button" @click="$dispatch('open-quote-modal', { product: 'Ensayo de Corte con Muestra', ref: 'ENSAYO-MUESTRA' })" class="text-xs font-bold text-blue-400 hover:text-blue-300 inline-flex items-center gap-1.5 cursor-pointer pt-1">
                            <span>Solicitar ensayo gratuito</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Showcase Card -->
            <div class="lg:col-span-5">
                <div class="bg-gradient-to-b from-slate-800 to-slate-850 p-8 sm:p-10 rounded-3xl border border-slate-700 shadow-2xl space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Protocolo de Ensayo Certificado</span>
                    <h3 class="text-2xl font-bold font-display text-white">¿Qué incluye el informe técnico de corte?</h3>
                    
                    <ul class="space-y-3.5 text-xs text-slate-300">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <span><strong>Cronometraje exacto:</strong> Tiempo de ciclo completo incluyendo bajada, corte y retroceso.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <span><strong>Rugosidad superficial (Ra):</strong> Medición de perpendicularidad y calidad de la cara cortada.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <span><strong>Prescripción de consumibles:</strong> Paso de diente óptimo (TPI) y parámetros de avance/RPM.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <span><strong>Grabación en vídeo:</strong> Registro visual detallado del proceso para su equipo de producción.</span>
                        </li>
                    </ul>

                    <div class="pt-4 border-t border-slate-700/80">
                        <button type="button" 
                                @click="$dispatch('open-quote-modal', { product: 'Ensayo Técnico en Showroom', ref: 'PROTOCOLO-SHOWROOM' })"
                                class="w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider transition-all shadow-lg shadow-blue-600/30 flex items-center justify-center gap-2 cursor-pointer">
                            <span>Solicitar Prueba de Corte Sin Coste</span>
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ─── B2B RENTING & FINANCING SIMULATOR ────────────────────────── -->
<section class="py-24 sm:py-32 bg-slate-50 border-t border-slate-200 fade-up"
         x-data="{
             amount: 24000,
             months: 48,
             get monthlyFee() {
                 // Formula standard B2B industrial leasing approx: factor based on term
                 let factors = { 36: 0.0315, 48: 0.0245, 60: 0.0205 };
                 let f = factors[this.months] || 0.0245;
                 return Math.round(this.amount * f);
             },
             get dailyEquivalent() {
                 return (this.monthlyFee / 22).toFixed(1);
             }
         }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Financiación Industrial B2B</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-slate-900 tracking-tight">
                Renting Tecnológico. Cero desembolso inicial.
            </h2>
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                Estrene maquinaria de última generación sin descapitalizar su empresa ni consumir líneas de crédito bancario. Cuotas 100% deducibles desde el primer día.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- Left: Interactive Simulator -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-slate-200 shadow-sm space-y-8">
                
                <!-- Amount Slider -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Valor de la Maquinaria</label>
                        <span class="text-2xl font-extrabold font-display text-blue-600" x-text="new Intl.NumberFormat('es-ES', { style: 'currency', currency: 'EUR', maximumFractionDigits: 0 }).format(amount)"></span>
                    </div>
                    <input type="range" 
                           min="8000" 
                           max="70000" 
                           step="1000" 
                           x-model.number="amount" 
                           class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                    <div class="flex justify-between text-[11px] text-slate-400 font-medium">
                        <span>8.000 € (Taller)</span>
                        <span>35.000 € (Automática CNC)</span>
                        <span>70.000 € (Línea Integral)</span>
                    </div>
                </div>

                <!-- Term Buttons -->
                <div class="space-y-3">
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Plazo del Contrato</label>
                    <div class="grid grid-cols-3 gap-3">
                        <button type="button" 
                                @click="months = 36"
                                class="py-3 px-4 rounded-xl border text-center transition-all cursor-pointer"
                                :class="months === 36 ? 'bg-blue-600 border-blue-500 text-white font-bold shadow-md shadow-blue-600/20' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-slate-100 font-medium'">
                            <span class="text-sm block">36 Meses</span>
                            <span class="text-[10px] opacity-80">3 años</span>
                        </button>
                        <button type="button" 
                                @click="months = 48"
                                class="py-3 px-4 rounded-xl border text-center transition-all cursor-pointer"
                                :class="months === 48 ? 'bg-blue-600 border-blue-500 text-white font-bold shadow-md shadow-blue-600/20' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-slate-100 font-medium'">
                            <span class="text-sm block">48 Meses</span>
                            <span class="text-[10px] opacity-80">Recomendado</span>
                        </button>
                        <button type="button" 
                                @click="months = 60"
                                class="py-3 px-4 rounded-xl border text-center transition-all cursor-pointer"
                                :class="months === 60 ? 'bg-blue-600 border-blue-500 text-white font-bold shadow-md shadow-blue-600/20' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-slate-100 font-medium'">
                            <span class="text-sm block">60 Meses</span>
                            <span class="text-[10px] opacity-80">Cuota mínima</span>
                        </button>
                    </div>
                </div>

                <!-- Live Calculated Quote Display -->
                <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-xs uppercase font-bold text-slate-400 block tracking-wider">Cuota Mensual Estimada</span>
                        <div class="flex items-baseline gap-2 mt-1">
                            <span class="text-3xl sm:text-4xl font-extrabold font-display text-slate-900" x-text="monthlyFee + ' €/mes'"></span>
                            <span class="text-xs text-slate-500">+ IVA</span>
                        </div>
                    </div>
                    <div class="sm:text-right border-t sm:border-t-0 sm:border-l border-slate-200 pt-3 sm:pt-0 sm:pl-6">
                        <span class="text-[11px] text-slate-500 block">Equivalente por día hábil:</span>
                        <span class="text-lg font-bold text-emerald-600" x-text="'~' + dailyEquivalent + ' €/día'"></span>
                    </div>
                </div>

                <div>
                    <button type="button" 
                            @click="$dispatch('open-quote-modal', { product: 'Estudio de Renting ' + amount + '€ a ' + months + ' meses', ref: 'RENTING-' + months + 'M' })"
                            class="w-full py-4 px-6 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-lg shadow-blue-600/20 transition-all cursor-pointer">
                        <span>Solicitar Estudio de Financiación Rápido</span>
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                    <p class="text-[11px] text-slate-400 text-center mt-2.5">Aprobación financiera en 24-48 horas con solo CIF y modelo 200/390.</p>
                </div>

            </div>

            <!-- Right: 4 Financial Advantages -->
            <div class="lg:col-span-5 space-y-4">
                <div class="p-6 bg-white rounded-2xl border border-slate-200 flex items-start gap-4 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l-2-1-2 1-2-1-2 1-2-1-2 1-2-1"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">100% Gasto Deducible</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                            Al considerarse gasto operativo (OPEX) y no inversión inmovilizada, la cuota íntegra se deduce en el Impuesto sobre Sociedades.
                        </p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl border border-slate-200 flex items-start gap-4 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">CIRBE Bancaria Intacta</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                            No computa como endeudamiento financiero en Banco de España, manteniendo intactas sus pólizas de crédito para compras de material.
                        </p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl border border-slate-200 flex items-start gap-4 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">Seguro a Todo Riesgo Incluido</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                            La máquina está asegurada contra averías internas, daños eléctricos, incendios y robo durante toda la vigencia del contrato.
                        </p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl border border-slate-200 flex items-start gap-4 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">Renovación o Propiedad Final</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                            Al vencer el contrato usted decide: renovar por el último modelo del mercado o adquirir la propiedad por una cuota residual mínima.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ─── FAQ INDUSTRIAL SECTION ──────────────────────────────────────── -->
<section class="py-24 sm:py-32 bg-slate-50 border-t border-slate-200" x-data="{ active: null }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        <div class="text-center mb-16 space-y-3">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Dudas Habituales</span>
            <h2 class="text-3xl sm:text-4xl font-display font-extrabold text-slate-900">Preguntas Frecuentes</h2>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden p-6 shadow-xs">
                <button type="button" @click="active = active === 1 ? null : 1" class="w-full text-left font-bold text-base text-slate-900 flex items-center justify-between cursor-pointer">
                    <span>¿Cuándo elegir sierra de cinta frente a sierra de disco?</span>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform" :class="{ 'rotate-180 text-blue-600': active === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 1" x-collapse class="text-sm text-slate-600 leading-relaxed pt-4 border-t border-slate-100 mt-4">
                    Las <strong>sierras de cinta</strong> son la elección idónea para cortes macizos de gran diámetro, perfiles estructurales pesados y paquetes de barras con un corte frío y mínimo desperdicio. Las <strong>sierras de disco</strong> destacan por su velocidad y acabado pulido en tubos y perfiles delgados.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden p-6 shadow-xs">
                <button type="button" @click="active = active === 2 ? null : 2" class="w-full text-left font-bold text-base text-slate-900 flex items-center justify-between cursor-pointer">
                    <span>¿Qué garantía ofrecen las máquinas de ocasión?</span>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform" :class="{ 'rotate-180 text-blue-600': active === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 2" x-collapse class="text-sm text-slate-600 leading-relaxed pt-4 border-t border-slate-100 mt-4">
                    Cada máquina usada se somete a un protocolo de verificación de más de 30 puntos en nuestro taller (revisión de tolerancias, rectificado de bancadas, bombas y mandos eléctricos). Se entregan garantizadas y con opción de prueba presencial previa.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden p-6 shadow-xs">
                <button type="button" @click="active = active === 3 ? null : 3" class="w-full text-left font-bold text-base text-slate-900 flex items-center justify-between cursor-pointer">
                    <span>¿Realizan envíos y puesta en marcha en toda España?</span>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform" :class="{ 'rotate-180 text-blue-600': active === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="active === 3" x-collapse class="text-sm text-slate-600 leading-relaxed pt-4 border-t border-slate-100 mt-4">
                    Sí, coordinamos el transporte industrial con descarga y disponemos de técnicos de campo para la puesta en marcha, nivelación y formación técnica de sus operarios en toda la península.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── FINAL CTA BANNER ───────────────────── -->
<section class="py-24 sm:py-28 bg-slate-950 text-white text-center relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl relative z-10 space-y-6">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold tracking-tight text-white leading-tight">
            Eleve la precisión de corte en su taller.
        </h2>
        <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
            Consulte con nuestros ingenieros de corte para recibir una propuesta técnica a medida de sus piezas y materiales.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-6">
            <button type="button" 
                    @click="$dispatch('open-quote-modal')"
                    class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs uppercase tracking-wider font-bold shadow-lg transition-colors cursor-pointer">
                Solicitar Estudio Técnico
            </button>
            <a href="tel:+34938498456" class="px-8 py-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-white text-xs uppercase tracking-wider font-bold border border-slate-700 transition-colors">
                Llamar: +34 93 849 84 56
            </a>
        </div>
    </div>
</section>
@endsection
