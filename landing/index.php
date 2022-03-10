<?php 
$user = file('../database/config.txt', FILE_IGNORE_NEW_LINES);
$catatan = file('../database/catatan.txt', FILE_IGNORE_NEW_LINES);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    meta tags
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    title tag
    -->
    <title>Aku Peduli | Aplikasi Catatan Perjalanan</title>

    <!--
    favicon
    -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

    <!--
    stylesheets
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/overlay-scrollbars.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="main-wrapper">

    <!--
    preloader - start
    -->
    <div class="preloader">
        <div class="preloader-wrapper">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 200 200">
            <g class="pre load6">
                <path fill="#1B1A1C" d="M124.5,57L124.5,57c0,3.9-3.1,7-7,7h-36c-3.9,0-7-3.1-7-7v0c0-3.9,3.1-7,7-7h36
                C121.4,50,124.5,53.1,124.5,57z"/>
                <path fill="#1B1A1C" d="M147.7,86.9L147.7,86.9c-2.7,2.7-7.2,2.7-9.9,0l-25.5-25.5c-2.7-2.7-2.7-7.2,0-9.9l0,0
                c2.7-2.7,7.2-2.7,9.9,0L147.7,77C150.5,79.8,150.5,84.2,147.7,86.9z"/>
                <path fill="#1B1A1C" d="M143,74.5L143,74.5c3.9,0,7,3.1,7,7v36c0,3.9-3.1,7-7,7l0,0c-3.9,0-7-3.1-7-7v-36
                C136,77.6,139.1,74.5,143,74.5z"/>
                <path fill="#1B1A1C" d="M148.4,112.4L148.4,112.4c2.7,2.7,2.7,7.2,0,9.9L123,147.7c-2.7,2.7-7.2,2.7-9.9,0h0c-2.7-2.7-2.7-7.2,0-9.9
                l25.5-25.5C141.3,109.6,145.7,109.6,148.4,112.4z"/>
                <path fill="#1B1A1C" d="M125.5,143L125.5,143c0,3.9-3.1,7-7,7h-36c-3.9,0-7-3.1-7-7l0,0c0-3.9,3.1-7,7-7h36 C122.4,136,125.5,139.1,125.5,143z"/>
                <path fill="#1B1A1C" d="M52.3,113.1L52.3,113.1c2.7-2.7,7.2-2.7,9.9,0l25.5,25.5c2.7,2.7,2.7,7.2,0,9.9h0c-2.7,2.7-7.2,2.7-9.9,0
                L52.3,123C49.5,120.2,49.5,115.8,52.3,113.1z"/>
                <path fill="#1B1A1C" d="M57,75.5L57,75.5c3.9,0,7,3.1,7,7v36c0,3.9-3.1,7-7,7h0c-3.9,0-7-3.1-7-7v-36C50,78.6,53.1,75.5,57,75.5z"/>
                <path fill="#1B1A1C" d="M86.9,52.3L86.9,52.3c2.7,2.7,2.7,7.2,0,9.9L61.5,87.6c-2.7,2.7-7.2,2.7-9.9,0l0,0c-2.7-2.7-2.7-7.2,0-9.9
                L77,52.3C79.8,49.5,84.2,49.5,86.9,52.3z"/>
            </g>
            </svg>
        </div>
    </div>
    <!--
    preloader - end
    -->

    <!--
    navigation - start
    -->
    <div class="navigation">
        <div class="navigation-wrapper">
            <div class="container">
                <div class="navigation-inner">
                    <div class="navigation-logo">
                        <a href="index.html">
                            <img src="assets/images/logo-text.png" alt="orions-logo">
                        </a>
                    </div>
                    <div class="navigation-menu">
                        <div class="mobile-header">
                            <div class="logo"> 
                                <a href="index.html">
                                    <img src="assets/images/logo-text.png" alt="image">
                                    <h4>Aku Peduli</h4>
                                </a>
                            </div>
                            <ul>
                                <li class="close-button">
                                    <i class="fas fa-times"></i>
                                </li>
                            </ul>
                        </div>
                        <ul class="parent">
                            <li>
                                <a href="index.php" class="link-underline link-underline-1">
                                    <span>Home</span>
                                </a>
                            </li>
                        
                            <?php
                            if(empty($_SESSION['nik'])) {
                                echo '<li>
                                <a href="../dashboard/index.php?url=login" class="link-underline link-underline-1">
                                    <span>Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="../dashboard/index.php?url=register" class="link-underline link-underline-1">
                                    <span>Register</span>
                                </a>
                            </li>';
                        }
                            elseif ($_SESSION['admin']) {
                                echo '<li>
                                <a href="../dashboard/index.php?url=admin_dashboard" class="link-underline link-underline-1">
                                    <span>Dashboard</span>
                                </a>
                            </li>';
                            }
                            else {
                                echo '<li>
                                <a href="../dashboard/index.php?url=" class="link-underline link-underline-1">
                                    <span>Dashboard</span>
                                </a>
                            </li>';
                            }
                            
                            ?>
                        </ul>
                        <div class="background-pattern">
                            <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                            <div class="background-pattern-gradient"></div>
                        </div>
                    </div>
                    <div class="navigation-bar">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    navigation - end
    -->


    <!--
    hero 1 - start
    -->
    <div class="hero hero-1" id="hero">
        <div class="hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 order-lg-1 col-10 offset-1 order-2">
                        <div class="hero-content">
                            <h1 class="c-dark">Aku Peduli</h1>
                            <p class="large c-grey">Aku Peduli adalah aplikasi catatan perjalanan <b>gratis</b>, praktis, dan simple sehingga mudah di gunakan. Aplikasi ini berbasis web app sehingga dapat digunakan di platform mana saja yang mempunyai browser.</p>
                            <div class="download-button-group">
                                <a href="../dashboard/index.php?url=login" class="download-button blue-button-login">
                                    <div class="download-button-inner">
                                        <div class="download-button-icon c-blue">
                                            <i class="las la-sign-in-alt"></i>
                                        </div>
                                        <div class="download-button-content">
                                            <h5 class="c-grey upper ls-1">Ayo</h5>
                                            <h3 class="c-dark ls-2">Login</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="../dashboard/index.php?url=register" class="download-button blue-button-daftar">
                                    <div class="download-button-inner">
                                        <div class="download-button-icon c-blue">
                                            <i class="las la-users"></i>
                                        </div>
                                        <div class="download-button-content">
                                            <h5 class="c-grey upper ls-1">Ayo</h5>
                                            <h3 class="c-dark ls-2">Daftar</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 order-lg-2 col-10 offset-1 order-1">
                        <div class="hero-image">
                            <img class="drop-shadow" src="assets/images/hero-phone.png" alt="image">
                            <div class="hero-absolute-image">
                                <img src="assets/images/Artwork.png" alt="artwork">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--
    hero 1 - end
    -->

    <!--
    app features wide section - start
    -->
    <div class="app-feature app-feature-1">
        <div class="app-feature-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-64">
                            <div class="sub-heading c-blue upper ls-1">
                                <i class="las la-cog"></i>
                                <h5>app features</h5>
                            </div>
                            <div class="main-heading c-dark">
                                <h1>Berbagai fitur unggulan aplikasi <b>Aku Peduli</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                <a href="feature-detail-1.html" class="icon">
                                    <i class="las la-comments"></i>
                                </a>
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Live Chat</h3>
                                </a>
                                <p class="c-grey">Tersedia fitur live chat untuk kamu yang mengalami kendala dalam menggunakan aplikasi ini.</p>
                            </div>
                            <a href="feature-detail-1.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                <a href="feature-detail-1.html" class="icon">
                                    <i class="las la-search-dollar"></i>
                                </a>
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Gratis
                                <p class="c-grey">Kamu tidak perlu mengeluarkan uang sepeserpun untuk menggunakan aplikasi ini.</p>
                            </div>
                            <a href="feature-detail-1.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                <a href="feature-detail-1.html" class="icon">
                                    <i class="las la-bullseye"></i>
                                </a>
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Mudah Digunakan</h3>
                                </a>
                                <p class="c-grey">Dengan tampilan yang simple akan memudahkan kamu dalam menggunakan aplikasi ini.</p>
                            </div>
                            <a href="feature-detail-1.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                <a href="feature-detail-1.html" class="icon">
                                    <i class="las la-server"></i>
                                </a>
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Penyimpanan tanpa limit</h3>
                                </a>
                                <p class="c-grey">Tidak ada batasan maksimal catatan, kamu dapat menyimpan catatan sebanyak banyaknya.</p>
                            </div>
                            <a href="feature-detail-1.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                <a href="feature-detail-1.html" class="icon">
                                    <i class="las la-user-lock"></i>
                                </a>
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Proteksi Data</h3>
                                </a>
                                <p class="c-grey">Data tersimpan ditempat yang aman.</p>
                            </div>
                            <a href="feature-detail-1.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper">
                                <a href="feature-detail-1.html" class="icon">
                                    <i class="las la-map-marked-alt"></i>
                                </a>
                                <a href="feature-detail-1.html">
                                    <h3 class="c-dark">Gunakan Dari Mana Saja</h3>
                                </a>
                                <p class="c-grey">Karna aplikasi ini berbasis web app maka kamu akan sangat mudah mengaksesnya.</p>
                            </div>
                            <a href="feature-detail-1.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    app features wide section - end
    -->

    <!--
    video section - start
    -->
    <div class="video-section">
        <div class="video-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 order-lg-1 col-10 offset-1 order-2">
                        <div class="video-section-content">
                            <div class="section-heading section-heading-1 center-responsive c-white">
                                <div class="sub-heading upper ls-1">
                                    <i class="las la-video"></i>
                                    <h5>our video</h5>
                                </div>
                                <div class="main-heading">
                                    <h1>Aku Peduli adalah aplikasi catatan perjalanan yang aman dan cepat.</h1>
                                </div>
                            </div>
                            <a href="#hero" class="button button-1">
                                <div class="button-inner">
                                    <div class="button-content">
                                        <h4>Get Started</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 order-lg-2 order-1">
                        <div class="video-section-video">
                            <figure>
                                <img class="drop-shadow-1" src="assets/images/2.png" alt="image">
                                
                                <div class="play">
                                    <a href="https://www.youtube.com/watch?v=QVEkQsGrYUA" class="glightbox">
                                        <i class="la la-play"></i>
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="background-pattern background-pattern-radius drop-shadow-1">
                    <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                    <div class="background-pattern-gradient"></div>
                </div>
            </div>
        </div>
    </div>
    <!--
    video section - end
    -->

   

    <!--
    faq section - start
    -->
    <div class="faq-section">
        <div class="faq-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-64">
                            <div class="sub-heading c-blue upper ls-1">
                                <i class="las la-file-alt"></i>
                                <h5>discover</h5>
                            </div>
                            <div class="main-heading c-dark">
                                <h1>Pertanyaan yang biasa ditanyakan</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9 col-md-8 col-10">
                        <div class="faq-wrapper">
                            <div class="faq" id="faq-accordion">
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-1">
                                      <button
                                      class="accordion-button collapsed" 
                                      type="button" 
                                      data-bs-toggle="collapse" 
                                      data-bs-target="#faq-collapse-1" 
                                      aria-expanded="true" 
                                      aria-controls="faq-collapse-1">
                                        <span>Apa kegunaan aplikasi ini?</span>
                                      </button>
                                    </div>
                                    <div 
                                    id="faq-collapse-1" 
                                    class="accordion-collapse collapse" 
                                    aria-labelledby="faq-1" 
                                    data-bs-parent="#faq-accordion">
                                      <div class="accordion-body">
                                        <p>Aplikasi ini digunakan untuk mencatat perjalanan anda dan catatan perjalanan anda akan tersimpan di cloud.</p>
                                      </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-2">
                                      <button
                                      class="accordion-button" 
                                      type="button" 
                                      data-bs-toggle="collapse" 
                                      data-bs-target="#faq-collapse-2" 
                                      aria-expanded="true"
                                      aria-controls="faq-collapse-2">
                                        <span>Apa aplikasi ini gratis?</span>
                                      </button>
                                    </div>
                                    <div 
                                    id="faq-collapse-2" 
                                    class="accordion-collapse collapse show" 
                                    aria-labelledby="faq-2" 
                                    data-bs-parent="#faq-accordion">
                                      <div class="accordion-body">
                                        <p>Iya, aplikasi ini dapat anda gunakan secara gratis.</p>
                                      </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-3">
                                      <button
                                      class="accordion-button collapsed" 
                                      type="button" 
                                      data-bs-toggle="collapse" 
                                      data-bs-target="#faq-collapse-3" 
                                      aria-expanded="true"
                                      aria-controls="faq-collapse-3">
                                       <span>Apa saya harus melakukan registrasi?</span>
                                      </button>
                                    </div>
                                    <div 
                                    id="faq-collapse-3" 
                                    class="accordion-collapse collapse" 
                                    aria-labelledby="faq-3" 
                                    data-bs-parent="#faq-accordion">
                                      <div class="accordion-body">
                                        <p>Iya, registrasi diperlukan tapi tenang registrasi tidak akan memakan waktu yang lama, anda cukup memasukan NIK dan nama lengkap saja.</p>
                                      </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-4">
                                      <button
                                      class="accordion-button collapsed" 
                                      type="button" 
                                      data-bs-toggle="collapse" 
                                      data-bs-target="#faq-collapse-4" 
                                      aria-expanded="true"
                                      aria-controls="faq-collapse-4">
                                        <span>Apakah ada limit maksimal catatan yang tersimpan?</span>
                                      </button>
                                    </div>
                                    <div 
                                    id="faq-collapse-4" 
                                    class="accordion-collapse collapse" 
                                    aria-labelledby="faq-4" 
                                    data-bs-parent="#faq-accordion">
                                      <div class="accordion-body">
                                        <p>Tidak ada limit untuk jumlah maksimal catatan yang tersimpan.</p>
                                      </div>
                                    </div>
                                </div>
                                <!--
                                accordion item - end
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    faq section - end
    -->

    <!--
    screen section - start
    -->
    <div class="screen-section">
        <div class="screen-section-wrapper">
            <!--
            screen section header - start
            -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                        <div class="screen-section-header">
                            <div class="section-heading center-responsive">
                                <div class="sub-heading c-blue upper ls-1">
                                    <i class="las la-tablet"></i>
                                    <h5>aku peduli app</h5>
                                </div>
                                <div class="main-heading c-dark mb-4">
                                    <h1>Statistik aplikasi Aku Peduli.</h1>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-10 offset-1">
                        <div class="screen-slider-navigation slider-navigation">
                            <div class="screen-slider-navigation-prev">
                                <i class="las la-long-arrow-alt-left"></i>
                            </div>
                            <div class="screen-slider-navigation-next">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            screen section header - end
            -->
                        <!--
            screen section slider - start
            -->
            <div class="screen-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img class="screen-slide-image" src="assets/images/screens/screen1.png" alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img class="screen-slide-image" src="assets/images/screens/screen2.png" alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img class="screen-slide-image" src="assets/images/screens/screen3.png" alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                        <!--
                        screen slide - start
                        -->
                        <div class="swiper-slide">
                            <div class="screen-slide">
                                <figure>
                                    <img class="screen-slide-image" src="assets/images/screens/screen4.png" alt="app-screen">
                                </figure>
                            </div>
                        </div>
                        <!--
                        screen slide - end
                        -->
                    </div>
                </div>
            </div>
            <!--
            screen section slider - end
            -->
            <!--
            screen section bottom - start
            -->
            <div class="screen-section-bottom">
                <div class="screen-section-bottom-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                                <h2 class="c-white">Telah digunakan oleh <?php echo count($user) ?> user</h2>
                                <h4 class="c-white">
                                    <?php
                                     echo 'Dengan total ',count($catatan) , ' catatan telah tersimpan';
                                    ?> 
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            screen section bottom - end
            -->            
        </div>
        <div class="background-pattern background-pattern-2">
            <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
            <div class="background-pattern-gradient"></div>
            <div class="background-pattern-bottom">
                <div class="image" style="background-image: url(assets/images/patterns/pattern-2.jpg);"></div>
            </div>
        </div>
    </div>
    <!--
    screen section - end
    -->

    
    <!--
    footer - start
    -->
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="footer-row">
                            <div class="footer-detail">
                                <a href="#">
                                    <img src="assets/images/logo-text.png" alt="footer-logo">
                                </a>
                                <p class="c-grey-1">Aku peduli adalah aplikasi catatan perjalanan berbasis web app, yang mudah untuk digunakan dan gratis.</p>
                                <div class="links">
                                    <a class="link-underline" href="mailto:hello@akupeduli.com">
                                        <span>hello@akupeduli.com</span>
                                    </a>
                                    <a class="link-underline" href="tel:+62893764836">
                                        <span>+62893764836</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="footer-copyright c-grey-1">
                            <h6>&copy; AKU PEDULI</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-pattern" style="background-image: url(assets/images/patterns/pattern-1.jpg)"></div>
        </div>
    </footer>
    <!--
    footer - end
    -->

    </div>

    <!--
    scripts
    -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/overlay-scrollbars.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>