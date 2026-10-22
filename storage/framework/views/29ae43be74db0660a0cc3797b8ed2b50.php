<?php
    $showCategory = $showCategory ?? true;
?>

<div class="group bg-white rounded-2xl border border-gray-200 hover:border-blue-500 hover:shadow-xl transition-all duration-200 flex flex-col justify-between overflow-hidden">
    <!-- Top Badges -->
    <div class="px-5 pt-5 pb-2 flex items-center justify-between gap-2 z-10">
        <div class="flex items-center gap-2 flex-wrap">
            <?php if($product->brand): ?>
                <span class="px-2.5 py-1 text-[10px] font-black tracking-wider uppercase bg-gray-900 text-white rounded-md shadow-xs">
                    <?php echo e($product->brand); ?>

                </span>
            <?php endif; ?>
            <?php if($product->is_second_hand): ?>
                <span class="px-2.5 py-1 text-[10px] font-bold uppercase bg-amber-400 text-gray-950 rounded-md">
                    Ocasión &bull; <?php echo e($product->condition ?? 'Revisada'); ?>

                </span>
            <?php endif; ?>
        </div>
        <?php if($product->featured && !$product->is_second_hand): ?>
            <span class="px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-blue-700 rounded-md border border-blue-200">
                Top Ventas
            </span>
        <?php endif; ?>
    </div>

    <!-- Product Image Stage with Ample Padding -->
    <a href="<?php echo e(route('catalog.product', [$product->category ?? 'maquinaria', $product->slug])); ?>" 
       class="relative block p-6 flex items-center justify-center bg-gray-50/70 rounded-xl mx-4 my-2 h-56 group-hover:bg-blue-50/30 transition-colors">
        <?php if($product->main_image): ?>
            <img src="<?php echo e($product->main_image); ?>" 
                 alt="<?php echo e($product->name); ?> - <?php echo e($product->brand); ?>" 
                 loading="lazy"
                 class="max-h-48 max-w-full object-contain filter drop-shadow-sm group-hover:scale-105 transition-transform duration-200"
                 onerror="this.onerror=null; this.parentElement.innerHTML='<div class=\'w-full h-full flex flex-col items-center justify-center text-gray-300\'><svg class=\'w-14 h-14 stroke-current stroke-1 mb-2 text-gray-400\' fill=\'none\' viewBox=\'0 0 24 24\'><circle cx=\'12\' cy=\'12\' r=\'9\'/><path d=\'M12 3v18M3 12h18\'/><circle cx=\'12\' cy=\'12\' r=\'3\'/></svg><span class=\'text-[10px] font-bold uppercase tracking-widest text-gray-400\'>Ficha Técnica Oficial</span></div>';">
        <?php else: ?>
            <div class="w-full h-full flex flex-col items-center justify-center text-gray-300">
                <svg class="w-14 h-14 stroke-current stroke-1 mb-2 text-gray-400" fill="none" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 3v18M3 12h18"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Corte Industrial</span>
            </div>
        <?php endif; ?>
    </a>

    <!-- Card Content -->
    <div class="p-6 pt-3 flex-1 flex flex-col justify-between">
        <div>
            <?php if($showCategory && $product->category): ?>
                <p class="text-[11px] font-bold text-blue-600 uppercase tracking-widest mb-1.5 truncate">
                    <?php echo e($product->category->name); ?>

                </p>
            <?php endif; ?>

            <h3 class="text-lg font-bold font-display text-gray-950 group-hover:text-blue-600 transition-colors leading-snug">
                <a href="<?php echo e(route('catalog.product', [$product->category ?? 'maquinaria', $product->slug])); ?>">
                    <?php echo e($product->name); ?>

                </a>
            </h3>

            <?php if($product->short_description): ?>
                <p class="text-xs text-gray-600 mt-2 line-clamp-2 leading-relaxed">
                    <?php echo e($product->short_description); ?>

                </p>
            <?php endif; ?>

            <!-- Technical Specifications Badges -->
            <?php if(!empty($product->specifications) && is_array($product->specifications)): ?>
                <div class="mt-4 pt-3 border-t border-gray-100 grid grid-cols-2 gap-2 text-xs">
                    <?php $count = 0; ?>
                    <?php $__currentLoopData = $product->specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($count < 4): ?>
                            <div class="bg-gray-50 rounded-lg px-3 py-2 border border-gray-100 flex flex-col">
                                <span class="text-gray-400 text-[10px] uppercase font-bold tracking-wider truncate"><?php echo e($key); ?></span>
                                <span class="text-gray-900 font-semibold text-xs truncate mt-0.5"><?php echo e($val); ?></span>
                            </div>
                            <?php $count++; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center gap-3">
            <a href="<?php echo e(route('catalog.product', [$product->category ?? 'maquinaria', $product->slug])); ?>" 
               class="flex-1 py-2.5 px-3 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-bold text-center transition-colors">
                Ficha Técnica
            </a>
            <button type="button" 
                    @click="$dispatch('open-quote-modal', { product: '<?php echo e(addslashes($product->name)); ?>', ref: '<?php echo e(addslashes($product->model_ref ?? $product->brand)); ?>' })"
                    class="py-2.5 px-4 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl flex items-center justify-center gap-1.5 cursor-pointer shadow-sm transition-colors">
                <span>Cotizar</span>
                <svg class="w-3.5 h-3.5 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\partials\product-card.blade.php ENDPATH**/ ?>