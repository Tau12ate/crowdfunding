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
                            <li><strong>Terkumpul</strong>: Rp. 17.000.000</li>
                            <li><strong>Estimasi</strong>: 120 hari lagi</li>
                        </ul>
                        <div class="donasi-page">
                            <h6 class="detail-progress">Total kebutuhan dana <span>Rp 20.000.000</span></h6>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-lg-12">
                                <!-- <button class="btn btn-danger donasi-button">Donasi Sekarang!</button> -->
                                <a href="<?= base_url(); ?>/campaigns/donasi/<?= $slug; ?>" class="btn btn-danger donasi-button">Donasi Sekarang!</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione deserunt pariatur officia voluptate expedita! Quibusdam sequi, nihil a rem, adipisci neque expedita vitae deserunt, architecto maiores quaerat. Praesentium cumque quo recusandae, molestias optio laudantium vel nostrum ipsa, nulla vero exercitationem? Ea, vel iure aliquid eveniet ad quo libero delectus perferendis hic debitis, porro, voluptatibus fugit sint! Harum delectus sint quibusdam!
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12">
                    <div class="portfolio-info">
                        <h3>Daftar Donatur</h3>
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-sm-5 col-md-6 col-md-12 pb-1">
                                    <div class="comment mt-4 text-justify float-left"> <img src="<?= base_url(); ?>/assets/img/testimonial-1.jpg" alt="" class="rounded-circle" width="40" height="40">
                                        <h3>Jhon Doe</h3> <br>
                                        <p>Donasi sebesar Rp. 5.000</p>
                                        <span>
                                            <h4>20 October, 2018</h4>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-sm-5 col-md-6 col-md-12 pb-1">
                                    <div class="comment mt-4 text-justify float-left"> <img src="<?= base_url(); ?>/assets/img/testimonial-1.jpg" alt="" class="rounded-circle" width="40" height="40">
                                        <h3>Jhon Doe</h3> <br>
                                        <p>Donasi sebesar Rp. 5.000</p>
                                        <span>
                                            <h4>20 October, 2018</h4>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="<?= base_url(); ?>/campaigns/donasi/<?= $slug; ?>" class="back-to-top btn btn-danger donasi-button">Donasi Sekarang!</a>

                    </div>
                </div>
            </div>


        </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>
<?= $this->endSection(); ?>