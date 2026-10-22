<?php $__env->startSection('title', 'Política de Privacidad | Cutting European'); ?>
<?php $__env->startSection('meta_description', 'Política de privacidad y protección de datos personales de Cutting European conforme al RGPD.'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', [
    'items' => [
        'Política de Privacidad' => route('legal.privacidad')
    ]
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="py-16 bg-white">
    <div class="container mx-auto max-w-4xl space-y-8 text-gray-800 text-sm leading-relaxed">
        <h1 class="text-3xl font-display font-black text-gray-950 pb-4 border-b border-gray-200">
            Política de Privacidad
        </h1>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">1. Responsable del Tratamiento</h2>
            <p>
                <strong>Razón Social:</strong> Cutting European S.L.<br>
                <strong>Domicilio:</strong> C. del Amonio, 2, 28946 Fuenlabrada (Madrid), España.<br>
                <strong>Teléfono:</strong> +34 93 849 84 56<br>
                <strong>Email:</strong> info@cuttingeuropean.com
            </p>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">2. Finalidad del Tratamiento de Datos</h2>
            <p>
                En Cutting European tratamos la información que nos facilitan las personas interesadas con el fin de:
            </p>
            <ul class="list-disc pl-6 space-y-1">
                <li>Gestionar solicitudes de presupuesto técnico y pedidos de maquinaria industrial.</li>
                <li>Atender partes de asistencia técnica (SAT), mantenimiento y suministro de repuestos.</li>
                <li>Enviar comunicaciones comerciales relativas a novedades en maquinaria de corte cuando se haya obtenido consentimiento expreso.</li>
            </ul>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">3. Legitimación para el Tratamiento</h2>
            <p>
                La base legal para el tratamiento de sus datos es la ejecución de medidas precontractuales o contractuales al solicitar presupuestos, así como el consentimiento expreso del usuario al marcar la casilla de aceptación en nuestros formularios web.
            </p>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">4. Conservación de los Datos</h2>
            <p>
                Los datos proporcionados se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales y fiscales aplicables.
            </p>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">5. Derechos del Usuario</h2>
            <p>
                Cualquier persona tiene derecho a obtener confirmación sobre si en Cutting European estamos tratando datos personales que les conciernan. Los interesados tienen derecho a acceder a sus datos personales, solicitar la rectificación de los datos inexactos o solicitar su supresión enviando un correo electrónico a <strong>info@cuttingeuropean.com</strong>.
            </p>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\legal\privacidad.blade.php ENDPATH**/ ?>