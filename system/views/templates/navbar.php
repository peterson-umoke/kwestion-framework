<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
	<li class="header">MAIN NAVIGATION</li>
	<li class="treeview">
		<a href="#">
			<i class="fa fa-dashboard"></i>
			<span>Dashboard</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li>
				<a href="<?php echo admin_url(); ?>">
					<i class="fa fa-circle-o"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?php echo admin_url('analytics/'); ?>">
					<i class="fa fa-line-chart"></i> Analytics</a>
			</li>
		</ul>
	</li>
	<li class="treeview">
		<a href="#">
			<i class="fa fa-users"></i>
			<span>Users</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li>
				<a href="<?php echo admin_url('users/all-users'); ?>">
					<i class="fa fa-group"></i> All Users</a>
			</li>
			<li>
				<a href="<?php echo admin_url('users/create-user'); ?>">
					<i class="fa fa-user-plus"></i> Add User</a>
			</li>
			<li>
				<a href="<?php echo admin_url('users/edit-profile'); ?>">
					<i class="fa fa-user"></i> Edit Profile</a>
			</li>
			<li>
				<a href="<?php echo admin_url('users/roles'); ?>">
					<i class="fa fa-circle-o text-success"></i> Roles</a>
			</li>
		</ul>
	</li>
</ul>