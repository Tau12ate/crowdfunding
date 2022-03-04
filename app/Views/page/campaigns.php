<?= $this->extend('page/templates'); ?>

<?= $this->section('page-content'); ?>

<main id="main">


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Mari Berdonasi</h2>
                <p>Uluran tangan anda berarti hunian layak bagi mereka</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= base_url(); ?>/assets/img/portfolio/home.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="/campaigns/detail" title="More Details">
                            <h4>Judul Donasi</h4>
                        </a>
                        <h6 class="detail-progress"><span>Rp. 17.000.000</span> terkumpul dari Rp 20.000.000</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>GALERI</h2>
                <p>galeri calon penerima urungan dana</p>
            </div>

            <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url(); ?>/assets/img/clients/people.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Clients Section -->
</main>
<?= $this->endSection(); ?>