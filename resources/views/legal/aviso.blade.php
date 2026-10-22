@extends('layouts.app')

@section('title', 'Aviso Legal | Cutting European')
@section('meta_description', 'Aviso legal, información societaria y condiciones de uso de la web de Cutting European.')

@section('content')
@include('partials.breadcrumbs', [
    'items' => [
        'Aviso Legal' => route('legal.aviso')
    ]
])

<section class="py-16 bg-white">
    <div class="container mx-auto max-w-4xl space-y-8 text-gray-800 text-sm leading-relaxed">
        <h1 class="text-3xl font-display font-black text-gray-950 pb-4 border-b border-gray-200">
            Aviso Legal
        </h1>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">1. Datos Identificativos de la Empresa</h2>
            <p>
                En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se informa de los datos de la entidad titular de este sitio web:
            </p>
            <p>
                <strong>Denominación Social:</strong> Cutting European S.L.<br>
                <strong>Domicilio Social:</strong> Polígono Industrial Palou Nord, 08401 Granollers (Barcelona), España.<br>
                <strong>Email de Contacto:</strong> info@cuttingeuropean.com<br>
                <strong>Teléfono:</strong> +34 93 849 84 56<br>
                <strong>Actividad:</strong> Comercio al por mayor y servicio técnico de maquinaria industrial para el corte de metales.
            </p>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">2. Propiedad Intelectual e Industrial</h2>
            <p>
                Los derechos de propiedad intelectual del contenido de las páginas web, su diseño gráfico, logotipos y códigos fuente son titularidad de Cutting European S.L. o de sus licenciantes (incluyendo marcas representadas como MEP S.p.A.). Queda prohibida su reproducción, distribución o comunicación pública sin autorización expresa.
            </p>
        </div>

        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">3. Responsabilidad sobre los Contenidos</h2>
            <p>
                Las características técnicas, fotografías, capacidades de corte y dimensiones mostradas en esta web son orientativas y pueden ser actualizadas o modificadas por los fabricantes sin previo aviso para incorporar mejoras de ingeniería continua. Para datos vinculantes, solicite siempre confirmación de oferta técnica y plano formal.
            </p>
        </div>
    </div>
</section>
@endsection
