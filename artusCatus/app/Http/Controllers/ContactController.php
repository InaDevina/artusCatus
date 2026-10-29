<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact', [
            'title' => 'Contact',
            'pagetitle' => 'Contact Us',
            'phone' => '08113525488',
            'instagram' => '@artuscatus'
        ]);
    }
}
