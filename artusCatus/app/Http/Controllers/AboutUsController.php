<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about(){
        return view('aboutUs', [
            'title' => 'About',
            'pagetitle' => 'About Us',
            'history' => "Artus Catus was born from a simple love for creativity and handmade crafts.
                        I've always been someone who enjoys creating things with my own hands, turning
                        little ideas into something meaningful and special. What started as a personal
                        passion eventually grew into a desire to share my creations with others.
                        
                        For me, crafting is more than just making something beautiful. It's about enjoying
                        the creative process, expressing myself, and finding happiness in the little details.
                        Through Artus Catus, I hope to share that same happiness with others. Every piece is
                        made with care, creativity, and a personal touch, with the hope that it brings as much
                        joy to someone receiving it as it brought me while creating it. Artus Catus is not just
                        about handmade products. It's about sharing creativity, celebrating individuality, and
                        bringing a little more joy into everyday life.",
            'purpose' => "Artus Catus was never created with the ambition of becoming a big business. Instead,
                        my goal is to create small, meaningful pieces that bring joy and personal value to others.
                        Through our handmade charms, I hope people can express their individuality and make their belongings feel more 
                        personal and uniquely theirs. With our handmade bracelet rosaries, I also hope to help people feel more confident
                        in expressing their faith and strengthening their spiritual connection.
                        Above all, I want every creation to carry a little meaning beyond its appearance.",
            'values' => ""
        ]);
    }
}
