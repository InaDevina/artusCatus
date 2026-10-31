@extends('layouts.mainlayout')
@section('title', $title)
@section('content')

<div class="catalog-page">
    <section class="catalog-header">
        <h1>{{$pagetitle}}</h1>
        <p>{{$subtitle}}</p>
    </section>

    <section class="products-section">
        <div class="products-grid">
            @forelse ($products as $product)
                <div class="product-card">
                    <img src="{{ asset($product->image) }}"
                         alt="{{ $product->name }}">
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <p class="product-price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <p>{{ $product->desc }}</p>
                    </div>
                </div>

            @empty
                <p>No products available yet.</p>
            @endforelse
        </div>
    </section>

    <section class="testimonial-section">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-list">
            @foreach ($testimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="testimonial-icon">🩷</div>
                    <p>{{ $testimonial['message'] }}</p>
                    <h3>{{ $testimonial['name'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection