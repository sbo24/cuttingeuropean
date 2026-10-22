<footer class="bg-gray-950 text-gray-400 border-t border-gray-900 text-sm">
    <!-- Main Footer Grid -->
    <div class="container mx-auto py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            <!-- Col 1: Brand & Credentials -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/>
                            <circle cx="12" cy="12" r="3" fill="currentColor"/>
                        </svg>
                    </div>
                    <div>
                        <span class="font-display font-black text-xl tracking-tight text-white block">
                            CUTTING<span class="text-blue-500">EUROPEAN</span>
                        </span>
                        <span class="text-[10px] uppercase font-bold tracking-widest text-gray-500 block">
                            Precision Cutting Systems
                        </span>
                    </div>
                </div>

                <p class="text-xs text-gray-400 leading-relaxed max-w-md">
                    Especialistas en ingeniería y suministro de maquinaria industrial para el corte de metales, perfiles férricos, aluminio y PVC. Distribuidor oficial de marcas líderes europeas con servicio técnico integral, puesta en marcha y suministro garantizado de recambios originales.
                </p>

                <!-- Industrial Trust Badges -->
                <div class="pt-2 flex flex-wrap items-center gap-3">
                    <div class="px-3 py-1.5 bg-gray-900 border border-gray-800 rounded-lg text-[11px] font-bold text-gray-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                        <span>Distribuidor Oficial MEP</span>
                    </div>
                    <div class="px-3 py-1.5 bg-gray-900 border border-gray-800 rounded-lg text-[11px] font-bold text-gray-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span>Normativa CE & Seguridad</span>
                    </div>
                    <div class="px-3 py-1.5 bg-gray-900 border border-gray-800 rounded-lg text-[11px] font-bold text-gray-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        <span>SAT Propio Especializado</span>
                    </div>
                </div>
            </div>

            <!-- Col 2: Sierras de Cinta -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white border-b border-gray-800 pb-2">
                    Sierras de Cinta
                </h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('catalog.sierras-cinta') }}" class="hover:text-blue-400 transition-colors">Gama Completa</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-automaticas') }}" class="hover:text-blue-400 transition-colors">Automáticas CNC</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-semiautomaticas') }}" class="hover:text-blue-400 transition-colors">Semiautomáticas</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-manuales') }}" class="hover:text-blue-400 transition-colors">Manuales para Taller</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-horizontales') }}" class="hover:text-blue-400 transition-colors">Horizontales</a></li>
                    <li><a href="{{ route('legacy.sierras-de-cinta-de-doble-ingletador') }}" class="hover:text-blue-400 transition-colors">Doble Ingletador</a></li>
                </ul>
            </div>

            <!-- Col 3: Sierras de Disco & Aluminio -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white border-b border-gray-800 pb-2">
                    Disco, Aluminio & PVC
                </h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('catalog.sierras-disco') }}" class="hover:text-blue-400 transition-colors">Sierras de Disco</a></li>
                    <li><a href="{{ route('legacy.sierras-de-disco-automaticas-para-el-corte-rapido') }}" class="hover:text-blue-400 transition-colors">Velocex Alta Velocidad</a></li>
                    <li><a href="{{ route('catalog.aluminio-pvc') }}" class="hover:text-blue-400 transition-colors">Corte de Aluminio y PVC</a></li>
                    <li><a href="{{ route('legacy.maquinas-de-corte-de-doble-cabezal') }}" class="hover:text-blue-400 transition-colors">Doble Cabezal</a></li>
                    <li><a href="{{ route('legacy.lineas-automaticas') }}" class="hover:text-blue-400 transition-colors">Líneas Automáticas</a></li>
                    <li><a href="{{ route('legacy.centros-de-trabajo') }}" class="hover:text-blue-400 transition-colors">Centros de Trabajo CNC</a></li>
                </ul>
            </div>

            <!-- Col 4: Soporte y Contacto -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white border-b border-gray-800 pb-2">
                    Asistencia Técnica & Ventas
                </h4>
                <div class="space-y-2.5 text-xs">
                    <p class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Pol. Ind. Palou Nord, Granollers (Barcelona), España</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+34938498456" class="hover:text-white font-semibold text-white">+34 93 849 84 56</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:info@cuttingeuropean.com" class="hover:text-white">info@cuttingeuropean.com</a>
                    </p>
                    <div class="pt-2">
                        <button type="button" 
                                @click="$dispatch('open-quote-modal')"
                                class="w-full py-2 px-3 bg-gray-900 hover:bg-gray-800 text-blue-400 font-bold text-xs rounded-lg border border-gray-800 hover:border-blue-500 transition-all text-center cursor-pointer">
                            Pedir Presupuesto Rápido
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Cloud & Footnote -->
        <div class="mt-12 pt-8 border-t border-gray-900 text-[11px] text-gray-500 leading-relaxed">
            <p class="mb-2 font-semibold uppercase tracking-wider text-gray-400">Palabras clave del sector:</p>
            <p>
                Sierras de cinta para metal | Sierras de cinta automáticas MEP Shark | Tronzadoras de disco para acero | Maquinaria de corte para aluminio y PVC | Sierras de doble inglete | Servicio técnico oficial MEP en España | Máquinas de corte usadas y de ocasión | Hojas de sierra de cinta bimetálicas y metal duro | Plan renove tronzadoras industriales.
            </p>
        </div>

        <!-- Copyright & Legal -->
        <div class="mt-8 pt-6 border-t border-gray-900 flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
            <p>&copy; {{ date('Y') }} Cutting European S.L. Todos los derechos reservados.</p>
            <div class="flex items-center gap-6">
                <a href="{{ route('legal.aviso') }}" class="hover:text-gray-300 transition-colors">Aviso Legal</a>
                <a href="{{ route('legal.privacidad') }}" class="hover:text-gray-300 transition-colors">Política de Privacidad</a>
                <a href="{{ route('legal.cookies') }}" class="hover:text-gray-300 transition-colors">Política de Cookies</a>
                <a href="{{ route('sitemap') }}" class="hover:text-gray-300 transition-colors">Mapa Web XML</a>
            </div>
        </div>
    </div>

    <!-- WhatsApp Floating Quick Button -->
    <a href="https://wa.me/34938498456?text={{ urlencode('Hola, deseo solicitar información técnica sobre maquinaria de corte.') }}" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="fixed bottom-6 right-6 z-40 bg-emerald-600 hover:bg-emerald-500 text-white p-3.5 rounded-full shadow-2xl hover:scale-110 transition-transform flex items-center justify-center group"
       aria-label="Contactar por WhatsApp">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
        </svg>
    </a>
</footer>
