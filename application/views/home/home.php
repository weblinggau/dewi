    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <?php 
            foreach ($slide as $sl) {
             ?>
            <div class="single-hero-slide bg-img" style="background-image: url(<?= base_url('assets/img/slide/').$sl->ps_file; ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <center><h2 data-animation="fadeInUp" data-delay="400ms"><?= $sl->ps_title; ?></h2>
                                <a href="<?= base_url($sl->ps_link); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Visi - Misi </h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Daftar Dosen</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Contact</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>Profil campus </h4>
                            <p>berisikan tentang profil baik dosen maupun mahasiswa.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <h4>Layanan</h4>
                            <p>Melayani berbagai macam layanan</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            <h4>Photography</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-icon">
                            <i class="icon-like"></i>
                        </div>
                        <div class="course-content">
                            <h4>Social Media</h4>
                            <p>univbinainsan.ac.id dan disosial media lainnya</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                            <h4>Prestasi Mahasiswa</h4>
                            <p>prestasi yang dimiliki oleh kampus universitas bina insan baik tingkat nasional maupun internasioanl</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="course-content">
                            <h4>Data Mahasiswa</h4>
                            <p>Data mahasiswa dari mulai nya didirikan kampus universitas bina insan sampai sekarang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?= base_url('uis/'); ?>img/bg-img/stmik.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <h3>Galeri Photo</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                    <?php 
                    foreach ($galeri as $gal) {
                     ?>
                    <div class="col-12 col-sm-3">
                        <div class="footer-widget mb-100">
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="<?= base_url('uis/').$gal->pf_file; ?>" class="gallery-img" title="<?= $gal->pf_judul;?>"><img src="<?= base_url('uis/').$gal->pf_file; ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Berita Dan Artikel</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php
               foreach ($artikel as $art) {

                ?>
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5><?= $art->pa_judul; ?></h5>
                            <span>By <?= $art->pa_penulis; ?>   |  <?= $art->pa_tgl; ?></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p><?= substr($art->pa_isi, 0, 100); ?>...</p>
                            <a href="<?= base_url('artikel/detail/').$art->pa_link; ?>" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(<?= base_url('uis/img/bg-img/').$art->pa_file; ?>);"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row">
                 <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Pengumuman</h3>
                    </div>
                </div>
                <?php 

                foreach ($pem as $pr) {
                 ?>
                <div class="col-3">
                    <div class="single-latest-blog-post d-flex mb-30">
                        <div class="latest-blog-post-thumb">
                            <img src="<?= base_url('uis/img/blog-img/').$pr->file; ?>" alt="">
                        </div>
                        <div class="latest-blog-post-content">
                            <a href="#" class="post-title">
                                <h6><?= $pr->judul; ?></h6>
                            </a>
                            <a href="#" class="post-date"><?= $pr->tgl; ?></a>
                            <p><?= substr($pr->isi, 0, 30); ?>...</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
                
            </div>
        </div>
    </div>

    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="<?= base_url('uis/'); ?>img/clients-img/LOGO.jpg" alt=""></a>
                        <a href="#"><img src="<?= base_url('uis/'); ?>img/clients-img/n.jpg" alt=""></a>
                        <a href="#"><img src="<?= base_url('uis/'); ?>img/clients-img/IT.png" alt=""></a>
                        <a href="#"><img src="<?= base_url('uis/'); ?>img/clients-img/SI.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->

    