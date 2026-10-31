<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $products = Catalog::take(10)->get();
        $testimonials = [
            [
                'name' => 'Customer 1',
                'message' => 'how do you feel'
            ],
            [
                'name' => 'Customer 2',
                'message' => 'how do you feel'
            ],
            [
                'name' => 'Customer 3',
                'message' => 'how do you feel'
            ],
            [
                'name' => 'Customer 4',
                'message' => 'how do you feel'
            ],
            [
                'name' => 'Customer 5',
                'message' => 'how do you feel'
            ],
            [
                'name' => 'Customer 6',
                'message' => 'how do you feel'
            ],
        ];

        return view('catalog', [
            'title' => 'Catalog | Artus Catus',
            'pagetitle' => 'Our Catalog',
            'subtitle' => 'Discover our handmade creations, made with love and attention to every detail.',
            'products' => $products,
            'testimonials' => $testimonials
        ]);
    }
}