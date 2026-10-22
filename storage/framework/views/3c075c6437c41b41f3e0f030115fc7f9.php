<?php $__env->startSection('title', 'Política de Cookies | Cutting European'); ?>
<?php $__env->startSection('meta_description', 'Información sobre el uso de cookies y tecnologías similares en la web de Cutting European.'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        'Política de Cookies' => route('legal.cookies')
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="py-16 bg-white">
    <div class="container mx-auto max-w-4xl space-y-8 text-gray-800 text-sm leading-relaxed">
        <h1 class="text-3xl font-display font-black text-gray-950 pb-4 border-b border-gray-200">
            Política de Cookies
        </h1>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">¿Qué son las cookies?</h2>
            <p>
                Una cookie es un pequeño archivo de texto que los sitios web descargan en su ordenador o dispositivo móvil cuando los visita. Permiten recordar sus preferencias de navegación y optimizar el rendimiento técnico del portal.
            </p>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">Tipos de cookies utilizadas en este sitio web</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>Cookies Técnicas Necesarias:</strong> Imprescindibles para la navegación básica y el envío seguro de formularios de presupuesto y contacto (protección contra CSRF y control de sesiones).</li>
                <li><strong>Cookies de Análisis (Opcionales):</strong> Permiten medir de forma agregada el número de visitas, páginas más consultadas en el catálogo de corte y fuentes de tráfico para mejorar la usabilidad web.</li>
            </ul>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">Configuración y Desactivación de Cookies</h2>
            <p>
                Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador (Google Chrome, Mozilla Firefox, Apple Safari, Microsoft Edge).
            </p>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\legal\cookies.blade.php ENDPATH**/ ?>