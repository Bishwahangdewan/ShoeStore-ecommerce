@extends('layout.header')

@section('content')
<div class="container py-5">
        <h1 class="display-4 text-center">Thank you for shopping with us</h1>
        <h1 class="lead text-center pt-3">Your order has been placed</h1>
        <h1 class="lead text-center pt-3">Check your account gor more info</h1>

        <div class="text-center">
            <a href="/account" class="btn btn-secondary text-center mt-3">Go to Profile</a>
        </div>

        <div class="text-center">
            <a href="/shop" class="btn btn-secondary text-center mt-3">Continue Shopping</a>
        </div>

    </div>
@endsection