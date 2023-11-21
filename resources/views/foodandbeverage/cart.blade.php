@extends('layouts.layout')

@section('content')

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

<section id="fnb-cart" class="fnb-padding-1">
    <table width="100%">
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
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="https://placehold.co/100x100"></td>
                <td>[Product Name]</td>
                <td>[Product Price]</td>
                <td><input type="number" value="1"></td>
                <td>[Subtotal]</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="https://placehold.co/100x100"></td>
                <td>[Product Name]</td>
                <td>[Product Price]</td>
                <td><input type="number" value="1"></td>
                <td>[Subtotal]</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="https://placehold.co/100x100"></td>
                <td>[Product Name]</td>
                <td>[Product Price]</td>
                <td><input type="number" value="1"></td>
                <td>[Subtotal]</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="fnb-cart-total" class="fnb-padding-1">
    <div id="subtotal">
        <h4 class="my-2">Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>[Cart Subtotal]</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td>[Total]</td>
            </tr>
        </table>
        <button class="btn btn-light">Proceed to Checkout</button>
    </div>
</section>

@endsection