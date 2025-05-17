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
                                        <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                                        <a href="{{ route('about') }}">{{ __('messages.about') }}</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">
                                        <a href="{{ route('services') }}">{{ __('messages.services') }}</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
                                        <a href="{{ route('products') }}">{{ __('messages.products') }} <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">{{ __('messages.mr_devices') }}</a></li>
                                            <li><a href="blog-single.html">{{ __('messages.xray_devices') }}</a></li>
                                            <li><a href="blog-single.html">{{ __('messages.ultrasound_devices') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'blogs' ? 'active' : '' }}">
                                        <a href="{{ route('blogs') }}">{{ __('messages.blogs') }} <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">{{ __('messages.how_mr_works') }}</a></li>
                                            <li><a href="blog-single.html">{{ __('messages.how_xray_works') }}</a></li>
                                            <li><a href="blog-single.html">{{ __('messages.how_ultrasound_works') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}">{{ __('messages.contact') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="language-selector d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ strtoupper(app()->getLocale()) }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <a class="dropdown-item" href="{{ route('language.switch', 'tr') }}">Türkçe</a>
                                    <a class="dropdown-item" href="{{ route('language.switch', 'az') }}">Azərbaycan</a>
                                    <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->

<!-- Fixed Mobile Language Selector -->
<div class="mobile-language-fixed d-md-none">
    <div class="dropdown dropup">
        <button class="btn dropdown-toggle" type="button" id="mobileLanguageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ strtoupper(app()->getLocale()) }}
        </button>
        <div class="dropdown-menu" aria-labelledby="mobileLanguageDropdown">
            <a class="dropdown-item" href="{{ route('language.switch', 'tr') }}">Türkçe</a>
            <a class="dropdown-item" href="{{ route('language.switch', 'az') }}">Azərbaycan</a>
            <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a>
        </div>
    </div>
</div>

<style>
@media only screen and (max-width: 767px) {
    .header .header-inner .col-lg-3 {
        position: relative;
    }

    .header .header-inner .logo {
        max-width: 150px;
    }

    .header .header-inner .logo img {
        max-height: 40px;
    }

    .mobile-language-fixed {
        position: fixed;
        left: 20px;
        bottom: 20px;
        z-index: 999;
    }

    .mobile-language-fixed .dropdown-toggle {
        padding: 6px 12px;
        font-size: 14px;
        background-color: #1A76D1;
        border: none;
        color: white;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        border-radius: 30px;
        min-width: 60px;
        text-align: center;
    }

    .mobile-language-fixed .dropdown-toggle:focus,
    .mobile-language-fixed .dropdown-toggle:hover {
        background-color: #0c62b9;
    }

    .mobile-language-fixed .dropdown-menu {
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-top: -10px;
        margin-bottom: 0;
        min-width: 120px;
        left: 0 !important;
        bottom: 100%;
        top: auto !important;
        transform: none !important;
    }

    .mobile-language-fixed .dropdown-item {
        text-align: center;
        padding: 8px;
    }

    .mobile-language-fixed .dropdown-item:hover {
        background-color: #f8f9fa;
    }
}

/* Masaüstü dil seçici stili */
.header-inner .inner .row {
    align-items: center;
}

.language-selector {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    height: 100%;
    padding: 0;
}

.language-selector .dropdown-toggle {
    padding: 6px 15px;
    font-size: 14px;
    background-color: #1A76D1;
    border: none;
    color: white;
    border-radius: 4px;
    min-width: 60px;
    text-align: center;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
}

.language-selector .dropdown-toggle:hover,
.language-selector .dropdown-toggle:focus {
    background-color: #0c62b9;
}

.language-selector .dropdown-menu {
    min-width: 120px;
    border-radius: 4px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin-top: 5px;
}

.language-selector .dropdown-item {
    padding: 8px 15px;
    font-size: 14px;
}

.language-selector .dropdown-item:hover {
    background-color: #f8f9fa;
}
</style>
