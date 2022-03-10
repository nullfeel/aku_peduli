<h6 class="mb-3 text-uppercase">Tulis catatan</h6>
<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="needs-validation" action="../modules/catatan/simpan_catatan.php" method="post">
										<div class="mb-3">
                                        <input name="tanggal" type="date" class="form-control" placeholder="Masukan Tanggal">
											<!-- <div class="invalid-feedback">Anda belum memasukan tanggal.</div> -->
										</div>
										<div class="mb-3">
                                            <input name="jam" type="time" class="form-control" placeholder="Masukan Jam">
											<!-- <label class="form-check-label" for="validationFormCheck2">Masukan detail jam</label> -->
                                            <!-- <div class="invalid-feedback">Tolong masukan detail jam</div> -->
										</div>
										<div class="mb-3">
                                            <input name="lokasi" type="text" class="form-control" placeholder="Masukan Lokasi">
											<!-- <div class="invalid-feedback">Masukan lokasi</div> -->
										</div>
										<div class="mb-3">
                                        <input name="suhu" type="text" class="form-control" placeholder="Masukan Suhu Tubuh">
										</div>
                                        <div class="mb-3">
											<label for="validationTextarea" class="form-label">Catatan</label>
											<textarea class="form-control" id="validationTextarea" placeholder="Tulis catatan perjalanan kamu disini" name="catatan"></textarea>
											<!-- <div class="invalid-feedback">Silahkan di isi catatan perjalanan anda.</div> -->
										</div>
										<div class="mb-3">
											<button class="btn btn-primary" type="submit">Submit form</button>
										</div>
									</form>
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