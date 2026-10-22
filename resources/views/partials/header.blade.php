<header x-data="{ mobileMenuOpen: false, catalogOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="sticky top-0 z-50 transition-all duration-300 backdrop-blur-2xl"
        :class="scrolled ? 'bg-white/80 border-b border-gray-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.04)]' : 'bg-white/95 border-b border-gray-100'">
    
    <!-- Topbar: Apple Minimalist Dark Slate Ribbon -->
    <div class="bg-gray-950/95 text-gray-300 text-[11px] py-1.5 border-b border-white/10 tracking-wide font-medium">
        <div class="container mx-auto flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-5">
                <span class="inline-flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(52,211,153,0.8)] animate-pulse"></span>
                    <span class="text-gray-300 tracking-wider uppercase text-[10px] font-semibold">Distribuidor Oficial MEP &bull; Maquinaria de Alta Precisión</span>
                </span>
                <span class="hidden md:inline-flex items-center gap-1.5 text-gray-400">
                    <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Lun - Vie: 08:00 - 18:00</span>
                </span>
            </div>

            <div class="flex items-center gap-4 text-gray-400 text-[11px]">
                <a href="tel:+34938498456" class="flex items-center gap-1.5 text-gray-200 hover:text-white transition-colors">
                    <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span class="font-semibold">+34 93 849 84 56</span>
                </a>
                <span class="text-gray-700">|</span>
                <a href="mailto:info@cuttingeuropean.com" class="hidden sm:flex items-center gap-1.5 hover:text-white transition-colors">
                    <span>info@cuttingeuropean.com</span>
                </a>
                <span class="text-gray-700 hidden sm:inline">|</span>
                <a href="{{ route('servicio-tecnico') }}" class="text-blue-400 hover:text-blue-300 font-semibold flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                    <span>SAT Directo</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="container mx-auto">
        <div class="flex items-center justify-between h-18 transition-all duration-300" :class="scrolled ? 'h-16' : 'h-20'">
            <!-- Apple-style Minimal Industrial Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                <div class="relative w-10 h-10 rounded-2xl bg-gradient-to-b from-gray-900 to-gray-950 p-[1px] shadow-[0_4px_14px_rgba(0,0,0,0.15)] group-hover:shadow-[0_4px_20px_rgba(37,99,235,0.3)] transition-all duration-300">
                    <div class="w-full h-full rounded-2xl bg-gray-950 flex items-center justify-center text-white border border-white/10 group-hover:border-blue-500/50 transition-colors">
                        <svg class="w-5 h-5 text-blue-400 transform group-hover:rotate-45 transition-transform duration-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/>
                            <circle cx="12" cy="12" r="3" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <span class="font-display font-black text-xl tracking-tight text-gray-950 block leading-none">
                        CUTTING<span class="text-blue-600">EUROPEAN</span>
                    </span>
                    <span class="text-[9px] uppercase font-bold tracking-[0.2em] text-gray-400 block mt-1">
                        Precision Metal Systems
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links: Apple Pill Navbar -->
            <nav class="hidden xl:flex items-center gap-1 bg-gray-100/70 p-1.5 rounded-full border border-gray-200/60 shadow-[inset_0_1px_2px_rgba(0,0,0,0.03)] text-xs font-semibold text-gray-700">
                <a href="{{ route('home') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('home') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                    Inicio
                </a>

                <!-- Dropdown: Sierras de Cinta -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('catalog.sierras-cinta') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 flex items-center gap-1.5 {{ request()->is('sierras-de-cinta*') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                        <span>Sierras de Cinta</span>
                        <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180 text-blue-600': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <!-- Apple Frosted Glass Dropdown -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2 scale-98"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-98"
                         class="absolute top-full left-0 w-80 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.15)] border border-gray-200/80 p-3 mt-2 z-50">
                        <a href="{{ route('catalog.sierras-cinta') }}" class="block p-2.5 rounded-xl bg-blue-50/80 hover:bg-blue-100/80 transition-colors">
                            <span class="block text-xs font-bold text-blue-700 uppercase tracking-wider">Gama Completa Sierras de Cinta</span>
                            <span class="block text-[11px] text-blue-600/80 mt-0.5">Automáticas, semiautomáticas y manuales MEP &rarr;</span>
                        </a>
                        <div class="h-px bg-gray-100 my-2"></div>
                        <div class="space-y-0.5 text-xs">
                            <a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Automáticas NC / CNC</span>
                                <span class="text-[10px] text-gray-400">Shark NC</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Semiautomáticas</span>
                                <span class="text-[10px] text-gray-400">Hidráulicas</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Manuales de Taller</span>
                                <span class="text-[10px] text-gray-400">Alta robustez</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-cinta-horizontales') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Horizontales</span>
                                <span class="text-[10px] text-gray-400">Gran capacidad</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-cinta-de-doble-ingletador') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Doble Ingletador (-60°/+60°)</span>
                                <span class="text-[10px] text-gray-400">Angular</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown: Sierras de Disco -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('catalog.sierras-disco') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 flex items-center gap-1.5 {{ request()->is('sierras-de-disco*') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                        <span>Sierras de Disco</span>
                        <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180 text-blue-600': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2 scale-98"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-98"
                         class="absolute top-full left-0 w-80 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.15)] border border-gray-200/80 p-3 mt-2 z-50">
                        <a href="{{ route('catalog.sierras-disco') }}" class="block p-2.5 rounded-xl bg-blue-50/80 hover:bg-blue-100/80 transition-colors">
                            <span class="block text-xs font-bold text-blue-700 uppercase tracking-wider">Catálogo Sierras de Disco</span>
                            <span class="block text-[11px] text-blue-600/80 mt-0.5">Corte rápido para tubos y perfiles &rarr;</span>
                        </a>
                        <div class="h-px bg-gray-100 my-2"></div>
                        <div class="space-y-0.5 text-xs">
                            <a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Velocex Corte Rápido</span>
                                <span class="text-[10px] text-gray-400">Alta cadencia</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-disco-automaticas') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Automáticas Industriales</span>
                                <span class="text-[10px] text-gray-400">Producción</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-disco-semiautomaticas') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Semiautomáticas Tiger/Cobra</span>
                                <span class="text-[10px] text-gray-400">Versátiles</span>
                            </a>
                            <a href="{{ route('legacy.sierras-de-disco-manuales') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Tronzadoras Manuales</span>
                                <span class="text-[10px] text-gray-400">Precisión</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown: Aluminio & PVC -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('catalog.aluminio-pvc') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 flex items-center gap-1.5 {{ request()->is('aluminio-pvc*') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                        <span>Aluminio / PVC</span>
                        <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180 text-blue-600': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2 scale-98"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-98"
                         class="absolute top-full left-0 w-80 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.15)] border border-gray-200/80 p-3 mt-2 z-50">
                        <a href="{{ route('catalog.aluminio-pvc') }}" class="block p-2.5 rounded-xl bg-blue-50/80 hover:bg-blue-100/80 transition-colors">
                            <span class="block text-xs font-bold text-blue-700 uppercase tracking-wider">Corte de Aluminio y PVC</span>
                            <span class="block text-[11px] text-blue-600/80 mt-0.5">Doble cabezal, centros y pantógrafos &rarr;</span>
                        </a>
                        <div class="h-px bg-gray-100 my-2"></div>
                        <div class="space-y-0.5 text-xs">
                            <a href="{{ route('legacy.maquinas-de-corte-de-doble-cabezal') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Doble Cabezal CNC</span>
                                <span class="text-[10px] text-gray-400">Cerramientos</span>
                            </a>
                            <a href="{{ route('legacy.maquinas-de-corte-de-un-solo-cabezal') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Un Solo Cabezal</span>
                                <span class="text-[10px] text-gray-400">Disco ascendente</span>
                            </a>
                            <a href="{{ route('legacy.lineas-automaticas') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Líneas Automáticas</span>
                                <span class="text-[10px] text-gray-400">Flujo continuo</span>
                            </a>
                            <a href="{{ route('legacy.centros-de-trabajo') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Centros de Mecanizado</span>
                                <span class="text-[10px] text-gray-400">3-4 ejes</span>
                            </a>
                            <a href="{{ route('legacy.pantografos') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-colors">
                                <span>Pantógrafos Copiadores</span>
                                <span class="text-[10px] text-gray-400">Fresado</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('catalog.ocasion') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('catalog.ocasion') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                    <span>Ocasión</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                </a>

                <a href="{{ route('servicio-tecnico') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('servicio-tecnico') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                    SAT Oficial
                </a>

                <a href="{{ route('plan-renove') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('plan-renove') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                    Plan Renove
                </a>

                <a href="{{ route('about') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('about') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                    Empresa
                </a>

                <a href="{{ route('contact') }}" class="px-3.5 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-white text-gray-950 shadow-sm font-bold' : 'hover:text-gray-950 hover:bg-white/50' }}">
                    Contacto
                </a>
            </nav>

            <!-- Actions / Apple Pill Button -->
            <div class="hidden sm:flex items-center gap-3">
                <button type="button" 
                        @click="$dispatch('open-quote-modal')"
                        class="apple-btn-primary px-5 py-2.5 text-white font-semibold text-xs tracking-wide flex items-center gap-2 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Pedir Presupuesto</span>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex xl:hidden items-center gap-2">
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="p-2 rounded-full text-gray-700 hover:text-gray-950 hover:bg-gray-100 cursor-pointer focus:outline-none transition-colors"
                        aria-label="Abrir menú">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer: Frosted Glass -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-250"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="xl:hidden bg-white/95 backdrop-blur-2xl border-b border-gray-200 px-6 py-6 space-y-4 shadow-2xl"
         style="display: none;">
        <div class="space-y-1 font-semibold text-sm text-gray-800">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100">Inicio</a>
            
            <div x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="w-full flex items-center justify-between px-3 py-2 rounded-xl hover:bg-gray-100 text-left">
                    <span>Sierras de Cinta</span>
                    <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-180 text-blue-600': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="expanded" class="pl-6 py-1 space-y-1 text-xs text-gray-600">
                    <a href="{{ route('catalog.sierras-cinta') }}" class="block py-1.5 font-bold text-blue-600">Ver Todas las Sierras de Cinta</a>
                    <a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="block py-1">Automáticas CNC / NC</a>
                    <a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="block py-1">Semiautomáticas</a>
                    <a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="block py-1">Manuales</a>
                </div>
            </div>

            <div x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="w-full flex items-center justify-between px-3 py-2 rounded-xl hover:bg-gray-100 text-left">
                    <span>Sierras de Disco</span>
                    <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-180 text-blue-600': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="expanded" class="pl-6 py-1 space-y-1 text-xs text-gray-600">
                    <a href="{{ route('catalog.sierras-disco') }}" class="block py-1.5 font-bold text-blue-600">Ver Todas las Sierras de Disco</a>
                    <a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="block py-1">Velocex Corte Rápido</a>
                    <a href="{{ route('legacy.sierras-de-disco-semiautomaticas') }}" class="block py-1">Semiautomáticas Tiger/Cobra</a>
                </div>
            </div>

            <a href="{{ route('catalog.aluminio-pvc') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100">Aluminio y PVC</a>
            <a href="{{ route('catalog.ocasion') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100 flex items-center justify-between">
                <span>Maquinaria de Ocasión</span>
                <span class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-[10px] font-bold">Stock</span>
            </a>
            <a href="{{ route('servicio-tecnico') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100">Servicio Técnico SAT</a>
            <a href="{{ route('plan-renove') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100">Plan Renove</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100">Sobre Nosotros</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-xl hover:bg-gray-100">Contacto</a>
        </div>

        <div class="pt-3 border-t border-gray-100 space-y-2">
            <button type="button" 
                    @click="$dispatch('open-quote-modal'); mobileMenuOpen = false;"
                    class="apple-btn-primary w-full py-3.5 text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md text-center">
                Pedir Presupuesto Técnico
            </button>
            <a href="tel:+34938498456" class="w-full py-2.5 rounded-full bg-gray-100 text-gray-800 font-semibold text-xs text-center flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>Llamar Ahora: +34 93 849 84 56</span>
            </a>
        </div>
    </div>
</header>
