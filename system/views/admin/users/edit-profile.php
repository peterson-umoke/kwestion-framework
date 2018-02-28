<?php
	$payment_methods = [
		[
			'id'	=> 'PAYPAL',
			'title'	=> 'PAYPAL',
		],
		[
			'id'	=> 'CARD PAYMENT',
			'title'	=> 'CARD PAYMENT',
		],
		[
			'id'	=> 'BANK WIRE TRANSFER',
			'title'	=> 'BANK WIRE TRANSFER',
		],
		[
			'id'	=> 'PAYMENT ON DELIVERY',
			'title'	=> 'PAYMENT ON DELIVERY',
		],
	];
	// $payment_methods = explode(", ", $payment_methods);
	$states = "---,Abia,Adamawa,Akwa Ibom,Anambra,Bauchi,Bayelsa,Benue,Borno,Cross River,Delta,Ebonyi,Edo,Ekiti,Enugu,AbujaGombe,Imo,Jigawa,Kaduna,Kano,Katsina,Kebbi,Kogi,Kwara,Lagos,Nasarawa,Niger,Ogun,Ondo,Osun,Oyo,Plateau,Rivers,Sokoto,Taraba,Yobe,Zamfara";
	$states = explode(",", $states);
	$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : get_user_id();
	$acc = new Account();
	$roles = $acc->get_roles();
	$users = $kf_database->get("users",'*',['id' => $user_id]);
?>

<?php get_admin_template('templates/header',['title' => 'Edit Your Profile']); ?>
<?php get_admin_template('templates/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit <?php echo get_user_fullname($user_id); ?>'s Profile
			<small>Adjust the user's names, password, e.t.c</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

<div class="row">
	<div class="col-md-4">
		<!-- Default box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Profile Picture</h3>
			</div>
			<div class="box-body">
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-primary">
						<h3 class="widget-user-username">
							<?php echo ucwords(get_user_fullname($user_id)); ?>
						</h3>
						<h5 class="widget-user-desc">
							<?php echo ucwords(get_user_role($user_id)['description']); ?>
						</h5>
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="<?php echo get_user_thumbnail($user_id); ?>" alt="User Avatar">
					</div>
					<br>
					<br>
					<div class="">
						<form enctype="multipart/form-data" method="post" action="">
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputFile">Upload Profile Picture</label>
									<input type="hidden" name="update_profile_picture">
									<input type="hidden" name="profile_user_id" value="<?php echo $user_id; ?>">
									<input type="file" size="32" name="image_field" value="" id="exampleINputFile">

									<p class="help-block text-primary">Update your profile picture with the button above.</p>
								</div>
							</div>
							<input type="submit" value="Update Profile Picture" class="btn btn-block btn-primary btn-flat">
						</form>
						<!-- /.row -->
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-8">
		<!-- Default box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Update Profile Data</h3>
			</div>
			<div class="box-body">
				<p class="text-danger">
					<strong> Take Note: </strong> You are will not be able to change your email as this is the only means of idenfication</p>
				<form action="" method="post" class="" name="update_profile_form">
					<input type="hidden" name="update_profile">
					<input type="hidden" name="profile_id" value="<?php echo $user_id; ?>">

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name', $users); ?>" class="form-control"
								 placeholder="Enter First Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name', $users); ?>" class="form-control"
								 placeholder="Enter Last Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" value="<?php echo set_value('identity', $users); ?>" class="form-control" placeholder="Enter Email"
								 disabled readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="password">New Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Enter New Password">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label for="email">Phone Number</label>
								<input type="phone" name="phone" id="phone" value="<?php echo get_meta_value('users_meta', $user_id, 'phone_number'); ?>" class="form-control" placeholder="Enter Phone Number">
							</div>
						</div>

						<?php // show this to only admin users only
								if (get_user_role($user_id)['title'] == 'admin'): ?>
						<div class="col-md-7">
							<div class="form-group">
								<label for="user_role">Choose the User's Role</label>
								<select name="user_role" id="user_role" class="form-control">
									<option value="">----</option>
									<?php for ($i =0; $i < count($roles); $i++): ?>
									<option value="<?php echo $roles[$i]['title']; ?>" <?php echo ($roles[$i]['title']== get_user_role($user_id)['title']) ? 'selected' :
									 ''; ?>>
										<?php echo $roles[$i]['description']; ?>
									</option>
									<?php endfor; ?>
								</select>
							</div>
						</div>

						<?php endif; ?>
					</div>
					<button class="btn btn-primary btn-block btn-flat" type="submit">Submit</button>
				</form>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<!-- Default box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Update Billing and Payment Information</h3>
			</div>
			<div class="box-body">
				<form action="" method="post" class="">
					<input type="hidden" name="update_billpayment_information">
					<input type="hidden" name="profile_user_id" value="<?php echo $user_id; ?>">

					<div class="row">
						<div class="col-md-12">
							<?php echo get_meta_value("users_meta", 'user', $user_id, 'payment_method'); ?>
							<?php echo select_box('user_payment_method', 'Select Payment Method', ' Choose the Payment Method', "", $payment_methods, '', get_user_meta($user_id, "payment_method")); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="user_state">Select Your State</label>
								<select name="user_state" id="user_state" class="form-control">
									<?php for ($i = 0; $i < count($states); $i++): ?>
									<?php if (get_user_meta($user_id, "billing_state") == $states[$i]): ?>
									<option value="<?php echo $states[$i]; ?>" selected>
										<?php else: ?>
										<option value="<?php echo $states[$i]; ?>">
											<?php endif; ?>
											<?php echo $states[$i]; ?>
										</option>
										<?php endfor; ?>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<?php echo wysiwyg_box('user_address', 'Address', 'Enter Your Address', get_meta_value('users_meta', $user_id, 'billing_address')); ?>
						</div>
					</div>
					<button class="btn btn-primary btn-block btn-flat" type="submit">Update Payment and Billing Informtaion</button>
				</form>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php get_admin_template('templates/footer'); ?>
