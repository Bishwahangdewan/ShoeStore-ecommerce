<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{config('app.name','ShoeStore')}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/credit.css')}}">
</head>
<body>

        <nav id="navbar" class="navbar navbar-expand-sm  navbar-light sticky-top">
                <div class="container">		
                    <a href="/" class="navbar-brand font-weight-bold"><h3>Shoe<span class="text-primary">Store</span></h3></a>
        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-5">
                            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI']=='/')?'active':'';?>"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI']=='/shop')?'active':'';?>"><a href="/shop" class="nav-link">Shop</a></li>
                            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI']=='/contact')?'active':'';?>"><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                    

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                        <a class="dropdown-item" href="/account"><i class="fas fa-shopping-cart"></i> Your Account</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                  

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
            </nav>


	<div class="container">

        <h1 class="text-center my-5">Enter credit details {{$name->name}}</h1>
        
        <form action="/stripe" method="post" id="payment-form">
            @csrf
  			<div class="form-row">

    		<div id="card-element" class="form-control">
    		  <!-- A Stripe Element will be inserted here. -->
    		</div>

    		<!-- Used to display Element errors. -->
    		<div id="card-errors" role="alert"></div>
  			</div>

  			<button>Submit Payment</button>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="{{asset('js/charge.js')}}"></script>
	
</body>
</html>