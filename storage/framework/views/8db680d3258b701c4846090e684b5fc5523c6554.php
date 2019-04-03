<nav id="navbar" class="navbar navbar-expand-sm  navbar-light sticky-top">
		<div class="container">		
			<a href="index.html" class="navbar-brand font-weight-bold"><h3>Shoe<span class="text-primary">Store</span></h3></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/shop" class="nav-link">Shop</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="#" class="nav-link">About us</a></li>
				</ul>
			</div>
		</div>
    </nav>
    
    <?php echo $__env->yieldContent('content'); ?>
    
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ecommerce\resources\views/layout/navbar.blade.php */ ?>