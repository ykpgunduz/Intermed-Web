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
                <div class="filter-buttons text-center">
                    <button type="button" class="filter-btn active" data-filter="*">
                        <i class="icofont-medical-sign"></i>
                        <span>Tüm Ürünler</span>
                    </button>
                    <button type="button" class="filter-btn" data-filter=".mri">
                        <i class="icofont-brain-alt"></i>
                        <span>MRI Sistemleri</span>
                    </button>
                    <button type="button" class="filter-btn" data-filter=".ct">
                        <i class="icofont-patient-bed"></i>
                        <span>CT Sistemleri</span>
                    </button>
                    <button type="button" class="filter-btn" data-filter=".xray">
                        <i class="icofont-xray"></i>
                        <span>X-Ray Sistemleri</span>
                    </button>
                    <button type="button" class="filter-btn" data-filter=".ultrasound">
                        <i class="icofont-heart-beat-alt"></i>
                        <span>Ultrason Sistemleri</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row portfolio-items">
            <!-- MRI Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 mri mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('img/banner-2.jpeg') }}" class="card-img-top" alt="MRI System">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary">MRI Sistemleri</span>
                        <h3 class="card-title h5 mb-3">ASM-1.5T Superconducting MRI</h3>
                        <p class="card-text text-muted">1.5T Süperiletken mıknatıs teknolojisi ile donatılmış, 70cm geniş bore özellikli ve yapay zeka destekli görüntüleme sistemi.</p>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- CT Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 ct mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('img/banner-3.jpeg') }}" class="card-img-top" alt="CT Scanner">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary">CT Sistemleri</span>
                        <h3 class="card-title h5 mb-3">ACT-64 CT Scanner</h3>
                        <p class="card-text text-muted">64 kesit görüntüleme teknolojisi, düşük radyasyon dozu ve hızlı tarama süresi sunan gelişmiş CT sistemi.</p>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- X-Ray Ürün 1 -->
            <div class="col-lg-4 col-md-6 col-12 xray mb-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('img/banner-4.jpeg') }}" class="card-img-top" alt="Digital X-Ray">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary">X-Ray Sistemleri</span>
                        <h3 class="card-title h5 mb-3">ADR Digital X-Ray</h3>
                        <p class="card-text text-muted">Yüksek çözünürlüklü dijital dedektör teknolojisi ile donatılmış, kullanımı kolay ve net görüntüler sunan röntgen sistemi.</p>
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
                        <img src="{{ asset('img/banner-5.jpeg') }}" class="card-img-top" alt="Ultrasound System">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary">Ultrason Sistemleri</span>
                        <h3 class="card-title h5 mb-3">AUS-Q9 Color Doppler</h3>
                        <p class="card-text text-muted">Gelişmiş 4D görüntüleme teknolojisi ve Color Doppler özelliği ile donatılmış, geniş ekranlı ultrason sistemi.</p>
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
                        <img src="{{ asset('img/banner-6.jpeg') }}" class="card-img-top" alt="Open MRI">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary">MRI Sistemleri</span>
                        <h3 class="card-title h5 mb-3">ASM-0.4T Open MRI</h3>
                        <p class="card-text text-muted">Açık tasarımlı, hasta konforu odaklı ve düşük gürültü seviyesi ile öne çıkan MRI sistemi.</p>
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
                        <img src="{{ asset('img/banner-7.jpg') }}" class="card-img-top" alt="CT Scanner">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary">CT Sistemleri</span>
                        <h3 class="card-title h5 mb-3">ACT-16 CT Scanner</h3>
                        <p class="card-text text-muted">16 kesit teknolojisi ile donatılmış, kompakt tasarımlı ve uygun maliyetli CT tarayıcı sistemi.</p>
                    </div>
                    <div class="card-footer bg-white p-4 border-0">
                        <a href="/product-detail" class="btn btn-primary w-100">Detaylı İncele</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Başlangıç -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Sayfalama">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="icofont-rounded-left"></i>
                                Önceki
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                Sonraki
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Pagination Sonu -->
    </div>
</section>
<!-- Ürünler Bölümü Sonu -->

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

/* Ürün Kartı Temel Stilleri */
.product-card {
    transition: all 0.3s ease;
    border-radius: 1rem;
    overflow: hidden;
    background: #fff;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
}

.product-card .position-relative {
    height: 370px;
    overflow: hidden;
    background-color: #f8f9fa;
    border-radius: 1rem 1rem 0 0;
    margin-bottom: 0;
}

.product-card img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
    display: block;
}

.product-card:hover img {
    transform: scale(1.05);
}

.badge {
    font-size: 0.875rem;
    font-weight: 400;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    display: inline-block;
    background-color: var(--primary);
    color: white;
    margin: 0 0 1rem 0;
}

.card-body {
    background: #fff;
    position: relative;
    z-index: 1;
    padding: 0 1.75rem 1.75rem 1.75rem;
}

.card-title {
    font-size: 1.25rem;
    line-height: 1.4;
    margin-bottom: 1.25rem;
    color: #2d3436;
    font-weight: 600;
}

.card-text {
    font-size: 0.95rem;
    line-height: 1.6;
    color: #636e72;
    margin-bottom: 1.75rem;
}

.card-footer {
    background: #fff;
    border-top: 1px solid rgba(0,0,0,0.05);
    padding: 1.25rem 1.5rem;
}

.btn {
    border-radius: 2rem;
    padding: 0.75rem 1.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
    width: 100%;
    text-align: center;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Pagination Stilleri */
.pagination {
    gap: 0.5rem;
    margin-bottom: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.page-link {
    border: none;
    padding: 0.75rem 1.25rem;
    border-radius: 2rem;
    color: #6c757d;
    background-color: #f8f9fa;
    transition: all 0.3s ease;
}

.page-link:hover {
    background-color: #e9ecef;
    color: #343a40;
    transform: translateY(-2px);
}

.page-item.active .page-link {
    background-color: var(--primary);
    color: white;
}

.page-item.disabled .page-link {
    background-color: #f8f9fa;
    color: #adb5bd;
}

/* Responsive Ayarlar */
@media (max-width: 1200px) {
    .product-card .position-relative {
        height: 340px;
    }

    .card-body {
        padding: 1.25rem;
    }

    .card-title {
        font-size: 1.15rem;
    }
}

@media (max-width: 992px) {
    .product-card .position-relative {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .product-card {
        margin-bottom: 1.5rem;
    }

    .product-card .position-relative {
        height: 320px;
    }

    .card-body {
        padding: 0 1.25rem 1.25rem 1.25rem;
    }

    .badge {
        font-size: 0.8rem;
        padding: 0.4rem 0.9rem;
        margin: 1.25rem 0;
    }

    .card-title {
        font-size: 1.1rem;
        margin-bottom: 1rem;
    }

    .card-text {
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
    }

    .page-link {
        padding: 0.5rem 1rem;
    }
}

@media (max-width: 576px) {
    .product-card .position-relative {
        height: 260px;
    }

    .card-body {
        padding: 0 1rem 1rem 1rem;
    }

    .badge {
        font-size: 0.75rem;
        padding: 0.35rem 0.8rem;
        margin: 1rem 0;
    }

    .card-title {
        font-size: 1rem;
        margin-bottom: 0.75rem;
    }

    .card-text {
        font-size: 0.85rem;
        margin-bottom: 1.25rem;
    }

    .card-footer {
        padding: 1rem;
    }

    .btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }

    .pagination {
        gap: 0.25rem;
    }

    .page-link {
        padding: 0.5rem 0.75rem;
        font-size: 0.9rem;
    }
}

/* Kategori Filtreleme Stilleri */
.filter-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    justify-content: center;
    padding: 1.5rem 0;
    margin: 0 -0.375rem;
}

.filter-btn {
    background: #fff;
    border: 1px solid #e9ecef;
    padding: 0.875rem 1.5rem;
    border-radius: 2rem;
    color: #6c757d;
    font-size: 0.95rem;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    cursor: pointer;
    margin: 0 0.375rem;
    white-space: nowrap;
}

.filter-btn i {
    font-size: 1.25rem;
    transition: all 0.3s ease;
}

.filter-btn:hover, .filter-btn.active {
    background: var(--primary);
    color: #fff;
    border-color: var(--primary);
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.filter-btn:hover i, .filter-btn.active i {
    transform: scale(1.1);
}

/* Responsive Ayarlar */
@media (max-width: 1200px) {
    .filter-buttons {
        gap: 0.5rem;
        padding: 1.25rem 0;
    }

    .filter-btn {
        padding: 0.75rem 1.25rem;
        font-size: 0.9rem;
    }
}

@media (max-width: 992px) {
    .filter-buttons {
        padding: 1rem 0;
        flex-wrap: nowrap;
        overflow-x: auto;
        justify-content: flex-start;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE and Edge */
        padding-bottom: 1rem;
    }

    .filter-buttons::-webkit-scrollbar {
        display: none; /* Chrome, Safari and Opera */
    }

    .filter-btn {
        padding: 0.625rem 1.125rem;
        font-size: 0.875rem;
        flex: 0 0 auto;
    }

    .filter-btn i {
        font-size: 1.125rem;
    }
}

@media (max-width: 768px) {
    .filter-buttons {
        margin: 0 -1rem;
        padding: 1rem;
    }

    .filter-btn {
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
    }

    .filter-btn i {
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .filter-buttons {
        margin: 0 -0.75rem;
        padding: 0.75rem;
    }

    .filter-btn {
        padding: 0.5rem 0.875rem;
        font-size: 0.8rem;
    }

    .filter-btn i {
        font-size: 0.975rem;
    }
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.portfolio-items .col-lg-4');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filterValue = this.getAttribute('data-filter');

            // Aktif buton stilini güncelle
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Ürünleri filtrele
            items.forEach(item => {
                if (filterValue === '*' || item.classList.contains(filterValue.replace('.', ''))) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
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
