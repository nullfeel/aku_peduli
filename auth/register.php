<?php
include_once '../modules/auth/procces_register.php';
?>
<!DOCTYPE html>
<html lang="en" class="light-theme">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
        <!-- Bootstrap CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="../assets/css/style.css" rel="stylesheet" />
        <link href="../assets/css/icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

        <!-- loader-->
        <link href="../assets/css/pace.min.css" rel="stylesheet" />

        <title>Aku Peduli - Register</title>
    </head>

    <body>
        <!--start wrapper-->
        <div class="wrapper">
            <!--start content-->
            <main class="authentication-content">
                <div class="container-fluid">
                    <div class="authentication-card">
                        <div class="card shadow rounded-0 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                                    <img src="../assets/images/error/login-img.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body p-4 p-sm-5">
                                        <h5 class="card-title">Register akun</h5>
                                        <p class="card-text mb-5">Buat aku anda disini.</p>
                                        <form class="form-body" method="post" action="">
                                        <?php if(isset($resp)){ echo '<div class="alert border-0 border-info border-start border-4 bg-light-info alert-dismissible fade show py-2" role="alert">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-3 text-info"><i class="bi bi-info-circle-fill"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <div class="text-info">',$resp,'</div>
                                                    </div>
                                                </div>
                                            </div>';} ?>
                                            <div class="row g-3">
                                            <div class="col-12" >
                                                    <label for="inputNIK" class="form-label">Masukan NIK anda</label>
                                                    <div class="ms-auto position-relative">
                                                        <!-- <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div> -->
                                                        <input type="text" name="nik" class="form-control" id="inputNIK" placeholder="Masukan NIK anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputNama" class="form-label">Masukan Nama lengkap anda</label>
                                                    <div class="ms-auto position-relative">
                                                        <!-- <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div> -->
                                                        <input type="text" name="nama_lengkap" class="form-control" id="inputNama" placeholder="Masukan nama anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary radius-30">Register</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!--end page main-->
        </div>
        <!--end wrapper-->

        <!--plugins-->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/pace.min.js"></script>
    </body>
</html>
