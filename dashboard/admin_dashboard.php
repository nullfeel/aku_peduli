<?php 
echo '<div class="alert border-0 border-success border-start border-4 bg-light-success alert-dismissible fade show py-2">
<div class="d-flex align-items-center">
  <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
  </div>
  <div class="ms-3">
    <div class="text-success">Berhasil masuk!, Selamat datang admin di panel aplikasi Aku Peduli</div>
  </div>
</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="card radius-10 border-0 border-start border-orange border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Total Pengguna Terdaftar</p>
                        <h4 class="mb-0 text-orange">'.count($user).'</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-orange text-white">
                        <i class="bi bi-person-plus-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card radius-10 border-0 border-start border-tiffany border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Total Catatan Tersimpan</p>
                        <h4 class="mb-0 text-tiffany">'.count($catatan).'</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-tiffany text-white">
                        <i class="bx bx-book-alt"></i>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="card radius-10 border-0 border-start border-success border-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Total Log Tercatat</p>
                        <h4 class="mb-0 text-success">'.count($log).'</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-success text-white">
                        <i class="bx bx-list-ol"></i>
                      </div>
                    </div>
                  </div>
                </div>
';