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

                            <h2 class="">Antamaballaki Registration</h2>
                            <br>
                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= route_to('register') ?>" method="post">
                                <?= csrf_field(); ?>

                                <div class="form-group">
                                    <label for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                    <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="username"><?= lang('Auth.username') ?></label>
                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                </div>

                                <div class="form-group">
                                    <label for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                </div>

                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
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