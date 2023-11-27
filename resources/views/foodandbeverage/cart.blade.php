@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

@if ($cartitems->isEmpty())
    <section id="fnb-cart-empty" class="fnb-padding-1">
        <h3 class="my-2">Your cart is empty</h3>
        <span>Let's find something for you</span>
        <a href="{{ route('foodandbeverages-index') }}" class="btn btn-main mt-2">Order Now</a>
    </section>
@else
    <section id="fnb-cart" class="fnb-padding-1">
        <table id="fnb-cart-table" width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartitems as $item)
                    <tr>
                        <td>
                            <form method="POST" action="{{ route('cart-destroy', $item->id) }}">
                                @method('delete')
                                @csrf
                                <button id="fnb-remove-from-cart-button"><i class="fa-regular fa-circle-xmark"></i></button>
                            </form>
                        </td>
                        <td><img src="{{ asset($item->foodBeverage->image) }}"></td>
                        <td>{{ $item->foodBeverage->name }}</td>
                        <td id="fnb-table-price">{{ $item->foodBeverage->price }}</td>
                        <td id="fnb-table-quantity">{{ $item->quantity }}</td>
                        <td id="fnb-table-subtotal"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section id="fnb-cart-bottom" class="fnb-padding-1">
        <form method="POST" action="{{ route('order-store') }}">
            @csrf
            <div class="fnb-payment-method">
                <h4 class="my-2">Select Payment Method</h4>
                @error('fnb-order-payment')
                    <div class="fnb-validation-error">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span>Please select payment method!</span>
                    </div>
                @enderror
                <div class="fnb-payment-container" @error('fnb-order-payment') style="border: 1px solid red;" @enderror>
                    @foreach ($payments as $payment)
                        <label class="fnb-payment-label">
                            <input type="radio" name="fnb-order-payment" value="{{ $payment->id }}">
                            <img src="{{ asset($payment->image) }}">
                            <span>{{ $payment->method }}</span>
                        </label>
                    @endforeach
                </div>

                <div class="fnb-card-number">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="card-number" placeholder="Enter your card number" required>
                </div>
            </div>

            <div class="fnb-subtotal">
                <h4 class="my-2">Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td id="fnb-cart-subtotal"></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td id="fnb-cart-total"></td>
                        <input id="fnb-order-total" name="fnb-order-total" type="hidden">
                    </tr>
                </table>
                <button type="submit" class="btn btn-main mb-2">Proceed to Checkout</button>
            </div>
        </form>
    </section>
@endif

@endsection