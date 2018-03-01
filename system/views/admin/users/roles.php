<?php
    $count = 1;
    $table_headers = array('#','title','description','actions');
    $data = $kf_database->select('roles', '*');
    $id = (isset($_GET['role_id'])) ? $_GET['role_id'] : "";
    $single = $kf_database->get("roles", '*', ['id' => $id]);

    if (isset($_GET['delete_role']) && $_GET['delete_role'] == 1) {
        $kf_database->delete("roles", ['id' => $id]);

        // refresh the page
        redirect("admin/users/roles");
    }
?>

	<?php get_admin_template('templates/header', ['title' => 'Roles']); ?>
	<?php get_admin_template('templates/sidebar'); ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				All Roles
				<small>List of Roles on the Site</small>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="col-md-4">
					<?php if (isset($_GET['edit_roles']) && $_GET['edit_roles'] == 1): ?>
					<form action="" method="post">
						<?php echo input_hidden_box('update_role', $id); ?>
						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Editing
									<?php echo get_user_role_desc($id); ?>'s Role</h3>

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
								<?php echo input_box('title', 'Title', 'e.g shop-keeper, blogger, e.t.c', '', '', set_value('title', $single)); ?>
								<?php echo input_box('description', 'Description', 'e.g shShop Keeper', '', 'Blogger, e.t.c', set_value('description', $single)); ?>
							</div>
							<!-- /. box-body -->
							<div class="box-footer">
								<?php echo form_button('update role', 'btn-block btn-flat btn-primary'); ?>
								<?php echo anchor_button('delete role', 'admin/users/roles?delete_role=1&&role_id='.$id, 'btn-block btn-flat btn-danger', 'times'); ?>
							</div>
							<!-- /.box-footer-->
						</div>
						<!-- /.box -->
					</form>
					<?php endif; ?>

					<form action="" method="post">
						<?php echo input_hidden_box('create_role'); ?>
						<!-- Default box -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Showing Add Role Form</h3>

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
								<?php echo input_box('title', 'Title', 'e.g shop-keeper, blogger, e.t.c'); ?>
								<?php echo input_box('description', 'Description', 'e.g shShop Keeper', '', 'Blogger, e.t.c'); ?>
							</div>
							<!-- /. box-body -->
							<div class="box-footer">
								<?php echo form_button('create role', 'btn-block btn-flat btn-primary'); ?>
							</div>
							<!-- /.box-footer-->
						</div>
						<!-- /.box -->
					</form>
				</div>
				<div class="col-md-8">
					<!-- Default box -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">List of Roles</h3>

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
							<table class="cms-tables table table-bordered table-hover">
								<thead>
									<tr>
										<?php foreach ($table_headers as $key): ?>
										<th>
											<?php echo ucwords($key); ?>
										</th>
										<?php endforeach; ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $key): ?>
									<tr>
										<td>
											<?php echo $count++; ?>
										</td>
										<td>
											<a href="<?php echo admin_url('users/roles?edit_roles=1&&role_id=' . $key['id']); ?>" class="btn btn-link">
												<?php echo $key['title']; ?>
											</a>
										</td>
										<td>
											<?php echo $key['description']; ?>
										</td>
										<td>
											<a href="<?php echo admin_url('users/roles?edit_roles=1&&role_id=' . $key['id']); ?>" class="btn btn-flat btn-primary">Edit</a>
											<a href="<?php echo admin_url('users/roles?delete_role=1&&role_id=' . $key['id']); ?>" class="btn btn-flat btn-danger">Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<?php foreach ($table_headers as $key): ?>
										<th>
											<?php echo ucwords($key); ?>
										</th>
										<?php endforeach; ?>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- /.box -->
				</div>
			</div>

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<?php get_admin_template('templates/footer'); ?>