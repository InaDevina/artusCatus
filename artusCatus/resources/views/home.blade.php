@extends('layouts.mainlayout')
@section('title', 'Home | Artus Catus')
@section('content')

<div class="home-container">

    <section class="hero">
        <div class="hero-content">
            <h1>Artus Catus</h1>
            <p>
                Discover thoughtful handmade creations designed to add a
                personal touch to your everyday life. From charming accessories
                to meaningful bracelet rosaries, every piece is made with care
                and creativity.
            </p>
            <a href="/catalog" class="button-primary">Explore Our Catalog</a>
        </div>
        <img src="{{ asset('images/products/home.jpg') }}" alt="Handmade creations" class="hero-image">
    </section>

    <section class="section catalog-section">
        <div class="section-intro">
            <h2>Top Products</h2>
            <p>
                Explore some of our handmade favorites, thoughtfully created
                to bring joy to your everyday moments.
            </p>
        </div>

        <div class="product-grid">
            @forelse ($products as $product)
                <article class="product-card">
                    <div class="product-image">
                        <img
                            src="{{ asset($product->image) }}"
                            alt="{{ $product->name }}"
                        >
                    </div>

                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                </article>
            @empty
                <p>No products available yet.</p>
            @endforelse
        </div>
    </section>

    <section class="section about-section">
        <div class="section-intro">
            <h2>Why Artus Catus?</h2>
            <p>
                At Artus Catus, we believe handmade creations can make everyday
                moments more special. Each piece is thoughtfully crafted to
                bring joy, express your personality, and add meaning to the
                little things in life.
            </p>
        </div>

        <div class="stats-grid">
            <div class="stat-item">
                <h3>10+</h3>
                <p>Unique Designs</p>
            </div>

            <div class="stat-item">
                <h3>100+</h3>
                <p>Happy Customers</p>
            </div>

            <div class="stat-item">
                <h3>500+</h3>
                <p>Products Sold</p>
            </div>

            <div class="stat-item">
                <h3>95%</h3>
                <p>Customer Satisfaction</p>
            </div>
        </div>
    </section>

    <section class="section testimonials-section">
        <div class="section-intro">
            <h2>Testimonials</h2>
            <p>
                Read what our customers have to say about their
                Artus Catus handmade creations.
            </p>
        </div>

        <div class="testimonials-grid">
            @forelse ($testimonials as $testimonial)
                <article class="testimonial-card">

                    <div class="testimonial-content">
                        <div class="testimonial-rating">
                            @for ($i = 1; $i <= $testimonial->rating; $i++)
                                <span>⭐</span>
                            @endfor
                        </div>

                        <p>
                            "{{ $testimonial->message }}"
                        </p>

                        <h3>{{ $testimonial->name }}</h3>
                        <span>Customer</span>
                    </div>

                </article>
            @empty
                <p>No testimonials available yet.</p>
            @endforelse
        </div>
    </section>

</div>
@endsection