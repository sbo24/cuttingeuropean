<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featuredProducts = Product::with('category')
            ->active()
            ->featured()
            ->limit(6)
            ->get();

        $mainCategories = Category::active()
            ->parents()
            ->with('children')
            ->orderBy('sort_order')
            ->get();

        $secondHandProducts = Product::with('category')
            ->active()
            ->secondHand()
            ->limit(4)
            ->get();

        return view('home', compact('featuredProducts', 'mainCategories', 'secondHandProducts'));
    }

    public function about(): View
    {
        return view('about');
    }

    public function servicioTecnico(): View
    {
        return view('servicio-tecnico');
    }

    public function ocasion(): View
    {
        $products = Product::with('category')->active()->secondHand()->orderBy('sort_order')->get();
        return view('ocasion', compact('products'));
    }

    public function planRenove(): View
    {
        return view('plan-renove');
    }

    public function privacidad(): View
    {
        return view('legal.privacidad');
    }

    public function cookies(): View
    {
        return view('legal.cookies');
    }

    public function avisoLegal(): View
    {
        return view('legal.aviso');
    }
}
