@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

<section id="fnb-featured" class="fnb-padding-1">
    <h2 class="my-2">{{ $category->name }}</h2>
    <div class="fnb-featured-container">
        @each('foodandbeverage.components.fnb-featured', $foodandbeverages, 'fnb')
    </div>
</section>

@if(Auth::check())
    @include('foodandbeverage.components.fnb-cart-fixed-button')
@endif

@endsection