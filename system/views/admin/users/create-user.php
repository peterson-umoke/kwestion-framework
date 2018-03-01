<?php
    $roles = $kf_database->select("roles", '*');
?>

	<?php get_admin_template('templates/header', ['title' => 'Add a new user']); ?>
	<?php get_admin_template('templates/sidebar'); ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Add a new user
				<small>Create a new account</small>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">

			<form action="" method="post">
				<?php echo input_hidden_box('create_account'); ?>
				<div class="row">
					<div class="col-md-9">
						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Personal Data</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<?php echo input_box('first_name', 'First Name', 'E.g David'); ?>
									</div>
									<div class="col-md-6">
										<?php echo input_box('last_name', 'Last Name', 'E.g Adegoke'); ?>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Account Information</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<?php echo input_box('identity', 'Identity', 'E.g email@yahoo.com,username123, m/123/21_12, e.t.c'); ?>
										<?php echo select_box('user_role', 'Choose the User Role', '', 'choose the role of the user', $roles, 'description'); ?>
									</div>
									<div class="col-md-6">
										<?php echo input_box('password', 'Password', 'E.g Ad***ke'); ?>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<div class="col-md-3">
						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Actions</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<?php echo form_button('Add new User', 'btn-block btn-primary'); ?>
							</div>
						</div>
						<!-- /.box -->

						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Upload Profile Picture</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body">
								<?php echo input_box('thumbnail_url', 'Profile Picture', '', 'Insert the profile of the user', 'file'); ?>
							</div>
						</div>
						<!-- /.box -->

					</div>
				</div>
			</form>

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<?php get_admin_template('templates/footer'); ?>'