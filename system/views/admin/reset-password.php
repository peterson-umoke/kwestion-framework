<?php

    $acc = new Account();
    if ($acc->is_login()) {
        redirect("admin");
        session_regenerate_id();
    }
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
			Reset Your Password |
			<?php echo SITE_NAME; ?> | Admin </title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?php echo assets('vendors'); ?>/bootstrap/dist/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo assets('vendors'); ?>/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?php echo assets('vendors'); ?>/Ionicons/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo assets('/css/AdminLTE.min.css'); ?>">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?php echo assets('vendors/iCheck/square/blue.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>

	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="<?php echo url('admin/login'); ?>">
					<b>
						<?php echo SITE_NAME; ?> </b>
				</a>
			</div>
			<!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">
					<?php
                        echo "Reset Your Password To start your session";
                    ?>
				</p>

				<form action="" method="post">
					<?php echo input_hidden_box("reset_password"); ?>
					<?php echo input_box('identity', 'Email', 'Enter Your Identity', ''); ?>
					<?php echo input_box('password', 'New Password', 'Enter Your Password', '', 'password'); ?>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
						</div>
					</div>
				</form>

				<a href="<?php echo admin_url('login/'); ?>" class="btn btn-flat btn-default btn-block text-center" style="margin-top:5px;">
					<i class="fa fa-arrow-left"></i> Back to Login</a>
				<p class="text-center">
					<br> &copy;
					<b>
						<?php echo SITE_NAME; ?>
					</b>
					<?php echo date("Y"); ?>, All Rights Reserved .
				</p>

			</div>
			<!-- /.login-box-body -->
		</div>
		<!-- /.login-box -->

		<!-- jQuery 3 -->
		<script src="<?php echo assets('vendors/jquery/dist/jquery.min.js'); ?>"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?php echo assets('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
		<!-- iCheck -->
		<script src="<?php echo assets('vendors/iCheck/icheck.min.js'); ?>"></script>
		<script>
			$(function() {
				$('input').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%' // optional
				});
			});
		</script>
	</body>

	</html>