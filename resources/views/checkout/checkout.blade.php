@extends('layout.header')

@section('content')

    	<!--CHECKOUT SECTION -->
	<section id="checkout">
            <h1 class="display-4 text-center py-5">Checkout</h1>
            
            <div class="d-flex justify-content-center pb-5">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link"><strong>Address</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Review</a>
                </li>
            </ul>
            </div>
    
            <div class="home-container">
                <div class="row">
                    <div class="col-md-8">
                        @if(count($address) == 0)
                        <form method="POST" action="/valcheckout" class="bg-light">
                        @csrf
                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="name">Full Name<sup>*</sup></label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="address">Address<sup>*</sup></label>
                                            <textarea type="text" name="address" id="address" class="form-control" required></textarea>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="city">City<sup>*</sup></label>
                                            <input type="text" id="city" name="city" class="form-control" required>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="state">State<sup>*</sup></label>
                                            <input type="text" id="state" name="state" class="form-control" required>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="pincode">Pin Code<sup>*</sup></label>
                                            <input type="text" id="pincode" name="pincode" class="form-control" required>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="pincode">Email<sup>*</sup></label>
                                            <input type="email" id="pincode" name="email" class="form-control" required>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="container form-group">
                                            <label for="phone">Phone no<sup>*</sup></label>
                                            <input type="text" id="phone" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                
                            </div>
    
                            <input type="submit" name="submit" value="Proceed to payment" class="btn btn-ld btn-outline-secondary mb-5 ml-3">
                            </form>

                            @else
                            <h1 class="text-center">Your Address</h1>
                            @foreach($address as $addres)
                            <div class="address-details pb-3 text-center">
                                    <p>{{$addres->name}}</p>	
                                    <p>{{$addres->address}}</p>
                                    <p>{{$addres->email}}</p>
                                    <p>{{$addres->city}}</p>
                                    <p>{{$addres->state}}</p>
                                    <p>{{$addres->phone}}</p>
                            </div>
                            @endforeach
                            <div class="d-flex flex-row justify-content-center">
                            <a href="/payment"  class="btn btn-ld btn-outline-secondary mb-5 ml-3">Proceed To Payment</a>
                            <a href="/editaddress"  class="btn btn-ld btn-outline-secondary mb-5 ml-3">Edit your Address</a>
                            </div>
                            @endif
                        </div>
                    
                    <div class="col-md-4">
                        <div class="container bg-light">
                            <h3 class="py-3">Item details</h3>
                            
                            @if(count($items)>0)
                            @foreach($items as $item)
                            @foreach($item as $singleitem)

                            <div class="item-details pb-3">
                                <p>Product name : {{$singleitem->name}}</p>	
                                <p>Type : {{$singleitem->type}}</p>
                                <p>Price : ${{$singleitem->price}}</p>
                                <p>Wear : {{$singleitem->gender}}</p>
                            </div>

                            @endforeach
                            @endforeach
                            @endif
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection