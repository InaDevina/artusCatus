<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $products = [
            [
                'name' => '',
                'description' => '',
                'price' => '',
                'image' => ''
            ]
        ];

        return view('catalog', [
            'title' => 'Catalog',
            'pagetitle' => 'Catalog',
            'products' => $products
        ]);
    }
}
