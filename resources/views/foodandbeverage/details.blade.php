@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

    <section id="fnb-detail" class="fnb-padding-1">
        <div class="fnb-detail-img">
            <img src="https://placehold.co/300x300" width="100%" id="fnb-main-img">
        </div>

        <div class="fnb-detail-text">
            <h6 class="my-2">[Category]</h6>
            <h4 class="my-2">[FnB Name]</h4>
            <h2 class="my-2">[Price]</h2>
            <input class="mt-4" type="number" value="1">
            <button class="my-2 btn btn-light" style="height: 45px">Add to Cart</button>
            <h4 class="my-2">[FnB Details]</h4>
            <span class="my-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae soluta blanditiis doloribus doloremque nostrum. Provident culpa laboriosam dolore laudantium veritatis sequi adipisci necessitatibus id illo cupiditate libero at, beatae pariatur. </span>
        </div>
    </section>

    <section id="fnb-featured" class="fnb-padding-1 mt-1">
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
    
@endsection