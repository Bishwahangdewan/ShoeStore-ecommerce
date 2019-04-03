    
<?php $__env->startSection('content'); ?>

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
						<a href="/searchtype?type=casual" class="nav-link bg-light">Casual Shoes</a>
						<a href="/searchtype?type=formal" class="nav-link bg-light">Formal Shoes</a>
						<a href="/searchtype?type=sports" class="nav-link bg-light">Sports Shoes</a>
					</div>

					<a class="nav-link">For Women</a>
					<div class="nav flex-column ml-5">
						<a href="/searchtypewomen?type=casual" class="nav-link bg-light">Casual Shoes</a>
						<a href="/searchtypewomen?type=formal" class="nav-link bg-light">Formal Shoes</a>
						<a href="/searchtypewomen?type=sports" class="nav-link bg-light">Sports Shoes</a>
					</div>
					
					<a class="nav-link">Brands</a>
					<div class="nav flex-column ml-5">
						<a href="/searchbrand?brand=addidas" class="nav-link bg-light">Addidas</a>
						<a href="/searchbrand?brand=nike" class="nav-link bg-light">Nike</a>
						<a href="/searchbrand?brand=puma" class="nav-link bg-light">Puma</a>
					</div>


					<a class="nav-link">Price</a>
					<div class="nav flex-column ml-5">
						<a href="/searchprice?max=500&&min=0" class="nav-link bg-light">Under 500</a>
						<a href="/searchprice?max=1000&&min=0" class="nav-link bg-light">Under 1000</a>
						<a href="/searchprice?max=5000&&min=0" class="nav-link bg-light">Under 5000</a>
						<a href="/searchprice?min=5000&&max=0" class="nav-link bg-light">Above 5000</a>
					</div>
				</div>
			</div>

			<div class="col-md-9">
				<div class="row">
					<?php if(count($items)>0): ?>
					<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-4 py-3">
						<div class="card bg-light">
							<img src="img/<?php echo e($item->img); ?>" class="img-fluid">
							<div class="card-body">
								<a href="/shop/item/<?php echo e($item->id); ?>" class="nav-link text-dark"><h4><?php echo e($item->name); ?></h4></a>
								<blockquote><?php echo e($item->type); ?></blockquote>
								<p><strong>Price :</strong> $<?php echo e($item->price); ?></p>
							</div>
						</div>
					</div>

					
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					
					<?php endif; ?>
				</div>

				<div class="d-flex justify-content-center">
						<?php echo e($items->links()); ?>

				</div>
			</div>
			
		</div>

	
	</div>




	<?php $__env->stopSection(); ?>

	
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ecommerce\resources\views/pages/shop.blade.php */ ?>