@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/hakkimizda-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2 style="color: #fff;">Hakkımızda</h2>
                    <p style="color: #fff; margin: 20px auto 0; max-width: 800px;">30 yıllık deneyimimizle medikal görüntüleme sistemleri alanında Türkiye'nin lider çözüm ortağıyız. Kalite ve güvenilirlik ilkelerimizle sektöre yön veriyoruz.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Hakkımızda Bölümü -->
<section class="Feautes section" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Medikal Görüntüleme Teknolojilerinde Güvenilir Çözüm Ortağınız</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>Sağlık kuruluşlarınıza en son teknoloji medikal görüntüleme cihazları sunuyoruz</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- Özellik 1 -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ambulance-cross"></i>
                    </div>
                    <h3>Teknik Destek</h3>
                    <p>7/24 teknik destek ekibimiz ve uzman servis kadromuzla cihazlarınızın kesintisiz çalışmasını sağlıyoruz.</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Özellik 2 -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Kaliteli Ürünler</h3>
                    <p>Dünya'nın önde gelen medikal görüntüleme cihazı üreticilerinin Türkiye'deki yetkili distribütörüyüz.</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Özellik 3 -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Eğitim ve Danışmanlık</h3>
                    <p>Satış sonrası kapsamlı eğitim ve danışmanlık hizmetleriyle kurumunuzun ihtiyaçlarına özel çözümler sunuyoruz.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- İstatistikler -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 1 -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">173</span>
                        <p>Mutlu Müşteri</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 2 -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">14</span>
                        <p>Uzman Teknisyen</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 3 -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">78</span>
                        <p>Kurulum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 4 -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">10</span>
                        <p>Yıllık Deneyim</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Şirket Hakkında Detaylı Bilgi -->
<section class="about-section section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content" style="max-width: 900px; margin: 0 auto; padding: 20px 0;">
                    <div class="about-text">
                        <div class="main-content" style="font-size: 1.1em; line-height: 1.8; color: #444;">
                            <h3 style="color: #1977cc; margin-bottom: 25px; font-size: 1.8em;">Hakkımızda</h3>
                            <p class="mb-4">Intermed Medical Systems, 2019 yılından bu yana medikal görüntüleme teknolojileri alanında müşterilerimize profesyonel çözümler sunmaktadır. Hızlı ve kaliteli servis hizmetlerimizle müşteri memnuniyetini en üst seviyeye taşımayı hedefleyen şirketimiz, güveni temel ilkesi olarak benimsemiştir.</p>

                            <p class="mb-4">Sektördeki 18 yıllık köklü tecrübemiz ve etik değerlerimizle, müşterilerimizle uzun vadeli iş birlikleri kurmayı hedefliyoruz. Sunduğumuz kapsamlı servis hizmetleri ile cihazların verimliliğini en üst seviyeye çıkarırken, yenilikçi teknolojileri de müşterilerimizle buluşturmaya devam ediyoruz.</p>

                            <p class="mb-4">Ürünlerimizin satışından servisine kadar her aşamada titizlikle çalışarak, müşteri memnuniyetini ve hizmet kalitesini her zaman ön planda tutuyoruz. Hizmet portföyümüze sürekli yeni markalar ekleyerek, müşterilerimizin ihtiyaçlarına özel çözümler üretiyoruz.</p>
                        </div>

                        <div class="experience-section" style="margin-top: 30px;">
                            <h3 style="color: #1977cc; margin-bottom: 20px; font-size: 1.8em;">Tecrübelerimiz</h3>
                            <p style="font-size: 1.1em; line-height: 1.8; color: #444;">GE Healthcare ve Hitachi gibi dünya devi firmalarda edindiğimiz MRI, CT, X-Ray ve Angio sistemlerinde Satış&Servis Müdürlüğü (Sales&Service Manager) ve Saha Mühendisliği (Senior Field Engineer) tecrübelerimizle, servis, bakım, onarım ve montaj hizmetlerini profesyonel bir şekilde sunuyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
