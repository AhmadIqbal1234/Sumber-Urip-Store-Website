<?php
require 'functions.php';
$brand = query("SELECT * FROM logo");
$promo = query("SELECT * FROM promo");
$laptop = query("SELECT * FROM pu_laptop");
$psmartphone = query("SELECT * FROM pu_smartphone");
?>
<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- SITE TITLE -->
    <link rel="shortcut icon" href="img/logo-light-icon.png">
    <title>Sumber Urip Store</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo-light-icon.png">

    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.css">
    <!--magnific-popup Css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--animate Css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--slick Css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't gallery if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- START PRELOADER -->
        <div class="atf-preloader">
            <div class="atf-status">
                <div class="atf-status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- START back-to-top -->
        <button class="atf-scroll-top atf-back-to-top" data-targets="html">
            <i class="fa fa-angle-up atf-scrollup-icon"></i>
        </button>
        <!-- END back-to-top-->
        <div class="body-overlay" id="body-overlay"></div>

        <!-- search popup area start -->
        <div class="search-popup" id="search-popup">
            <form action="http://themesfamily/tm/majid/index.html" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search.....">
                </div>
                <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- //. search Popup -->

        <!-- Start Header Section -->
        <header class="atf-site-header atf-style1 atf-sticky-header">
            <div class="atf-top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="atf-top-header-in wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                                <ul class="atf-top-header-list">
                                    <li><i class="fas fa-envelope"></i>Email: <a href="#">sumberuripstore@gmail.com</a></li>
                                    <li><i class="fas fa-phone-volume"></i>Contact: <a href="#">081246165334</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--- END COL -->
                        <!-- <div class="col-lg-4 col-md-4">
                            <div class="nav-right-part nav-right-part-desktop">
                                <ul>
                                    <li class=""><a class="login-btn" href="#">Login</a></li>
                                    <li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!--- END COL -->
                    </div>
                    <!--- END ROW -->
                </div>
                <!--- END CONTAINER -->
            </div>
            <!--- END TOP HEADER -->

            <div class="atf-main-header">
                <div class="container">
                    <div class="atf-main-header-in">
                        <div class="atf-main-header-left">
                            <a class="atf-site-branding atf-white-logo" href="index.html">
                                <h1 style="color: white;"><img src="assets/img/logo-light-icon.png" alt="Logo"> sumber urip store</h1>
                            </a>
                        </div>

                        <div class="nav-right-part nav-right-part-mobile">
                            <ul>
                                <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
                                <li class=""><a class="login-btn" href="#">Login</a></li>
                                <li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li>
                            </ul>
                        </div>

                        <div class="atf-main-header-right">
                            <div class="atf-nav">
                                <ul class="atf-nav-list atf-onepage-nav">
                                    <li><a href="index.html" class="atf-smooth-move">Home</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="#" class="atf-smooth-move">Page<i class="fa fa-chevron-down ml-2"></i></a>
                                        <ul>
                                            <li><a href="produk_user.php">Smartphone</a></li>
                                            <li><a href="produk_laptop.php">Laptop</a></li>
                                            <li><a href="produk_acesories.php">Acesories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://wa.wizard.id/31f9b4">Contact us</a></li>
                                </ul>
                                <!--- END NAV -->
                            </div>
                        </div>
                        <!--- END MAIN HEADER RIGHT -->
                    </div>
                </div>
                <!--- END CONTAINER -->
            </div>
            <!--- END MAIN HEADER -->
        </header>
        <!-- End Header Section -->

        <!-- START HOME -->
        <section id="home">
            <div class="atf-slider atf-style1 atf-hero-slider1 atf-hero-slider2">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
                    <div class="slick-wrapper">
                        <?php foreach ($psmartphone as $row) : ?>
                            <div class="slick-slide-in">
                                <div class="atf-single-home atf-hero-area" style="background-image: url(img/<?= $row["gambar"]; ?>);  background-size:cover; background-position: center center;">
                                    <div class="atf-home-overlay">
                                        <div class="container">
                                            <div class="row atf-single-slide-sm2 atf-align-items-details align-items-center atf-single-text justify-content-center">
                                                <!--LEFT COL-->
                                                <div class="text-left atf-single-details ">
                                                    <h5 class="mb-0 d-block d-lg-block text-white"><?= $row["nama"]; ?></h5>
                                                    <h2 class="mb-0 d-block d-lg-block"><?= $row["des1"]; ?></h2>
                                                    <p class="pr-lg-5"><?= $row["des2"]; ?></p>
                                                    <!-- Main-btn -->
                                                    <div class="atf-main-btn mt-3">
                                                        <a href="produk_user.php" class="page-scroll atf-themes-btn">Learn more <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>
                                        <!--- END CONTAINER -->
                                    </div>
                                    <!--- END Overlay -->
                                </div>
                                <!--- END slide -->
                            </div><!-- .slick-slide-in --><?php endforeach; ?>
                    </div>
                </div><!-- .slick-container -->
                <div class="pagination atf-style1 container"></div> <!-- If dont need Pagination then add class .atf-hidden -->
                <div class="swipe-arrow atf-style1 atf-hidden">
                    <!-- If dont need navigation then add class .atf-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </div><!-- .atf-slider -->
        </section>
        <!-- END  HOME DESIGN -->

        <!-- START HOME -->
        <section id="home">
            <div class="atf-slider atf-style1 atf-hero-slider1 atf-hero-slider2">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
                    <div class="slick-wrapper">
                        <?php foreach ($laptop as $row) : ?>
                            <div class="slick-slide-in">
                                <div class="atf-single-home atf-hero-area" style="background-image: url(img/<?= $row["gambar"]; ?>);  background-size:cover; background-position: center center;">
                                    <div class="atf-home-overlay">
                                        <div class="container">
                                            <div class="row atf-single-slide-sm2 atf-align-items-details align-items-center atf-single-text justify-content-center">
                                                <!--LEFT COL-->
                                                <div class="col-xl-6 col-lg-6 col-12 text-center atf-single-details ">
                                                    <h2 class="mb-0 d-block d-lg-block"><?= $row["nama"]; ?></h2>
                                                    <p class="pr-lg-5"><?= $row["des1"]; ?></p>
                                                    <!-- Main-btn -->
                                                    <div class="atf-main-btn mt-3">
                                                        <a href="blog.html" class="page-scroll atf-themes-btn">Learn more <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>
                                        <!--- END CONTAINER -->
                                    </div>
                                    <!--- END Overlay -->
                                </div>
                                <!--- END slide -->
                            </div><!-- .slick-slide-in --><?php endforeach; ?>
                    </div>
                </div><!-- .slick-container -->

                <div class="pagination atf-style1 container"></div> <!-- If dont need Pagination then add class .atf-hidden -->
                <div class="swipe-arrow atf-style1 atf-hidden">
                    <!-- If dont need navigation then add class .atf-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </div><!-- .atf-slider -->
        </section>
        <!-- END  HOME DESIGN -->

        <!-- Special Offer Area -->
        <div class="atf-special-offer atf-section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-12 text-left">
                        <div class="atf-special-content atf-section-title  mx-auto my-auto">
                            <h2>Best Promo Offer For Your</h2>
                            <?php foreach ($promo as $row) : ?>
                                <h3 class="mb-2"><?= $row["des1"]; ?> </h3>
                                <h4><?= $row["des2"]; ?></h4>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!--- END COL -->

                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="atf-special-img text-center  mx-auto my-auto">
                            <div class="atf-single-special-img">
                                <img src="assets/img/special.png" width="370" alt="Offer Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!--- END COL -->
                </div>
                <!--- END ROW -->
            </div>
            <!--- END CONTAINER -->
        </div> <!-- End Special Offer Area -->



        <!-- START SERVICE SECTION  -->
        <section id="service" class="atf-service-area atf-section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="atf-single-service-wrap text-center">
                            <div class="atf-single-service-wrap">
                                <div class="atf-services-icon text-center mb-4">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="atf-service-content">
                                    <h3>Free Shipping</h3>
                                    <p>Kami berkomitmen untuk bisa menjangkau kebutuhan masyarakat akan teknologi di seluruh Indonesia dengan menghadirkan layanan gratis ongkir keseluruh Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="atf-single-service-wrap text-center">
                            <div class="atf-single-service-wrap">
                                <div class="atf-services-icon text-center mb-4">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="atf-service-content">
                                    <h3>24 Jam Customer Service</h3>
                                    <p>Kami menyediakan layanan CS 24 Jam yang siap melayani anda jika terjadi suatu masalah. Bisa hubungi kami melalui email ataupun nomor yang sudah tertera</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="atf-single-service-wrap text-center">
                            <div class="atf-single-service-wrap">
                                <div class="atf-services-icon text-center mb-4">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="atf-service-content">
                                    <h3>Kemudahan Pembayaran</h3>
                                    <p>Didukung dengan sistem COD maupun Online Payment yang sudah terintegrasi dengan seluruh layanan jaringan digital Bank</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service-Area End-->



        <!-- START COMPANY BRAND LOGO  -->
        <div id="atf-brand-area" class="atf-brand-area atf-section-padding">
            <div class="atf-brand-overlay">
                <div class="container">
                    <div class="atf-slider atf-style2">
                        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="3" data-lg-slides="5" data-add-slides="3">
                            <div class="slick-wrapper">
                                <?php foreach ($brand as $row) : ?>
                                    <form action="" method="POST">
                                        <div class="slick-slide-in">
                                            <div class="atf-brand-active">
                                                <img width="200px" src="img/<?= $row["gambar"]; ?>" alt="images">
                                            </div>
                                        </div><!-- .slick-slide-in -->
                                    </form><?php endforeach; ?>
                            </div><!-- .slick-slide-Wrapper -->
                        </div><!-- .slick-container -->

                        <div class="pagination atf-style1 atf-flex atf-hidden"></div> <!-- If dont need Pagination then add class .atf-hidden -->
                        <div class="swipe-arrow atf-style1">
                            <!-- If dont need navigation then add class .atf-hidden -->
                            <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                            <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div><!-- .atf-slider -->
                </div><!-- .container -->
            </div><!-- END OVERLAY -->
        </div>
        <!-- END COMPANY BRAND LOGO -->

        <!-- FOOTER SECTION START-->
        <footer class="atf-footer-area">
            <div class="container">
                <div class="atf-footer-top mt-5">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-10 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                            <h5>Sumber Urip Store</h5>
                            <ul class="atf-list-menu">
                                <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Tentang Sumber Urip Store</a></li>
                                <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Kebijakan Toko</a></li>
                                <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Kontak Media</a></li>
                            </ul>
                        </div>
                        <!--- END COL -->

                        <div class="col-lg-2 col-md-6 col-10 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                            <h5>Pembayaran</h5>
                            <div class="atf-payment-area">
                                <ul>
                                    <li><img src="assets/img/payment/bri.png" alt="img"></li>
                                    <li><img src="assets/img/payment/bni.png" alt="img"></li>
                                    <li><img src="assets/img/payment/mandiri.png" alt="img"></li>
                                    <li><img src="assets/img/payment/bca.png" alt="img"></li>
                                    <li><img src="assets/img/payment/bsi.png" alt="img"></li>
                                    <li><img src="assets/img/payment/permata.png" alt="img"></li>
                                    <li><img src="assets/img/payment/dana.png" alt="img"></li>
                                    <li><img src="assets/img/payment/ovo.png" alt="img"></li>
                                    <li><img src="assets/img/payment/1.png" alt="img"></li>
                                    <li><img src="assets/img/payment/2.png" alt="img"></li>
                                </ul>
                            </div>
                        </div>
                        <!--- END COL -->

                        <div class="col-lg-4 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                            <div class="atf-footer-box">
                                <h5>Alamat</h5>
                                <ul class="atf-footer-con">
                                    <li>Jl. Raya Surakarta No.24, Surakarta, Jawa Tengah</li>
                                    <li>081246165334 <br> (+222) 245 88 <br> (+258) 878 369</li>
                                    <li>sumberuripstore@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <!--- END COL -->

                        <div class="col-lg-4 col-md-6 col-12 atf-footer-link text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                            <h4 class="text-white mt-2">Ikuti Kami</h4>
                            <div class="atf-footer-social-icon mt-3 text-left">
                                <a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-instagram-square"></i></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a><br><br>
                                <h6 style="color: white;">&copy;Sumber Urip Store 2021</h6>
                            </div>
                        </div>
                        <!--- END COL -->

                    </div>
                    <!--- END ROW -->

                </div>
                <!--- END SINGLE FOOTER -->
            </div>
            <!--- END CONTAINER -->
            <!-- FOOTER SECTION END-->
        </footer>
        <!--- END FOOTER -->
    </div>
    <!-- PAGE WRAPPER END-->


    <!-- Latest jQuery -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <!-- modernizer JS -->
    <script src="assets/js/modernizr.custom.js"></script>
    <!-- magnific-popup js -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- stellar js -->
    <script src="assets/js/jquery.stellar.min.js"></script>
    <!-- slick js -->
    <script src="assets/js/slick.js"></script>
    <!-- countdown js -->
    <script src="assets/js/jquery.countdown.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- ajaxchimp js -->
    <script src="assets/js/ajaxchimp.min.js"></script>
    <!-- form-contact js -->
    <script src="assets/js/form-contact.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>