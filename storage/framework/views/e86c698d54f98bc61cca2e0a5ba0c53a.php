<?php echo '<' . '?xml version="1.0" encoding="UTF-8"?' . '>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Static Main Pages -->
    <url>
        <loc><?php echo e(route('home')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo e(route('catalog.sierras-cinta')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo e(route('catalog.sierras-disco')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo e(route('catalog.aluminio-pvc')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo e(route('catalog.ocasion')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?php echo e(route('servicio-tecnico')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo e(route('plan-renove')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?php echo e(route('about')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?php echo e(route('contact')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Categories -->
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(route('catalog.category', $category)); ?></loc>
            <lastmod><?php echo e($category->updated_at ? $category->updated_at->format('Y-m-d') : date('Y-m-d')); ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Products -->
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($product->category): ?>
            <url>
                <loc><?php echo e(route('catalog.product', [$product->category, $product])); ?></loc>
                <lastmod><?php echo e($product->updated_at ? $product->updated_at->format('Y-m-d') : date('Y-m-d')); ?></lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Legal -->
    <url>
        <loc><?php echo e(route('legal.privacidad')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc><?php echo e(route('legal.cookies')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc><?php echo e(route('legal.aviso')); ?></loc>
        <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
</urlset>
<?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\sitemap.blade.php ENDPATH**/ ?>