<?php

namespace App\Services;

use App\Models\Product;

class ProductTechnicalDataService
{
    /**
     * Get cutting capacity table for the product.
     */
    public static function getCuttingCapacities(Product $product): array
    {
        $slug = $product->slug;

        // SHARK 652 / 660 / 662 series
        if (str_contains($slug, '660') || str_contains($slug, '662') || str_contains($slug, '652')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 550 mm', 'square' => '500 x 500 mm', 'rect' => '650 x 450 mm', 'bundle' => '500 x 300 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 460 mm', 'square' => '430 x 430 mm', 'rect' => '460 x 430 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 300 mm', 'square' => '300 x 300 mm', 'rect' => '300 x 300 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 430 mm', 'square' => '400 x 400 mm', 'rect' => '430 x 400 mm', 'bundle' => '—'],
            ];
        }

        // SHARK 452 / 460 series
        if (str_contains($slug, '452') || str_contains($slug, '460')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 460 mm', 'square' => '400 x 400 mm', 'rect' => '460 x 380 mm', 'bundle' => '380 x 220 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 340 mm', 'square' => '320 x 320 mm', 'rect' => '340 x 320 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 230 mm', 'square' => '220 x 220 mm', 'rect' => '230 x 220 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 330 mm', 'square' => '300 x 300 mm', 'rect' => '330 x 300 mm', 'bundle' => '—'],
            ];
        }

        // SHARK 350 series
        if (str_contains($slug, '350')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 350 mm', 'square' => '320 x 320 mm', 'rect' => '350 x 320 mm', 'bundle' => '300 x 180 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 280 mm', 'square' => '260 x 260 mm', 'rect' => '280 x 260 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 190 mm', 'square' => '180 x 180 mm', 'rect' => '190 x 180 mm', 'bundle' => '—'],
            ];
        }

        // SHARK 332 series
        if (str_contains($slug, '332')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 300 mm', 'square' => '260 x 260 mm', 'rect' => '330 x 260 mm', 'bundle' => '280 x 160 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 260 mm', 'square' => '250 x 250 mm', 'rect' => '270 x 200 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 180 mm', 'square' => '170 x 170 mm', 'rect' => '170 x 170 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 200 mm', 'square' => '190 x 190 mm', 'rect' => '200 x 160 mm', 'bundle' => '—'],
            ];
        }

        // SHARK 281 / 282 series
        if (str_contains($slug, '281') || str_contains($slug, '282')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 250 mm', 'square' => '230 x 230 mm', 'rect' => '280 x 200 mm', 'bundle' => '170 x 130 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 190 mm', 'square' => '180 x 180 mm', 'rect' => '180 x 180 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 120 mm', 'square' => '110 x 110 mm', 'rect' => '110 x 110 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 170 mm', 'square' => '160 x 160 mm', 'rect' => '170 x 160 mm', 'bundle' => '—'],
            ];
        }

        // SHARK 230 series
        if (str_contains($slug, '230')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 230 mm', 'square' => '210 x 210 mm', 'rect' => '240 x 160 mm', 'bundle' => '150 x 100 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 160 mm', 'square' => '150 x 150 mm', 'rect' => '160 x 150 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 100 mm', 'square' => '90 x 90 mm', 'rect' => '90 x 90 mm', 'bundle' => '—'],
            ];
        }

        // PH 211 / 261
        if (str_contains($slug, 'ph-211') || str_contains($slug, 'ph-261')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 180 mm', 'square' => '160 x 160 mm', 'rect' => '200 x 150 mm', 'bundle' => '—'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 115 mm', 'square' => '100 x 100 mm', 'rect' => '120 x 100 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 70 mm', 'square' => '65 x 65 mm', 'rect' => '70 x 65 mm', 'bundle' => '—'],
            ];
        }

        // TIGER 352 / 372
        if (str_contains($slug, 'tiger')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 120 mm', 'square' => '100 x 100 mm', 'rect' => '180 x 100 mm', 'bundle' => '160 x 80 mm'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 110 mm', 'square' => '90 x 90 mm', 'rect' => '125 x 90 mm', 'bundle' => '—'],
                ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 90 mm', 'square' => '80 x 80 mm', 'rect' => '90 x 80 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 100 mm', 'square' => '85 x 85 mm', 'rect' => '100 x 85 mm', 'bundle' => '—'],
            ];
        }

        // COBRA 352
        if (str_contains($slug, 'cobra')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 120 mm', 'square' => '105 x 105 mm', 'rect' => '180 x 70 mm', 'bundle' => '—'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 115 mm', 'square' => '100 x 100 mm', 'rect' => '115 x 70 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 115 mm', 'square' => '100 x 100 mm', 'rect' => '115 x 70 mm', 'bundle' => '—'],
            ];
        }

        // FALCON 352
        if (str_contains($slug, 'falcon')) {
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 105 mm', 'square' => '95 x 95 mm', 'rect' => '130 x 90 mm', 'bundle' => '—'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 90 mm', 'square' => '80 x 80 mm', 'rect' => '90 x 80 mm', 'bundle' => '—'],
            ];
        }

        // THOR 450 / 560 / 660
        if (str_contains($slug, 'thor')) {
            $diam = str_contains($slug, '660') ? 'Ø 230 mm' : (str_contains($slug, '560') ? 'Ø 190 mm' : 'Ø 150 mm');
            $rect = str_contains($slug, '660') ? '420 x 160 mm' : (str_contains($slug, '560') ? '350 x 140 mm' : '280 x 110 mm');
            return [
                ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => $diam, 'square' => '140 x 140 mm', 'rect' => $rect, 'bundle' => '—'],
                ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 130 mm', 'square' => '120 x 120 mm', 'rect' => '200 x 100 mm', 'bundle' => '—'],
                ['angle' => '-45° (Izquierda)', 'icon' => '45deg-l', 'round' => 'Ø 130 mm', 'square' => '120 x 120 mm', 'rect' => '200 x 100 mm', 'bundle' => '—'],
            ];
        }

        // VELOCEX series
        if (str_contains($slug, 'velocex')) {
            $maxD = str_contains($slug, '100') ? 'Ø 105 mm' : (str_contains($slug, '80') ? 'Ø 82 mm' : 'Ø 65 mm');
            return [
                ['angle' => '0° (Corte Recto Alta Producción)', 'icon' => '90deg', 'round' => $maxD, 'square' => '80 x 80 mm', 'rect' => '90 x 70 mm', 'bundle' => 'Alimentador CNC Automático'],
            ];
        }

        // Default Band Saw Capacity Matrix
        return [
            ['angle' => '0° (Recto)', 'icon' => '90deg', 'round' => 'Ø 280 mm', 'square' => '240 x 240 mm', 'rect' => '280 x 200 mm', 'bundle' => '180 x 120 mm'],
            ['angle' => '+45° (Derecha)', 'icon' => '45deg-r', 'round' => 'Ø 200 mm', 'square' => '180 x 180 mm', 'rect' => '200 x 180 mm', 'bundle' => '—'],
            ['angle' => '+60° (Derecha)', 'icon' => '60deg-r', 'round' => 'Ø 130 mm', 'square' => '120 x 120 mm', 'rect' => '130 x 120 mm', 'bundle' => '—'],
        ];
    }

    /**
     * Get complete engineering parameters for the machine.
     */
    public static function getTechnicalParameters(Product $product): array
    {
        $slug = $product->slug;

        if (str_contains($slug, '660') || str_contains($slug, '662')) {
            return [
                'Herramienta de Corte' => 'Hoja de cinta 5450 x 41 x 1.3 mm',
                'Potencia Motor Principal' => '5.5 kW / 7.5 CV trifásico',
                'Velocidad de Corte' => '15 a 150 m/min (Inverter electrónico continuo)',
                'Capacidad de Mordaza' => 'Apertura máx. 660 mm hidráulica',
                'Carrera Alimentador CNC' => '600 mm (repetible indefinidamente)',
                'Control Numérico' => 'MEP CNC Touch Screen Windows Embedded',
                'Depósito de Taladrina' => '150 Litros con electrobomba doble',
                'Central Hidráulica' => 'Depósito 45 L / Presión 55 bar',
                'Dimensiones y Peso' => '3.400 x 2.200 x 2.150 mm | 3.250 kg',
                'Alimentación Eléctrica' => '400 V / 50 Hz III + Tierra',
            ];
        }

        if (str_contains($slug, '452') || str_contains($slug, '460')) {
            return [
                'Herramienta de Corte' => 'Hoja de cinta 4500 x 34 x 1.1 mm',
                'Potencia Motor Principal' => '4.0 kW / 5.5 CV',
                'Velocidad de Corte' => '15 a 120 m/min con variador de frecuencia',
                'Capacidad de Mordaza' => 'Apertura máx. 465 mm con apriete hidráulico',
                'Carrera Alimentador' => '600 mm accionado por husillo a bolas',
                'Control Numérico' => 'Controlador MEP táctil 7" multifunción',
                'Depósito de Taladrina' => '120 Litros con decantador de virutas',
                'Dimensiones y Peso' => '2.800 x 1.950 x 1.850 mm | 1.950 kg',
                'Alimentación Eléctrica' => '400 V / 50 Hz III',
            ];
        }

        if (str_contains($slug, '332')) {
            return [
                'Herramienta de Corte' => 'Hoja de cinta 3320 x 27 x 0.9 mm',
                'Potencia Motor Principal' => '2.2 kW / 3.0 CV con reductor axial',
                'Velocidad de Corte' => '15 a 100 m/min inverter regulable',
                'Apertura de Mordaza' => '335 mm con aproximación rápida',
                'Carrera Alimentador' => '600 mm con motor paso a paso',
                'Capacidad Refrigerante' => '80 Litros con recirculación',
                'Dimensiones y Peso' => '2.100 x 1.650 x 1.700 mm | 1.150 kg',
                'Altura Plano de Trabajo' => '830 mm ergonómica',
            ];
        }

        if (str_contains($slug, '281') || str_contains($slug, '282')) {
            return [
                'Herramienta de Corte' => 'Hoja de cinta 2950 x 27 x 0.9 mm',
                'Potencia Motor Principal' => '1.5 / 2.2 kW trifásico',
                'Velocidad de Corte' => '20 - 40 - 80 m/min (o Inverter 15-100 m/min)',
                'Apertura de Mordaza' => '285 mm regulable',
                'Carrera Alimentador (NC)' => '600 mm por ciclo (en modelos automáticos)',
                'Depósito Refrigerante' => '50 Litros con filtro de retorno',
                'Dimensiones y Peso' => '1.950 x 1.450 x 1.600 mm | 580 - 965 kg',
                'Altura Plano de Trabajo' => '870 mm',
            ];
        }

        if (str_contains($slug, 'tiger')) {
            return [
                'Herramienta de Corte' => 'Disco circular HSS / Metal Duro Ø 370 x 32 x 3.0 mm',
                'Potencia Motor Disco' => '2.6 / 3.4 kW (doble polaridad)',
                'Velocidad de Rotación' => '15 - 30 - 45 - 90 RPM (según aleación)',
                'Apertura de Mordaza' => '190 mm autocentrante neumática/hidráulica',
                'Carrera Alimentador CNC' => '1.000 mm con repetibilidad ±0.05 mm',
                'Capacidad Refrigerante' => '60 Litros con micro-lubricación opcional',
                'Dimensiones y Peso' => '2.200 x 1.500 x 1.800 mm | 840 kg',
                'Tolerancia de Corte' => 'Longitud ±0.08 mm / Perpendicularidad 0.05 mm',
            ];
        }

        if (str_contains($slug, 'cobra') || str_contains($slug, 'thor')) {
            return [
                'Herramienta de Corte' => 'Disco Widia TCT Ø 350 / 450 mm con dientes de carburo',
                'Potencia Motor' => '2.2 kW a 4.0 kW alto par',
                'Velocidad de Rotación' => '3.000 RPM continua de corte limpio',
                'Sistema de Lubricación' => 'Micro-nebulización neumática venturi',
                'Giro Angular del Cabezal' => '-45° / 0° / +45° continuo',
                'Dimensiones y Peso' => '1.500 x 1.100 x 1.600 mm | 450 - 680 kg',
                'Acabado Superficial' => 'Ra < 1.6 µm (Espejo sin rebaba)',
            ];
        }

        if (str_contains($slug, 'velocex')) {
            return [
                'Herramienta de Corte' => 'Disco TCT / Cermet Ø 285 - 360 mm descartable',
                'Potencia Motor' => '11 kW / 15 CV con servomotores Siemens',
                'Velocidad de Rotación' => 'Hasta 180 RPM con corte en seco frío',
                'Tiempo por Ciclo' => '1.8 a 4.5 segundos por pieza',
                'Cargador de Barras' => 'Automático por paquete de 6 metros',
                'Clasificador de Piezas' => 'Tres vías (cabeza, pieza buena, despunte final)',
                'Dimensiones y Peso' => '6.800 x 2.200 x 2.000 mm | 2.800 kg',
            ];
        }

        // Generic Band Saw specs
        return [
            'Herramienta de Corte' => 'Hoja de cinta bimetálica M42',
            'Potencia Motor Principal' => '2.2 kW trifásico 400V',
            'Velocidad de Hoja' => '20 a 100 m/min regulable',
            'Apertura de Mordaza' => '300 mm con apriete rápido',
            'Depósito Refrigerante' => '60 Litros',
            'Normativa de Seguridad' => 'Directiva de Máquinas 2006/42/CE',
            'Peso Aproximado' => '650 kg',
        ];
    }

    /**
     * Get video embed info for the machine.
     */
    public static function getVideoData(Product $product): array
    {
        return [
            'youtube_id' => 'OUUJhS_Opfo',
            'embed_url'  => 'https://www.youtube-nocookie.com/embed/OUUJhS_Opfo?rel=0&modestbranding=1',
            'title'      => "Demostración oficial en funcionamiento: {$product->name}",
            'desc'       => "Ciclo completo de corte desatendido, sujeción electrohidráulica de la mordaza, velocidad de descenso regulada del arco y evacuación continua de virutas.",
        ];
    }

    /**
     * Get standard equipment and optional accessories.
     */
    public static function getEquipment(Product $product): array
    {
        $standard = [
            'Arco de fundición nodular de alta rigidez con absorción de vibraciones dinámicas.',
            'Guías de hoja con pastillas de metal duro (widia) y rodamientos de aproximación previa.',
            'Dispositivo electromecánico de control de tensión de hoja con microinterruptor de seguridad.',
            'Bomba de lubricación forzada de refrigerante con doble circuito de toberas regulables.',
            'Cepillo motorizado de alambre de acero para la limpieza continua de la ranura entre dientes.',
            'Cuadro de mandos ergonómico de baja tensión (24V) conforme a directiva europea CE.',
        ];

        if (str_contains($product->slug, 'nc') || str_contains($product->slug, 'cnc') || str_contains($product->slug, 'konnect')) {
            $standard[] = 'Control numérico computarizado (CNC) táctil con almacenamiento de programas de corte multimaterial.';
            $standard[] = 'Alimentador automático de material accionado por motor paso a paso y husillo a bolas de alta precisión.';
            $standard[] = 'Contador digital de piezas cortadas con parada automática al completar el lote programado.';
        }

        $optional = [
            ['name' => 'Vías de Rodillos de Entrada y Salida', 'desc' => 'Tramos modulares de 2 a 6 metros con rodillos de acero templado y capacidad de carga hasta 1.500 kg/m.'],
            ['name' => 'Tope de Medición Micrométrico Digital', 'desc' => 'Visualizador electrónico de cotas con bloqueo neumático y precisión de lectura de ±0.1 mm.'],
            ['name' => 'Evacuador Motorizado de Virutas', 'desc' => 'Tornillo sinfín continuo que transporta la viruta metálica fuera del bancal sin interrupción del trabajo.'],
            ['name' => 'Dispositivo de Micro-Lubricación (Niebla de Aceite)', 'desc' => 'Nebulización venturi con aceite vegetal biodegradable; óptimo para tubos y perfiles sin manchas.'],
            ['name' => 'Mordazas Hidráulicas Verticales para Paquetes', 'desc' => 'Permiten amarrar con máxima seguridad conjuntos de barras o tubos para cortarlos en una sola pasada.'],
            ['name' => 'Proyector Láser de Línea de Corte', 'desc' => 'Línea de luz láser roja de alta visibilidad para alinear marcas manuales de forma instantánea.'],
        ];

        return [
            'standard' => $standard,
            'optional' => $optional,
        ];
    }

    /**
     * Calculate estimated monthly renting fee based on machine estimated price.
     */
    public static function getEstimatedRentingFee(Product $product): array
    {
        $slug = $product->slug;
        $price = 18000;

        if (str_contains($slug, '660') || str_contains($slug, '662')) {
            $price = 68000;
        } elseif (str_contains($slug, '452') || str_contains($slug, '460')) {
            $price = 42000;
        } elseif (str_contains($slug, '350') || str_contains($slug, 'velocex')) {
            $price = 34000;
        } elseif (str_contains($slug, '332')) {
            $price = 24000;
        } elseif (str_contains($slug, '281-nc') || str_contains($slug, 'tiger')) {
            $price = 21000;
        } elseif (str_contains($slug, '281') || str_contains($slug, '282') || str_contains($slug, 'cobra')) {
            $price = 14500;
        } elseif (str_contains($slug, 'ph-') || str_contains($slug, 'falcon')) {
            $price = 7800;
        }

        if ($product->is_second_hand) {
            $price = round($price * 0.55);
        }

        return [
            'price_est' => $price,
            'fee_36'    => round($price * 0.0315),
            'fee_48'    => round($price * 0.0245),
            'fee_60'    => round($price * 0.0205),
        ];
    }
}
