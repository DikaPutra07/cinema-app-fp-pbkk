@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

@if (session()->has('success'))
    @include('components.toast')
@endif

<section id="fnb-hero" style="background-image: url({{ asset('images/fnb/fnb-hero.jpg') }})">
    <h4 class="my-2">CineBites:</h4>
    <h1 class="my-2">Cinematic Bites,</h1>
    <h1 class="my-2">Theater Delights.</h1>
    <a href="#fnb-category"><button class="my-2 btn btn-main">Look at Our Menu</button></a>
</section>

<section id="fnb-category" class="fnb-padding-1">
    @foreach ($categories as $category)
        @if ($category->name == 'Combo')
            @continue
        @endif
        <a href="{{ route('foodandbeverages-categories', $category->id) }}">
            <div class="fnb-category-box" style="background-image: url({{ asset($category->image) }});">
                <h3>{{ $category->name }}</h3>
            </div>
        </a>
    @endforeach
</section>

<section id="fnb-featured" class="fnb-padding-1">
    <h2 class="my-2">Combo Deals</h2>
    <p class="my-2">Film & Feast Combo Spectacle</p>
    <div class="fnb-featured-container">
        @each('foodandbeverage.components.fnb-featured', $combodeals, 'fnb')
    </div>
</section>

<section id="fnb-banner-1" class="fnb-margin-1" style="background-image: url({{ asset('images/fnb/fnb-banner-1.jpg') }})">
    <h4 class="my-2">Cinema Crunch</h4>
    <h2 class="my-2">Checkout Our Popcorn Collection!</h2>
    <a href="{{ route('foodandbeverages-categories', 2) }}"><button class="my-2 btn btn-main">ORDER NOW</button></a>
</section>

<section id="fnb-featured" class="fnb-padding-1">
    <h2 class="my-2">Featured Menu</h2>
    <p class="my-2">Spotlight Flavors</p>
    <div class="fnb-featured-container">
        @each('foodandbeverage.components.fnb-featured', $featured, 'fnb')
    </div>
</section>

<section id="fnb-banner-2" class="fnb-padding-1">
    <div class="fnb-banner-2-box" style="background-image: url({{ asset('images/fnb/fnb-banner-2.jpg') }})">
    </div>
    <div class="fnb-banner-2-box align-items-end" style="background-image: url({{ asset('images/fnb/fnb-banner-3.jpg') }})">
        <h4 class="my-2">Double Sips, Double Thrills</h4>
        <h2 class="my-2">Buy 1 Get 1 Free Cola!</h2>
        <span class="my-2">*for every purchase above Rp100.000</span>
    </div>
</section>

@if(Auth::check())
    @include('foodandbeverage.components.fnb-cart-fixed-button')
@endif

@endsection