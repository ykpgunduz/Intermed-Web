@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/contact-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2 style="color: #fff;">{{ __('messages.contact') }}</h2>
                    <p style="color: #fff; margin: 20px auto 0; max-width: 800px;">{{ __('messages.contact_page_desc') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- İletişim Bilgileri ve Harita Bölümü Başlangıç -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-info-wrapper">
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4>{{ __('messages.phone') }}</h4>
                            <div class="info-links">
                                <a href="tel:+994502632084">+994 50 263 20 84</a>
                                <a href="tel:+994502352686">+994 50 235 26 86</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>{{ __('messages.email') }}</h4>
                            <div class="info-links">
                                <a href="mailto:info@intermedms.com">info@intermedms.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h4>{{ __('messages.address') }}</h4>
                            <div class="info-text">
                                <p>Bakı Şehri, Sabunçu Rayonu, Bakıxanov Semti, Ruhulla Axundov Caddesi No: 93</p>
                                <p>Bakü / {{ __('messages.azerbaijan') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="content">
                            <h4>{{ __('messages.working_hours_title') }}</h4>
                            <div class="info-text">
                                <p>{{ __('messages.monday_friday') }}: 09:00 - 18:00</p>
                                <p>{{ __('messages.saturday_sunday') }}: {{ __('messages.closed') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48596.3627422835!2d49.873246365696325!3d40.42496073933029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030623a1e06d9ed%3A0xd97657279cc3c71a!2sBakikhanov%2C%20Bak%C3%BC%2C%20Azerbaycan!5e0!3m2!1str!2str!4v1747406815084!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- İletişim Bilgileri ve Harita Bölümü Sonu -->

<!-- İletişim Formu Bölümü Başlangıç -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>{{ __('messages.contact_us') }}</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>{{ __('messages.contact_form_desc') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="{{ __('messages.full_name') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="{{ __('messages.your_email') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="tel" placeholder="{{ __('messages.your_phone') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0">
                                    <span class="current">{{ __('messages.device_interest') }}</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">{{ __('messages.device_interest') }}</li>
                                        <li data-value="2" class="option">{{ __('messages.mr_devices') }}</li>
                                        <li data-value="3" class="option">{{ __('messages.xray_devices') }}</li>
                                        <li data-value="4" class="option">{{ __('messages.ultrasound_devices') }}</li>
                                        <li data-value="5" class="option">{{ __('messages.xray_devices') }}</li>
                                        <li data-value="6" class="option">{{ __('messages.mammography_series') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="{{ __('messages.message') }}" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">{{ __('messages.send') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- İletişim Formu Bölümü Sonu -->

<!-- Bülten Bölümü Başlangıç -->
<section class="newsletter section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="subscribe-text">
                    <h6>{{ __('messages.newsletter_signup') }}</h6>
                    <p>{{ __('messages.newsletter_desc') }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="subscribe-form">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="{{ __('messages.email_placeholder') }}" class="common-input" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = '{{ __('messages.email_placeholder') }}'" required="" type="email">
                        <button class="btn">{{ __('messages.subscribe') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bülten Bölümü Sonu -->
@endsection
