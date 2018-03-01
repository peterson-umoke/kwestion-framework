<?php get_admin_template('templates/header', ['title' => 'Maintenance Settings | Settings']); ?>
<?php get_admin_template('templates/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			General Settings
			<small>change things that concerns the site in Maintenance</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<form action="" method="post">
			<div class="row">
				<div class="col-md-9">
					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Title</h3>

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
							Start creating your amazing application!
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							Footer
						</div>
						<!-- /.box-footer-->
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
							<?php echo form_button('Update Maintenance Settings', 'btn-block btn-primary'); ?>
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

<?php get_admin_template('templates/footer'); ?>