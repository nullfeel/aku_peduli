<?php
session_start();
if(empty($_SESSION['nik'])){
    // header("location: index.php?url=login");
    }
    if($_SESSION['admin']) {
        include'../modules/dashboard/admin_widget.php';
    }
    elseif (!empty($_SESSION['nik'])) {
        include'../modules/dashboard/hitung_total_catatan.php';
        include'../modules/dashboard/login_activity.php';
    }
    ?>

    <!DOCTYPE html>
    <html lang="en" class="light-theme">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
        <!--plugins-->
        <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        <link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="../assets/css/style.css" rel="stylesheet" />
        <link href="../assets/css/icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

        <!-- loader-->
        <link href="../assets/css/pace.min.css" rel="stylesheet" />

        <!--Theme Styles-->
        <link href="../assets/css/dark-theme.css" rel="stylesheet" />
        <link href="../assets/css/light-theme.css" rel="stylesheet" />
        <link href="../assets/css/semi-dark.css" rel="stylesheet" />
        <link href="../assets/css/header-colors.css" rel="stylesheet" />

        <title>Aku Peduli - Dashboard</title>
    </head>

    <body>
        <!--start wrapper-->
        <div class="wrapper">
            <!--start top header-->
            <header class="top-header">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-icon fs-3">
                        <i class="bi bi-list"></i>
                    </div>
                    <div class="top-navbar-right ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item search-toggle-icon">
                                <a class="nav-link" href="#">
                                    <div class="">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-user-setting">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                    <div class="user-setting d-flex align-items-center">
                                        <img src="https://via.placeholder.com/110X110" class="user-img" alt="" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/110X110" alt="" class="rounded-circle" width="54" height="54" />
                                                <div class="ms-3">
                                                    <h6 class="mb-0 dropdown-user-name">
                                                        <?php 
                                                        if (empty($_SESSION['nik'])) {
                                                            echo 'Anda belum login';
                                                        }
                                                        else {
                                                            echo"<h3>".$_SESSION['nama_lengkap']."</h3>";
                                                        }
                                                        ?>
                                                    </h6>
                                                    <small class="mb-0 dropdown-user-designation text-secondary">User</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-gear-fill"></i></div>
                                                <div class="ms-3"><span>Setting</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../modules/auth/procces_logout.php">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-lock-fill"></i></div>
                                                <div class="ms-3"><span>Logout</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!--end top header-->

            <!--start sidebar -->
            <aside class="sidebar-wrapper" data-simplebar="true">
                <div class="sidebar-header">
                    <div>
                        <img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon" />
                    </div>
                    <div>
                        <h4 class="logo-text">Aku Peduli</h4>
                    </div>
                    <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
                </div>
                <!--navigation-->
                <ul class="metismenu" id="menu">
                    <li>
                        <?php
                             if (@$_SESSION['admin']) {
                                echo '
                                <a href="?url=admin_dashboard">
                            <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                        <li class="menu-label">Fitur</li>
                                <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bi bi-journal"></i></div>
                                    <div class="menu-title">Log</div>
                                </a>
                                <ul>
                                    <li><a href="?url=l_log"><i class="bi bi-circle"></i>Login Log</a></li>
                                </ul>
                            </li>
                            <li>
              <a href="https://stats.uptimerobot.com/67yZGUP3X9" target="_blank">
                <div class="parent-icon"><i class="bx bx-server"></i>
                </div>
                <div class="menu-title">Status Server</div>
              </a>
            </li>
            <li>
                                <a href="../modules/auth/procces_logout.php">
                                    <div class="parent-icon"><i class="bi bi-box-arrow-left"></i></div>
                                    <div class="menu-title">Log out</div>
                                </a>
                            </li>
                            ';
                             }
                             elseif (!empty($_SESSION['nik'])) {
                                echo '
                                <a href="?url=">
                            <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                        <li class="menu-label">Fitur</li>
                                <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bi bi-journal"></i></div>
                                    <div class="menu-title">Catatan</div>
                                </a>
                                <ul>
                            
                                    <li><a href="?url=tulis_catatan"><i class="bi bi-circle"></i>Tulis catatan perjalanan</a></li>
                                    <li><a href="?url=lihat_catatan"><i class="bi bi-circle"></i>Lihat catatan perjalanan</a></li>
                            
                                </ul>
                            </li>
                            <li>
                                <a href="../modules/auth/procces_logout.php">
                                    <div class="parent-icon"><i class="bi bi-box-arrow-left"></i></div>
                                    <div class="menu-title">Log out</div>
                                </a>
                            </li>
                            ';
                             }
                             else {
                                echo '
                                <a href="../index.php">
                            <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                            <div class="menu-title">Home</div>
                        </a>
                        <li>
                                <a href="?url=login">
                                    <div class="parent-icon"><i class="bx bx-arrow-from-left"></i></div>
                                    <div class="menu-title">Login</div>
                                </a>
                            </li>
                            <li>
                                <a href="?url=register">
                                    <div class="parent-icon"><i class="bx bx-user"></i></div>
                                    <div class="menu-title">Register</div>
                                </a>
                            </li>
                        ';
                             }
                            ?>
                            

                </ul>
                <!--end navigation-->
            </aside>
            <!--end sidebar -->

            <!--start content-->
            <main class="page-content">
                <?php
                        if(!empty(@$_GET['url'])){
                            switch (@$_GET['url']) {
                                case 'tulis_catatan';
                                   include'tulis_catatan.php';
                                    break;

                                case 'lihat_catatan';
                                   include'lihat_catatan.php';
                                    break;
                                
                                case 'admin_dashboard';
                                    include 'admin_dashboard.php';
                                    break;
                                
                                case 'login';
                                    include '../auth/login.php';
                                    break;
                                
                                case 'register';
                                    include '../auth/register.php';
                                    break;

                                case 'l_log';
                                    include 'log_login.php';
                                    break;

                                default:
                                    echo "<h3>Halaman Tidak Ditemukan</h3>";
                                    break;
                            }
                        }
                        else{
                            // echo 'Selamat Datang '.$_SESSION['nama_lengkap'].' Di Aplikasi Aku Peduli, Dimana Aplikasi Ini Digunakan Untuk Mencatat Riwayat Perjalanan.';
                            echo '<div class="alert border-0 border-success border-start border-4 bg-light-success alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                              <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                              </div>
                              <div class="ms-3">
                                <div class="text-success">Berhasil masuk!, Selamat datang '.$_SESSION['nama_lengkap'].' Di Aplikasi Aku Peduli, Dimana Aplikasi Ini Digunakan Untuk Mencatat Riwayat Perjalanan.</div>
                              </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                            echo '
                            <div class="card radius-10 mt-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Total Catatan</p>
                        <h4 class="mb-0 text-danger">'.$linecount.'</h4>
                      </div>
                      <div class="ms-auto fs-2 text-danger">
                        <i class="bi bi-pencil"></i>
                      </div>
                    </div>
                    <hr class="my-2">
                  </div>
                </div>
                <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Last Login</h5>
                        </div>
                        <p class="card-text">'.$lastlog.' dengan total login '.$totallogin.'x</p>
                      </div>
                    </div>';
                    echo '<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

                    <div id="gpr-kominfo-widget-container"></div>';
                        }
                        ?>
            </main>
            <!--end page main-->

            <!--start overlay-->
            <div class="overlay nav-toggle-icon"></div>
            <!--end overlay-->

            <!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
            <!--End Back To Top Button-->

            <!--start switcher-->
            <div class="switcher-body">
                <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
                <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6 class="mb-0">Theme Variation</h6>
                        <hr />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked />
                            <label class="form-check-label" for="LightTheme">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2" />
                            <label class="form-check-label" for="DarkTheme">Dark</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3" />
                            <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                        </div>
                        <hr />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" />
                            <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                        </div>
                        <hr />
                        <h6 class="mb-0">Header Colors</h6>
                        <hr />
                        <div class="header-colors-indigators">
                            <div class="row row-cols-auto g-3">
                                <div class="col">
                                    <div class="indigator headercolor1" id="headercolor1"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor2" id="headercolor2"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor3" id="headercolor3"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor4" id="headercolor4"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor5" id="headercolor5"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor6" id="headercolor6"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor7" id="headercolor7"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor8" id="headercolor8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end switcher-->
        </div>
        <!--end wrapper-->

        <!-- Bootstrap bundle JS -->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="../assets/js/pace.min.js"></script>
        <script src="../assets/plugins/chartjs/js/Chart.min.js"></script>
        <script src="../assets/plugins/chartjs/js/Chart.extension.js"></script>
        <script src="../assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
        <!-- datatabel -->
        <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
        <script src="../assets/js/table-datatable.js"></script>
        <!--app-->
        <script src="../assets/js/app.js"></script>
        <script src="../assets/js/index.js"></script>
    </body>

    </html>