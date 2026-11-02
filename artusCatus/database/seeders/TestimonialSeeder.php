<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Alya',
            'message' => 'Produknya lucu banget! Hasilnya rapi dan sesuai ekspektasi.',
            'rating' => 5
        ]);

        Testimonial::create([
            'name' => 'Nadia',
            'message' => 'Suka banget sama detail produknya. Kelihatan dibuat dengan teliti.',
            'rating' => 5
        ]);

        Testimonial::create([
            'name' => 'Putri',
            'message' => 'Barangnya bagus dan menggemaskan. Bakal beli lagi!',
            'rating' => 5
        ]);

        Testimonial::create([
            'name' => 'Cindy',
            'message' => 'Kualitasnya bagus, pengemasannya juga rapi.',
            'rating' => 5
        ]);

        Testimonial::create([
            'name' => 'Amanda',
            'message' => 'Produknya cantik dan unik. Cocok banget buat hadiah.',
            'rating' => 5
        ]);

        Testimonial::create([
            'name' => 'Clara',
            'message' => 'Senang banget bisa punya produk handmade seperti ini!',
            'rating' => 5
        ]);
    }
}
