<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/login/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/login/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/login/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/login/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/login/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/login/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/login/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <form action="/auth/login" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group email-form">
                                    <label class="label">Email</label>
                                    <p class="text-small validation-error" style="display:none;color:red">Pastikan Anda memasukkan Emali yang valid!</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control email" name="email" placeholder="Email">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-checkbox-marked-circle email-validation"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Lanjutkan</button>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <a href="#" class="text-small forgot-password text-black">-- Atau --</a>
                                </div>
                                <div class="form-group">
                                    <a href="<?= $auth_url; ?>" class="btn btn-block g-login"><img class="mr-3" src="../assets/login/images/file-icons/icon-google.svg" alt="">Login dengan Google</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/login/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/login/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="assets/login/js/shared/off-canvas.js"></script>
    <script src="assets/login/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="assets/login/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- main -->
    <script src="assets/login/js/main.js" type="text/javascript"></script>
</body>

</html>