<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo $__env->yieldContent('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal, Sierras de Cinta y Disco'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Comercialización de maquinaria industrial de corte de metal, sierras de cinta y disco MEP, tronzadoras, ocasión y servicio técnico oficial en toda España.'); ?>">
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical', url()->current()); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo $__env->yieldContent('og_type', 'website'); ?>">
    <meta property="og:url" content="<?php echo $__env->yieldContent('canonical', url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Comercialización de maquinaria industrial de corte de metal, sierras de cinta y disco MEP.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('images/cutting-european-og.jpg')); ?>">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title', 'Cutting European | Especialistas en Maquinaria de Corte de Metal'); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'Comercialización de maquinaria industrial de corte de metal.'); ?>">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "IndustrialBusiness",
        "name": "Cutting European S.L.",
        "url": "https://cuttingeuropean.com",
        "logo": "https://cuttingeuropean.com/images/logo.png",
        "description": "Especialistas en maquinaria de corte industrial para metal, sierras de cinta, sierras de disco MEP y servicio técnico oficial.",
        "telephone": "+34938498456",
        "email": "info@cuttingeuropean.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "C. del Amonio, 2",
            "addressLocality": "Fuenlabrada",
            "addressRegion": "Madrid",
            "postalCode": "28946",
            "addressCountry": "ES"
        },
        "sameAs": [
            "https://www.linkedin.com/company/cutting-european"
        ]
    }
    </script>
    <?php echo $__env->yieldPushContent('schema'); ?>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="font-body text-gray-900 bg-white antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen">

    <!-- Global Header -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Flash Notifications -->
    <?php if(session('success')): ?>
        <div class="bg-emerald-600 text-white text-sm py-3 px-4 shadow-md text-center font-semibold animate-fade-in flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span><?php echo e(session('success')); ?></span>
        </div>
    <?php endif; ?>

    <?php if(isset($errors) && $errors->any()): ?>
        <div class="bg-red-600 text-white text-sm py-3 px-4 shadow-md text-center font-semibold flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>Por favor, revisa los errores del formulario para continuar.</span>
        </div>
    <?php endif; ?>

    <!-- Main Content Area -->
    <main class="flex-grow">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Global Footer -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Global Quote Request Modal -->
    <?php echo $__env->make('partials.quote-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Cookie Consent Banner -->
    <?php echo $__env->make('partials.cookie-banner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\layouts\app.blade.php ENDPATH**/ ?>