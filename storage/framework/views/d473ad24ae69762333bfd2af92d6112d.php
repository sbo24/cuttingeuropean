<?php
    $items = $items ?? [];
?>

<nav aria-label="Breadcrumb" class="py-3 px-4 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto">
        <ol class="flex items-center flex-wrap gap-2 text-xs md:text-sm text-gray-500 font-medium">
            <li class="flex items-center">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-blue-600 flex items-center gap-1 transition-colors">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Inicio</span>
                </a>
            </li>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <?php if($url && !$loop->last): ?>
                        <a href="<?php echo e($url); ?>" class="hover:text-blue-600 transition-colors truncate max-w-[200px] md:max-w-none"><?php echo e($label); ?></a>
                    <?php else: ?>
                        <span class="text-gray-900 font-semibold truncate max-w-[240px] md:max-w-none" aria-current="page"><?php echo e($label); ?></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </div>
</nav>
<?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\partials\breadcrumbs.blade.php ENDPATH**/ ?>