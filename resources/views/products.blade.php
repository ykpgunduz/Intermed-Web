@extends('layouts.app')

@section('content')
<!-- Başlık Bölümü Başlangıç -->
<section class="page-title bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-icon">
                        <i class="icofont-medical-sign-alt text-primary mb-3" style="font-size: 3rem;"></i>
                    </div>
                    <h2 class="text-gradient">Medikal Görüntüleme Sistemleri</h2>
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                                <li class="breadcrumb-item"><a href="/">Ana Sayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ürünlerimiz</li>
                            </ol>
                        </nav>
                    </div>
                    <p class="lead text-muted mt-3">En son teknoloji medikal görüntüleme cihazlarımız ile sağlık sektörüne yenilikçi çözümler sunuyoruz</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
<!-- Başlık Bölümü Sonu -->

<!-- Ürünler Bölümü Başlangıç -->
<section class="portfolio section bg-light">
    <div class="container">
        <!-- Kategori Filtreleme -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="portfolio-menu text-center">
                    <ul id="portfolio-nav" class="portfolio-nav nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-filter="*">
                                <i class="icofont-medical-sign"></i> Tüm Ürünler
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-filter=".mri">
                                <i class="icofont-brain-alt"></i> MRI Sistemleri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-filter=".ct">
                                <i class="icofont-patient-bed"></i> CT Sistemleri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-filter=".xray">
                                <i class="icofont-xray"></i> X-Ray Sistemleri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-filter=".ultrasound">
                                <i class="icofont-heart-beat-alt"></i> Ultrason Sistemleri
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row portfolio-items">
            <!-- MRI Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 mri mb-4">
                <div class="card product-card h-100 border-0">
                    <div class="card-top position-relative">
                        <div class="product-image">
                            <img src="https://www.anke.com/uploadfile/product/2024062817/667e7bb9cf60a.jpeg" class="card-img-top" alt="MRI System">
                        </div>
                        <div class="product-overlay">
                            <div class="product-actions d-flex flex-column align-items-center">
                                <a href="#" class="action-btn mb-2" data-bs-toggle="tooltip" title="Teknik Özellikler">
                                    <i class="icofont-gear"></i>
                                </a>
                                <a href="#" class="action-btn mb-2" data-bs-toggle="tooltip" title="Galeri">
                                    <i class="icofont-image"></i>
                                </a>
                                <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Video">
                                    <i class="icofont-play-alt-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-badge bg-gradient-primary text-white">
                            <span>Yeni</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="product-category d-flex align-items-center mb-2">
                            <i class="icofont-brain-alt text-primary me-2"></i>
                            <span>MRI Sistemleri</span>
                        </div>
                        <h3 class="card-title h5 mb-3">ASM-1.5T Superconducting MRI</h3>
                        <div class="product-features">
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-center mb-2">
                                    <span class="feature-icon bg-primary-soft rounded-circle p-1 me-2">
                                        <i class="icofont-check-circled text-primary"></i>
                                    </span>
                                    <span>1.5T Süperiletken Mıknatıs</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <span class="feature-icon bg-primary-soft rounded-circle p-1 me-2">
                                        <i class="icofont-check-circled text-primary"></i>
                                    </span>
                                    <span>70cm Geniş Bore</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="feature-icon bg-primary-soft rounded-circle p-1 me-2">
                                        <i class="icofont-check-circled text-primary"></i>
                                    </span>
                                    <span>Yapay Zeka Destekli Görüntüleme</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary btn-lg w-100 d-flex align-items-center justify-content-center">
                            <i class="icofont-search-document me-2"></i>
                            Detaylı İncele
                        </a>
                    </div>
                </div>
            </div>

            <!-- CT Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 ct mb-4">
                <div class="card product-card h-100 border-0">
                    <div class="card-top position-relative">
                        <div class="product-image">
                            <img src="https://www.anke.com/uploadfile/product/2023090816/64fad7173aff3.jpeg" class="card-img-top" alt="CT Scanner">
                        </div>
                        <div class="product-overlay">
                            <div class="product-actions d-flex flex-column align-items-center">
                                <a href="#" class="action-btn mb-2" data-bs-toggle="tooltip" title="Teknik Özellikler">
                                    <i class="icofont-gear"></i>
                                </a>
                                <a href="#" class="action-btn mb-2" data-bs-toggle="tooltip" title="Galeri">
                                    <i class="icofont-image"></i>
                                </a>
                                <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Video">
                                    <i class="icofont-play-alt-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-badge bg-gradient-success text-white">
                            <span>Popüler</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="product-category d-flex align-items-center mb-2">
                            <i class="icofont-patient-bed text-primary me-2"></i>
                            <span>CT Sistemleri</span>
                        </div>
                        <h3 class="card-title h5 mb-3">ACT-64 CT Scanner</h3>
                        <div class="product-features">
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-center mb-2">
                                    <span class="feature-icon bg-primary-soft rounded-circle p-1 me-2">
                                        <i class="icofont-check-circled text-primary"></i>
                                    </span>
                                    <span>64 Kesit Görüntüleme</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <span class="feature-icon bg-primary-soft rounded-circle p-1 me-2">
                                        <i class="icofont-check-circled text-primary"></i>
                                    </span>
                                    <span>Düşük Radyasyon Dozu</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="feature-icon bg-primary-soft rounded-circle p-1 me-2">
                                        <i class="icofont-check-circled text-primary"></i>
                                    </span>
                                    <span>Hızlı Tarama Süresi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary btn-lg w-100 d-flex align-items-center justify-content-center">
                            <i class="icofont-search-document me-2"></i>
                            Detaylı İncele
                        </a>
                    </div>
                </div>
            </div>

            <!-- X-Ray Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 xray mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="https://www.anke.com/uploadfile/product/2023090711/64f9471b2bec9.jpeg" class="card-img-top" alt="Digital X-Ray">
                    </div>
                    <div class="card-body p-4">
                        <div class="product-category text-muted mb-2">X-Ray Sistemleri</div>
                        <h3 class="card-title h5 mb-3">ADR Digital X-Ray</h3>
                        <p class="card-text text-muted">Yüksek çözünürlüklü dijital röntgen sistemi ile net görüntüler.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>Dijital Dedektör</li>
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>Yüksek Çözünürlük</li>
                            <li><i class="icofont-check-circled text-primary me-2"></i>Kolay Kullanım</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- Ultrason Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 ultrasound mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="https://www.anke.com/uploadfile/product/2023090711/64f9471b2bec9.jpeg" class="card-img-top" alt="Ultrasound System">
                        <div class="product-badge bg-info text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">
                            4D Teknoloji
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="product-category text-muted mb-2">Ultrason Sistemleri</div>
                        <h3 class="card-title h5 mb-3">AUS-Q9 Color Doppler</h3>
                        <p class="card-text text-muted">Gelişmiş 4D görüntüleme özellikli ultrason sistemi.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>4D Görüntüleme</li>
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>Color Doppler</li>
                            <li><i class="icofont-check-circled text-primary me-2"></i>Geniş Ekran</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- MRI Ürün 2 -->
            <div class="col-lg-4 col-md-6 col-12 mri mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="https://www.anke.com/uploadfile/product/2024062817/667e7bb9cf60a.jpeg" class="card-img-top" alt="Open MRI">
                        <div class="product-badge bg-warning text-dark position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">
                            Açık MRI
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="product-category text-muted mb-2">MRI Sistemleri</div>
                        <h3 class="card-title h5 mb-3">ASM-0.4T Open MRI</h3>
                        <p class="card-text text-muted">Açık tasarımlı, hasta konforu odaklı MRI sistemi.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>Açık Tasarım</li>
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>Hasta Konforu</li>
                            <li><i class="icofont-check-circled text-primary me-2"></i>Düşük Gürültü</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- CT Ürün 2 -->
            <div class="col-lg-4 col-md-6 col-12 ct mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="https://www.anke.com/uploadfile/product/2023090816/64fad7173aff3.jpeg" class="card-img-top" alt="CT Scanner">
                        <div class="product-badge bg-secondary text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">
                            Ekonomik
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="product-category text-muted mb-2">CT Sistemleri</div>
                        <h3 class="card-title h5 mb-3">ACT-16 CT Scanner</h3>
                        <p class="card-text text-muted">16 kesit CT tarayıcı, ekonomik çözüm sunar.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>16 Kesit</li>
                            <li class="mb-2"><i class="icofont-check-circled text-primary me-2"></i>Kompakt Tasarım</li>
                            <li><i class="icofont-check-circled text-primary me-2"></i>Uygun Maliyet</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ürünler Bölümü Sonu -->

<!-- İletişim CTA Bölümü -->
<section class="cta-section bg-gradient-secondary py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7">
                <div class="section-title text-white mb-0">
                    <h2 class="text-white mb-3">Ürünlerimiz Hakkında Bilgi Alın</h2>
                    <p class="lead mb-0">Medikal görüntüleme cihazlarımız hakkında detaylı bilgi almak için bizimle iletişime geçin</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 text-md-end mt-4 mt-md-0">
                <a href="/contact" class="btn btn-light btn-lg">
                    <i class="icofont-envelope me-2"></i>
                    İletişime Geçin
                </a>
            </div>
        </div>
    </div>
</section>
<!-- İletişim CTA Bölümü Sonu -->

<!-- Bülten Bölümü Başlangıç -->
<section class="newsletter-section py-5 bg-light">
    <div class="container">
        <div class="newsletter-box bg-white rounded-3 shadow-sm p-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="subscribe-text">
                        <div class="newsletter-icon mb-3">
                            <i class="icofont-envelope-open text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="mb-3">Bültenimize Kayıt Olun</h4>
                        <p class="text-muted mb-0">Yeni ürünler ve kampanyalardan haberdar olmak için bültenimize abone olun.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-lg" placeholder="E-posta adresiniz" required>
                            <button class="btn btn-primary btn-lg px-4" type="submit">
                                <i class="icofont-paper-plane me-2"></i>
                                Abone Ol
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bülten Bölümü Sonu -->

<style>
/* Genel Stiller */
:root {
    --primary: #1A76D1;
    --primary-dark: #1557A0;
    --primary-light: rgba(26, 118, 209, 0.1);
    --secondary: #2C3E50;
    --white: #ffffff;
    --light: #f8f9fa;
    --gray: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --dark: #343a40;
}

.bg-gradient {
    background: linear-gradient(135deg, var(--light) 0%, #e9ecef 100%);
}

.bg-gradient-primary {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
}

.bg-gradient-secondary {
    background: linear-gradient(135deg, var(--secondary) 0%, #1A2533 100%);
}

.text-gradient {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Shape Divider */
.shape-divider {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    pointer-events: none;
}

.shape-divider svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 60px;
}

.shape-divider .shape-fill {
    fill: var(--light);
}

/* Ürün Kartı */
.product-card {
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border-radius: 1.5rem;
    overflow: hidden;
    background: var(--white);
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,0.15);
}

.product-image {
    position: relative;
    padding-top: 75%;
    overflow: hidden;
    background: var(--light);
}

.product-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 2rem;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

/* Ürün Overlay */
.product-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(26, 118, 209, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.product-card:hover .product-overlay {
    opacity: 1;
    visibility: visible;
}

.action-btn {
    width: 45px;
    height: 45px;
    background: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    text-decoration: none;
    transition: all 0.3s ease;
    transform: translateY(20px);
    opacity: 0;
}

.product-card:hover .action-btn {
    transform: translateY(0);
    opacity: 1;
}

.action-btn:hover {
    background: var(--primary);
    color: var(--white);
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.product-card:hover .action-btn:nth-child(1) {
    transition-delay: 0.1s;
}

.product-card:hover .action-btn:nth-child(2) {
    transition-delay: 0.2s;
}

.product-card:hover .action-btn:nth-child(3) {
    transition-delay: 0.3s;
}

/* Ürün Rozeti */
.product-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.6rem 1.2rem;
    border-radius: 2rem;
    font-size: 0.875rem;
    font-weight: 600;
    z-index: 1;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    backdrop-filter: blur(5px);
}

/* Kategori Filtreleme */
.portfolio-nav {
    background: var(--white);
    padding: 0.5rem;
    border-radius: 3rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.portfolio-nav .nav-link {
    color: var(--gray);
    padding: 0.75rem 1.5rem;
    margin: 0.25rem;
    border-radius: 2rem;
    transition: all 0.3s ease;
    font-weight: 500;
    position: relative;
    overflow: hidden;
}

.portfolio-nav .nav-link i {
    margin-right: 0.5rem;
    font-size: 1.1em;
    vertical-align: middle;
}

.portfolio-nav .nav-link:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--primary);
    border-radius: 2rem;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.3s ease;
    z-index: -1;
}

.portfolio-nav .nav-link:hover:before,
.portfolio-nav .nav-link.active:before {
    transform: scaleX(1);
    transform-origin: left;
}

.portfolio-nav .nav-link:hover,
.portfolio-nav .nav-link.active {
    color: var(--white);
}

/* Özellik İkonları */
.feature-icon {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.product-features li:hover .feature-icon {
    transform: scale(1.1);
    background: var(--primary);
}

.product-features li:hover .feature-icon i {
    color: var(--white);
}

/* Ürün Kategori */
.product-category {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--gray);
    transition: all 0.3s ease;
}

.product-category i {
    transition: all 0.3s ease;
}

.product-card:hover .product-category {
    color: var(--primary);
}

.product-card:hover .product-category i {
    transform: scale(1.2);
}

/* Butonlar */
.btn {
    border-radius: 2rem;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
}

.btn-lg {
    padding: 1rem 2rem;
}

.btn-primary {
    background: var(--primary);
    border-color: var(--primary);
}

.btn-primary:hover {
    background: var(--primary-dark);
    border-color: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 118, 209, 0.3);
}

.btn-primary:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120%;
    height: 120%;
    background: rgba(255,255,255,0.2);
    transform: translate(-50%, -50%) scale(0);
    border-radius: 50%;
    transition: transform 0.5s ease;
}

.btn-primary:hover:after {
    transform: translate(-50%, -50%) scale(1);
}

/* Newsletter Kutusu */
.newsletter-box {
    border-radius: 2rem;
    transition: all 0.3s ease;
}

.newsletter-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
}

.form-control {
    border-radius: 2rem;
    padding: 1rem 1.5rem;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(26, 118, 209, 0.15);
}

/* Animasyonlar */
@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-5px);
    }
    100% {
        transform: translateY(0px);
    }
}

.newsletter-icon i {
    animation: float 3s ease-in-out infinite;
}

/* Responsive Ayarlar */
@media (max-width: 768px) {
    .portfolio-nav {
        padding: 0.25rem;
    }

    .portfolio-nav .nav-link {
        padding: 0.5rem 1rem;
        margin: 0.15rem;
        font-size: 0.9rem;
    }

    .newsletter-box {
        padding: 2rem !important;
    }

    .product-card {
        margin-bottom: 2rem;
    }
}

@media (max-width: 576px) {
    .portfolio-nav .nav-link i {
        margin-right: 0;
    }

    .portfolio-nav .nav-link span {
        display: none;
    }

    .action-btn {
        width: 40px;
        height: 40px;
    }
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Bootstrap Tooltip'leri aktifleştir
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Ürün kartları için gelişmiş hover efekti
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 1rem 3rem rgba(0,0,0,0.15)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });

    // Özellik ikonları için hover efekti
    const featureIcons = document.querySelectorAll('.feature-icon');
    featureIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.background = 'var(--primary)';
            this.querySelector('i').style.color = 'white';
        });

        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.background = 'var(--primary-light)';
            this.querySelector('i').style.color = 'var(--primary)';
        });
    });

    // Kategori filtreleme için smooth scroll
    const filterButtons = document.querySelectorAll('.portfolio-nav .nav-link');
    filterButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const target = this.getAttribute('data-filter');

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const items = document.querySelectorAll('.portfolio-items .col-lg-4');
            items.forEach(item => {
                if (target === '*' || item.classList.contains(target.replace('.', ''))) {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                    item.style.display = 'block';
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>
@endpush

@endsection
