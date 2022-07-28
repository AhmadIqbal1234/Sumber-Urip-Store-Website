<?php
require 'functions.php';

$laptop = query("SELECT * FROM laptop");
// jika tombol cari di klik
if (isset($_POST["cari"])) {
    $laptop = cari_laptop($_POST["keyword"]);
}

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
    <link rel="shortcut icon" href="assets/img/logo-light-icon.png" type="image/x-icon">

    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .textarea {
            white-space: pre-wrap;
            padding: 2px 16px;
        }
    </style>
</head>

<body>

    <!-- Page Wrapper -->

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
        <form action="" class="search-form" method="POST">
            <div class="form-group">
                <input type="text" name="keyword" class="form-control" placeholder="Search....." autofocus autocomplete="off">
            </div>
            <button type="submit" name="cari" class="submit-btn"><i class="fa fa-search"></i></button>
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
                    <div class="col-lg-4 col-md-4">
                        <div class="nav-right-part nav-right-part-desktop">
                            <ul>
                                <li><a class="search header-search" href="#"><i class="fa fa-search"> Search...</i></a></li>
                            </ul>
                        </div>
                    </div>
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
                        </ul>
                    </div>

                    <div class="atf-main-header-right">
                        <div class="atf-nav">
                            <ul class="atf-nav-list atf-onepage-nav">
                                <li><a href="home_user.php">Home</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#" class="atf-smooth-move">Page<i class="fa fa-chevron-down ml-2"></i></a>
                                    <ul>
                                        <li><a href="produk_user.php">Smartphone</a></li>
                                        <li><a href="produk_laptop.php">Laptop</a></li>
                                        <li><a href="produk_acesories.php">Acesories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#l">Contact us</a></li>
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

    <div class="atf-content clearfix">
        <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-stellar-background-ratio="0.3" style="background-image: url(assets/img/banner/mac.png); background-size:cover; background-position: center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-6 col-12">
                        <div class="atf-page-heading-in text-center">
                            <h1 class="atf-page-heading-title">LAPTOP SERIES</h1>
                            <div class="atf-post-label">
                                <span><a href="home_user.php">Home</a></span>
                                <span>Laptop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .atf-page-heading -->
    </div>
    <br>
    <div class="container">
        <div class="row">
            <?php foreach ($laptop as $row) : ?>
                <div class="card" style="margin-left: 30px;  margin-right:auto; margin-bottom: 30px;">
                    <form action="" method="POST">
                        <img width="50" height="50" src="img/<?= $row['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="text-center" style="font-size: 20px;"><b><?= $row["nama"]; ?></b></h4>
                            <h5 class="text-center" style="font-size: 15px;"><b><?= $row["harga"]; ?></b>
                            </h5>
                            <table class="table table-light text-start">
                                <tr>
                                    <p>
                                        <td>
                                            <div class="textarea" style="font-size: .875rem"><?= $row["deskripsi"]; ?></div>
                                        </td>
                                    </p>
                                </tr>
                            </table>
                            <div style="text-align: right; font-size: 24px;">
                                <button type='submit' class="btn btn-primary"><a href="https://wa.wizard.id/31f9b4">Beli<b>&plus;</b></a></button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--- END COL -->



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