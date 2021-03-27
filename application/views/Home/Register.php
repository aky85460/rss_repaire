<?php include('A_head.php');?> 
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url(); ?>assets/images/bg_1.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 ftco-animate text-center">
<h1 class="mb-2 bread">MY Account </h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>MY Acount <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section">
<div class="container">
<div class="row d-flex contact-info">
<div class="col-md-3 d-flex">
<div class="bg-light align-self-stretch box p-4 text-center">
<h3 class="mb-4">Address</h3>
<p>Bandhwa Bazar Jaunpur UP</p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="bg-light align-self-stretch box p-4 text-center">
<h3 class="mb-4">Contact Number</h3>
<p><a href="tel://9889336527">+91 9889336527</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="bg-light align-self-stretch box p-4 text-center">
<h3 class="mb-4">Email Address</h3>
<p><a href="#"><span class="__cf_email__" data-cfemail="">kbic@gmail.com</span></a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="bg-light align-self-stretch box p-4 text-center">
<h3 class="mb-4">Website</h3>
<p><a href="#">kbic.com</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
<div class="container">
<div class="row d-flex align-items-stretch no-gutters">
<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
	<h2 class="mb-4">Log IN</h2>
<form action="#">
	<div class="form-group">
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div>

	<div class="form-group">
		<input type="password" class="form-control" name="passwp" placeholder="Password">
	</div>

<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
</div>
</form>
</div>

<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
	
	<!--- Show notificatio msg S -->
	<?php if(!empty($this->session->flashdata('msg_noti'))){ ?>
		<div class=""> <?= $this->session->flashdata('msg_noti'); ?> </div>
	<?php } ?>


	<!--- Show notificatio msg E -->
	<h2 class="mb-4">New Account</h2>
	<form action="<?= base_url('index.php/Home/New_user'); ?>" id="register" method="post">
		<div class="form-group">
			<input type="text" class="form-control <?php if(!empty(form_error('name'))) echo 'is-invalid';  ?>" name="name" placeholder="Your Name">
			<span class="text-danger"><?=form_error('name'); ?></span>
		</div>

		<div class="form-group">
			<input type="number" class="form-control <?php if(!empty(form_error('contact'))) echo 'is-invalid';  ?>" name="contact" placeholder="Contact No.">
			<span class="text-danger"><?=form_error('contact'); ?></span>
		</div>

		<div class="form-group">
			<input type="email" class="form-control <?php if(!empty(form_error('email'))) echo 'is-invalid';  ?>" name="email" placeholder="Your Email">
			<span class="text-danger"><?=form_error('email'); ?></span>
		</div>
		<div class="form-group">
			
			<select class="form-control <?php if(!empty(form_error('city'))) echo 'is-invalid';  ?>" name="city" >
				<option value="">-- Select --</option>
				<option>Lko</option>
				<option>Lko</option>
			</select>
			<span class="text-danger"><?=form_error('city'); ?></span>
		</div>
		<div class="form-group">
			<input type="password" class="form-control <?php if(!empty(form_error('passwp'))) echo 'is-invalid';  ?>" name="passwp" placeholder="Password">
			<span class="text-danger"><?=form_error('passwp'); ?></span>
		</div>

		<div class="form-group">
			<input type="file" class="form-control <?php if(!empty(form_error('pic'))) echo 'is-invalid';  ?>" name="passwp" placeholder="pic">
			<span class="text-danger"><?=form_error('pic'); ?></span>
		</div>

		<div class="form-group">
			<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
		</div>
	</form>
</div>


</div>
</div>
</section>

<?php include('A_foot.php'); ?>