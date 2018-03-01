<?php $count = 1; ?>
<?php $table_headers = ['#','Fullname', 'Identity', 'Role','Created On','Actions']; ?>
<?php $all_users = $kf_database->select("users", "*"); ?>

<?php get_admin_template('templates/header', ['title' => 'All Users']); ?>
<?php get_admin_template('templates/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			All Users
			<small>List of all users in the site</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Showing All Users</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="cms-tables table table-bordered table-hover">
							<thead>
								<tr>
									<?php foreach ($table_headers as $key): ?>
									<th>
										<?php echo $key; ?>
									</th>
									<?php endforeach; ?>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($all_users as $key): ?>
								<tr>
									<td>
										<?php echo $count++; ?>
									</td>
									<td>
										<a href="<?php echo admin_url('users/edit-profile?user_id=' . $key['id']); ?>" class="btn btn-link">
											<?php echo get_user_fullname(($key['id'])); ?>
										</a>
									</td>
									<td>
										<?php echo $key['identity']; ?>
									</td>
									<td>
										<?php echo get_user_role_desc($key['id']); ?>
									</td>
									<td>
										<?php echo date_and_time($key['created_on']); ?>
									</td>
									<td>
										<a href="<?php echo admin_url('users/edit-profile?user_id=' . $key['id']); ?>" class="btn btn-flat btn-primary">Edit</a>
										<a href="<?php echo admin_url('users/delete-profile?user_id=' . $key['id']); ?>" class="btn btn-flat btn-danger">Delete</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<?php foreach ($table_headers as $key): ?>
									<th>
										<?php echo $key; ?>
									</th>
									<?php endforeach; ?>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php get_admin_template('templates/footer'); ?>