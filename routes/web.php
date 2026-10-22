<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// ─── STATIC PAGES ────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre-nosotros', [HomeController::class, 'about'])->name('about');

// ─── CATALOG ─────────────────────────────────────────────────────
// Parent category pages (preserve existing URLs)
Route::get('/sierras-de-cinta', [CatalogController::class, 'sierrasCinta'])->name('catalog.sierras-cinta');
Route::get('/sierras-de-disco', [CatalogController::class, 'sierrasDisco'])->name('catalog.sierras-disco');
Route::get('/aluminio-pvc', [CatalogController::class, 'aluminioPvc'])->name('catalog.aluminio-pvc');

// Generic category + product routes for all sub-categories
Route::get('/catalogo/{category}', [CatalogController::class, 'category'])->name('catalog.category');
Route::get('/catalogo/{category}/{product}', [CatalogController::class, 'product'])->name('catalog.product');

// Legacy sub-category URLs from sitemap (redirect or direct)
$subcategoryRoutes = [
    'sierras-de-cinta-automaticas',
    'sierras-de-cinta-semiautomaticas',
    'sierras-de-cinta-manuales',
    'sierras-de-cinta-horizontales',
    'sierras-de-cinta-de-doble-ingletador',
    'sierras-de-cinta-con-pivote-horizontal',
    'sierras-de-cinta-con-marco-de-inclinacion-vertical',
    'sierras-de-disco-automaticas-para-el-corte-rapido',
    'sierras-de-disco-automaticas',
    'sierras-de-disco-semiautomaticas',
    'sierras-de-disco-manuales',
    'pantografos',
    'lineas-automaticas',
    'maquinas-de-corte-de-doble-cabezal',
    'maquinas-de-corte-de-un-solo-cabezal',
    'maquina-cortadora-de-tubos',
    'centros-de-trabajo',
    'mep',
];

foreach ($subcategoryRoutes as $slug) {
    Route::get("/{$slug}", [CatalogController::class, 'legacyCategory'])
         ->name("legacy.{$slug}")
         ->defaults('slug', $slug);
}

// ─── SECOND HAND ─────────────────────────────────────────────────
Route::get('/ocasion', [CatalogController::class, 'ocasion'])->name('catalog.ocasion');
Route::get('/plan-renove', [HomeController::class, 'planRenove'])->name('plan-renove');

// ─── SERVICES ────────────────────────────────────────────────────
Route::get('/servicio-tecnico', [HomeController::class, 'servicioTecnico'])->name('servicio-tecnico');

// ─── CONTACT ─────────────────────────────────────────────────────
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');

// ─── LEGAL ───────────────────────────────────────────────────────
Route::get('/politica-de-privacidad', [HomeController::class, 'privacidad'])->name('legal.privacidad');
Route::get('/politicas-de-cookies', [HomeController::class, 'cookies'])->name('legal.cookies');
Route::get('/aviso-legal', [HomeController::class, 'avisoLegal'])->name('legal.aviso');

// ─── SEO ─────────────────────────────────────────────────────────
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');
