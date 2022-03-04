<?= $this->extend('page/templates'); ?>

<?= $this->section('page-content'); ?>
<!-- ======= hero Section ======= -->
<section id="hero">

    <div class="hero-content" data-aos="fade-up">
        <h2>saling <span>membantu</span><br>Mandiri</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">pengenalan</a>
            <a href="#portfolio" class="btn-projects scrollto">fokus program</a>
        </div>
    </div>

    <div class="hero-slider swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?= base_url(); ?>/assets/img/hero-carousel/6.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('<?= base_url(); ?>/assets/img/hero-carousel/7.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('<?= base_url(); ?>/assets/img/hero-carousel/8.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('<?= base_url(); ?>/assets/img/hero-carousel/9.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('<?= base_url(); ?>/assets/img/hero-carousel/10.jpg');"></div>
        </div>
    </div>

</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="<?= base_url(); ?>/assets/img/about-img.jpg" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>pengenalan urungan dana assipakkatau</h2>
                    <h3>website ini muncul karena keprihatinan yang muncul dengan banyaknya rumah tidak layak huni di kab. Jeneponto
                        yang tidak bisa dibantu oleh pemerintah karena tidak terpenuhinya syarat-syarat administrasi</h3>

                    <ul>
                        <li><i class="bi bi-check-circle"></i> membantu mereka yang sangat membutuhkan</li>
                        <li><i class="bi bi-check-circle"></i> survey kelayakan telah dilakukan oleh tim dibantu dengan dinas terkait</li>
                        <li><i class="bi bi-check-circle"></i> sumber dana bisa berasal dari siapa saja baik perseorangan maupun organisasi</li>
                    </ul>

                </div>
            </div>

        </div>

    </section><!-- End About Section -->
</main>
<?= $this->endSection(); ?>