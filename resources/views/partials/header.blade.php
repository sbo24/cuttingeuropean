<header id="site-header" 
        x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 10)"
        class="sticky top-0 z-50 bg-white border-b border-slate-200 transition-shadow duration-200"
        :class="{ 'shadow-md': scrolled }">
    
    <!-- Topbar: Dark Industrial Header Strip -->
    <div class="bg-slate-950 text-slate-300 text-xs py-2.5 border-b border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-6">
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span class="text-slate-200 uppercase text-[11px] font-bold tracking-wider">Distribuidor Oficial MEP España</span>
                </span>
                <span class="hidden md:inline-flex items-center gap-1.5 text-slate-400 text-[11px]">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Taller & Showroom: Lun - Vie 08:00 - 18:00</span>
                </span>
            </div>

            <div class="flex items-center gap-5 text-slate-300 text-xs">
                <a href="tel:+34938498456" class="flex items-center gap-1.5 font-bold hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+34 93 849 84 56</span>
                </a>
                <span class="text-slate-700 hidden sm:inline">|</span>
                <a href="mailto:info@cuttingeuropean.com" class="hidden sm:flex items-center gap-1.5 text-slate-400 hover:text-white transition-colors">
                    <span>info@cuttingeuropean.com</span>
                </a>
                <span class="text-slate-700">|</span>
                <a href="{{ route('servicio-tecnico') }}" class="text-blue-400 hover:text-blue-300 font-bold flex items-center gap-1">
                    <span>SAT Directo</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex items-center justify-between h-20">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group shrink-0">
                <img src="{{ asset('images/logo-icon.png') }}" 
                     alt="Cutting Machine" 
                     style="height: 32px; max-height: 32px; width: auto;"
                     class="object-contain transition-transform duration-200 group-hover:scale-105">
                <div class="flex flex-col">
                    <span class="font-display font-black text-lg tracking-tight text-slate-950 leading-none">
                        CUTTING<span class="text-blue-600">MACHINE</span>
                    </span>
                    <span class="text-[8.5px] uppercase font-bold tracking-[0.18em] text-slate-400 mt-0.5">
                        Especialistas del Corte
                    </span>
                </div>
            </a>

            <!-- Desktop Clean Navigation Menu (Spacious 5 Pillars) -->
            <nav class="hidden lg:flex items-center gap-8 xl:gap-10 text-sm font-semibold text-slate-700">
                
                <!-- 1. Dropdown: Maquinaria Industrial -->
                <div class="relative py-4" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button type="button" 
                            class="flex items-center gap-1.5 py-1 text-slate-800 hover:text-blue-600 transition-colors cursor-pointer"
                            :class="{ 'text-blue-600 font-bold': open || {{ request()->is('sierras*') || request()->is('aluminio*') ? 'true' : 'false' }} }">
                        <span>Maquinaria</span>
                        <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180 text-blue-600': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <!-- Mega Dropdown Panel -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-0 w-[580px] bg-white rounded-2xl shadow-2xl border border-slate-200 p-6 z-50">
                        
                        <div class="grid grid-cols-3 gap-6">
                            <!-- Col 1: Sierras de Cinta -->
                            <div class="space-y-3">
                                <a href="{{ route('catalog.sierras-cinta') }}" class="group block border-b border-slate-100 pb-2">
                                    <h4 class="text-xs font-bold uppercase tracking-wider text-blue-600 group-hover:text-blue-700">
                                        Sierras de Cinta &rarr;
                                    </h4>
                                    <p class="text-[11px] text-slate-500 mt-0.5">Corte pesado y perfiles</p>
                                </a>
                                <ul class="space-y-1.5 text-xs text-slate-600">
                                    <li><a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="hover:text-blue-600 block py-0.5">Automáticas CNC</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="hover:text-blue-600 block py-0.5">Semiautomáticas</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="hover:text-blue-600 block py-0.5">Manuales</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-cinta-horizontales') }}" class="hover:text-blue-600 block py-0.5">Horizontales</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-cinta-de-doble-ingletador') }}" class="hover:text-blue-600 block py-0.5">Doble Inglete</a></li>
                                </ul>
                            </div>

                            <!-- Col 2: Sierras de Disco -->
                            <div class="space-y-3">
                                <a href="{{ route('catalog.sierras-disco') }}" class="group block border-b border-slate-100 pb-2">
                                    <h4 class="text-xs font-bold uppercase tracking-wider text-blue-600 group-hover:text-blue-700">
                                        Sierras de Disco &rarr;
                                    </h4>
                                    <p class="text-[11px] text-slate-500 mt-0.5">Tubos y alta cadencia</p>
                                </a>
                                <ul class="space-y-1.5 text-xs text-slate-600">
                                    <li><a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="hover:text-blue-600 block py-0.5">Velocex Rápido</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-disco-automaticas') }}" class="hover:text-blue-600 block py-0.5">Automáticas MEP</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-disco-semiautomaticas') }}" class="hover:text-blue-600 block py-0.5">Tiger / Cobra</a></li>
                                    <li><a href="{{ route('legacy.sierras-de-disco-manuales') }}" class="hover:text-blue-600 block py-0.5">Manuales</a></li>
                                </ul>
                            </div>

                            <!-- Col 3: Aluminio y PVC -->
                            <div class="space-y-3">
                                <a href="{{ route('catalog.aluminio-pvc') }}" class="group block border-b border-slate-100 pb-2">
                                    <h4 class="text-xs font-bold uppercase tracking-wider text-blue-600 group-hover:text-blue-700">
                                        Aluminio / PVC &rarr;
                                    </h4>
                                    <p class="text-[11px] text-slate-500 mt-0.5">Carpintería y perfiles</p>
                                </a>
                                <ul class="space-y-1.5 text-xs text-slate-600">
                                    <li><a href="{{ route('legacy.maquinas-de-corte-de-doble-cabezal') }}" class="hover:text-blue-600 block py-0.5">Doble Cabezal</a></li>
                                    <li><a href="{{ route('legacy.maquinas-de-corte-de-un-solo-cabezal') }}" class="hover:text-blue-600 block py-0.5">Un Solo Cabezal</a></li>
                                    <li><a href="{{ route('legacy.lineas-automaticas') }}" class="hover:text-blue-600 block py-0.5">Líneas de Corte</a></li>
                                    <li><a href="{{ route('legacy.centros-de-trabajo') }}" class="hover:text-blue-600 block py-0.5">Centros 3-4 ejes</a></li>
                                    <li><a href="{{ route('legacy.pantografos') }}" class="hover:text-blue-600 block py-0.5">Pantógrafos</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Dropdown Footer -->
                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs bg-slate-50 -mx-6 -mb-6 p-4 rounded-b-2xl">
                            <span class="text-slate-500 font-medium">¿Duda sobre la máquina idónea para su pieza?</span>
                            <button type="button" 
                                    @click="$dispatch('open-quote-modal')"
                                    class="text-blue-600 hover:text-blue-700 font-bold cursor-pointer">
                                Consultar con Ingeniero &rarr;
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 2. Ocasión (Distinct Pill Badge) -->
                <a href="{{ route('catalog.ocasion') }}" 
                   class="inline-flex items-center gap-2 py-1 text-slate-800 hover:text-amber-600 transition-colors {{ request()->routeIs('catalog.ocasion') ? 'text-amber-600 font-bold' : '' }}">
                    <span>Ocasión</span>
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">
                        Stock Taller
                    </span>
                </a>

                <!-- 3. Dropdown: Servicios & SAT -->
                <div class="relative py-4" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button type="button" 
                            class="flex items-center gap-1.5 py-1 text-slate-800 hover:text-blue-600 transition-colors cursor-pointer"
                            :class="{ 'text-blue-600 font-bold': open || {{ request()->routeIs('servicio-tecnico') || request()->routeIs('plan-renove') ? 'true' : 'false' }} }">
                        <span>Servicios</span>
                        <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180 text-blue-600': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-0 w-72 bg-white rounded-2xl shadow-xl border border-slate-200 p-3 z-50">
                        <a href="{{ route('servicio-tecnico') }}" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                            <span class="block text-xs font-bold text-slate-900">SAT Oficial MEP</span>
                            <span class="block text-[11px] text-slate-500 mt-0.5">Asistencia técnica, puestas en marcha y reparaciones</span>
                        </a>
                        <div class="h-px bg-slate-100 my-1"></div>
                        <a href="{{ route('plan-renove') }}" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                            <span class="block text-xs font-bold text-slate-900">Plan Renove Maquinaria</span>
                            <span class="block text-[11px] text-slate-500 mt-0.5">Tasamos su máquina usada con descuento en nueva</span>
                        </a>
                    </div>
                </div>

                <!-- 4. Empresa -->
                <a href="{{ route('about') }}" 
                   class="py-1 text-slate-800 hover:text-blue-600 transition-colors {{ request()->routeIs('about') ? 'text-blue-600 font-bold' : '' }}">
                    Empresa
                </a>

                <!-- 5. Contacto -->
                <a href="{{ route('contact') }}" 
                   class="py-1 text-slate-800 hover:text-blue-600 transition-colors {{ request()->routeIs('contact') ? 'text-blue-600 font-bold' : '' }}">
                    Contacto
                </a>
            </nav>

            <!-- Actions: Prominent CTA & Phone -->
            <div class="hidden lg:flex items-center gap-4 shrink-0">
                <a href="tel:+34938498456" class="text-xs font-bold text-slate-700 hover:text-blue-600 hidden xl:flex items-center gap-1.5 transition-colors">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>93 849 84 56</span>
                </a>

                <button type="button" 
                        @click="$dispatch('open-quote-modal')"
                        class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider shadow-sm transition-all cursor-pointer flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Pedir Presupuesto</span>
                </button>
            </div>

            <!-- Mobile & Tablet Hamburger Button -->
            <div class="flex lg:hidden items-center gap-3">
                <button type="button" 
                        @click="$dispatch('open-quote-modal')"
                        class="px-3.5 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-xl text-xs font-bold uppercase tracking-wider flex items-center gap-1.5 cursor-pointer">
                    <span>Presupuesto</span>
                </button>
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="p-2 rounded-xl text-slate-700 hover:text-slate-950 hover:bg-slate-100 cursor-pointer focus:outline-none transition-colors"
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

    <!-- Mobile Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-white border-b border-slate-200 shadow-2xl"
         style="display: none;">
        
        <div class="container mx-auto px-4 sm:px-6 max-w-7xl py-6 space-y-4">
            <div class="space-y-1 font-semibold text-slate-800 text-sm">
                <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg hover:bg-slate-50">
                    Inicio
                </a>
                <div class="py-2 px-3 text-xs font-bold text-slate-400 uppercase tracking-wider">
                    Catálogo de Maquinaria
                </div>
                <a href="{{ route('catalog.sierras-cinta') }}" class="block px-3 py-2 rounded-lg hover:bg-slate-50 flex items-center justify-between pl-6">
                    <span>Sierras de Cinta para Metal</span>
                    <span class="text-xs text-blue-600">&rarr;</span>
                </a>
                <a href="{{ route('catalog.sierras-disco') }}" class="block px-3 py-2 rounded-lg hover:bg-slate-50 flex items-center justify-between pl-6">
                    <span>Sierras de Disco y Tronzadoras</span>
                    <span class="text-xs text-blue-600">&rarr;</span>
                </a>
                <a href="{{ route('catalog.aluminio-pvc') }}" class="block px-3 py-2 rounded-lg hover:bg-slate-50 flex items-center justify-between pl-6">
                    <span>Corte Aluminio y PVC</span>
                    <span class="text-xs text-blue-600">&rarr;</span>
                </a>

                <div class="h-px bg-slate-100 my-2"></div>

                <a href="{{ route('catalog.ocasion') }}" class="block px-3 py-2.5 rounded-lg hover:bg-amber-50 text-amber-800 flex items-center justify-between">
                    <span>Maquinaria de Ocasión</span>
                    <span class="text-[10px] font-bold uppercase bg-amber-200 text-amber-900 px-2 py-0.5 rounded">Stock</span>
                </a>
                <a href="{{ route('servicio-tecnico') }}" class="block px-3 py-2.5 rounded-lg hover:bg-slate-50">
                    Servicio Técnico Oficial SAT MEP
                </a>
                <a href="{{ route('plan-renove') }}" class="block px-3 py-2.5 rounded-lg hover:bg-slate-50">
                    Plan Renove Maquinaria
                </a>
                <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-lg hover:bg-slate-50">
                    Sobre Nosotros
                </a>
                <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg hover:bg-slate-50">
                    Contacto
                </a>
            </div>

            <div class="pt-4 border-t border-slate-100 space-y-3">
                <button type="button" 
                        @click="mobileMenuOpen = false; $dispatch('open-quote-modal')"
                        class="w-full py-3 bg-blue-600 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md text-center">
                    Pedir Presupuesto Inmediato
                </button>
                <a href="tel:+34938498456" class="block w-full py-3 bg-slate-100 text-slate-900 font-bold text-xs uppercase tracking-wider rounded-xl text-center">
                    Llamar al taller: +34 93 849 84 56
                </a>
            </div>
        </div>
    </div>
</header>
