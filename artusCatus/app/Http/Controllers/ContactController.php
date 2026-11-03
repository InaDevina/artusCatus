<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $faqs = Faq::all();
        return view('contact', [
            'title' => 'Contact | Artus Catus',
            'pagetitle' => 'Contact Us',
            'phone' => '08113525488',
            'whatsapp' => 'https://wa.me/628113525488',
            'instagram' => '@artuscatus',
            'instagramUrl' => 'https://www.instagram.com/artuscatus/',
            'faqs' => $faqs
        ]);
    }
}
