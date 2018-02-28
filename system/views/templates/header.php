<?php
    // make sure only certain people are allowed to view this part of the site
    $kwestion = new Account();
    if ($kwestion->is_login()) {
        $user_id = get_user_id();
        if (get_user_role($user_id)['title'] != "admin") {
            $_SESSION['message']	= 'You are not allowed to view this page';
            $kwestion->logout_account($user_id);
            redirect('admin/login/');
        }
    } else {
        $_SESSION['message']	= 'You need to be logged in to view this page';
        redirect('admin/login/');
    }
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
			<?php echo (isset($title) && !empty($title)) ? ucwords($title). " | " . SITE_NAME : SITE_NAME; ?>
		</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?php echo assets('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo assets('vendors/font-awesome/css/font-awesome.min.css'); ?>">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?php echo assets('vendors/Ionicons/css/ionicons.min.css'); ?>">
		<!-- DataTables -->
		<link rel="stylesheet" href="<?php echo assets('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo assets('css/AdminLTE.min.css'); ?>">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?php echo assets('css/skins/_all-skins.min.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

		<!-- jQuery 3 -->
		<script src="<?php echo assets('vendors/jquery/dist/jquery.min.js'); ?>"></script>
		<!-- CK Editor -->
		<script src="<?php echo assets('vendors/ckeditor/ckeditor.js'); ?>"></script>
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">

			<header class="main-header">
				<!-- Logo -->
				<a href="<?php echo url('admin'); ?>" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini">
						<i class="fa fa-dashboard"></i>
					</span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg">
						<b>
							<?php echo SITE_NAME; ?>
						</b>
					</span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<!-- display a navbar to the left of the header -->
					<nav class="extra-menu-navbar">
						<ul class="nav navbar-nav">
							<li>
								<a href="<?php echo url(); ?>" target="_blank">
									<span class="glyphicon glyphicon-globe"></span> &nbsp; View Website</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-plus fa-md fa-fw"></i> New
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo admin_url('users/add-new-user'); ?>">
											<i class="fa fa-user-plus   fa-fw"></i> User
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>

					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Messages: style can be found in dropdown.less-->
							<li class="dropdown messages-menu hidden">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class="label label-success">4</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 4 messages</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li>
												<!-- start message -->
												<a href="#">
													<div class="pull-left">
														<img src="<?php echo assets('/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
													</div>
													<h4>
														Support Team
														<small>
															<i class="fa fa-clock-o"></i> 5 mins</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<!-- end message -->
										</ul>
									</li>
									<li class="footer">
										<a href="#">See All Messages</a>
									</li>
								</ul>
							</li>
							<!-- Notifications: style can be found in dropdown.less -->
							<li class="dropdown notifications-menu hidden">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning">10</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 10 notifications</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li>
												<a href="#">
													<i class="fa fa-users text-aqua"></i> 5 new members joined today
												</a>
											</li>
										</ul>
									</li>
									<li class="footer">
										<a href="#">View all</a>
									</li>
								</ul>
							</li>
							<!-- Tasks: style can be found in dropdown.less -->
							<li class="dropdown tasks-menu hidden">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-flag-o"></i>
									<span class="label label-danger">9</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 9 tasks</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li>
												<!-- Task item -->
												<a href="#">
													<h3>
														Design some buttons
														<small class="pull-right">20%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">20% Complete</span>
														</div>
													</div>
												</a>
											</li>
											<!-- end task item -->
										</ul>
									</li>
									<li class="footer">
										<a href="#">View all tasks</a>
									</li>
								</ul>
							</li>
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo assets('/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
									<span class="hidden-xs">
										<?php echo get_user_fullname() ?>
									</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="<?php echo assets('/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">

										<p>
											<?php echo get_user_fullname() ?>
											<small>
												<?php echo get_user_identity(); ?>
												<br>
												<?php echo get_user_role($user_id)['description']; ?>
											</small>
										</p>
									</li>
									<!-- Menu Body -->
									<li class="user-body hidden">
										<div class="row">
											<div class="col-xs-4 text-center">
												<a href="#">Followers</a>
											</div>
											<div class="col-xs-4 text-center">
												<a href="#">Sales</a>
											</div>
											<div class="col-xs-4 text-center">
												<a href="#">Friends</a>
											</div>
										</div>
										<!-- /.row -->
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="<?php echo url('admin/users/edit-profile'); ?>" class="btn btn-default btn-flat">Edit Your Profile</a>
										</div>
										<div class="pull-right">
											<a href="<?php echo url('admin/logout/'); ?>" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->
							<li class="hidden">
								<a href="#" data-toggle="control-sidebar">
									<i class="fa fa-gears"></i>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
