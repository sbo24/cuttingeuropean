<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\CategoryProductSeeder;
use App\Models\Product;

class WebPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(CategoryProductSeeder::class);
    }

    public function test_all_main_routes_return_ok(): void
    {
        $routes = [
            '/',
            '/sobre-nosotros',
            '/sierras-de-cinta',
            '/sierras-de-disco',
            '/aluminio-pvc',
            '/sierras-de-cinta-automaticas',
            '/ocasion',
            '/plan-renove',
            '/servicio-tecnico',
            '/contacto',
            '/politica-de-privacidad',
            '/politicas-de-cookies',
            '/aviso-legal',
            '/sitemap.xml',
            '/robots.txt',
        ];

        foreach ($routes as $uri) {
            $response = $this->get($uri);
            $response->assertStatus(200);
        }

        // Test product detail page
        $product = Product::with('category')->first();
        if ($product && $product->category) {
            $response = $this->get("/catalogo/{$product->category->slug}/{$product->slug}");
            $response->assertStatus(200);
        }
    }

    public function test_contact_form_submission(): void
    {
        $response = $this->post('/contacto', [
            'name'             => 'Prueba Test',
            'email'            => 'prueba@test.com',
            'phone'            => '+34 600 000 000',
            'company'          => 'Empresa Test',
            'message'          => 'Mensaje de prueba con más de 10 caracteres',
            'type'             => 'presupuesto',
            'privacy_accepted' => '1',
        ]);

        $response->assertRedirect('/contacto');
        $this->assertDatabaseHas('contact_messages', [
            'email' => 'prueba@test.com',
        ]);
    }
}
