<?php $__env->startSection('content'); ?>
<h1 class="display-4 text-center my-5">Payment</h1>


<div class="d-flex justify-content-center pb-5">
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link">Address</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"><strong>Payment</strong></a>
    </li>
    <li class="nav-item">
        <a class="nav-link">Review</a>
    </li>
</ul>
</div>

<!-- PRODUCT AND ADDRESS DETAILS -->
<div class="container">
<div class="row">
    <div class="col-md-6">
        <div class="container bg-light">
                <h3 class="py-3">Item details</h3>
                <?php if(count($items) >0): ?>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $item0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-details pb-3">
                    <p>Product name : <?php echo e($item->name); ?></p>	
                    <p>Type : Casual</p>
                    <p>Price : $65</p>
                    <p>Wear : Men</p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
    </div>
    <div class="col-md-6">
        <div class="container bg-light">
                <h3 class="py-3">Deliver to</h3>
                <?php if(count($address) > 0): ?>
                <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-details pb-3">
                    <p><?php echo e($place->name); ?></p>	
                    <p><?php echo e($place->address); ?>,<span><?php echo e($place->city); ?></span>,<span><?php echo e($place->state); ?></span></p>
                    <p>Phone:<?php echo e($place->phone); ?></p>
                    <p>Email:<?php echo e($place->email); ?></p>
                    <p>Pin:<?php echo e($place->pin); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
    </div>
</div>
</div>


<!--PAYMENT -->
<form action="/pay" method="POST">
    <?php echo csrf_field(); ?>
<div class="home-container my-5">
<div class="container">
    <h3>Payment</h3>

    <div class="row">
        <div class="col-md-9">
            <div class="accordion" id="payment">


                <div class="card">
                    <div class="card-header" id="heading1">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse1" aria-controls="collapse1">CREDIT CARD</button>
                    </div>

                    <div class="collapse-show" id="collapse1" data-parent="#payment" aria-expanded="true">
                        <div class="card-body">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="card">
                                 <label class="form-check-label" for="exampleRadios2">
                                Enter Card details
                                  </label>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading2">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse2" aria-controls="collapse2" aria-expanded="true">PAYPAL</button>
                    </div>

                    <div class="collapse" id="collapse2" data-parent="#payment" >
                        <div class="card-body">
                            <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="paypal">
                                 <label class="form-check-label" for="exampleRadios1">
                                Pay with PayPal
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading3">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse3" aria-controls="collapse3">COD</button>
                    </div>

                    <div class="collapse" id="collapse3" data-parent="#payment" aria-expanded="false">
                        <div class="card-body">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="cod">
                                 <label class="form-check-label" for="exampleRadios2">
                                Cash on Delivery
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <input type="submit" class="btn btn-secondary mt-3" name="submit" value="Proceed to Checkout">
    </div>
</div>
</div>
</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ecommerce\resources\views/payment/payment.blade.php */ ?>