<?php

namespace Database\Seeders;
use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'How can I place an order?',
            'answer' => 'You can browse our catalog,
            choose the product you like, and contact us
            through Instagram to place your order.'
        ]);
        Faq::create([
            'question' => 'Can I cancel my order?',
            'answer' => 'Please contact us as soon as possible to
            discuss your order.'
        ]);
        Faq::create([
            'question' => 'Can I request a custom design?',
            'answer' => 'Yes! You can contact us to discuss your
            preferred design. Custom requests are subject to confirmation.'
        ]);

        Faq::create([
            'question' => 'What payment methods are available?',
            'answer' => 'Please contact us through Instagram to confirm
            the available payment methods for your order.'
        ]);

        Faq::create([
            'question' => 'How long does it take to prepare an order?',
            'answer' => 'Preparation time may vary depending on the product
            and order details. Please contact us for an estimated completion time.'
        ]);

        Faq::create([
            'question' => 'Do you offer delivery?',
            'answer' => 'Please contact us with your delivery location
            so we can confirm the available delivery options and fees.'
        ]);

        Faq::create([
            'question' => 'Can I ask about a product before ordering?',
            'answer' => 'Of course! Feel free to contact us through Instagram.
            We will be happy to help you.'
        ]);
    }
}
