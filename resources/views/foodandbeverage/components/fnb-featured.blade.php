<div class="fnb-featured-product">
    <a href="{{ route('foodandbeverages-detail', $fnb->id) }}">
        <img src="{{ asset($fnb->image) }}">
    </a>
    <div class="fnb-featured-product-text">
        <span class="my-2">{{ $fnb->foodBeverageCategory->name }}</span>
        <a href="{{ route('foodandbeverages-detail', $fnb->id) }}">
            <h5 class="my-2">{{ $fnb->name }}</h5>
        </a>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h4 class="my-2">Rp{{ $fnb->price }}</h4>
    </div>
    <a href="{{ route('foodandbeverages-detail', $fnb->id) }}"><i class="fas fa-shopping-cart fnb-cart-btn"></i></a>
</div>