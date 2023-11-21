@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

<section id="fnb-hero">
    <h4 class="my-2">CineBites:</h4>
    <h1 class="my-2">Cinematic Bites,</h1>
    <h1 class="my-2">Theater Delights.</h1>
    <button class="my-2 btn btn-light">Look at Our Menu</button>
</section>

<section id="fnb-category" class="fnb-padding-1">
    @foreach ($categories as $category)
        <a href="{{ route('foodandbeverages-categories', $category->id) }}">
            <div class="fnb-category-box" style="background-image: url(https://placehold.co/250x250)">
                <h3>{{ $category->name }}</h3>
            </div>
        </a>
    @endforeach
</section>

<section id="fnb-featured" class="fnb-padding-1">
    <h2 class="my-2">Combo Deals</h2>
    <p class="my-2">[some tagline]</p>
    <div class="fnb-featured-container">

        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>

        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>
        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>

        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>
        
        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>

        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>
        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>
    </div>
</section>

<section id="fnb-banner-1" class="fnb-margin-1">
    <h4 class="my-2">[Banner Text]</h4>
    <h2 class="my-2">[More <span>Banner</span> Text]</h2>
    <button class="my-2 btn btn-light">[Explore More]</button>
</section>

<section id="fnb-featured" class="fnb-padding-1">
    <h2 class="my-2">[Featured or smth]</h2>
    <p class="my-2">[some tagline]</p>
    <div class="fnb-featured-container">
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>

        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>
        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>

        
        {{-- combo dummy --}}
        <div class="fnb-featured-product">
            <a href="{{ route('foodandbeverages-detail') }}">
                <img src="https://placehold.co/300x300">
            </a>
            <div class="fnb-featured-product-text">
                <span class="my-2">[category]</span>
                <a href="{{ route('foodandbeverages-detail') }}">
                    <h5 class="my-2">[product name]</h5>
                </a>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="my-2">[price]</h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
        </div>
    </div>
</section>

<section id="fnb-banner-2" class="fnb-padding-1">
    <div class="fnb-banner-2-box">
        <h4 class="my-2">[Banner text]</h4>
        <h2 class="my-2">[More banner text]</h2>
        <span class="my-2">[Even more banner text]</span>
        <button class="my-2 fnb-btn-transparent">[Explore more]</button>
    </div>
    <div class="fnb-banner-2-box">
        <h4 class="my-2">[Banner text]</h4>
        <h2 class="my-2">[More banner text]</h2>
        <span class="my-2">[Even more banner text]</span>
        <button class="my-2 fnb-btn-transparent">[Explore more]</button>
    </div>
</section>

<section id="fnb-banner-3" class="fnb-padding-1 pt-0">
    <div class="fnb-banner-3-box">
        <h4 class="my-2">[Banner text]</h4>
        <h2 class="my-2">[More banner text]</h2>
        <span class="my-2">[Even more banner text]</span>
        <button class="my-2 fnb-btn-transparent">[Explore more]</button>
    </div>
</section>

@endsection