<?php
include '../modules/dashboard/login_activity.php';
?>
<h6 class="mb-3 text-uppercase">Log login user</h6>
<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
                                    <?php
                                    echo showLogInfo($datalog);
                                    ?>
								</div>
							</div>
						</div>

						<script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/table-datatable.js"></script>
	
  <!--app-->
  <script src="assets/js/app.js"></script>