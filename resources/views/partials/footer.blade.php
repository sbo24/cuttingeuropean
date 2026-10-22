<footer class="relative bg-gray-950 text-gray-400 overflow-hidden">
    {{-- Ambient Glow --}}
    <div class="absolute top-0 left-1/4 w-[600px] h-[300px] bg-blue-600/8 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-blue-500/5 blur-[100px] rounded-full pointer-events-none"></div>

    {{-- Top Accent Bar --}}
    <div class="h-1 w-full bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600"></div>

    {{-- Newsletter / CTA Strip --}}
    <div class="border-b border-gray-800/60">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-10 sm:py-12">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left max-w-lg">
                    <h3 class="text-lg sm:text-xl font-display font-bold text-white tracking-tight">
                        ¿Necesita asesoramiento para su próxima inversión?
                    </h3>
                    <p class="text-sm text-gray-400 mt-1.5">
                        Nuestro equipo de ingenieros evalúa gratuitamente sus necesidades de corte y recomienda la solución óptima.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-3">
                    <button type="button" 
                            @click="$dispatch('open-quote-modal')"
                            class="px-8 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-sm font-bold tracking-wide shadow-lg shadow-blue-600/25 transition-all cursor-pointer flex items-center gap-2.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Solicitar Presupuesto
                    </button>
                    <a href="tel:+34938498456" class="px-6 py-3.5 rounded-xl bg-gray-800 hover:bg-gray-700 text-white text-sm font-semibold border border-gray-700 transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        +34 93 849 84 56
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Footer Grid --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-14 sm:py-16">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-12 gap-10 lg:gap-8">
            <div class="col-span-2 md:col-span-3 lg:col-span-4 space-y-5">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3.5 group">
                    <img src="{{ asset('images/logo-icon.png') }}" 
                         alt="Cutting Machine" 
                         style="height: 36px; max-height: 36px; width: auto;"
                         class="object-contain transition-transform duration-200 group-hover:scale-105">
                    <div>
                        <span class="font-display font-black text-xl tracking-tight text-white block leading-none">
                            CUTTING<span class="text-blue-500">MACHINE</span>
                        </span>
                        <span class="text-[9px] uppercase font-bold tracking-[0.2em] text-gray-400 block mt-1">
                            Especialistas del Corte
                        </span>
                    </div>
                </a>

                <p class="text-xs text-gray-400 leading-relaxed max-w-sm">
                    Especialistas en ingeniería y suministro de maquinaria industrial para el corte de metales, perfiles férricos, aluminio y PVC. Distribuidor oficial de marcas europeas con servicio técnico integral.
                </p>

                {{-- Trust Badges --}}
                <div class="flex flex-wrap items-center gap-2.5 pt-1">
                    <div class="px-3 py-1.5 bg-gray-900/80 border border-gray-800/80 rounded-lg text-[11px] font-bold text-gray-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                        <span>Distribuidor MEP</span>
                    </div>
                    <div class="px-3 py-1.5 bg-gray-900/80 border border-gray-800/80 rounded-lg text-[11px] font-bold text-gray-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span>Normativa CE</span>
                    </div>
                    <div class="px-3 py-1.5 bg-gray-900/80 border border-gray-800/80 rounded-lg text-[11px] font-bold text-gray-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        <span>SAT Propio</span>
                    </div>
                </div>
            </div>

            {{-- Col 2: Sierras de Cinta --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white flex items-center gap-2">
                    <span class="w-5 h-px bg-blue-600"></span>
                    Sierras de Cinta
                </h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="{{ route('catalog.sierras-cinta') }}" class="hover:text-blue-400 transition-colors">Gama Completa</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="hover:text-blue-400 transition-colors">Automáticas CNC</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="hover:text-blue-400 transition-colors">Semiautomáticas</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="hover:text-blue-400 transition-colors">Manuales para Taller</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-horizontales') }}" class="hover:text-blue-400 transition-colors">Horizontales</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-de-doble-ingletador') }}" class="hover:text-blue-400 transition-colors">Doble Ingletador</a></li>
                </ul>
            </div>

            {{-- Col 3: Sierras de Disco & Aluminio --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white flex items-center gap-2">
                    <span class="w-5 h-px bg-blue-600"></span>
                    Disco y Aluminio
                </h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="{{ route('catalog.sierras-disco') }}" class="hover:text-blue-400 transition-colors">Sierras de Disco</a></li>
                    <li><a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="hover:text-blue-400 transition-colors">Velocex Alta Velocidad</a></li>
                    <li><a href="{{ route('catalog.aluminio-pvc') }}" class="hover:text-blue-400 transition-colors">Corte Aluminio y PVC</a></li>
                    <li><a href="{{ route('legacy.maquinas-de-corte-de-doble-cabezal') }}" class="hover:text-blue-400 transition-colors">Doble Cabezal</a></li>
                    <li><a href="{{ route('legacy.lineas-automaticas') }}" class="hover:text-blue-400 transition-colors">Líneas Automáticas</a></li>
                    <li><a href="{{ route('legacy.centros-de-trabajo') }}" class="hover:text-blue-400 transition-colors">Centros de Trabajo CNC</a></li>
                </ul>
            </div>

            {{-- Col 4: Empresa --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white flex items-center gap-2">
                    <span class="w-5 h-px bg-blue-600"></span>
                    Empresa
                </h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition-colors">Sobre Nosotros</a></li>
                    <li><a href="{{ route('servicio-tecnico') }}" class="hover:text-blue-400 transition-colors">Servicio Técnico SAT</a></li>
                    <li><a href="{{ route('plan-renove') }}" class="hover:text-blue-400 transition-colors">Plan Renove</a></li>
                    <li><a href="{{ route('catalog.ocasion') }}" class="hover:text-blue-400 transition-colors">Maquinaria de Ocasión</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition-colors">Contacto</a></li>
                </ul>
            </div>

            {{-- Col 5: Contacto --}}
            <div class="col-span-2 md:col-span-1 lg:col-span-2 space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white flex items-center gap-2">
                    <span class="w-5 h-px bg-blue-600"></span>
                    Contacto
                </h4>
                <div class="space-y-3 text-xs">
                    <p class="flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xd418bd29871c339:0xc4e16191aac5f6ec" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition-colors leading-relaxed">
                            C. del Amonio, 2<br>28946 Fuenlabrada<br>Madrid, España
                        </a>
                    </p>
                    <p class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+34938498456" class="hover:text-white font-semibold text-white transition-colors">+34 93 849 84 56</a>
                    </p>
                    <p class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:info@cuttingeuropean.com" class="hover:text-white transition-colors">info@cuttingeuropean.com</a>
                    </p>
                    <p class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Lun–Vie: 08:00–18:00</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- SEO Keyword Cloud --}}
    <div class="border-t border-gray-800/50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-6">
            <p class="text-[11px] text-gray-600 leading-relaxed">
                <span class="font-semibold uppercase tracking-wider text-gray-500">Palabras clave del sector:</span>
                Sierras de cinta para metal | Sierras de cinta automáticas MEP Shark | Tronzadoras de disco para acero | Maquinaria de corte para aluminio y PVC | Sierras de doble inglete | Servicio técnico oficial MEP en España | Máquinas de corte usadas y de ocasión | Hojas de sierra de cinta bimetálicas y metal duro | Plan renove tronzadoras industriales.
            </p>
        </div>
    </div>

    {{-- Copyright & Legal --}}
    <div class="border-t border-gray-800/50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} Cutting European S.L. Todos los derechos reservados.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('legal.aviso') }}" class="hover:text-gray-300 transition-colors">Aviso Legal</a>
                    <a href="{{ route('legal.privacidad') }}" class="hover:text-gray-300 transition-colors">Privacidad</a>
                    <a href="{{ route('legal.cookies') }}" class="hover:text-gray-300 transition-colors">Cookies</a>
                    <a href="{{ route('sitemap') }}" class="hover:text-gray-300 transition-colors">Mapa Web</a>
                </div>
                {{-- Back to Top --}}
                <button @click="window.scrollTo({top:0, behavior:'smooth'})" 
                        class="hidden md:flex items-center gap-1.5 text-gray-500 hover:text-blue-400 transition-colors cursor-pointer text-xs font-medium">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    Volver arriba
                </button>
            </div>
        </div>
    </div>

    {{-- WhatsApp Floating Quick Button --}}
    <a href="https://wa.me/34938498456?text={{ urlencode('Hola, deseo solicitar información técnica sobre maquinaria de corte.') }}" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="fixed bottom-6 right-6 z-40 bg-emerald-600 hover:bg-emerald-500 text-white p-3.5 rounded-full shadow-2xl shadow-emerald-700/30 hover:scale-110 transition-all flex items-center justify-center group"
       aria-label="Contactar por WhatsApp">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
        </svg>
    </a>
</footer>
