<?php $__env->startSection('title', 'Maquinaria de Ocasión y Segunda Mano | Sierras de Cinta y Disco Revisadas | Cutting European'); ?>
<?php $__env->startSection('meta_description', 'Amplio stock de sierras de cinta y disco de segunda mano y ocasión revisadas en taller propio. Garantía de funcionamiento y puesta en marcha.'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        'Maquinaria de Ocasión' => route('catalog.ocasion')
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Header: Dark Banner with Ambient Glow -->
<section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-20 lg:py-24 border-b border-slate-800">
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[500px] h-[300px] bg-amber-500/15 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-slate-900 border border-slate-700 text-xs font-semibold text-amber-300 shadow-sm">
                <span class="inline-block w-2 h-2 rounded-full bg-amber-400"></span>
                <span>Stock Verificado en Taller &bull; Garantía Cutting European</span>
            </div>
            
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-display font-extrabold tracking-tight text-white leading-tight">
                Maquinaria de Ocasión <br>
                <span class="text-amber-400">y Segunda Mano</span>
            </h1>

            <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-2xl">
                Oportunidades de ocasión para talleres y fábricas que buscan maquinaria industrial robusta con entrega inmediata y ahorro frente a equipo nuevo, con la total tranquilidad de una revisión de 30 puntos en nuestros propios talleres.
            </p>
        </div>
    </div>
</section>

<!-- Trust Verification Bar: 4 Cards -->
<section class="py-12 bg-slate-50 border-b border-slate-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex items-start gap-4 shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm shrink-0 border border-amber-200/80">✓</div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900 font-display">Protocolo de 30 Puntos</h3>
                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">Revisión mecánica, eléctrica e hidráulica completa.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex items-start gap-4 shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm shrink-0 border border-amber-200/80">✓</div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900 font-display">Prueba Real de Corte</h3>
                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">Comprobación de tolerancias, guías y escuadrado.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex items-start gap-4 shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm shrink-0 border border-amber-200/80">✓</div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900 font-display">Garantía de Taller</h3>
                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">Soporte directo SAT y recambios garantizados.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200/90 p-6 flex items-start gap-4 shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm shrink-0 border border-amber-200/80">✓</div>
                <div>
                    <h3 class="font-bold text-sm text-slate-900 font-display">Plan Renove Aceptado</h3>
                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">Aceptamos su máquina usada como parte de pago.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Machinery Stock Grid -->
<section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between pb-6 mb-8 border-b border-slate-100 gap-4">
            <div>
                <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block mb-1">Stock Inmediato</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-slate-900">
                    Máquinas Disponibles en Instalaciones
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">El stock de ocasión varía semanalmente. Si busca un modelo específico, consúltenos sin compromiso.</p>
            </div>
            <button type="button" @click="$dispatch('open-quote-modal', { product: 'Consulta Maquinaria de Ocasión' })" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold transition-colors cursor-pointer shrink-0">
                Consultar Máquinas en Revisión
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('partials.product-card', ['product' => $product, 'showCategory' => false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-3 text-center py-16 bg-slate-50 rounded-2xl border border-slate-200 p-8 space-y-4">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <p class="text-slate-900 font-bold text-lg font-display">Actualmente las unidades están en fase de revisión o reservadas.</p>
                    <p class="text-xs sm:text-sm text-slate-500 max-w-md mx-auto leading-relaxed">Contáctenos indicando el tipo de sierra que busca y le avisaremos en cuanto entre una unidad en taller antes de ser publicada.</p>
                    <button type="button" @click="$dispatch('open-quote-modal', { product: 'Aviso de Entrada Maquinaria Ocasión' })" class="px-8 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold transition-colors cursor-pointer">
                        Darme de alta en alertas de ocasión
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Plan Renove Teaser -->
<section class="py-16 sm:py-20 bg-slate-900 text-white border-t border-slate-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-400">¿Desea renovar su maquinaria actual?</span>
                <h3 class="text-2xl sm:text-4xl font-display font-extrabold text-white">Plan Renove: Tasamos su máquina de corte usada</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-2xl">
                    No deje que su maquinaria obsoleta pierda valor. En Cutting European tasamos su sierra de cinta o disco actual y deducimos su importe del precio de compra de una máquina nueva o seminueva.
                </p>
            </div>
            <div class="lg:col-span-4 flex justify-start lg:justify-end">
                <a href="<?php echo e(route('plan-renove')); ?>" class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider transition-colors cursor-pointer">
                    Solicitar Tasación de mi Máquina
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\catalog\ocasion.blade.php ENDPATH**/ ?>