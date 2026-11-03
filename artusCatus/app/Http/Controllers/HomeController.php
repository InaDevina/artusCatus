<?php

namespace App\Http\Controllers;
use App\Models\Catalog;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products = Catalog::orderBy('id', 'asc')->take(3)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->take(3)->get();

        return view('home', [
            'products' => $products,
            'testimonials' => $testimonials
        ]);
    }
}
