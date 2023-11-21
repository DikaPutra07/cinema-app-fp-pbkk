@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

<section id="fnb-featured" class="fnb-padding-1">
    <h2 class="my-2">[Category Name]</h2>
    <div class="fnb-featured-container">
        
        {{-- category dummy --}}
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

@endsection