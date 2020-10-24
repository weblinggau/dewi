
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>About Us</h2>
        </div>
    </div>
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>Fakultas Ekonomi dan Bisnis Universitas Bina Insan Lubuklinggau merupakan salah satu Fakultas Universitas Bina Insan yang berada di Kota Lubuklinggau, Provinsi Sumatera Selatan, yang berdiri pada tanggal 6 agustus tahun 1999. Fakultas Universitas Bina Insan sampai sekarang adalah kampus yang telah diakui oleh Masyarakat dan Pemerintah Kota Lubuklinggau dan sekitarnya sebagai salah satu perguruan tinggi swasta di Indonesia, khususnya di L2Dikti II.</p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>Fakultas Ekonomi dan Bisnis Universitas Bina Insan Lubuklinggau memiliki Dua (II) Program Studi Strata Satu yaitu Program Studi Manajemen dan Program Studi Akuntansi. Untuk Program Studi yang ada di STIE MURA Lubuklinggau statusnya sudah Terakreditasi semua, dengan SK No. ................................ untuk Program Studi Manajemen, SK. No. ................................ untuk Program Studi Akuntansi. Kini Fakultas Ekonomi dan Bisnis UNIV BI Lubuklinggau mengajukan  Re-Akreditasi institusi setelah melakukan berbagai evaluasi, perbaikan, dan kemajuan, bukan saja untuk mendapatkan pengakuan dari BAN-PT, namun juga mendapat pengakuan dari sivitas akademika, stakeholder, dan masyarakat di Indonesia..</p>
                </div>
            </div>
        </div>
    </section>
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
                            <a href="<?= base_url('artikel/').$art->pa_link; ?>" class="btn academy-btn btn-sm">See More</a>
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