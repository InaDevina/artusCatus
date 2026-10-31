<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catalog::create([
            'name' => 'Strength within solitude',
            'desc' => 'A painting that represents strength and solitude,
            as a tree stands tall near a cliff. This painting could be
            used as a table ornament to accompany your assignments and work.
            Size: 13x18cm',
            'price' => 125.000,
            'image' => 'images/products/product-1.jpeg'
        ]);
        Catalog::create([
            'name' => 'Blue Cover',
            'desc' => 'A charm to elevate your phone case or even your bag,
            while keeping it simple and dainty for everyday accessory.',
            'price' => 30.000,
            'image' => 'images/products/product-2.jpeg'
        ]);
        Catalog::create([
            'name' => 'Observations of Strategy',
            'desc' => 'Inspired by Nefer from Genshin Impact, this phone
            charm elevates elegant and poised vibes to your phone case.',
            'price' => 39.000,
            'image' => 'images/products/product-3.jpeg'
        ]);
        Catalog::create([
            'name' => 'Lilas Whispers bag charm',
            'desc' => 'Inspired by Xavier from Love and Deepspace, this bag
            charm carries a soft and peaceful vibe that will fit with any 
            bag you use it on.',
            'price' => 105.000,
            'image' => 'images/products/product-4.jpeg'
        ]);
        Catalog::create([
            'name' => 'Crimson Fantasy bag charm',
            'desc' => 'A bag charm that will elevate elegance and confidence
            as the red pops from the other colours that are present.',
            'price' => 55.000,
            'image' => 'images/products/product-5.jpeg'
        ]);
    }
}
