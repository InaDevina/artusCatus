<?php

namespace Database\Seeders;
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
            'description' => 'A painting that represents strength and solitude,
            as a tree stands tall near a cliff. This painting could be
            used as a table ornament to accompany your assignments and work.
            Size: 13x18cm',
            'price' => 125000,
            'image' => 'images/products/product-1.jpeg'
        ]);
        Catalog::create([
            'name' => 'Blue Cover',
            'description' => 'A charm to elevate your phone case or even your bag,
            while keeping it simple and dainty for everyday accessory.',
            'price' => 30000,
            'image' => 'images/products/product-2.jpeg'
        ]);
        Catalog::create([
            'name' => 'Observations of Strategy',
            'description' => 'Inspired by Nefer from Genshin Impact, this phone
            charm elevates elegant and poised vibes to your phone case.',
            'price' => 39000,
            'image' => 'images/products/product-3.jpeg'
        ]);
        Catalog::create([
            'name' => 'Lilas Whispers bag charm',
            'description' => 'Inspired by Xavier from Love and Deepspace, this bag
            charm carries a soft and peaceful vibe that will fit with any 
            bag you use it on.',
            'price' => 105000,
            'image' => 'images/products/product-4.jpeg'
        ]);
        Catalog::create([
            'name' => 'Crimson Fantasy bag charm',
            'description' => 'A bag charm that will elevate elegance and confidence
            as the red pops from the other colours that are present.',
            'price' => 55000,
            'image' => 'images/products/product-5.jpeg'
        ]);
        Catalog::create([
            'name' => 'Purple Labradorite Rosary Bracelet',
            'description' => 'A combination of purple glass beads and Labradorite
            stone, creating a unique and calming sense for your prayers.',
            'price' => 45000,
            'image' => 'images/products/product-6.jpeg'
        ]);
        Catalog::create([
            'name' => 'Rosie Mocha Rosary Bracelet',
            'description' => 'A mix of Mocha hued acrylic beads with rose pearl beads
            for a elegance and poised style to accompany you while you pray.',
            'price' => 45000,
            'image' => 'images/products/product-7.jpeg'
        ]);
        Catalog::create([
            'name' => 'Blue Coral Bracelet',
            'description' => 'A simplistic design with a purple charm as the main eye attraction.
            Made with glass and acrylic beads, it ll bring a sense of calmness and serenity as you
            wear it. (PSA: I do not recommend wearing this to showers)',
            'price' => 55000,
            'image' => 'images/products/product-8.jpeg'
        ]);
        Catalog::create([
            'name' => 'Matcha Beryl Bracelet',
            'description' => 'A beautiful green themed bracelet that fits with any day to day outfit.
            Made with round Beryl stones, acrylic and gold lined beads.
            (PSA: I do not recommend wearing this to showers)',
            'price' => 85000,
            'image' => 'images/products/product-9.jpeg'
        ]);
        Catalog::create([
            'name' => 'Shadow Bracelet',
            'description' => 'Made with 10mm glass beads, it suits those who keeps everything simple
            yet still stylish at the same time.
            (PSA: I do not recommend wearing this to showers)',
            'price' => 120000,
            'image' => 'images/products/product-10.jpeg'
        ]);
    }
}
