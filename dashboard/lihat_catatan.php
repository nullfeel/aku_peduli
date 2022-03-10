<h6 class="mb-3 text-uppercase">Daftar catatan kamu</h6>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Suhu Tubuh</th>
                                    <th>Catatan</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                    $no=1;
                                    $data = file('../database/catatan.txt', FILE_IGNORE_NEW_LINES);
                                    $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                    foreach($data as $value){
                                        $pecah = explode("|", $value);
                                        @$key = $pecah['0']."|".$pecah['1'];
                                        if($key==$user){
                                    ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $pecah['2']; ?>
                            </td>
                            <td>
                                <?= $pecah['3']; ?>
                            </td>
                            <td>
                                <?= $pecah['4']; ?>
                            </td>
                            <td>
                                <?= $pecah['5']; ?>
                            </td>
                            <td>
                                <?= $pecah['6']; ?>
                            </td>
                        </tr>
                        <?php } } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>