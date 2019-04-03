    <?php $__env->startSection('content'); ?>
	<!--Shoecase-->
	<header id="home-section">
			<div class="overlay">
			<div class="home-inner px-md-5 py-5 w-50">
				<div class="container text-center">
					<h1 class="display-3 text-light">Wear it</h1>
					<p class="lead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, nemo, dignissimos animi, ea perspiciatis ipsam quisquam quae amet reprehenderit nam molestias iusto.</p>
					<a href="/shop" class="btn btn-outline-light">Start Shopping</a>
				</div>
			</div>
		</div>
	</header>

	<!--Home-content-->
	<div class="home-container pt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="content-cover">
					<div class="overlay-content">
					<div class="content text-center">
						<h1 class="display-4 font-weight-bold">Top pick</h1>
						<a href="/shop" class="btn btn-outline-light">Shop Now</a>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="content-cover1">
					<div class="overlay-content">
					<div class="content text-center">
						<h1 class="display-4 font-weight-bold">Latest Arival</h1>
						<a href="/shop" class="btn btn-outline-light">Shop Now</a>
					</div>
				</div>
				</div>	
			</div>
		</div>
</div>


<div class="home-container pt-5 mb-5">
		<div class="row">
			<div class="col-md-4">
				<div class="content-cover2">
					<div class="overlay-content">
					<div class="content2  text-center">
						<h1 class="display-4 font-weight-bold">Top pick</h1>
						<a href="/shop" class="btn btn-outline-light">Shop Now</a>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="content-cover3">
					<div class="overlay-content">
					<div class="content2 text-center">
						<h1 class="display-4 font-weight-bold">Latest Arival</h1>
						<a href="/shop" class="btn btn-outline-light">Shop Now</a>
					</div>
				</div>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="content-cover4">
					<div class="overlay-content">
					<div class="content2 text-center">
						<h1 class="display-4 font-weight-bold">Latest Arival</h1>
						<a href="/shop" class="btn btn-outline-light">Shop Now</a>
					</div>
				</div>
				</div>	
			</div>
		</div>
</div>

<?php $__env->stopSection(); ?>




   
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ecommerce\resources\views/pages/home.blade.php */ ?>