<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{config('app.name','ShoeStore')}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
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

        @yield('content')


     <!--Footer-->
	<footer id="footer" class="bg-dark">
            <div class="home-container">
            <div class="row py-3">
                <div class="col-md-3">
                    <h3>Shoe<span class="text-primary">Store</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, nostrum, sint nisi laudantium sapiente molestias.</p>
                </div>
    
                <div class="col-md-3 text-center">
                    <h3>Connect with us</h3>
                    <ul class="navbar-nav">
                        <li><a href="#" class="text-white" >Facebook</a></li>
                        <li><a href="#" class="text-white" >Instagram</a></li>
                        <li><a href="#" class="text-white">Youtube</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                    <h3>Company</h3>
                    <ul class="navbar-nav">
                        <li><a href="#" class="text-white" >Login</a></li>
                        <li><a href="#" class="text-white" >Register</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Subscribe</h3>
                    <p>Subscribe to get notified for more offers and Discounts</p>
                    <form>
                        <div class="input-group">
                                <input type="email" placeholder="Your Email" class="form-control">
                                <button class="input-group-append btn btn-secondary"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>	
        </div>
    
        <p class="text-center footer-p py-2">Copyright&copy;shoestore.com</p>
    
        </footer>
    
    
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </body>
    </html>

    

   