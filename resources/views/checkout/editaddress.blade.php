@extends('layout.header')

@section('content')

    	<!--CHECKOUT SECTION -->
	<section id="checkout">
            <h1 class="display-4 text-center py-5">Edit Address</h1>
            
           
    
            <div class="home-container">
                <div class="row">
                    <div class="col">
                       
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
    
                            <input type="submit" name="submit" value="Edit Address" class="btn btn-ld btn-outline-secondary mb-5 ml-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection