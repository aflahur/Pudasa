<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pudasa | Register</title>
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

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="<?= base_url(); ?>" class="btn text-white btn-icon " style="background-color: #4E83AB;"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card login_page shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Pudasa - Daftar</h4>
                            <form class="login-form mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Nama Depan <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control pl-5" placeholder="Nama Depan" name="s" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Nama Belakang <span class="text-danger">*</span></label>
                                            <i data-feather="user-check" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control pl-5" placeholder="Nama Belakang" name="s" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Nomor Telepone <span class="text-danger">*</span></label>
                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                            <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Nomor Telepone :">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Konfirmasi Password <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Konfirmasi Password" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn text-white btn-block" style="background-color: #4E83AB;">Daftar</button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Sudah memiliki akun?</small> <a href="<?= base_url(); ?>Auth/login" class="text-dark font-weight-bold">Login sekarang</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url(); ?>assets-layout/HTML/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/feather.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="<?= base_url(); ?>assets-layout/HTML/js/app.js"></script>
</body>

</html>