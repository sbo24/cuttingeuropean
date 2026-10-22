<?php $__env->startSection('title', 'Contacto y Asesoramiento Técnico | Cutting European'); ?>
<?php $__env->startSection('meta_description', 'Contacte con el equipo técnico y comercial de Cutting Machine. Showroom y oficinas en C. del Amonio, 2, Fuenlabrada (Madrid). Teléfono +34 93 849 84 56.'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        'Contacto' => route('contact')
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Hero Header -->
<section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-24 border-b border-slate-800">
    <!-- Ambient Glow -->
    <div class="absolute -top-20 left-1/3 w-[500px] h-[250px] bg-blue-600/12 blur-[100px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-500/8 blur-[80px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="max-w-3xl space-y-5">
            <span class="inline-flex items-center gap-2 px-4 py-2 bg-blue-900/30 border border-blue-500/20 text-blue-300 text-xs font-bold uppercase tracking-wider rounded-full">
                <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                Atención Directa
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-[3.25rem] font-display font-extrabold tracking-tight text-white leading-tight">
                Contacto Técnico<br class="hidden sm:block"> y Comercial
            </h1>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-light max-w-xl">
                Estamos a su disposición para resolver cualquier duda sobre capacidades de corte, compatibilidad de materiales, ofertas formales, recambios o asistencia SAT in situ.
            </p>
        </div>
    </div>
</section>

<!-- Quick Contact Strip -->
<section class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-0">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-gray-200">
            <!-- Phone -->
            <a href="tel:+34938498456" class="flex items-center gap-4 py-5 sm:py-6 px-2 sm:px-6 group hover:bg-blue-50/50 transition-colors">
                <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold tracking-wider text-gray-400 block">Teléfono Central</span>
                    <span class="text-sm font-bold text-gray-900">+34 93 849 84 56</span>
                </div>
            </a>
            <!-- Email -->
            <a href="mailto:info@cuttingeuropean.com" class="flex items-center gap-4 py-5 sm:py-6 px-2 sm:px-6 group hover:bg-blue-50/50 transition-colors">
                <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold tracking-wider text-gray-400 block">Email Comercial</span>
                    <span class="text-sm font-bold text-gray-900">info@cuttingeuropean.com</span>
                </div>
            </a>
            <!-- WhatsApp -->
            <a href="https://wa.me/34938498456?text=<?php echo e(urlencode('Hola, deseo realizar una consulta comercial.')); ?>" target="_blank" class="flex items-center gap-4 py-5 sm:py-6 px-2 sm:px-6 group hover:bg-emerald-50/50 transition-colors">
                <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold tracking-wider text-gray-400 block">WhatsApp Directo</span>
                    <span class="text-sm font-bold text-gray-900">Consulta Inmediata</span>
                </div>
            </a>
            <!-- Horario -->
            <div class="flex items-center gap-4 py-5 sm:py-6 px-2 sm:px-6">
                <div class="w-11 h-11 rounded-xl bg-gray-100 text-gray-600 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-bold tracking-wider text-gray-400 block">Horario de Atención</span>
                    <span class="text-sm font-bold text-gray-900">Lun–Vie: 08:00–18:00</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Grid -->
<section class="py-16 sm:py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
            
            <!-- Left: Contact Details & Map -->
            <div class="lg:col-span-5 space-y-8">
                <!-- Office Card -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                    <div class="p-6 sm:p-8 space-y-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold font-display text-gray-950">Oficinas Centrales & Showroom</h3>
                                <p class="text-xs text-gray-500">Fuenlabrada (Madrid)</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3 text-sm text-gray-700">
                            <div class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-blue-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <span class="font-medium text-gray-900 block">C. del Amonio, 2</span>
                                    <span class="text-gray-500">28946 Fuenlabrada, Madrid, España</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <a href="tel:+34938498456" class="text-blue-600 font-bold hover:underline">+34 93 849 84 56</a>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:info@cuttingeuropean.com" class="text-blue-600 font-semibold hover:underline">info@cuttingeuropean.com</a>
                            </div>
                        </div>

                        <div class="pt-2">
                            <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xd418bd29871c339:0xc4e16191aac5f6ec" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="inline-flex items-center gap-2 text-xs font-bold text-blue-600 hover:text-blue-700 transition-colors">
                                <span>Ver en Google Maps</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Embedded Map -->
                    <div class="h-60 bg-gray-200 border-t border-gray-200">
                        <iframe 
                            src="https://maps.google.com/maps?q=Calle+del+Amonio+2+28946+Fuenlabrada+Madrid&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Ubicación de Cutting Machine en Fuenlabrada, Madrid"
                            class="w-full h-full">
                        </iframe>
                    </div>
                </div>

                <!-- Showroom Visit Card -->
                <div class="bg-slate-900 text-white rounded-2xl p-6 sm:p-8 border border-slate-800 space-y-4 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-blue-600/10 blur-[60px] rounded-full pointer-events-none"></div>
                    <span class="relative text-xs uppercase font-bold text-blue-400 tracking-wider flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        Demostraciones en Vivo
                    </span>
                    <h4 class="relative text-base sm:text-lg font-bold text-white leading-tight">¿Desea probar una máquina antes de comprar?</h4>
                    <p class="relative text-xs text-gray-400 leading-relaxed">
                        Envíenos una muestra de su perfil o barra metálica y realizaremos pruebas de corte en nuestro showroom con cronometraje de tiempos de ciclo y verificación de rebaba.
                    </p>
                    <a href="tel:+34938498456" class="relative inline-flex items-center gap-2 text-xs font-bold text-blue-400 hover:text-blue-300 transition-colors mt-1">
                        Concertar visita
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">
                        <span class="block text-xl font-extrabold font-display text-blue-600">&lt;24h</span>
                        <span class="text-[10px] uppercase font-bold text-gray-400 tracking-wider mt-0.5 block">Respuesta</span>
                    </div>
                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">
                        <span class="block text-xl font-extrabold font-display text-gray-900">+30</span>
                        <span class="text-[10px] uppercase font-bold text-gray-400 tracking-wider mt-0.5 block">Años exp.</span>
                    </div>
                    <div class="bg-white rounded-xl border border-gray-200 p-4 text-center shadow-sm">
                        <span class="block text-xl font-extrabold font-display text-gray-900">ESP</span>
                        <span class="text-[10px] uppercase font-bold text-gray-400 tracking-wider mt-0.5 block">Cobertura</span>
                    </div>
                </div>
            </div>

            <!-- Right: Interactive Contact Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <!-- Form Header -->
                    <div class="p-6 sm:p-8 pb-0">
                        <h3 class="text-xl sm:text-2xl font-bold font-display text-gray-950">Formulario de Contacto</h3>
                        <p class="text-sm text-gray-500 mt-1.5">Seleccione el motivo de su consulta para dirigirla al departamento correspondiente.</p>
                    </div>

                    <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="p-6 sm:p-8 space-y-5">
                        <?php echo csrf_field(); ?>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Tipo de Solicitud *</label>
                            <select name="type" required class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="general">Información General / Asesoramiento</option>
                                <option value="presupuesto">Solicitud de Presupuesto para Maquinaria</option>
                                <option value="tecnico">Servicio Técnico Oficial (SAT) / Avería / Recambios</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Nombre Completo *</label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Su nombre" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Empresa / Razón Social</label>
                                <input type="text" name="company" value="<?php echo e(old('company')); ?>" placeholder="Nombre de su empresa" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Email Profesional *</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="nombre@empresa.com" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Teléfono Directo</label>
                                <input type="tel" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="+34 600 000 000" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Máquina o Referencia de Interés (Opcional)</label>
                            <input type="text" name="product_ref" value="<?php echo e(old('product_ref')); ?>" placeholder="Ej: SHARK 281 NC-50, tronzadora de disco, repuesto..." class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Mensaje o Requerimientos de Corte *</label>
                            <textarea name="message" rows="5" required placeholder="Explique las necesidades de su taller, materiales a cortar, dimensiones, cadencia..." class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="flex items-start gap-3 pt-1">
                            <input type="checkbox" name="privacy_accepted" id="contact_privacy" required class="mt-0.5 h-4 w-4 text-blue-600 rounded border-gray-300">
                            <label for="contact_privacy" class="text-xs text-gray-600 leading-relaxed">
                                He leído y acepto la <a href="<?php echo e(route('legal.privacidad')); ?>" class="underline text-blue-600 hover:text-blue-700">política de privacidad</a> para el tratamiento de mis datos de contacto comercial.
                            </label>
                        </div>
                        <?php $__errorArgs = ['privacy_accepted'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="pt-3">
                            <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm uppercase tracking-wider rounded-xl shadow-md shadow-blue-600/20 transition-all cursor-pointer flex items-center justify-center gap-2.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                Enviar Consulta al Equipo Técnico
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\contact.blade.php ENDPATH**/ ?>