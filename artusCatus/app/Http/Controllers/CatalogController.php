<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Testimonial;

class CatalogController extends Controller
{
    public function index(){
        $products = Catalog::take(10)->get();
        $testimonials = Testimonial::take(6)->get();
        return view('catalog', [
            'title' => 'Catalog | Artus Catus',
            'pagetitle' => 'Our Catalog',
            'subtitle' => 'Discover our handmade creations, made with love and attention to every detail.',
            'products' => $products,
            'testimonials' => $testimonials
        ]);
    }
}