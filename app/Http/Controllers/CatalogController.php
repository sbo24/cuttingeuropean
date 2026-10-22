<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CatalogController extends Controller
{
    // Parent category landing pages
    public function sierrasCinta(): View
    {
        $category = Category::where('slug', 'sierras-de-cinta')
            ->with(['children.products' => fn($q) => $q->active()->orderBy('sort_order')])
            ->firstOrFail();

        return view('catalog.parent-category', compact('category'));
    }

    public function sierrasDisco(): View
    {
        $category = Category::where('slug', 'sierras-de-disco')
            ->with(['children.products' => fn($q) => $q->active()->orderBy('sort_order')])
            ->firstOrFail();

        return view('catalog.parent-category', compact('category'));
    }

    public function aluminioPvc(): View
    {
        $category = Category::where('slug', 'aluminio-pvc')
            ->with(['children.products' => fn($q) => $q->active()->orderBy('sort_order')])
            ->firstOrFail();

        return view('catalog.parent-category', compact('category'));
    }

    // Legacy slug routes (direct subcategory URLs from old site)
    public function legacyCategory(string $slug): View|RedirectResponse
    {
        $category = Category::where('slug', $slug)->with([
            'parent',
            'products' => fn($q) => $q->active()->orderBy('sort_order'),
        ])->firstOrFail();

        return view('catalog.category', compact('category'));
    }

    // Generic category route via /catalogo/{slug}
    public function category(Category $category): View
    {
        $category->load([
            'parent',
            'children',
            'products' => fn($q) => $q->active()->orderBy('sort_order'),
        ]);

        return view('catalog.category', compact('category'));
    }

    // Product detail page
    public function product(Category $category, Product $product): View
    {
        abort_if($product->category_id !== $category->id, 404);

        $related = Product::where('category_id', $category->id)
            ->where('id', '!=', $product->id)
            ->active()
            ->limit(4)
            ->get();

        return view('catalog.product', compact('category', 'product', 'related'));
    }

    // Second-hand listing
    public function ocasion(): View
    {
        $products = Product::with('category')
            ->active()
            ->secondHand()
            ->orderBy('sort_order')
            ->get();

        return view('catalog.ocasion', compact('products'));
    }
}
