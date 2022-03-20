<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>crowdfunding jeneponto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center">

            <div id="logo">
                <h1><?= $slug; ?></h1>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="<?= base_url(); ?>/assets/img/testimonial-1.jpg" alt="Card image cap" width="40">
                        <div class="card-body">
                            <p class="card-text">Silakan pilih nominal donasi</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action list-donasi" href="#">Rp. 30.000</a>
                                        <a class="list-group-item list-group-item-action list-donasi" href="#">Rp. 50.000</a>
                                        <a class="list-group-item list-group-item-action list-donasi" href="#">Rp. 70.000</a>
                                        <a class="list-group-item list-group-item-action list-donasi" href="#">Rp. 90.000</a>
                                    </div>
                                    <form action="/campaigns/donasiamount/<?= $slug; ?>" method="post">
                                        <div class="row">
                                            <label for="" class="mt-3">Jumlah Donasi</label>
                                            <div class="input-group mb-3">
                                                <input id="jumlah-donasi" name="jumlah-donasi" type="text" class="form-control" placeholder="Jumlah lainnya" required>
                                            </div>
                                        </div>
                                        <footer class="blockquote-footer">Minimal Donasi <cite>Rp. 30.000</cite></footer>
                                        <div class="row">
                                            <div class="input-group mt-2">
                                                <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan nama Anda" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mt-2">
                                                <input id="email" name="email" type="text" class="form-control" placeholder="Masukkan email Anda" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 mt-2">
                                                <input id="telp" name="telp" type="text" class="form-control" placeholder="Masukkan telp./WA" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-group mb-3 mt-3">
                                                <button type="submit" id="btn-donasi" type="button" class="btn btn-danger btn-block">Lanjut</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>