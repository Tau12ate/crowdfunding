<?= $this->extend('page/templates'); ?>

<?= $this->section('page-content'); ?>

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-details-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-details-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-details-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informasi Penerima Bantuan</h3>
                        <ul>
                            <li><strong>Nama</strong>: Sohora</li>
                            <li><strong>Alamat</strong>: Balang Baru</li>
                            <li><strong>Donasi</strong>: 123 donasi</li>
                            <li><strong>Estimasi</strong>: 120 hari lagi</li>
                        </ul>
                        <h6 class="detail-progress"><span>Rp. 17.000.000</span> terkumpul dari Rp 20.000.000</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-danger donasi-button">Donasi Sekarang!</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>
<?= $this->endSection(); ?>