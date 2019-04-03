@extends('layout.header')
    
@section('content')

	<!--Shop Header-->
	<div class="container my-5">
		<h1 class="display-3 text-center">Shoes</h1>
		<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, quisquam.</p>
	</div>
	

	<!--products-->
	<div class="home-container">
		<div class="row">
			<div class="col-md-3 bg-light none block">
				<div class="nav flex-column ml-2">
					<a class="nav-link">For Men</a>
					<div class="nav flex-column ml-5">
						<a href="/searchtype?type=casual" class="nav-link">Casual Shoes</a>
						<a href="/searchtype?type=formal" class="nav-link">Formal Shoes</a>
						<a href="/searchtype?type=sports" class="nav-link">Sports Shoes</a>
					</div>

					<a class="nav-link">For Women</a>
					<div class="nav flex-column ml-5">
						<a href="/searchtypewomen?type=casual" class="nav-link">Casual Shoes</a>
						<a href="/searchtypewomen?type=formal" class="nav-link">Formal Shoes</a>
						<a href="/searchtypewomen?type=sports" class="nav-link">Sports Shoes</a>
					</div>
					
					<a class="nav-link">Brands</a>
					<div class="nav flex-column ml-5">
						<a href="/searchbrand?brand=addidas" class="nav-link">Addidas</a>
						<a href="/searchbrand?brand=nike" class="nav-link">Nike</a>
						<a href="/searchbrand?brand=puma" class="nav-link">Puma</a>
					</div>


					<a class="nav-link">Price</a>
					<div class="nav flex-column ml-5">
						<a href="/searchprice?max=500&&min=0" class="nav-link">Under 500</a>
						<a href="/searchprice?max=1000&&min=0" class="nav-link">Under 1000</a>
						<a href="/searchprice?max=5000&&min=0" class="nav-link">Under 5000</a>
						<a href="/searchprice?min=5000&&max=0" class="nav-link">Above 5000</a>
					</div>
				</div>
			</div>

			<div class="col-md-9">
				<div class="row">
					@if(count($shoes)>0)
					@foreach($shoes as $shoe)
					<div class="col-md-4 py-3">
						<div class="card bg-light">
							<img src="img/{{$shoe->img}}" class="img-fluid">
							<div class="card-body">
								<a href="/shop/item/{{$shoe->id}}" class="nav-link text-dark"><h4>{{$shoe->name}}</h4></a>
								<blockquote>{{$shoe->type}}</blockquote>
								<p><strong>Price :</strong> ${{$shoe->price}}</p>
							</div>
						</div>
					</div>

					
					@endforeach

                    @else
                    
                        <h1>No Shoes Found</h1>
					@endif
				</div>

				<div class="d-flex justify-content-center">
						
				</div>
			</div>
			
		</div>

	
	</div>




	@endsection
