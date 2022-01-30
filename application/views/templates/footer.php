  <!-- Footer -->
  <footer class="sticky-footer bg-transparent">
  	<div class="container my-auto">
  		<div class="copyright text-center my-auto">
  			<span>Copyright &copy; Digital Environment <?= date('Y'); ?></span>
  		</div>
  	</div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
  	<i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
  				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">×</span>
  				</button>
  			</div>
  			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  			<div class="modal-footer">
  				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  				<a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
  <!-- <script src="<?= base_url('assets/') ?>js/jqxchart.core.js"></script> -->


  <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
  <script type="text/javascript">
  	let baseurl = "<?php print base_url(); ?>";
  </script>
  <script src="<?= base_url('assets/') ?>js/form-function.js"></script>
  <script>
  	$('.form-check-input').on('click', function() {
  		const menuId = $(this).data('menu')
  		const roleId = $(this).data('role');

  		$.ajax({
  			url: "<?= base_url('menu/changeaccess'); ?>",
  			type: 'post',
  			data: {
  				menuId: menuId,
  				roleId: roleId
  			},
  			success: function() {
  				document.location.href = "<?= base_url('menu/roleaccess/'); ?>" + roleId;
  			}
  		});

  	});

  	$(document).ready(function() {
  		startTime()
  	})

  	function startTime() {
  		const today = new Date();
  		let h = today.getHours();
  		let m = today.getMinutes();
  		let s = today.getSeconds();
  		m = checkTime(m);
  		s = checkTime(s);
  		// document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;
  		document.getElementById('jam').innerHTML = `${h}:${m}:${s} <p id="test">test</p>`;
  		setTimeout(startTime, 1000);
  	}

  	function checkTime(i) {
  		if (i < 10) {
  			i = "0" + i
  		}; // add zero in front of numbers < 10
  		return i;
  	}
  </script>

  </body>

  </html>
