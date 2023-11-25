@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

@if (session()->has('success'))
    @include('components.toast')
@endif

<section id="fnb-detail" class="fnb-padding-1">
    @foreach ($details as $detail)
        <div class="fnb-detail-img">
            <img src="{{ asset($detail->image) }}" width="100%" id="fnb-main-img">
        </div>
        <div class="fnb-detail-text">
            <h6 class="my-2">Category: <a href="{{ route('foodandbeverages-categories', $detail->foodBeverageCategory->id) }}">{{ $detail->foodBeverageCategory->name }}</a></h6>
            <h4 class="my-2">{{ $detail->name }}</h4>
            <h2 class="mt-2 mb-4">Rp{{ $detail->price }}</h2>

            @if ($addedToCart)
                <a href="{{ route('cart-index') }}">
                    <button class="mt-4 mb-2 fnb-btn-transparent" style="height: 45px">VIEW IN CART</button>
                </a>
            @else
                <form method="POST" action="{{ route('cart-store') }}">
                    @csrf
                    <input type="hidden" name="cart-fnb-id" value="{{ $detail->id }}">
                    @error('cart-quantity')
                        <div class="fnb-validation-error mb-2">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <span>Order quantity may not be 0!</span>
                        </div>
                    @enderror
                    <input name="cart-quantity" type="number" value="1" @error('cart-quantity') style="border: 1px solid red;" @enderror>
                    <button id="fnb-add" type="submit" class="my-2 btn btn-light" style="height: 45px">Add to Cart</button>
                </form>
            @endif

            <h4 class="my-2">Details</h4>
            <span class="my-2">{{ $detail->description }}</span>
        </div>
    @endforeach
</section>

<section id="fnb-featured" class="fnb-padding-1 mt-1">
    <h2 class="mt-2 mb-4">Featured Menu</h2>
    <div class="fnb-featured-container">
        @each('foodandbeverage.components.fnb-featured', $featured, 'fnb')
    </div>
</section>

@if(Auth::check())
    @include('foodandbeverage.components.fnb-cart-fixed-button')
@endif

@endsection