<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= "Pudasa | " . $judul ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="http://www.shreethemes.in" />
    <meta name="Version" content="v2.2" />
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets-layout/HTML/images/icon-pudasa/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets-layout/HTML/images/icon-pudasa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets-layout/HTML/images/icon-pudasa/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>assets-layout/HTML/images/icon-pudasa/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url(); ?>assets-layout/HTML/images/icon-pudasa/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets-layout/HTML/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="<?= base_url(); ?>assets-layout/HTML/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
    <!-- Magnific -->
    <link href="<?= base_url(); ?>assets-layout/HTML/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets-layout/HTML/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets-layout/HTML/css/owl.theme.default.min.css" />
    <!-- FLEXSLIDER -->
    <link href="<?= base_url(); ?>assets-layout/HTML/css/flexslider.css" rel="stylesheet" type="text/css" />
    <!-- Date picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets-layout/HTML/css/flatpickr.min.css">
    <!-- Main Css -->
    <link href="<?= base_url(); ?>assets-layout/HTML/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?= base_url(); ?>assets-layout/HTML/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky bg-white">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="<?= base_url(); ?>">
                    <img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/logo1.png" alt="">
                </a>
            </div>
            <div class="buy-button">
                <a href="<?= base_url(); ?>Auth/login" target="_blank" class="btn text-white" style="background-color: #4E83AB;">Login / Daftar</a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li><a href="<?= base_url(); ?>Belajar">Belajar</a></li>
                    <li><a href="<?= base_url(); ?>Jalan_jalan">Jalan-jalan</a></li>
                    <li><a href="<?= base_url(); ?>About">Tentang</a></li>
                    <li><a href="<?= base_url(); ?>assets-layout/HTML/index.html">Dasborku</a></li>


                </ul>
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- start content -->
    <?= $contents; ?>
    <!-- end content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="<?= base_url(); ?>" class="logo-footer">
                        <h4 class="title text-white">PUDASA</h4>
                    </a>
                    <p class="mt-4">PUDASA adalah sebuah platform kebudayaan yang berisi budaya-budaya di Indonesia.</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="<?= base_url(); ?>assets-layout/HTML/javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="<?= base_url(); ?>assets-layout/HTML/javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="<?= base_url(); ?>assets-layout/HTML/javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!--end icon-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Links</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="<?= base_url(); ?>" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Beranda</a></li>
                        <li><a href="<?= base_url(); ?>Jalan_jalan" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Jalan-jalan</a></li>
                        <li><a href="<?= base_url(); ?>Belajar" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Belajar</a></li>
                        <li><a href="<?= base_url(); ?>About" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Tentang kami</a></li>
                    </ul>
                </div>
                <!--end col-->


            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="text-sm-left">
                        <p class="mb-0 text-center">© 2020-21 PUDASA (Kipuh Budaya Indonesia)</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="<?= base_url(); ?>assets-layout/HTML/#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/scrollspy.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/magnific.init.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/isotope.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/portfolio.init.js"></script>
    <!-- SLIDER -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/owl.carousel.min.js "></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/owl.init.js "></script>
    <!--FLEX SLIDER-->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/jquery.flexslider-min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/flexslider.init.js"></script>
    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/flatpickr.min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/flatpickr.init.js"></script>
    <!-- Contact -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/contact.js"></script>
    <!-- Icons -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/feather.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/app.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/counter.init.js"></script>
</body>

</html>