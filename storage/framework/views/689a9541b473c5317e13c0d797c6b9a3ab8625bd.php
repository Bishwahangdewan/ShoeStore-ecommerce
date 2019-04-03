    <?php $__env->startSection('content'); ?>

    	<!--CHECKOUT-->

		<div class="home-container py-5">
			<h1 class="display-4 text-center pb-3">Contact Us</h1>
			<p class="lead w-50 text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam molestias ea ab at autem! Asperiores recusandae, exercitationem sint hic odio!</p>
		</div>

		<div class="d-flex flex-md-row flex-sm-column">
			<div class="container bg-light text-center p-3">
				<i class="fas fa-search-location h3"></i>
				<h3 class="text-primary">Address</h3>
				<p class="lead">Lorem ipsum dolor.</p>
				<p class="lead">Lorem ipsum dolor sit.</p>
				<p class="lead">Lorem ipsum.</p>
			</div>

			<div class="container bg-light text-center p-3">
				<i class="fas fa-phone h3"></i>
				<h3 class="text-primary">Call us</h3>
				<p class="lead">Lorem ipsum dolor.</p>
				<p class="lead">Lorem ipsum dolor sit.</p>
				<p class="lead">Lorem ipsum.</p>
			</div>

			<div class="container bg-light text-center p-3">
				<i class="far fa-envelope h3"></i>
				<h3 class="text-primary">Send Mail</h3>
				<p class="lead">Lorem ipsum dolor.</p>
				<p class="lead">Lorem ipsum dolor sit.</p>
				<p class="lead">Lorem ipsum.</p>
			</div>
		</div> 


		<!--Send message Section-->
		<div class="container my-5">
		<div class="row">
			<div class="col-md-7">
				<h4>SEND MESSAGE</h2>

					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="firstname">First Name</label>
									<input type="text" id="firstname" placeholder="First name" class="form-control">
							</div>

							<div class="form-group col-md-6">
								<label for="lastname">Last Name</label>
									<input type="text" id="lastname" placeholder="Last Name" class="form-control">		
							</div>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" placeholder="Yor Email" class="form-control">
						</div>

						<div class="form-group">
							<label for="message">Message</label>
							<textarea name="message" id="message" class="form-control"></textarea>
						</div>

						<input type="submit" name="submit" value="Send Message" class="btn btn-outline-secondary">
					</form>
			</div>
		</div>

        </div>
        
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ecommerce\resources\views/pages/contact.blade.php */ ?>