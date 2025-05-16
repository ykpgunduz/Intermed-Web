<!-- Header Area -->
<header class="header" >
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Social Media Links -->
                    <ul class="top-link" style="margin-left: 10px;">
                        <li><a href="https://www.instagram.com/intermedms?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fa-brands fa-lg fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/intermed-medical-systems/" target="_blank"><i class="fa-brands fa-lg fa-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/intermedms/" target="_blank"><i class="fa-brands fa-lg fa-facebook-f"></i></a></li>
                        <li><a href="https://x.com/intermedms" target="_blank"><i class="fa-brands fa-lg fa-x-twitter"></i></a></li>
                    </ul>
                    <!-- End Social Media Links -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i><a href="tel:+994502352686">+994 50 235 26 86</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@intermedms.com">info@intermedms.com</a></li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="/"><img src="{{ asset('img/logo.png') }}" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                                        <a href="{{ route('home') }}">Anasayfa</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                                        <a href="{{ route('about') }}">Hakkımızda</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">
                                        <a href="{{ route('services') }}">Servisler</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
                                        <a href="{{ route('products') }}">Ürünler <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">MR Cihazları</a></li>
                                            <li><a href="blog-single.html">Röntgen Cihazları</a></li>
                                            <li><a href="blog-single.html">Ultrason Cihazları</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'blogs' ? 'active' : '' }}">
                                        <a href="{{ route('blogs') }}">Blogs <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">MR Makinesi Nasıl Çalışır?</a></li>
                                            <li><a href="blog-single.html">Röntgen Nasıl Çalışır?</a></li>
                                            <li><a href="blog-single.html">Ultrason Nasıl Çalışır?</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}">İletişim</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="appointment.html" class="btn">Ürünlerimizi İnceleyin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->