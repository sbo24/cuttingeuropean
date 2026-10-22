<?php $__env->startSection('title', $category->meta_title ?: "{$category->name} Industriales | Cutting European"); ?>
<?php $__env->startSection('meta_description', $category->meta_description ?: "Descubra nuestra gama de {$category->name} para corte industrial de metal. Distribuidor oficial MEP, asistencia técnica y asesoramiento."); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        $category->name => route(request()->route()->getName())
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Category Header: Clean Industrial Banner -->
<section class="bg-gray-950 text-white py-16 sm:py-20 border-b border-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-900/60 border border-blue-500/40 text-blue-300 text-xs font-bold uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                <span>Gama Industrial &bull; Distribución Oficial MEP</span>
            </div>

            <h1 class="text-3xl sm:text-5xl font-display font-black tracking-tight text-white leading-tight">
                <?php echo e($category->name); ?>

            </h1>
            <p class="text-base sm:text-lg text-gray-300 leading-relaxed font-light max-w-3xl">
                <?php echo e($category->description); ?>

            </p>
        </div>

        <!-- Subcategories Quick Jump Links -->
        <?php if($category->children->count() > 0): ?>
            <div class="mt-10 pt-6 border-t border-gray-800/80">
                <span class="text-xs uppercase font-bold tracking-wider text-gray-400 block mb-3">Subcategorías disponibles:</span>
                <div class="flex flex-wrap gap-2.5">
                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('legacy.' . $child->slug)); ?>" 
                           class="px-4 py-2 rounded-xl bg-gray-900 hover:bg-blue-600 hover:text-white text-gray-200 text-xs font-semibold border border-gray-800 transition-colors">
                            <?php echo e($child->name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Subcategories with Machines Grid -->
<section class="py-16 sm:py-24 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        <?php
            $hasAnyProducts = false;
        ?>

        <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($child->products->count() > 0): ?>
                <?php $hasAnyProducts = true; ?>
                <div class="bg-white rounded-2xl border border-gray-200 p-8 sm:p-10 shadow-xs">
                    <div class="flex flex-col md:flex-row md:items-center justify-between pb-6 mb-8 border-b border-gray-100 gap-4">
                        <div>
                            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-1">Gama Especializada</span>
                            <h2 class="text-2xl sm:text-3xl font-bold font-display text-gray-950">
                                <?php echo e($child->name); ?>

                            </h2>
                            <?php if($child->description): ?>
                                <p class="text-sm text-gray-600 mt-2 max-w-3xl leading-relaxed">
                                    <?php echo e($child->description); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo e(route('legacy.' . $child->slug)); ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700 shrink-0">
                            <span>Ver todos los modelos (<?php echo e($child->products->count()); ?>)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php $__currentLoopData = $child->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('partials.product-card', ['product' => $product, 'showCategory' => false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(!$hasAnyProducts): ?>
            <!-- If no children had products, check direct products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $__env->make('partials.product-card', ['product' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-3 text-center py-20 bg-white rounded-2xl border border-gray-200 p-8 space-y-4">
                        <p class="text-gray-700 font-bold text-base">Disponemos de modelos adicionales bajo pedido o consulta personalizada.</p>
                        <button type="button" @click="$dispatch('open-quote-modal')" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider">
                            Consultar Modelos Específicos
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Industrial Consultation CTA -->
<section class="py-16 bg-gray-950 text-white border-t border-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="space-y-2">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Ingeniería de Corte Asistida</span>
            <h3 class="text-2xl sm:text-3xl font-bold font-display text-white">¿Dudas sobre qué modelo se adapta a su cadencia de corte?</h3>
            <p class="text-sm text-gray-400 font-light">Facilítenos las secciones de sus piezas y le calculamos el tiempo de ciclo estimado sin compromiso.</p>
        </div>
        <div class="flex items-center gap-3 shrink-0">
            <button type="button" @click="$dispatch('open-quote-modal', { product: '<?php echo e(addslashes($category->name)); ?>' })" class="px-7 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md cursor-pointer transition-colors">
                Pedir Estudio Técnico Gratuito
            </button>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\catalog\parent-category.blade.php ENDPATH**/ ?>