<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $categories = Category::active()->orderBy('sort_order')->get();
        $products   = Product::with('category')->active()->orderBy('updated_at', 'desc')->get();

        $xml = view('sitemap', compact('categories', 'products'))->render();

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }

    public function robots(): Response
    {
        $content = "User-agent: *\nAllow: /\nDisallow: /admin\nDisallow: /storage\nDisallow: /?s=\nSitemap: " . route('sitemap') . "\n";
        return response($content, 200, ['Content-Type' => 'text/plain']);
    }
}
