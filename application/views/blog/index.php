<div class="breadcumb-area bg-img" style="background-image: url(<?= base_url('uis/'); ?>img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Berita</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <?php 

                            foreach ($allartik as $bl) {
                             ?>
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="<?= base_url('uis/img/bg-img/').$bl->pa_file; ?>" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title"><?= $bl->pa_judul; ?></a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>By <a href="#"><?= $bl->pa_penulis ?></a> | <a href="#"><?= $bl->pa_tgl; ?></a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p><?= substr($bl->pa_isi, 0, 100); ?>...</p>
                                    <!-- Read More btn -->
                                    <a href="<?= base_url('artikel/detail/').$bl->pa_link; ?>" class="btn academy-btn btn-sm mt-15">Read More</a>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categories</h5>
                            <ul>
                                <?php 
                                foreach ($kategori as $kat) {
                                 ?>
                                <li><a href="#"><?= $kat->kategori; ?></a></li>
                            <?php } ?>
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Pengumuman</h5>
                            <!-- Single Latest Blog Post -->
                            <?php foreach ($pem as $p) {?>
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="<?= base_url('uis/img/blog-img/').$p->file; ?>" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6><?= $p->judul; ?></h6>
                                    </a>
                                    <a href="#" class="post-date"><?= $p->tgl; ?></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="<?= base_url('uis/'); ?>img/blog-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Area Start ##### -->