@extends('layouts.layout')
@section('content')
    <div class="row mt-5 mb-5 col-10 ml-auto mr-auto">
        <div class="col-12 col-md-3 bg-light2 pt-3 pb-3 font-weight-bold rounded card sticky-top" style="height: fit-content; z-index: 1;">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active show" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account"
                    role="tab" aria-controls="v-pills-account" aria-selected="true">My Account</a>
                <a class="nav-link" id="v-pills-reservations-tab" data-toggle="pill" href="#v-pills-reservations"
                    role="tab" aria-controls="v-pills-reservations" aria-selected="false">My Reservations</a>
                <a class="nav-link" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders"
                    role="tab" aria-controls="v-pills-orders" aria-selected="false">My Orders</a>
                @if($manager === 1)
                    <a class="nav-link" id="v-pills-foodandbeverages-tab" data-toggle="pill" href="#v-pills-foodandbeverages"
                        role="tab" aria-controls="v-pills-foodandbeverages" aria-selected="false">My Food and Beverages</a>
                @endif
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade active show" id="v-pills-account" role="tabpanel"
                    aria-labelledby="v-pills-account-tab">
                    @include('profile.show')
                </div>
                <div class="tab-pane fade" id="v-pills-reservations" role="tabpanel"
                    aria-labelledby="v-pills-reservations-tab">
                    @include('profile.reservations')
                </div>
                <div class="tab-pane fade" id="v-pills-orders" role="tabpanel"
                    aria-labelledby="v-pills-orders-tab">
                    @include('profile.orders')
                </div>
                @if($manager === 1)
                    <div class="tab-pane fade" id="v-pills-foodandbeverages" role="tabpanel"
                        aria-labelledby="v-pills-rooms-tab">
                        @include('profile.foodandbeverages')
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('components.flash-message')
@endsection
