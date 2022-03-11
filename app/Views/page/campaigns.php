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
                        <a href="/campaigns/slug-donasi" title="More Details">
                            <h4>Judul Donasi</h4>
                        </a>
                        <h6 class="detail-progress">Total kebutuhan dana <span>Rp 20.000.000</span></h6>
                        <div class="progress">
                            <div class="progress-bar bg-progress-bar" style="width:25%"></div>
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