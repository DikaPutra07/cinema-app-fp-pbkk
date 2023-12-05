@extends('layouts.layout')
@section('content')
<section id="profile-orderdetails" class="fnb-padding-1">
    <table id="profile-orderdetails-table" width="100%">
        <thead>
            <tr>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderdetails as $od)
                <tr>
                    <td><img src="{{ asset($od->foodBeverage->image) }}"></td>
                    <td>{{ $od->foodBeverage->name }}</td>
                    <td id="profile-orderdetails-table-price">{{ $od->foodBeverage->price }}</td>
                    <td id="profile-orderdetails-table-quantity">{{ $od->quantity }}</td>
                    <td id="profile-orderdetails-table-subtotal"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection