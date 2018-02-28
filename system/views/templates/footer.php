<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 3.0.0
	</div>
	<strong>Copyright &copy; 2014-2016
		<a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
</footer>

</div>
<!-- wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo assets('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo assets('vendors/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo assets('vendors/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo assets('js/adminlte.min.js'); ?>"></script>
<script>
	$(document).ready(function() {

		// sidebar menu
		$('.sidebar-menu').tree()

		// datatables
		$('.cms-tables').DataTable()
		$('.cms-tables2').DataTable({
			'paging': true,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})
</script>
</body>

</html>