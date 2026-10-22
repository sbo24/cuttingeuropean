<?php $__env->startSection('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal, Sierras de Cinta y Disco'); ?>
<?php $__env->startSection('meta_description', 'Líderes en comercialización de sierras de cinta para metal, sierras de disco MEP, líneas de corte, maquinaria de ocasión revisada y servicio técnico oficial en toda España.'); ?>

<?php $__env->startSection('content'); ?>
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
                            <a href="<?php echo e(route('catalog.sierras-cinta')); ?>" class="px-6 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white text-sm font-semibold tracking-wide border border-slate-700 transition-all">
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
                            <a href="<?php echo e(route('catalog.ocasion')); ?>" class="px-7 py-3.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-slate-950 text-sm font-bold tracking-wide flex items-center gap-3 shadow-lg shadow-amber-500/20 transition-all">
                                <span>Ver Parque de Ocasión</span>
                                <svg class="w-4 h-4 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="<?php echo e(route('plan-renove')); ?>" class="px-6 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white text-sm font-semibold tracking-wide border border-slate-700 transition-all">
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
                                <a href="<?php echo e(route('catalog.ocasion')); ?>" 
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
                            <a href="<?php echo e(route('catalog.sierras-disco')); ?>" class="px-7 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-sm font-bold tracking-wide flex items-center gap-3 shadow-lg shadow-emerald-600/20 transition-all">
                                <span>Ver Gama Sierras de Disco</span>
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="<?php echo e(route('servicio-tecnico')); ?>" class="px-6 py-3.5 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-slate-200 hover:text-white text-sm font-semibold tracking-wide border border-slate-700 transition-all">
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
                                <a href="<?php echo e(route('catalog.sierras-disco')); ?>" 
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
                    <a href="<?php echo e(route('catalog.sierras-cinta')); ?>" class="w-full py-3.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs flex items-center justify-between transition-colors">
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
                    <a href="<?php echo e(route('catalog.sierras-disco')); ?>" class="w-full py-3.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs flex items-center justify-between transition-colors">
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
                    <a href="<?php echo e(route('catalog.aluminio-pvc')); ?>" class="w-full py-3.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 font-semibold text-xs flex items-center justify-between transition-colors">
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
            <a href="<?php echo e(route('catalog.sierras-cinta')); ?>" class="inline-flex items-center gap-2 text-xs font-bold tracking-wider text-blue-600 hover:text-blue-700">
                <span>Ver Todos los Modelos</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            <?php $__empty_1 = true; $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('partials.product-card', ['product' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-3 text-center py-16 text-slate-400">
                    No hay productos destacados disponibles en este momento.
                </div>
            <?php endif; ?>
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
                        <a href="<?php echo e(route('servicio-tecnico')); ?>" class="block w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider transition-colors shadow-lg">
                            Solicitar Asistencia SAT MEP
                        </a>
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
                    <a href="<?php echo e(route('plan-renove')); ?>" class="px-7 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold tracking-wide transition-colors">
                        Tasación Gratuita Online
                    </a>
                    <a href="<?php echo e(route('catalog.ocasion')); ?>" class="px-7 py-4 rounded-xl bg-slate-200 hover:bg-slate-300 text-slate-800 text-xs font-bold tracking-wide transition-colors">
                        Ver Stock de Ocasión
                    </a>
                </div>
            </div>

            <!-- Right: Stock Cards Showcase -->
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <?php $__empty_1 = true; $__currentLoopData = $secondHandProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php echo $__env->make('partials.product-card', ['product' => $product, 'showCategory' => false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-2 bg-white rounded-3xl border border-slate-200 p-10 text-center text-slate-500">
                            Consulte el stock disponible en taller llamando al <a href="tel:+34938498456" class="text-blue-600 font-bold">+34 93 849 84 56</a>.
                        </div>
                    <?php endif; ?>
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
            <a href="<?php echo e(route('servicio-tecnico')); ?>" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs tracking-wider transition-colors shadow-md">
                <span>Ver Servicios Técnicos SAT Oficial</span>
                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\home.blade.php ENDPATH**/ ?>