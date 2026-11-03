@extends('layouts.mainlayout')
@section('title', $title)
@section('content')

<div class="contact-page">
    <section class="contact-header">
        <h1>{{ $pagetitle }}</h1>
        <p>Have questions or want to place an order? We'd love to hear from you!</p>
    </section>

    <section class="faq-section">
        <h2>Frequently Asked Questions</h2>
        <p class="section-subtitle">
            Find answers to some of our most common questions.
        </p>

        <div class="faq-list">
            @forelse ($faqs as $faq)
                <details class="faq-item">
                    <summary>
                        {{ $faq->question }}
                    </summary>
                    <p>{{ $faq->answer }}</p>
                </details>
            @empty
                <p>No frequently asked questions available yet.</p>
            @endforelse
        </div>
    </section>

    <section class="contact-section">
        <h2>Get in Touch</h2>
        <p class="section-subtitle">
            Feel free to reach out to us through these platforms.
        </p>

        <div class="contact-list">
            <div class="contact-card">
                <div class="contact-icon">💬</div>
                <h3>WhatsApp</h3>
                <p>{{ $phone }}</p>
                <a href="{{ $whatsapp }}"
                   target="_blank"
                   rel="noopener noreferrer">
                    Chat with Us
                </a>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📷</div>
                <h3>Instagram</h3>
                <p>{{ $instagram }}</p>
                <a href="{{ $instagramUrl }}"
                   target="_blank"
                   rel="noopener noreferrer">
                    Visit Our Instagram
                </a>
            </div>
        </div>
    </section>

    <section class="order-section">
        <h2>How to Order</h2>
        <p class="section-subtitle">
            Follow these simple steps to get your favorite handmade creations.
        </p>

        <div class="order-list">
            <div class="order-item">
                <div class="order-number">01</div>
                <h3>Choose Your Product</h3>
                <p>Browse our catalog and choose the handmade product you love.</p>
            </div>

            <div class="order-item">
                <div class="order-number">02</div>
                <h3>Contact Us</h3>
                <p>Send us a message through WhatsApp or Instagram and tell us which product you want.</p>
            </div>

            <div class="order-item">
                <div class="order-number">03</div>
                <h3>Confirm Your Order</h3>
                <p>We will help you confirm product availability and order details.</p>
            </div>

            <div class="order-item">
                <div class="order-number">04</div>
                <h3>Complete Your Purchase</h3>
                <p>Confirm the payment and delivery details with us to complete your order.</p>
            </div>
        </div>
    </section>

</div>
@endsection