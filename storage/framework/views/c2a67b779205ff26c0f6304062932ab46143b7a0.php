<?php $__env->startSection('content'); ?>

    <?php 
        //php code to find the total
        $total=0;
        //shipping cost
        $sp=10;
        foreach($items as $item){
            foreach($item as $singleitem){
            $total = $total + $singleitem->price;
            }
        }
        //main total
        $gt=$total + $sp;
    ?>

    <!--CHECKOUT-->
     
		<div class="home-container py-5">
			<h1 class="display-4 text-center pb-5">Your Cart</h1>
			<div class="row">
				<div class="col-md-8">
					<div class="item-wrapper container">
						<div class="item-head bg-white p-3 mb-3 text-center">
							<div class="row">
								<div class="col-5">
									Item
								</div>
								<div class="col-2">
									Price
								</div>
								<div class="col-1">
									
								</div>
							</div>
						</div>

						<div class="item-body bg-white p-3 text-center">

                            <?php if(count($items)>0): ?>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="row">
								<div class="col-5">
									<div class="row">
										<div class="col"><img src="/img/<?php echo e($singleitem->img); ?>" class="img-fluid"></div>
                                    <div class="col"><strong><?php echo e($singleitem->name); ?></strong></div>
									</div>
								</div>

								<div class="col-2">
                                <strong> $<?php echo e($singleitem->price); ?> </strong>
								</div>

								<div class="col-1">
                                    <a href="/remove/<?php echo e($singleitem->id); ?>" class="cart-remove">
										<i class="fas fa-times"></i>
									</a>
								</div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container bg-white">
						<h3 class="py-3">Your Orders</h3>
						
						<div class="d-flex flex-row justify-content-between pb-3">
							<p class="h5">Item Subtotal</p>
							<p><strong>$<?php echo $total;?></strong></p>
						</div>

						<div class="d-flex flex-row justify-content-between pb-3">
							<p class="h5">Shipping Cost</p>
							<p><strong>$10</strong></p>
						</div>

						<div class="d-flex flex-row justify-content-between pb-3">
							<p class="h5">Total</p>
							<p><strong>$<?php echo $gt; ?></strong></p>
						</div>

						<div class="text-center pb-3">
							<a href="/checkout" class="btn btn-blobk btn-outline-secondary">Proceed to Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ecommerce\resources\views/checkout/cart.blade.php */ ?>