<?php

// get the header
get_admin_template('templates/header', ['title' => '404 Page not Found']);

// get the sidebar
get_admin_template('templates/sidebar');

?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				404 Error Page
			</h1>
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo admin_url(); ?>">
						<i class="fa fa-dashboard"></i> Home</a>
				</li>
				<li class="active">404 error</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="error-page">
				<h2 class="headline text-yellow"> 404</h2>

				<div class="error-content">
					<h3>
						<i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

					<p>
						We could not find the page you were looking for. Meanwhile, you may
						<a href="<?php echo admin_url(); ?>">return to dashboard</a> or try using the search form.
					</p>

					<form class="search-form" method="get">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search ...">

							<div class="input-group-btn">
								<button type="submit" class="btn btn-warning btn-flat">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
						<!-- /.input-group -->
					</form>
				</div>
				<!-- /.error-content -->
			</div>
			<!-- /.error-page -->
		</section>
		<!-- /.content -->
	</div>

	<?php get_admin_template('templates/footer'); ?>