@extends('layouts.app')

@section('title', 'İletişim')

@section('content')
<!-- Başlık Bölümü Başlangıç -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>İletişim Bilgilerimiz</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>Medikal görüntüleme cihazlarımız hakkında daha fazla bilgi almak için bizimle iletişime geçebilirsiniz</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Başlık Bölümü Sonu -->

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
                            <h4>Telefon</h4>
                            <div class="info-links">
                                <a href="tel:+902121234567">+90 (212) 123 45 67</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>E-posta</h4>
                            <div class="info-links">
                                <a href="mailto:info@medikalcihazlar.com">info@medikalcihazlar.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h4>Adres</h4>
                            <div class="info-text">
                                <p>Merkez Ofis: Atatürk Caddesi No:123</p>
                                <p>Şişli / İstanbul</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="content">
                            <h4>Çalışma Saatleri</h4>
                            <div class="info-text">
                                <p>Pazartesi - Cuma: 09:00 - 18:00</p>
                                <p>Cumartesi: 09:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.9633698339278!2d28.987157315414614!3d41.03700297929863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7650656bd63%3A0x8ca058b28c20b6c3!2zVGFrc2ltIE1leWRhbsSxLCBHw7xtw7zFn3N1eXUsIDM0NDM1IEJleW_En2x1L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1647881234567!5m2!1str!2str"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                    </iframe>
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
                    <h2>Bize Ulaşın</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>Medikal görüntüleme cihazlarımız hakkında detaylı bilgi almak için aşağıdaki formu doldurup bize gönderebilirsiniz</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Adınız Soyadınız" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="E-posta Adresiniz" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="tel" placeholder="Telefon Numaranız" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0">
                                    <span class="current">İlgilendiğiniz Cihaz</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">İlgilendiğiniz Cihaz</li>
                                        <li data-value="2" class="option">MR Cihazları</li>
                                        <li data-value="3" class="option">Tomografi Cihazları</li>
                                        <li data-value="4" class="option">Ultrason Cihazları</li>
                                        <li data-value="5" class="option">Röntgen Cihazları</li>
                                        <li data-value="6" class="option">Mamografi Cihazları</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Mesajınızı buraya yazın....." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Gönder</button>
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
                    <h6>Bültenimize Kayıt Olun</h6>
                    <p>Yeni ürünler ve kampanyalardan haberdar olmak için<br> bültenimize abone olun.</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="subscribe-form">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="E-posta adresiniz" class="common-input" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'E-posta adresiniz'" required="" type="email">
                        <button class="btn">Abone Ol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bülten Bölümü Sonu -->
@endsection
