<header x-data="{ mobileMenuOpen: false, catalogOpen: false }" class="sticky top-0 z-40 bg-white border-b border-gray-200 shadow-xs">
    <!-- Topbar B2B Industrial -->
    <div class="bg-gray-950 text-gray-300 text-xs py-2 border-b border-gray-800">
        <div class="container mx-auto flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-6">
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-gray-400">Distribuidor Oficial MEP & Especialistas en Corte Industrial</span>
                </span>
                <span class="hidden md:inline-flex items-center gap-1.5 text-gray-400">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Lunes a Viernes: 08:00 - 18:00</span>
                </span>
            </div>

            <div class="flex items-center gap-4 text-xs font-medium">
                <a href="tel:+34938498456" class="flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+34 93 849 84 56</span>
                </a>
                <span class="text-gray-700">|</span>
                <a href="mailto:info@cuttingeuropean.com" class="hidden sm:flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>info@cuttingeuropean.com</span>
                </a>
                <span class="text-gray-700 hidden sm:inline">|</span>
                <a href="{{ route('servicio-tecnico') }}" class="text-blue-400 hover:text-blue-300 font-semibold flex items-center gap-1">
                    <span>SAT Directo</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="container mx-auto">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 bg-gray-950 rounded-xl flex items-center justify-center text-white border border-gray-800 shadow-md group-hover:bg-blue-600 transition-colors">
                    <!-- Industrial Blade Saw Icon -->
                    <svg class="w-6 h-6 transform group-hover:rotate-45 transition-transform duration-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/>
                        <circle cx="12" cy="12" r="3" fill="currentColor"/>
                    </svg>
                </div>
                <div>
                    <span class="font-display font-black text-xl md:text-2xl tracking-tight text-gray-950 block leading-none">
                        CUTTING<span class="text-blue-600">EUROPEAN</span>
                    </span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-gray-400 block mt-0.5">
                        Maquinaria de Corte Industrial
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden xl:flex items-center gap-1 text-sm font-semibold text-gray-700">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors {{ request()->routeIs('home') ? 'text-blue-600 font-bold' : '' }}">
                    Inicio
                </a>

                <!-- Dropdown: Sierras de Cinta -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('catalog.sierras-cinta') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors flex items-center gap-1 {{ request()->is('sierras-de-cinta*') ? 'text-blue-600 font-bold' : '' }}">
                        <span>Sierras de Cinta</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <!-- Submenu -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 w-72 bg-white rounded-xl shadow-xl border border-gray-200 py-3 mt-1 z-50">
                        <a href="{{ route('catalog.sierras-cinta') }}" class="block px-4 py-2 text-xs font-bold uppercase text-blue-600 tracking-wider hover:bg-blue-50">
                            Ver Todas las Sierras de Cinta →
                        </a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Automáticas CNC / NC
                        </a>
                        <a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Semiautomáticas Hidráulicas
                        </a>
                        <a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Manuales de Taller
                        </a>
                        <a href="{{ route('legacy.sierras-de-cinta-horizontales') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Horizontales de Gran Capacidad
                        </a>
                        <a href="{{ route('legacy.sierras-de-cinta-de-doble-ingletador') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Doble Ingletador (-60° / +60°)
                        </a>
                    </div>
                </div>

                <!-- Dropdown: Sierras de Disco -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('catalog.sierras-disco') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors flex items-center gap-1 {{ request()->is('sierras-de-disco*') ? 'text-blue-600 font-bold' : '' }}">
                        <span>Sierras de Disco</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 w-72 bg-white rounded-xl shadow-xl border border-gray-200 py-3 mt-1 z-50">
                        <a href="{{ route('catalog.sierras-disco') }}" class="block px-4 py-2 text-xs font-bold uppercase text-blue-600 tracking-wider hover:bg-blue-50">
                            Ver Todas las Sierras de Disco →
                        </a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Automáticas Velocex Corte Rápido
                        </a>
                        <a href="{{ route('legacy.sierras-de-disco-automaticas') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Automáticas Industriales
                        </a>
                        <a href="{{ route('legacy.sierras-de-disco-semiautomaticas') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Semiautomáticas Cobra / Tiger
                        </a>
                        <a href="{{ route('legacy.sierras-de-disco-manuales') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Manuales Tronzadoras
                        </a>
                    </div>
                </div>

                <!-- Dropdown: Aluminio & PVC -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('catalog.aluminio-pvc') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors flex items-center gap-1 {{ request()->is('aluminio-pvc*') ? 'text-blue-600 font-bold' : '' }}">
                        <span>Aluminio y PVC</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 w-72 bg-white rounded-xl shadow-xl border border-gray-200 py-3 mt-1 z-50">
                        <a href="{{ route('catalog.aluminio-pvc') }}" class="block px-4 py-2 text-xs font-bold uppercase text-blue-600 tracking-wider hover:bg-blue-50">
                            Gama Completa Aluminio y PVC →
                        </a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="{{ route('legacy.maquinas-de-corte-de-doble-cabezal') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Doble Cabezal
                        </a>
                        <a href="{{ route('legacy.maquinas-de-corte-de-un-solo-cabezal') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Un Solo Cabezal
                        </a>
                        <a href="{{ route('legacy.lineas-automaticas') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Líneas Automáticas de Corte
                        </a>
                        <a href="{{ route('legacy.centros-de-trabajo') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Centros de Trabajo CNC
                        </a>
                        <a href="{{ route('legacy.pantografos') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Pantógrafos Copiadores
                        </a>
                        <a href="{{ route('legacy.maquina-cortadora-de-tubos') }}" class="block px-4 py-2 text-xs text-gray-700 hover:text-blue-600 hover:bg-gray-50">
                            Cortadoras de Tubos
                        </a>
                    </div>
                </div>

                <a href="{{ route('catalog.ocasion') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors {{ request()->routeIs('catalog.ocasion') ? 'text-blue-600 font-bold' : '' }}">
                    <span class="inline-flex items-center gap-1.5">
                        <span>Ocasión</span>
                        <span class="px-1.5 py-0.2 bg-amber-100 text-amber-800 text-[10px] font-bold rounded">Stock</span>
                    </span>
                </a>

                <a href="{{ route('servicio-tecnico') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors {{ request()->routeIs('servicio-tecnico') ? 'text-blue-600 font-bold' : '' }}">
                    Servicio Técnico
                </a>

                <a href="{{ route('plan-renove') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors {{ request()->routeIs('plan-renove') ? 'text-blue-600 font-bold' : '' }}">
                    Plan Renove
                </a>

                <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors {{ request()->routeIs('about') ? 'text-blue-600 font-bold' : '' }}">
                    Empresa
                </a>

                <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg hover:text-blue-600 hover:bg-gray-50 transition-colors {{ request()->routeIs('contact') ? 'text-blue-600 font-bold' : '' }}">
                    Contacto
                </a>
            </nav>

            <!-- Actions / CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <button type="button" 
                        @click="$dispatch('open-quote-modal')"
                        class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-lg transition-all flex items-center gap-2 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Pedir Presupuesto</span>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex xl:hidden items-center gap-2">
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="p-2 rounded-lg text-gray-700 hover:text-gray-950 hover:bg-gray-100 cursor-pointer focus:outline-none"
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

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="xl:hidden bg-white border-b border-gray-200 px-4 pt-2 pb-6 space-y-3"
         style="display: none;">
        <div class="space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Inicio</a>
            
            <div x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="w-full flex items-center justify-between px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100 text-left">
                    <span>Sierras de Cinta</span>
                    <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-180': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="expanded" class="pl-5 pr-2 py-1 space-y-1 text-sm text-gray-600">
                    <a href="{{ route('catalog.sierras-cinta') }}" class="block py-1 font-semibold text-blue-600">Ver Todas</a>
                    <a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="block py-1">Automáticas CNC</a>
                    <a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="block py-1">Semiautomáticas</a>
                    <a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="block py-1">Manuales</a>
                </div>
            </div>

            <div x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="w-full flex items-center justify-between px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100 text-left">
                    <span>Sierras de Disco</span>
                    <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-180': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="expanded" class="pl-5 pr-2 py-1 space-y-1 text-sm text-gray-600">
                    <a href="{{ route('catalog.sierras-disco') }}" class="block py-1 font-semibold text-blue-600">Ver Todas</a>
                    <a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="block py-1">Automáticas Corte Rápido</a>
                    <a href="{{ route('legacy.sierras-de-disco-semiautomaticas') }}" class="block py-1">Semiautomáticas</a>
                </div>
            </div>

            <a href="{{ route('catalog.aluminio-pvc') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Aluminio y PVC</a>
            <a href="{{ route('catalog.ocasion') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Maquinaria de Ocasión</a>
            <a href="{{ route('servicio-tecnico') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Servicio Técnico Oficial</a>
            <a href="{{ route('plan-renove') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Plan Renove</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Sobre Nosotros</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-gray-100">Contacto</a>
        </div>

        <div class="pt-3 border-t border-gray-100 flex flex-col gap-2">
            <button type="button" 
                    @click="$dispatch('open-quote-modal'); mobileMenuOpen = false;"
                    class="w-full py-3 rounded-lg bg-blue-600 text-white font-bold text-sm text-center shadow-md">
                Solicitar Presupuesto
            </button>
            <a href="tel:+34938498456" class="w-full py-2.5 rounded-lg border border-gray-300 text-gray-800 font-semibold text-xs text-center flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>Llamar Ahora: +34 93 849 84 56</span>
            </a>
        </div>
    </div>
</header>
