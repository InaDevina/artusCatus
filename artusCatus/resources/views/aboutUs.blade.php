@extends('layouts.mainlayout')
@section('title', $title)
@section('content')

<div class="about-page">
    <section class="about-header">
        <h1>{{ $pagetitle }}</h1>
        <p>{{ $subtitle }}</p>
    </section>

    <section class="about-history">
        <div class="about-text">
            <h2>Our History</h2>
            <p>{{ $history }}</p>
        </div>

        <div class="about-image">
            <img src="{{ asset('images/products/aboutUs-1.jpg') }}"
            alt="Artus Catus crafting process">
        </div>
    </section>

    <section class="about-purpose">
        <div class="about-image">
            <img src="{{ asset('images/products/aboutUs-2.jpg') }}"
            alt="Artus Catus customer experience">
        </div>

        <div class="about-text">
            <h2>Our Purpose</h2>
            <p>{{ $purpose }}</p>
        </div>
    </section>

    <section class="about-values">
        <h2>Our Values</h2>
        <div class="values-list">
            @foreach ($values as $value)
                <div class="value-item">
                <div class="value-icon">🩷</div>
                    <h3>{{ $value['name'] }}</h3>
                    <p>{{ $value['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection