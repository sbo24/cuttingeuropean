<?php $__env->startSection('title', $product->meta_title); ?>
<?php $__env->startSection('meta_description', $product->meta_description); ?>
<?php $__env->startSection('og_type', 'product'); ?>
<?php $__env->startSection('og_image', $product->main_image ?: asset('images/cutting-european-og.jpg')); ?>

<?php $__env->startPush('schema'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "<?php echo e(addslashes($product->name)); ?>",
    "image": "<?php echo e($product->main_image ?? 'https://cuttingeuropean.com/images/default-machine.jpg'); ?>",
    "description": "<?php echo e(addslashes($product->short_description ?? $product->description)); ?>",
    "brand": {
        "@type": "Brand",
        "name": "<?php echo e($product->brand ?? 'MEP'); ?>"
    },
    "category": "<?php echo e($category->name); ?>",
    "offers": {
        "@type": "AggregateOffer",
        "priceCurrency": "EUR",
        "availability": "https://schema.org/InStock"
    }
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php
    $breadcrumbItems = [];
    if ($category->parent) {
        $parentRoute = match($category->parent->slug) {
            'sierras-de-cinta' => route('catalog.sierras-cinta'),
            'sierras-de-disco' => route('catalog.sierras-disco'),
            'aluminio-pvc'    => route('catalog.aluminio-pvc'),
            default            => route('catalog.category', $category->parent),
        };
        $breadcrumbItems[$category->parent->name] = $parentRoute;
    }
    $breadcrumbItems[$category->name] = route('catalog.category', $category);
    $breadcrumbItems[$product->name] = '';
?>

<?php echo $__env->make('partials.breadcrumbs', ['items' => $breadcrumbItems], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Product Hero & Overview -->
<section class="py-12 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left: Product Image Gallery -->
            <div class="lg:col-span-6 space-y-4">
                <div class="bg-gray-50 rounded-2xl border border-gray-200 aspect-[4/3] p-8 flex items-center justify-center relative overflow-hidden group">
                    <?php if($product->main_image): ?>
                        <img src="<?php echo e($product->main_image); ?>" 
                             alt="<?php echo e($product->name); ?> - Maquinaria de corte industrial <?php echo e($product->brand); ?>"
                             class="max-h-full max-w-full object-contain filter drop-shadow-md group-hover:scale-105 transition-transform duration-500"
                             onerror="this.onerror=null; this.parentElement.innerHTML='<div class=\'text-center text-gray-400\'><svg class=\'w-20 h-20 mx-auto stroke-current stroke-1 mb-2\' fill=\'none\' viewBox=\'0 0 24 24\'><circle cx=\'12\' cy=\'12\' r=\'9\'/><path d=\'M12 3v18M3 12h18\'/><circle cx=\'12\' cy=\'12\' r=\'3\'/></svg><span class=\'text-xs uppercase font-bold text-gray-400 tracking-wider\'>Esquema Técnico de Máquina</span></div>';">
                    <?php else: ?>
                        <div class="text-center text-gray-400">
                            <svg class="w-20 h-20 mx-auto stroke-current stroke-1 mb-2" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 3v18M3 12h18"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            <span class="text-xs uppercase font-bold text-gray-400 tracking-wider">Esquema Técnico de Máquina</span>
                        </div>
                    <?php endif; ?>

                    <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                        <?php if($product->brand): ?>
                            <span class="px-3 py-1 bg-gray-950 text-white text-xs font-black uppercase tracking-wider rounded shadow-sm">
                                <?php echo e($product->brand); ?>

                            </span>
                        <?php endif; ?>
                        <?php if($product->is_second_hand): ?>
                            <span class="px-3 py-1 bg-amber-500 text-gray-950 text-xs font-bold uppercase tracking-wider rounded shadow-sm">
                                Maquinaria de Ocasión: <?php echo e($product->condition ?? 'Revisada'); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Quality Badges Under Image -->
                <div class="grid grid-cols-3 gap-3 text-center">
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <span class="block text-[11px] font-bold uppercase text-gray-400">Garantía</span>
                        <span class="text-xs font-bold text-gray-800">Oficial y SAT Propio</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <span class="block text-[11px] font-bold uppercase text-gray-400">Entrega</span>
                        <span class="text-xs font-bold text-gray-800">Inmediata / A consultar</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                        <span class="block text-[11px] font-bold uppercase text-gray-400">Normativa</span>
                        <span class="text-xs font-bold text-gray-800">Marcado CE Seguridad</span>
                    </div>
                </div>
            </div>

            <!-- Right: Product Information & CTAs -->
            <div class="lg:col-span-6 space-y-6">
                <div>
                    <a href="<?php echo e(route('catalog.category', $category)); ?>" class="text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700">
                        <?php echo e($category->name); ?>

                    </a>
                    <h1 class="text-3xl sm:text-4xl font-display font-black text-gray-950 mt-1">
                        <?php echo e($product->name); ?>

                    </h1>
                    <?php if($product->model_ref): ?>
                        <p class="text-xs text-gray-500 font-mono mt-1">Referencia técnica: <?php echo e($product->model_ref); ?></p>
                    <?php endif; ?>
                </div>

                <?php if($product->short_description): ?>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed font-light">
                        <?php echo e($product->short_description); ?>

                    </p>
                <?php endif; ?>

                <!-- Quick Specs Summary Box -->
                <?php if(!empty($product->specifications) && is_array($product->specifications)): ?>
                    <div class="p-5 bg-gray-50 rounded-xl border border-gray-200">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-gray-700 mb-3">Especificaciones Clave:</h3>
                        <div class="grid grid-cols-2 gap-3 text-xs">
                            <?php $__currentLoopData = $product->specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-white p-2.5 rounded-lg border border-gray-100 shadow-2xs">
                                    <span class="text-gray-400 block text-[10px] uppercase font-bold"><?php echo e($key); ?></span>
                                    <span class="text-gray-900 font-bold text-xs"><?php echo e($val); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- CTAs -->
                <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <button type="button" 
                            @click="$dispatch('open-quote-modal', { product: '<?php echo e(addslashes($product->name)); ?>', ref: '<?php echo e(addslashes($product->model_ref ?? $product->brand)); ?>' })"
                            class="flex-1 py-4 px-6 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg hover:shadow-blue-600/30 transition-all flex items-center justify-center gap-2 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>Solicitar Presupuesto y Plazo</span>
                    </button>
                    <a href="https://wa.me/34938498456?text=<?php echo e(urlencode('Hola, deseo consultar disponibilidad y precio para la máquina ' . $product->name)); ?>"
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="py-4 px-6 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition-colors flex items-center justify-center gap-2">
                        <span>WhatsApp Directo</span>
                    </a>
                </div>

                <div class="pt-2 text-xs text-gray-500 flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>¿Necesita adaptar longitud de carrera, rodillos de carga o mordazas para paquete? Indíquelo en la solicitud.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Information Tabs / Sections -->
<section class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto space-y-12">
        <!-- Description & Detailed Features -->
        <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-xs">
            <h2 class="text-2xl font-bold font-display text-gray-950 mb-4">
                Descripción Técnica del Modelo
            </h2>
            <div class="prose max-w-none text-sm text-gray-700 leading-relaxed space-y-4">
                <p><?php echo e($product->description); ?></p>
            </div>

            <!-- Features Bullet Points -->
            <?php if(!empty($product->features) && is_array($product->features)): ?>
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <h3 class="text-base font-bold text-gray-900 mb-4">Ventajas Operativas y Equipamiento Destacado</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <?php $__currentLoopData = $product->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-start gap-2.5 text-xs text-gray-700 bg-gray-50 p-3 rounded-lg border border-gray-100">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php echo e($feature); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Applications -->
            <?php if(!empty($product->applications) && is_array($product->applications)): ?>
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <h3 class="text-base font-bold text-gray-900 mb-4">Sectores y Materiales Aplicables</h3>
                    <div class="flex flex-wrap gap-2">
                        <?php $__currentLoopData = $product->applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="px-3 py-1.5 bg-blue-50 text-blue-800 text-xs font-semibold rounded-lg border border-blue-100">
                                <?php echo e($app); ?>

                            </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Fast Direct Inquiry Form Box -->
        <div class="bg-gray-900 text-white rounded-2xl p-8 border border-gray-800">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-400">Atención Técnica Personalizada</span>
                    <h3 class="text-2xl font-bold font-display text-white">Solicitar Oferta Formal para <?php echo e($product->name); ?></h3>
                    <p class="text-xs text-gray-400 leading-relaxed">
                        Indíquenos si precisa accesorios como caminos de rodillos motorizados, evacuadores de viruta, micrometros digitales o suministro regular de hojas de cinta. Le enviaremos una propuesta desglosada y plazo de entrega exacto.
                    </p>
                </div>
                <div class="lg:col-span-7">
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-3">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="type" value="presupuesto">
                        <input type="hidden" name="product_ref" value="<?php echo e($product->name); ?> (<?php echo e($product->model_ref ?? $product->brand); ?>)">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="text" name="name" required placeholder="Nombre *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                            <input type="text" name="company" required placeholder="Empresa / Razón Social *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="email" name="email" required placeholder="Email corporativo *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                            <input type="tel" name="phone" required placeholder="Teléfono de contacto *" class="px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none">
                        </div>

                        <textarea name="message" rows="2" required placeholder="Detalles de su corte: dimensiones, espesor de pared, aleación, volumen previsto..." class="w-full px-3.5 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-white placeholder-gray-400 focus:bg-gray-750 focus:border-blue-500 focus:outline-none"></textarea>

                        <div class="flex items-center justify-between pt-1 flex-wrap gap-2">
                            <label class="flex items-center gap-2 text-[11px] text-gray-400">
                                <input type="checkbox" name="privacy_accepted" required class="rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                                <span>Acepto la <a href="<?php echo e(route('legal.privacidad')); ?>" class="underline text-blue-400">política de privacidad</a></span>
                            </label>

                            <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider rounded-lg transition-colors cursor-pointer">
                                Enviar Consulta Rápida
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Related Machines -->
        <?php if($related->count() > 0): ?>
            <div class="pt-8">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold font-display text-gray-950">Otros Modelos en <?php echo e($category->name); ?></h2>
                    <a href="<?php echo e(route('catalog.category', $category)); ?>" class="text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-700">Ver gama completa →</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('partials.product-card', ['product' => $rel, 'showCategory' => false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\catalog\product.blade.php ENDPATH**/ ?>