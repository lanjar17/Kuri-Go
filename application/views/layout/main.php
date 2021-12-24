    <!-- Main Wrapper -->
    <main class="wrapper">

        <!-- Header -->
        <header class="header-main" style="position: fixed;left: 0;top: 0;z-index: 1;width: 100%;padding: 0;">

            <!-- /.Header Topbar -->

            <!-- Header Logo & Navigation -->
            <nav class="menu-bar sticky-top font2-title1">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-logo" href="<?= base_url() ?>"> <img src="<?= base_url('') ?>assets/img/logo/logo-black.png" alt="logo" /> </a>
                        </div>
                        <div class="col-md-10 col-sm-10 fs-12">
                            <div id="navbar" class="collapse navbar-collapse no-pad">
                                <ul class="navbar-nav theme-menu">
                                    <li class="active">
                                        <a href="<?= base_url() ?>" class="dropdown-toggle">Home</a>
                                    </li>
                                    <li> <a href=<?= base_url() ?>#aboutus>Tentang</a> </li>
                                    <li> <a href="<?= base_url('tracking') ?>"> Tracking </a> </li>
                                    <li>
                                        <a href='<?= base_url('admin/login') ?>' style="background:#F5AB35;border-color:#F5AB35;" class="btn btn-primary btn-sm p-3">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- /.Header Logo & Navigation -->

        </header>
        <!-- /.Header -->

        <!-- Content Wrapper -->
        <article>
        
            
            <?php $this->load->view($content) ?>

            <!-- Contact us -->
            <section class="contact-wrap pad-120" id="contact">
                <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="title-wrap">
                                <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">Kontak Kami</h2>
                            </div>
                            <ul class="contact-detail title-2">
                                <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>Whatsapp:</span>
                                    <p class="gray-clr"> +62 857 4776 8629</p>
                                </li>
                                <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>No Telepon:</span>
                                    <p class="gray-clr"> +62 857 4776 8629 </p>
                                </li>
                                <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email :</span>
                                    <p class="gray-clr"> support@kurirgo.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.Contact us -->
        </article>
        <!-- /.Content Wrapper -->

        <!-- Footer -->
        <footer>
            <div class="footer-main pad-120 white-clr">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 footer-widget">
                            <a href="#"> <img class="logo" alt="#" src="<?= base_url() ?>assets/img/logo/logo-white.png" /> </a>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-widget">
                            <h2 class="title-1 fw-900">Info</h2>
                            <ul>
                                <li> <a href="<?= base_url('tracking') ?>">Tracking</a> </li>
                                <li> <a href="#contact">Contact</a> </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-widget">
                            <h2 class="title-1 fw-900">Follow US</h2>
                            <ul class="social-icons list-inline">
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="https://instagram.com/farrasaji_" class="fa fa-instagram" target="_blank"></a> </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="https://wa.me/6285747768629" class="fa fa-whatsapp" target="_blank"></a> </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="https://twitter.com/aqiilsadik" class="fa fa-twitter" target="_blank"></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p> © Copyright 2021, Kurir-Go  </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->


    </main> 