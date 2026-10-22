<?php $__env->startSection('title', 'Servicio Técnico Oficial SAT | Reparación de Sierras de Cinta y Disco | Cutting European'); ?>
<?php $__env->startSection('meta_description', 'Servicio técnico especializado SAT para sierras de cinta y disco. Distribuidor oficial MEP en España. Mantenimiento preventivo, reparación urgente y recambios originales.'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        'Servicio Técnico Oficial' => route('servicio-tecnico')
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Hero Header -->
<section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-24 border-b border-slate-800">
    <div class="absolute -top-20 left-1/4 w-[600px] h-[300px] bg-emerald-600/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/8 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <div class="lg:col-span-7 space-y-5">
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-900/30 border border-emerald-500/20 text-emerald-400 text-xs font-bold uppercase tracking-wider rounded-full">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    Soporte Técnico Directo
                </span>
                <h1 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight text-white leading-tight">
                    Servicio Técnico SAT<br class="hidden sm:block"> & Recambios Originales
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-light max-w-xl">
                    Evite costosas paradas de producción. Técnicos especialistas en sierras de cinta y disco para asistencia in situ, diagnóstico de averías y suministro inmediato de recambios oficiales MEP.
                </p>
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="tel:+34938498456" class="px-7 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-sm font-bold tracking-wide shadow-lg shadow-blue-600/20 transition-all flex items-center gap-2.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Llamar SAT: +34 93 849 84 56
                    </a>
                    <a href="https://wa.me/34938498456?text=<?php echo e(urlencode('Hola, necesito asistencia técnica urgente para una máquina de corte.')); ?>" target="_blank" class="px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-sm font-bold tracking-wide transition-all flex items-center gap-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654z"/></svg>
                        WhatsApp SAT
                    </a>
                </div>
            </div>

            <!-- Right: SAT Quick Stats -->
            <div class="lg:col-span-5">
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-5 sm:p-6 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-1.5">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/15 text-blue-400 flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <span class="block text-xl sm:text-2xl font-extrabold font-display text-white">&lt;24h</span>
                        <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">Tiempo de respuesta</span>
                    </div>
                    <div class="p-5 sm:p-6 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-1.5">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/15 text-emerald-400 flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="block text-xl sm:text-2xl font-extrabold font-display text-white">100%</span>
                        <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">Recambios originales</span>
                    </div>
                    <div class="p-5 sm:p-6 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-1.5">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/15 text-amber-400 flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <span class="block text-xl sm:text-2xl font-extrabold font-display text-white">España</span>
                        <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">Cobertura nacional</span>
                    </div>
                    <div class="p-5 sm:p-6 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-1.5">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/15 text-blue-400 flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="block text-xl sm:text-2xl font-extrabold font-display text-white">Lun–Vie</span>
                        <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">08:00 – 18:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SAT Services Detailed Grid -->
<section class="py-16 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-14 sm:mb-16 space-y-3">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.15em]">Capacidades SAT</span>
            <h2 class="text-2xl sm:text-4xl font-display font-extrabold text-gray-950 tracking-tight">Cobertura Técnica Integral para su Taller</h2>
            <p class="text-sm sm:text-base text-gray-500 leading-relaxed">
                Un equipo de técnicos formados en fábrica para mantener sus líneas de corte operativas al máximo rendimiento.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <!-- 1. Reparación -->
            <div class="group p-8 sm:p-10 rounded-2xl bg-gray-50 border border-gray-200 space-y-5 hover:bg-white hover:border-blue-200 hover:shadow-lg hover:shadow-blue-600/5 transition-all">
                <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 font-display">Reparación Mecánica y Eléctrica</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Solucionamos averías en grupos reductores, sistemas electrohidráulicos de descenso de arco, sustitución de rodamientos de volantes y reprogramación de autómatas y controles NC/CNC.
                </p>
                <ul class="space-y-2 text-xs text-gray-500">
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Grupos reductores y motovariadores
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Sistemas electrohidráulicos
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Programación CNC y autómatas
                    </li>
                </ul>
            </div>

            <!-- 2. Mantenimiento Preventivo -->
            <div class="group p-8 sm:p-10 rounded-2xl bg-gray-50 border border-gray-200 space-y-5 hover:bg-white hover:border-emerald-200 hover:shadow-lg hover:shadow-emerald-600/5 transition-all">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 font-display">Mantenimiento Preventivo Planificado</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Contratos de mantenimiento periódico: verificación de la tensión hidráulica de la hoja, comprobación de desgaste en guías de widia, alineación de mordazas y limpieza de circuitos.
                </p>
                <ul class="space-y-2 text-xs text-gray-500">
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Tensión y guiado de hoja de sierra
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Alineación de mordazas y volantes
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Circuitos de refrigeración y taladrina
                    </li>
                </ul>
            </div>

            <!-- 3. Recambios Originales -->
            <div class="group p-8 sm:p-10 rounded-2xl bg-gray-50 border border-gray-200 space-y-5 hover:bg-white hover:border-amber-200 hover:shadow-lg hover:shadow-amber-600/5 transition-all">
                <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 font-display">Recambios Originales & Consumibles</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Suministro de piezas 100% originales de fábrica para máquinas MEP y otras marcas de corte. Entrega rápida desde almacén propio o fabricante.
                </p>
                <ul class="space-y-2 text-xs text-gray-500">
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Bombas de taladrina y cilindros
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Correas, reductores y rodamientos
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Hojas de sierra bimetálicas a medida
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Process Timeline -->
<section class="py-16 sm:py-24 bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-14 sm:mb-16 space-y-3">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.15em]">Proceso de Asistencia</span>
            <h2 class="text-2xl sm:text-4xl font-display font-extrabold text-gray-950 tracking-tight">¿Cómo funciona nuestro SAT?</h2>
            <p class="text-sm text-gray-500 leading-relaxed">Un proceso eficiente diseñado para minimizar el tiempo de inactividad de su maquinaria.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
            <?php
                $steps = [
                    ['num' => '01', 'title' => 'Solicitud', 'desc' => 'Contacte con nosotros por teléfono, WhatsApp, email o formulario indicando el modelo de máquina y síntomas de la avería.', 'color' => 'blue'],
                    ['num' => '02', 'title' => 'Diagnóstico', 'desc' => 'Nuestro equipo realiza un diagnóstico previo remoto y, si es necesario, desplaza un técnico especialista a sus instalaciones.', 'color' => 'indigo'],
                    ['num' => '03', 'title' => 'Reparación', 'desc' => 'Ejecutamos la intervención con recambios originales en stock. Reparación in situ o en nuestro taller según la complejidad.', 'color' => 'emerald'],
                    ['num' => '04', 'title' => 'Verificación', 'desc' => 'Realizamos pruebas de corte y verificación funcional completa antes de entregar la máquina lista para producción.', 'color' => 'amber'],
                ];
            ?>

            <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative">
                <!-- Connector -->
                <?php if(!$loop->last): ?>
                <div class="hidden md:block absolute top-10 left-full w-full h-px bg-gray-300 z-0" style="width: calc(100% - 2rem);"></div>
                <?php endif; ?>
                
                <div class="relative z-10 text-center space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-<?php echo e($step['color']); ?>-100 text-<?php echo e($step['color']); ?>-600 flex items-center justify-center mx-auto font-display font-extrabold text-xl border-2 border-<?php echo e($step['color']); ?>-200">
                        <?php echo e($step['num']); ?>

                    </div>
                    <h3 class="text-lg font-bold font-display text-gray-900"><?php echo e($step['title']); ?></h3>
                    <p class="text-xs sm:text-sm text-gray-500 leading-relaxed max-w-xs mx-auto"><?php echo e($step['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- SAT Ticket / Request Form -->
<section class="py-16 sm:py-24 bg-white border-t border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-6 sm:p-8 pb-0 space-y-2">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-[0.15em]">Abrir Parte de Asistencia</span>
                <h2 class="text-xl sm:text-2xl font-bold font-display text-gray-950">Solicitar Intervención Técnica o Recambios</h2>
                <p class="text-sm text-gray-500">Cumplimente este formulario para abrir un parte de asistencia técnica prioritaria.</p>
            </div>

            <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="p-6 sm:p-8 space-y-5">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="type" value="tecnico">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Nombre de Contacto *</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Empresa / Razón Social *</label>
                        <input type="text" name="company" required class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Email *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Teléfono Directo *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Marca y Modelo de la Máquina *</label>
                        <input type="text" name="product_ref" required placeholder="Ej: MEP SHARK 281, FMB, etc." class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Tipo de Solicitud *</label>
                        <select name="subject" required class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            <option value="Avería urgente / Parada de máquina">Avería urgente / Parada de máquina</option>
                            <option value="Petición de recambios originales">Petición de recambios originales</option>
                            <option value="Mantenimiento preventivo / Puesta a punto">Mantenimiento preventivo / Puesta a punto</option>
                            <option value="Calibración y alineación de corte">Calibración y alineación de corte</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Descripción de la Avería o Referencias de Piezas *</label>
                    <textarea name="message" rows="4" required placeholder="Indique síntomas de la avería, ruidos, códigos de error en pantalla o números de referencia de las piezas..." class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"></textarea>
                </div>

                <div class="flex items-start gap-3 pt-1">
                    <input type="checkbox" name="privacy_accepted" id="sat_privacy" required class="mt-0.5 h-4 w-4 text-blue-600 rounded border-gray-300">
                    <label for="sat_privacy" class="text-xs text-gray-600 leading-relaxed">
                        Acepto la <a href="<?php echo e(route('legal.privacidad')); ?>" class="underline text-blue-600 hover:text-blue-700">política de privacidad</a> para la gestión de este parte de asistencia técnica.
                    </label>
                </div>

                <div class="pt-3">
                    <button type="submit" class="w-full sm:w-auto px-10 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm uppercase tracking-wider rounded-xl shadow-md shadow-blue-600/20 transition-all cursor-pointer flex items-center justify-center gap-2.5 mx-auto sm:mx-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        Enviar Solicitud al Servicio Técnico
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\servicio-tecnico.blade.php ENDPATH**/ ?>