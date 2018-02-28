<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo assets('/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>
					<?php echo get_user_fullname() ?>
				</p>
				<a href="#">
					<i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" id="search-btn" class="btn btn-flat">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<?php get_admin_template('templates/navbar'); ?>
		< </section>
			<!-- /.sidebar -->
</aside>