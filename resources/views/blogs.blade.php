@extends('layouts.app', ['activePage' => 'blogs'])

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/blogs-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2 style="color: #fff;">Blog</h2>
                    <p style="color: #fff; margin: 20px auto 0; max-width: 800px;">Medikal görüntüleme teknolojileri, sektördeki son gelişmeler ve sağlık teknolojileri hakkında güncel bilgiler edinmek için blog yazılarımızı takip edin.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>İntermedMS Blog</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>Sağlık teknolojileri ve görüntüleme sistemleri hakkında güncel haberler ve makaleler</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Blog 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog1.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Ocak, 2024</div>
                            <h2><a href="blog-single.html">Yapay Zeka Destekli MR Görüntüleme: Yeni Nesil Teşhis</a></h2>
                            <p class="text">Modern MR sistemlerinde yapay zeka teknolojisinin kullanımı, teşhis sürecini nasıl hızlandırıyor ve doğruluk oranını nasıl artırıyor?</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 2 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog2.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">10 Ocak, 2024</div>
                            <h2><a href="blog-single.html">Dijital Röntgen Sistemlerinin Avantajları</a></h2>
                            <p class="text">Geleneksel röntgen sistemlerinden dijital sistemlere geçişin hasta ve hekim açısından sağladığı faydalar.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 3 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog3.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">5 Ocak, 2024</div>
                            <h2><a href="blog-single.html">4D Ultrason Teknolojisindeki Son Yenilikler</a></h2>
                            <p class="text">Modern 4D ultrason cihazlarının sunduğu yüksek çözünürlüklü görüntüleme teknolojisi ve klinik uygulamaları.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog1.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">2 Ocak, 2024</div>
                            <h2><a href="blog-single.html">CT Görüntüleme Teknolojisinde İnovasyonlar</a></h2>
                            <p class="text">Bilgisayarlı tomografi teknolojisindeki son gelişmeler ve hasta konforunu artıran yenilikler.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 5 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog2.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">28 Aralık, 2023</div>
                            <h2><a href="blog-single.html">Mammografi Taramalarında Erken Teşhis</a></h2>
                            <p class="text">Meme kanseri taramalarında dijital mammografi teknolojisinin önemi ve erken tanı oranları.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 6 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog3.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">25 Aralık, 2023</div>
                            <h2><a href="blog-single.html">PET-CT Fusion Görüntülemenin Önemi</a></h2>
                            <p class="text">Onkoloji alanında PET-CT hibrit görüntüleme sistemlerinin teşhis ve tedavi sürecindeki rolü.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 7 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog1.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">20 Aralık, 2023</div>
                            <h2><a href="blog-single.html">Kardiyak MR Görüntüleme Uygulamaları</a></h2>
                            <p class="text">Kalp hastalıklarının teşhisinde MR görüntülemenin avantajları ve güncel protokoller.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 8 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog2.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Aralık, 2023</div>
                            <h2><a href="blog-single.html">Nörolojik Görüntülemede Fonksiyonel MR</a></h2>
                            <p class="text">Beyin hastalıklarının erken teşhisinde fonksiyonel MR görüntülemenin kullanım alanları.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 9 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('img/blog3.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">10 Aralık, 2023</div>
                            <h2><a href="blog-single.html">Çocuk Görüntülemesinde Radyasyon Güvenliği</a></h2>
                            <p class="text">Pediatrik hastalarda görüntüleme tekniklerinde radyasyon dozu optimizasyonu ve güvenlik protocolleri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <div class="pagination-area">
                    <nav aria-label="Blog pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

@endsection
