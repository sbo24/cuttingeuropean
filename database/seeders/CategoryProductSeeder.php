<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        // ─────────────────────────────────────────
        // PARENT CATEGORIES
        // ─────────────────────────────────────────
        $sierrasCinta = Category::create([
            'name'             => 'Sierras de Cinta',
            'slug'             => 'sierras-de-cinta',
            'short_name'       => 'Sierras de Cinta',
            'description'      => 'Sierras de cinta industriales para corte de metal. Modelos automáticos, semiautomáticos y manuales de la marca MEP y otras marcas líderes.',
            'meta_title'       => 'Sierras de Cinta Industriales | Cutting European',
            'meta_description' => 'Amplia gama de sierras de cinta para corte de metal: automáticas, semiautomáticas y manuales. Marcas MEP, Robtech y más. Consulta sin compromiso.',
            'sort_order'       => 1,
            'active'           => true,
            'featured'         => true,
        ]);

        $sierrasDisco = Category::create([
            'name'             => 'Sierras de Disco',
            'slug'             => 'sierras-de-disco',
            'short_name'       => 'Sierras de Disco',
            'description'      => 'Sierras de disco industriales de alta velocidad para corte de metal. Soluciones automáticas, semiautomáticas y manuales de la marca MEP.',
            'meta_title'       => 'Sierras de Disco Industriales | Cutting European',
            'meta_description' => 'Sierras de disco para corte rápido y preciso de metal. Modelos automáticos NC y CNC, semiautomáticos y manuales. Marcas MEP.',
            'sort_order'       => 2,
            'active'           => true,
            'featured'         => true,
        ]);

        $aluminioCategory = Category::create([
            'name'             => 'Aluminio y PVC',
            'slug'             => 'aluminio-pvc',
            'short_name'       => 'Aluminio / PVC',
            'description'      => 'Maquinaria de corte para aluminio y PVC: pantógrafos, líneas automáticas, máquinas de doble y simple cabezal, cortadoras de tubos y centros de trabajo.',
            'meta_title'       => 'Maquinaria Corte Aluminio y PVC | Cutting European',
            'meta_description' => 'Maquinaria industrial para el corte de aluminio y PVC. Pantógrafos, líneas automáticas, centros de trabajo y más. Presupuesto sin compromiso.',
            'sort_order'       => 3,
            'active'           => true,
            'featured'         => true,
        ]);

        // ─────────────────────────────────────────
        // SIERRAS DE CINTA – SUBCATEGORÍAS
        // ─────────────────────────────────────────
        $cantAuto = Category::create([
            'name'        => 'Sierras de Cinta Automáticas',
            'slug'        => 'sierras-de-cinta-automaticas',
            'description' => 'Sierras de cinta automáticas con control NC y CNC para producción en serie. Alta precisión y ciclos desatendidos.',
            'meta_title'  => 'Sierras de Cinta Automáticas | Cutting European',
            'meta_description' => 'Sierras de cinta automáticas NC/CNC marca MEP para producción en serie. SHARK y THOR series. Solicita presupuesto.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 1,
            'active'      => true,
        ]);

        $cantSemi = Category::create([
            'name'        => 'Sierras de Cinta Semiautomáticas',
            'slug'        => 'sierras-de-cinta-semiautomaticas',
            'description' => 'Sierras de cinta semiautomáticas para talleres con media-alta producción. Versatilidad y precisión.',
            'meta_title'  => 'Sierras de Cinta Semiautomáticas | Cutting European',
            'meta_description' => 'Sierras de cinta semiautomáticas MEP serie SHARK y THOR. Ideales para talleres de media producción. Consulta disponibilidad.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 2,
            'active'      => true,
        ]);

        $cantManual = Category::create([
            'name'        => 'Sierras de Cinta Manuales',
            'slug'        => 'sierras-de-cinta-manuales',
            'description' => 'Sierras de cinta manuales para talleres y trabajos de baja-media producción. Robustez y facilidad de uso.',
            'meta_title'  => 'Sierras de Cinta Manuales | Cutting European',
            'meta_description' => 'Sierras de cinta manuales MEP serie SHARK y PH para talleres. Robustas y fáciles de usar. Presupuesto sin compromiso.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 3,
            'active'      => true,
        ]);

        $cantHoriz = Category::create([
            'name'        => 'Sierras de Cinta Horizontales',
            'slug'        => 'sierras-de-cinta-horizontales',
            'description' => 'Sierras de cinta horizontales con pivote para corte en ángulo.',
            'meta_title'  => 'Sierras de Cinta Horizontales | Cutting European',
            'meta_description' => 'Sierras de cinta horizontales para corte preciso de perfiles metálicos. Consulta disponibilidad.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 4,
            'active'      => true,
        ]);

        $cantDobleIng = Category::create([
            'name'        => 'Sierras de Cinta con Doble Ingletador',
            'slug'        => 'sierras-de-cinta-de-doble-ingletador',
            'description' => 'Sierras de cinta con doble ingletador para cortes en ángulo a ambos lados.',
            'meta_title'  => 'Sierras de Cinta Doble Ingletador | Cutting European',
            'meta_description' => 'Sierras de cinta con doble ingletador. Ideales para producción de marcos y estructuras metálicas.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 5,
            'active'      => true,
        ]);

        $cantPivote = Category::create([
            'name'        => 'Sierras de Cinta con Pivote Horizontal',
            'slug'        => 'sierras-de-cinta-con-pivote-horizontal',
            'description' => 'Sierras de cinta con pivote horizontal para cortes en múltiples ángulos.',
            'meta_title'  => 'Sierras de Cinta con Pivote Horizontal | Cutting European',
            'meta_description' => 'Sierras de cinta con pivote horizontal para cortes angulares. Gran versatilidad en producción.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 6,
            'active'      => true,
        ]);

        $cantVertical = Category::create([
            'name'        => 'Sierras de Cinta con Marco de Inclinación Vertical',
            'slug'        => 'sierras-de-cinta-con-marco-de-inclinacion-vertical',
            'description' => 'Sierras de cinta con marco de inclinación vertical para cortes complejos.',
            'meta_title'  => 'Sierras de Cinta Inclinación Vertical | Cutting European',
            'meta_description' => 'Sierras de cinta con inclinación vertical para perfiles complejos. Consulta nuestro catálogo.',
            'parent_id'   => $sierrasCinta->id,
            'sort_order'  => 7,
            'active'      => true,
        ]);

        // ─────────────────────────────────────────
        // SIERRAS DE DISCO – SUBCATEGORÍAS
        // ─────────────────────────────────────────
        $discoAutoRapido = Category::create([
            'name'        => 'Sierras de Disco Automáticas para Corte Rápido',
            'slug'        => 'sierras-de-disco-automaticas-para-el-corte-rapido',
            'description' => 'Sierras de disco automáticas VELOCEX para corte rápido de alta producción.',
            'meta_title'  => 'Sierras de Disco Automáticas Corte Rápido | Cutting European',
            'meta_description' => 'Sierras de disco automáticas serie VELOCEX para corte rápido de metal. Alta productividad y precisión.',
            'parent_id'   => $sierrasDisco->id,
            'sort_order'  => 1,
            'active'      => true,
        ]);

        $discoAuto = Category::create([
            'name'        => 'Sierras de Disco Automáticas',
            'slug'        => 'sierras-de-disco-automaticas',
            'description' => 'Sierras de disco automáticas NC y CNC COBRA y TIGER para producción en serie.',
            'meta_title'  => 'Sierras de Disco Automáticas NC/CNC | Cutting European',
            'meta_description' => 'Sierras de disco automáticas NC/CNC serie COBRA y TIGER. Máxima precisión para producción industrial.',
            'parent_id'   => $sierrasDisco->id,
            'sort_order'  => 2,
            'active'      => true,
        ]);

        $discoSemi = Category::create([
            'name'        => 'Sierras de Disco Semiautomáticas',
            'slug'        => 'sierras-de-disco-semiautomaticas',
            'description' => 'Sierras de disco semiautomáticas COBRA y TIGER para talleres.',
            'meta_title'  => 'Sierras de Disco Semiautomáticas | Cutting European',
            'meta_description' => 'Sierras de disco semiautomáticas MEP serie COBRA y TIGER para talleres industriales.',
            'parent_id'   => $sierrasDisco->id,
            'sort_order'  => 3,
            'active'      => true,
        ]);

        $discoManual = Category::create([
            'name'        => 'Sierras de Disco Manuales',
            'slug'        => 'sierras-de-disco-manuales',
            'description' => 'Sierras de disco manuales FALCON, COBRA y TIGER para talleres.',
            'meta_title'  => 'Sierras de Disco Manuales | Cutting European',
            'meta_description' => 'Sierras de disco manuales MEP FALCON, COBRA y TIGER. Robustez y precisión para talleres.',
            'parent_id'   => $sierrasDisco->id,
            'sort_order'  => 4,
            'active'      => true,
        ]);

        // ─────────────────────────────────────────
        // ALUMINIO / PVC – SUBCATEGORÍAS
        // ─────────────────────────────────────────
        $pantografos = Category::create([
            'name'        => 'Pantógrafos',
            'slug'        => 'pantografos',
            'description' => 'Pantógrafos para corte de aluminio, PVC y otros perfiles.',
            'meta_title'  => 'Pantógrafos para Aluminio y PVC | Cutting European',
            'meta_description' => 'Pantógrafos industriales para corte de aluminio y PVC. Consulta nuestro catálogo completo.',
            'parent_id'   => $aluminioCategory->id,
            'sort_order'  => 1,
            'active'      => true,
        ]);

        $lineasAuto = Category::create([
            'name'        => 'Líneas Automáticas',
            'slug'        => 'lineas-automaticas',
            'description' => 'Líneas automáticas de corte para aluminio y PVC.',
            'meta_title'  => 'Líneas Automáticas de Corte Aluminio | Cutting European',
            'meta_description' => 'Líneas automáticas de corte para aluminio y PVC. Alta productividad y precisión.',
            'parent_id'   => $aluminioCategory->id,
            'sort_order'  => 2,
            'active'      => true,
        ]);

        $dobleCabezal = Category::create([
            'name'        => 'Máquinas de Corte de Doble Cabezal',
            'slug'        => 'maquinas-de-corte-de-doble-cabezal',
            'description' => 'Máquinas de corte de doble cabezal para aluminio y PVC.',
            'meta_title'  => 'Máquinas Corte Doble Cabezal | Cutting European',
            'meta_description' => 'Máquinas de corte de doble cabezal para aluminio y PVC. Precisión y productividad.',
            'parent_id'   => $aluminioCategory->id,
            'sort_order'  => 3,
            'active'      => true,
        ]);

        $simpleCabezal = Category::create([
            'name'        => 'Máquinas de Corte de un Solo Cabezal',
            'slug'        => 'maquinas-de-corte-de-un-solo-cabezal',
            'description' => 'Máquinas de corte de un solo cabezal para aluminio y PVC.',
            'meta_title'  => 'Máquinas Corte Simple Cabezal | Cutting European',
            'meta_description' => 'Máquinas de corte de simple cabezal para aluminio y PVC. Versatilidad y rendimiento.',
            'parent_id'   => $aluminioCategory->id,
            'sort_order'  => 4,
            'active'      => true,
        ]);

        $cortadoraTubos = Category::create([
            'name'        => 'Máquina Cortadora de Tubos',
            'slug'        => 'maquina-cortadora-de-tubos',
            'description' => 'Máquinas cortadoras de tubos para aluminio y otros materiales.',
            'meta_title'  => 'Cortadoras de Tubos Industriales | Cutting European',
            'meta_description' => 'Cortadoras de tubos industriales para aluminio, acero y otros materiales. Presupuesto sin compromiso.',
            'parent_id'   => $aluminioCategory->id,
            'sort_order'  => 5,
            'active'      => true,
        ]);

        $centrosTrabajo = Category::create([
            'name'        => 'Centros de Trabajo',
            'slug'        => 'centros-de-trabajo',
            'description' => 'Centros de trabajo para mecanizado de aluminio y PVC.',
            'meta_title'  => 'Centros de Trabajo para Aluminio | Cutting European',
            'meta_description' => 'Centros de trabajo para mecanizado de aluminio y PVC. Consulta nuestra oferta.',
            'parent_id'   => $aluminioCategory->id,
            'sort_order'  => 6,
            'active'      => true,
        ]);

        // ─────────────────────────────────────────
        // PRODUCTS – SIERRAS DE CINTA AUTOMÁTICAS (MEP)
        // ─────────────────────────────────────────
        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 281 NC-50',
            'slug'              => 'shark-281-nc-50',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 281 NC-50',
            'short_description' => 'Sierra de cinta automática con control NC-50 para producción en serie. Capacidad de corte hasta Ø281 mm.',
            'description'       => 'La MEP SHARK 281 NC-50 es una sierra de cinta automática diseñada para producción industrial en serie. Equipada con el sistema de control numérico NC-50, permite programar ciclos de corte automatizados con alta precisión y repetibilidad. Ideal para talleres y empresas con elevadas cadencias de producción.',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 281 mm', 'Tipo' => 'Automática', 'Control' => 'NC-50', 'Marca' => 'MEP'],
            'features'          => ['Control NC-50 programable', 'Avance automático de material', 'Ciclos desatendidos', 'Alta precisión de corte'],
            'applications'      => ['Producción en serie', 'Corte de barras redondas y perfiles', 'Talleres industriales'],
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/SHARK-281-NC-50_segatrice-a-nastro-automatica.webp',
            'featured'          => true,
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 332 RC KONNECT',
            'slug'              => 'shark-332-rc-konnect',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 332 RC KONNECT',
            'short_description' => 'Sierra de cinta automática con conectividad Industry 4.0. Capacidad hasta Ø332 mm.',
            'description'       => 'La MEP SHARK 332 RC KONNECT es una sierra de cinta automática conectada, con tecnología Industry 4.0. Permite monitorización remota, gestión de datos de producción y conectividad avanzada para integrarse en células de fabricación inteligentes.',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 332 mm', 'Tipo' => 'Automática', 'Control' => 'KONNECT RC', 'Conectividad' => 'Industry 4.0', 'Marca' => 'MEP'],
            'features'          => ['Conectividad Industry 4.0', 'Monitorización remota', 'Control RC KONNECT', 'Alta productividad'],
            'applications'      => ['Producción automatizada', 'Células de fabricación inteligentes'],
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-332-RC-KONNECT_segatrice-a-nastro-automatica-1-413x269.webp',
            'featured'          => true,
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 230-1 NC HS-50',
            'slug'              => 'shark-230-nc-hs-50',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 230-1 NC HS-50',
            'short_description' => 'Sierra de cinta automática de alta velocidad NC HS-50. Capacidad hasta Ø230 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-230-1-NC-HS-50_segatrice-a-nastro-automatica-1-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 230 mm', 'Tipo' => 'Automática Alta Velocidad', 'Control' => 'NC HS-50', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 350 NC HS-50',
            'slug'              => 'shark-350-nc-hs-50',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 350 NC HS-50',
            'short_description' => 'Sierra de cinta automática de alta velocidad NC HS-50. Capacidad hasta Ø350 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-350-NC-HS-50_segatrice-a-nastro-automatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 350 mm', 'Tipo' => 'Automática Alta Velocidad', 'Control' => 'NC HS-50', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 350 CNC HS-40',
            'slug'              => 'shark-350-cnc-hs-40',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 350 CNC HS-40',
            'short_description' => 'Sierra de cinta automática CNC de alta velocidad. Capacidad hasta Ø350 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-350-CNC-HS-40_segatrice-a-nastro-automatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 350 mm', 'Tipo' => 'Automática CNC Alta Velocidad', 'Control' => 'CNC HS-40', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 460 KONNECT',
            'slug'              => 'shark-460-konnect',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 460 KONNECT',
            'short_description' => 'Sierra de cinta automática KONNECT para grandes secciones. Capacidad hasta Ø460 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-460-KONNECT_segatrice-a-nastro-automatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 460 mm', 'Tipo' => 'Automática', 'Control' => 'KONNECT', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 662 KONNECT',
            'slug'              => 'shark-662-konnect',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 662 KONNECT',
            'short_description' => 'Sierra de cinta automática para grandes secciones hasta Ø662 mm con conectividad KONNECT.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-662-KONNECT_segatrice-a-nastro-automatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 662 mm', 'Tipo' => 'Automática', 'Control' => 'KONNECT', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantAuto->id, [
            'name'              => 'SHARK 660 CNC HS-40',
            'slug'              => 'shark-660-cnc-hs-40',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 660 CNC HS-40',
            'short_description' => 'Sierra de cinta automática CNC de alta velocidad para grandes secciones. Hasta Ø660 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-660-CNC-HS-40_segatrice-a-nastro-automatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 660 mm', 'Tipo' => 'Automática CNC Alta Velocidad', 'Control' => 'CNC HS-40', 'Marca' => 'MEP'],
        ]);

        // ─────────────────────────────────────────
        // PRODUCTS – SIERRAS DE CINTA SEMIAUTOMÁTICAS
        // ─────────────────────────────────────────
        $this->createProduct($cantSemi->id, [
            'name'              => 'SHARK 281 SXI EVO',
            'slug'              => 'shark-281-sxi-evo',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 281 SXI EVO',
            'short_description' => 'Sierra de cinta semiautomática SXI EVO. Capacidad hasta Ø281 mm. Versatilidad y precisión.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/SHARK-281-SXI-EVO_segatrice-a-nastro-semiautomatica.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 281 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'SXI EVO', 'Marca' => 'MEP'],
            'featured'          => true,
        ]);

        $this->createProduct($cantSemi->id, [
            'name'              => 'SHARK 282 SXI EVO',
            'slug'              => 'shark-282-sxi-evo',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 282 SXI EVO',
            'short_description' => 'Sierra de cinta semiautomática SXI EVO de capacidad ampliada. Hasta Ø282 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-282-SXI-EVO_segatrice-a-nastro-semiautomatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 282 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'SXI EVO', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantSemi->id, [
            'name'              => 'SHARK 332-1 SXI EVO',
            'slug'              => 'shark-332-sxi-evo',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 332-1 SXI EVO',
            'short_description' => 'Sierra de cinta semiautomática SXI EVO. Capacidad hasta Ø332 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-332-1-SXI-EVO_segatrice-a-nastro-semiautomatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 332 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'SXI EVO', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantSemi->id, [
            'name'              => 'THOR 450',
            'slug'              => 'thor-450',
            'brand'             => 'MEP',
            'model_ref'         => 'THOR 450',
            'short_description' => 'Sierra de cinta semiautomática THOR para grandes secciones. Hasta Ø450 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/THOR-450_segatrice-a-nastro-semiautomatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 450 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'THOR', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantSemi->id, [
            'name'              => 'THOR 560',
            'slug'              => 'thor-560',
            'brand'             => 'MEP',
            'model_ref'         => 'THOR 560',
            'short_description' => 'Sierra de cinta semiautomática THOR para grandes secciones. Hasta Ø560 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/THOR-560_segatrice-a-nastro-semiautomatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 560 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'THOR', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantSemi->id, [
            'name'              => 'THOR 660',
            'slug'              => 'thor-660',
            'brand'             => 'MEP',
            'model_ref'         => 'THOR 660',
            'short_description' => 'Sierra de cinta semiautomática THOR de gran capacidad. Hasta Ø660 mm.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/THOR-660_segatrice-a-nastro-semiautomatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 660 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'THOR', 'Marca' => 'MEP'],
        ]);

        // ─────────────────────────────────────────
        // PRODUCTS – SIERRAS DE CINTA MANUALES
        // ─────────────────────────────────────────
        $this->createProduct($cantManual->id, [
            'name'              => 'PH 211-1',
            'slug'              => 'ph-211-1',
            'brand'             => 'MEP',
            'model_ref'         => 'PH 211-1',
            'short_description' => 'Sierra de cinta manual MEP serie PH. Compacta y robusta para talleres.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/PH-211-1_segatrice-a-nastro-manuale.webp',
            'specifications'    => ['Tipo' => 'Manual', 'Serie' => 'PH', 'Marca' => 'MEP'],
            'featured'          => true,
        ]);

        $this->createProduct($cantManual->id, [
            'name'              => 'PH 261-1',
            'slug'              => 'ph-261-1',
            'brand'             => 'MEP',
            'model_ref'         => 'PH 261-1',
            'short_description' => 'Sierra de cinta manual MEP PH 261. Mayor capacidad de corte.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/PH-261-1_segatrice-a-nastro-manuale-413x269.webp',
            'specifications'    => ['Tipo' => 'Manual', 'Serie' => 'PH', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($cantManual->id, [
            'name'              => 'SHARK 281',
            'slug'              => 'shark-281-manual',
            'brand'             => 'MEP',
            'model_ref'         => 'SHARK 281',
            'short_description' => 'Sierra de cinta manual SHARK 281. Robustez y precisión para talleres.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/SHARK-281_segatrice-a-nastro-manuale-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 281 mm', 'Tipo' => 'Manual', 'Serie' => 'SHARK', 'Marca' => 'MEP'],
        ]);

        // ─────────────────────────────────────────
        // PRODUCTS – SIERRAS DE DISCO
        // ─────────────────────────────────────────
        $this->createProduct($discoAutoRapido->id, [
            'name'              => 'VELOCEX 65',
            'slug'              => 'velocex-65',
            'brand'             => 'MEP',
            'model_ref'         => 'VELOCEX 65',
            'short_description' => 'Sierra de disco automática para corte rápido VELOCEX 65. Alta velocidad y productividad.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/VELOCEX-65_segatrice-a-disco-automatica-per-il-taglio-veloce.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 65 mm', 'Tipo' => 'Automática Corte Rápido', 'Serie' => 'VELOCEX', 'Marca' => 'MEP'],
            'featured'          => true,
        ]);

        $this->createProduct($discoAutoRapido->id, [
            'name'              => 'VELOCEX 80',
            'slug'              => 'velocex-80',
            'brand'             => 'MEP',
            'model_ref'         => 'VELOCEX 80',
            'short_description' => 'Sierra de disco automática de corte rápido VELOCEX 80.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/VELOCEX-80_segatrice-a-disco-automatica-per-il-taglio-veloce-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 80 mm', 'Tipo' => 'Automática Corte Rápido', 'Serie' => 'VELOCEX', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($discoAutoRapido->id, [
            'name'              => 'VELOCEX 100',
            'slug'              => 'velocex-100',
            'brand'             => 'MEP',
            'model_ref'         => 'VELOCEX 100',
            'short_description' => 'Sierra de disco automática de corte rápido VELOCEX 100.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/VELOCEX-100_segatrice-a-disco-automatica-per-il-taglio-veloce-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 100 mm', 'Tipo' => 'Automática Corte Rápido', 'Serie' => 'VELOCEX', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($discoAuto->id, [
            'name'              => 'COBRA 352 NC-50',
            'slug'              => 'cobra-352-nc-50',
            'brand'             => 'MEP',
            'model_ref'         => 'COBRA 352 NC-50',
            'short_description' => 'Sierra de disco automática NC-50 COBRA 352. Precisión y alto rendimiento para producción en serie.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/COBRA-352-NC-50_segatrice-a-disco-automatica.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 352 mm', 'Tipo' => 'Automática', 'Control' => 'NC-50', 'Serie' => 'COBRA', 'Marca' => 'MEP'],
            'featured'          => true,
        ]);

        $this->createProduct($discoAuto->id, [
            'name'              => 'TIGER 352 NC-50',
            'slug'              => 'tiger-352-nc-50',
            'brand'             => 'MEP',
            'model_ref'         => 'TIGER 352 NC-50',
            'short_description' => 'Sierra de disco automática TIGER 352 NC-50.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2025/01/TIGER-352-NC-50_segatrice-a-disco-automatica-413x269.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 352 mm', 'Tipo' => 'Automática', 'Control' => 'NC-50', 'Serie' => 'TIGER', 'Marca' => 'MEP'],
        ]);

        $this->createProduct($discoSemi->id, [
            'name'              => 'COBRA 352 SX EVO',
            'slug'              => 'cobra-352-sx-evo',
            'brand'             => 'MEP',
            'model_ref'         => 'COBRA 352 SX EVO',
            'short_description' => 'Sierra de disco semiautomática COBRA 352 SX EVO. Versátil y precisa.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/COBRA-352-SX-EVO_segatrice-a-disco-semiautomatica.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 352 mm', 'Tipo' => 'Semiautomática', 'Serie' => 'COBRA SX EVO', 'Marca' => 'MEP'],
            'featured'          => true,
        ]);

        $this->createProduct($discoManual->id, [
            'name'              => 'FALCON 352',
            'slug'              => 'falcon-352',
            'brand'             => 'MEP',
            'model_ref'         => 'FALCON 352',
            'short_description' => 'Sierra de disco manual FALCON 352. Compacta y robusta para talleres.',
            'main_image'        => 'https://cuttingeuropean.com/wp-content/uploads/2024/12/FALCON-352_segatrice-manuale-a-disco.webp',
            'specifications'    => ['Capacidad de corte circular' => 'Ø 352 mm', 'Tipo' => 'Manual', 'Serie' => 'FALCON', 'Marca' => 'MEP'],
            'featured'          => true,
        ]);
    }

    private function createProduct(int $categoryId, array $data): Product
    {
        return Product::create(array_merge([
            'category_id'    => $categoryId,
            'active'         => true,
            'featured'       => false,
            'is_second_hand' => false,
            'condition'      => 'nuevo',
            'sort_order'     => 0,
        ], $data));
    }
}
