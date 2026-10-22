<?php $__env->startSection('title', 'Plan Renove Maquinaria de Corte de Metal | Tasación de su Antigua Máquina | Cutting European'); ?>
<?php $__env->startSection('meta_description', 'Actualice el parque de maquinaria de su taller con el Plan Renove de Cutting European. Tasamos su sierra de cinta o disco usada y descontamos su valor de su nueva máquina.'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        'Plan Renove' => route('plan-renove')
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Hero Header -->
<section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-20 lg:py-24 border-b border-slate-800">
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[550px] h-[300px] bg-amber-500/15 blur-[130px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-slate-900 border border-slate-700 text-xs font-semibold text-amber-300 shadow-sm">
                <span class="inline-block w-2 h-2 rounded-full bg-amber-400"></span>
                <span>Programa Oficial de Recompra &bull; Tasación en 24h</span>
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-display font-extrabold tracking-tight text-white leading-tight">
                Modernice su Taller con el <br>
                <span class="text-amber-400">Plan Renove Industrial</span>
            </h1>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-2xl">
                Entregue su sierra de cinta o tronzadora antigua de cualquier marca y descuente su valoración directamente en la compra de su nueva máquina de corte de alta eficiencia.
            </p>
        </div>
    </div>
</section>

<!-- 3 Steps Grid -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-2">
            <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block">Proceso Ágil</span>
            <h2 class="text-2xl sm:text-4xl font-display font-extrabold text-slate-900">Cómo Funciona el Plan Renove</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl border border-slate-200/90 p-8 text-center space-y-4 shadow-xs">
                <div class="w-14 h-14 bg-amber-500 text-slate-950 rounded-2xl flex items-center justify-center font-black text-xl mx-auto shadow-sm">
                    1
                </div>
                <h3 class="text-lg font-bold text-slate-900 font-display">Solicite Tasación</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Indíquenos la marca, modelo y estado operativo de su máquina usada a través de nuestro formulario o enviándonos fotos técnicas.
                </p>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200/90 p-8 text-center space-y-4 shadow-xs">
                <div class="w-14 h-14 bg-amber-500 text-slate-950 rounded-2xl flex items-center justify-center font-black text-xl mx-auto shadow-sm">
                    2
                </div>
                <h3 class="text-lg font-bold text-slate-900 font-display">Valoración Garantizada</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Nuestros peritos técnicos valoran la máquina en base al mercado real y le emitimos una oferta formal con descuento directo sobre el nuevo equipo.
                </p>
            </div>

            <div class="bg-slate-50 rounded-2xl border border-slate-200/90 p-8 text-center space-y-4 shadow-xs">
                <div class="w-14 h-14 bg-amber-500 text-slate-950 rounded-2xl flex items-center justify-center font-black text-xl mx-auto shadow-sm">
                    3
                </div>
                <h3 class="text-lg font-bold text-slate-900 font-display">Retirada Simultánea</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Coordinamos el transporte para que la retirada de la máquina vieja y la descarga de la nueva se realicen sin interrumpir su trabajo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Valuation Request Form -->
<section class="py-16 sm:py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        <div class="bg-white rounded-2xl border border-slate-200/90 p-8 sm:p-12 shadow-sm">
            <div class="text-center mb-10 space-y-2">
                <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block">Tasación Express</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-slate-900">Solicitar Tasación para Plan Renove</h2>
                <p class="text-xs sm:text-sm text-slate-500">Recibirá nuestra propuesta económica en menos de 24 horas laborables.</p>
            </div>

            <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-5">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="type" value="presupuesto">
                <input type="hidden" name="subject" value="Solicitud Plan Renove Maquinaria">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Nombre de Contacto *</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Empresa / Razón Social *</label>
                        <input type="text" name="company" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Email Profesional *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Teléfono Directo *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Máquina a Entregar (Marca / Modelo / Año) *</label>
                        <input type="text" name="product_ref" required placeholder="Ej: FAT 280, año 2008, operativa" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Máquina Nueva que Desea Adquirir *</label>
                        <input type="text" name="company_interest" placeholder="Ej: Sierra automática MEP Shark 281" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-1.5">Detalles del Estado de la Máquina y Observaciones *</label>
                    <textarea name="message" rows="3" required placeholder="Indique si funciona actualmente, si tiene holguras, fugas o accesorios..." class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:bg-white focus:ring-2 focus:ring-amber-500 outline-none transition-all"></textarea>
                </div>

                <div class="flex items-center gap-2 pt-2">
                    <input type="checkbox" name="privacy_accepted" id="renove_privacy" required class="h-4 w-4 text-amber-600 rounded border-slate-300">
                    <label for="renove_privacy" class="text-xs text-slate-600">
                        Acepto la <a href="<?php echo e(route('legal.privacidad')); ?>" class="underline text-amber-700">política de privacidad</a> para la valoración de mi maquinaria.
                    </label>
                </div>

                <div class="pt-4 text-center">
                    <button type="submit" class="px-8 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider shadow-md transition-colors cursor-pointer">
                        Enviar Datos para Tasación Gratuita
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\plan-renove.blade.php ENDPATH**/ ?>