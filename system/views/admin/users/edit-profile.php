<?php
    $roles = $kf_database->select("roles", '*');
    $user_id = isset($_GET['user_id']) ? $_GET['user_id']	: $_SESSION['login_data']['user_id'];
    $acc = new Account();
    $user  = $acc->get_account($user_id);
?>

	<?php get_admin_template('templates/header', ['title' => 'Edit '. get_user_fullname($user_id) .'\'s account']); ?>
	<?php get_admin_template('templates/sidebar'); ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<?php echo 'Edit '. get_user_fullname($user_id) .'\'s account'; ?>
				<small>update a user's account</small>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">

			<form action="" method="post">
				<?php echo input_hidden_box('update_account', $user_id); ?>
				<div class="row">
					<div class="col-md-9">
						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Showing Personal Data</h3>

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
										<?php echo input_box('first_name', 'First Name', 'E.g David', '', '', set_value('first_name', $user)); ?>
									</div>
									<div class="col-md-6">
										<?php echo input_box('last_name', 'Last Name', 'E.g Adegoke', '', '', set_value('last_name', $user)); ?>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Showing Account Information</h3>

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
										<?php echo input_box('identity', 'Identity', 'E.g email@yahoo.com,username123, m/123/21_12, e.t.c', '', '', set_value('identity', $user), '', 'disabled readonly'); ?>
										<?php echo select_box('user_role', 'Choose the User Role', '', 'choose the role of the user', $roles, 'description', '', get_user_role($user_id)['id']); ?>
									</div>
									<div class="col-md-6">
										<?php echo input_box('password', 'New Password', 'E.g Ad***ke', '', ''); ?>
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
								<?php echo form_button('Update account', 'btn-block btn-primary'); ?>
								<?php echo anchor_button('delete account', 'users/delete-profile?user_id='.$user_id, 'btn-block btn-danger', 'times'); ?>
							</div>
						</div>
						<!-- /.box -->

						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Showing Preview of Avatar</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="box-body text-center">
								<img src="<?php echo get_user_thumbnail($user_id); ?>" alt="" class="img-circle  text-center center-block img-responsive">
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