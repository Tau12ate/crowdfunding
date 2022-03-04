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

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>PENGGALANGAN DANA</h2>
                <p>Penggalangan dana dilakukan dengan target dana sesuai kebutuhan calon penerima</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">PROFESIONAL</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">TEPAT SASARAN</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">cepat </a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">TELITI</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
</main>
<?= $this->endSection(); ?>