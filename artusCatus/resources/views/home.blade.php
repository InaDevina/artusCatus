@extends('layouts.mainlayout')

@section('title', 'Home | Artus Catus')

@section('content')
<div class="home-container">

    <section class="hero">
        <div class="hero-content">
            <h1>Artus Catus</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="/catalog" class="button-primary">Lorem Ipsum</a>
        </div>

        <div class="placeholder hero-image"></div>
    </section>

    <section class="section catalog-section">
        <div class="section-intro">
            <h2>Top Products</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>

        <div class="product-grid">
            @for ($i = 0; $i < 3; $i++)
                <article class="product-card">
                    <div class="placeholder product-image"></div>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </article>
            @endfor
        </div>
    </section>

    <section class="section about-section">
        <div class="section-intro">
            <h2>Why Artus Catus?</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </p>
        </div>

        <div class="stats-grid">
            <div class="stat-item">
                <h3>10+</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="stat-item">
                <h3>100+</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="stat-item">
                <h3>500+</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="stat-item">
                <h3>95%</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
    </section>
    
    <section class="section testimonials-section">
        <div class="section-intro">
            <h2>Testimonials</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed posuere consectetur est at lobortis.
            </p>
        </div>

        <div class="testimonials-grid">
            @for ($i = 0; $i < 3; $i++)
                <article class="testimonial-card">
                    <div class="placeholder testimonial-image"></div>

                    <div class="testimonial-content">
                        <div class="testimonial-rating">★★★★★</div>

                        <p>
                            "Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Integer posuere erat a ante."
                        </p>

                        <h3>Lorem Ipsum</h3>
                        <span>Customer</span>
                    </div>
                </article>
            @endfor
        </div>
    </section>

</div>
@endsection