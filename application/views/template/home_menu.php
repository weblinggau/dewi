<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="<?= base_url(); ?>"><img src="<?= base_url('uis/img/core-img/'); ?><?= $setting->logo; ?>"  width="100" height="100">
                                    <a href="#"></a><h4><?= $setting->judul; ?></h4>
                            </div>
                            <div class="login-content">
                                <a href="<?= base_url('auth'); ?>">Register / Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?= base_url(); ?>">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <?php 
                                            foreach ($menu as $men) {
                                             ?>
                                            <li><a href="<?= base_url().$men->pdm_link; ?>"><?= $men->pm_nama; ?></a></li>
                                            <?php } ?>
                                           
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('home/about'); ?>">About Us</a></li>
                                    <li><a href="<?= base_url('home/kontak'); ?>">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+<?= $setting->telp; ?>"><i class="icon-telephone-2"></i> <span><?= $setting->telp; ?></span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>