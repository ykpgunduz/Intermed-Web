@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Hizmetlerimiz</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Ana Sayfa</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Hizmetlerimiz</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Services -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sağlık Sektörüne Yönelik Çözümlerimiz</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>30 yılı aşkın deneyimimizle, tıbbi görüntüleme alanında Türkiye'nin önde gelen çözüm ortağı olarak hizmet vermekteyiz. En son teknolojiye sahip cihazlarımız, uzman kadromuz ve kapsamlı servis ağımızla sağlık kurumlarının güvenilir çözüm ortağıyız.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-medical-sign"></i>
                    <h4><a href="{{ route('products', 'mr-sistemleri') }}">MR Sistemleri</a></h4>
                    <p>Modern tıbbın vazgeçilmez tanı araçlarından olan Manyetik Rezonans sistemlerinde, dünya lideri üreticilerin en son teknoloji ürünlerini sizlere sunuyoruz. Hastalarınız için maksimum konfor, klinikleriniz için optimum verimlilik sağlayan MR sistemlerimiz, yüksek görüntü kalitesi ve hızlı tarama özellikleriyle öne çıkmaktadır.</p>
                    <ul class="mt-3">
                        <li>1.5T ve 3T Yüksek Alan MR Sistemleri - Üstün görüntü kalitesi ve hızlı tarama protokolleri</li>
                        <li>Açık MR Sistemleri - Klostrofobi hastaları ve çocuklar için ideal çözüm</li>
                        <li>Özel Uygulamalar - Kardiyak, Nörolojik ve Ortopedik görüntüleme protokolleri</li>
                        <li>Yapay Zeka Destekli Görüntüleme - Daha hızlı ve doğru tanı imkanı</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-xray"></i>
                    <h4><a href="{{ route('products', 'rontgen-sistemleri') }}">Röntgen Sistemleri</a></h4>
                    <p>Dijital röntgen teknolojisinin tüm avantajlarını kullanıma sunan sistemlerimiz, geleneksel röntgenin ötesinde tanı kalitesi sunmaktadır. Düşük radyasyon dozu ile yüksek görüntü kalitesi sağlayan cihazlarımız, hızlı görüntüleme ve kolay arşivleme özellikleriyle kliniklerin iş akışını optimize etmektedir.</p>
                    <ul class="mt-3">
                        <li>Dijital Röntgen Sistemleri - Yüksek çözünürlüklü görüntüleme ve anında sonuç</li>
                        <li>Mobil Röntgen Cihazları - Yoğun bakım ve ameliyathane için portatif çözümler</li>
                        <li>DR ve CR Sistemleri - Farklı bütçe ve ihtiyaçlara uygun seçenekler</li>
                        <li>PACS Entegrasyonu - Tam dijital arşivleme ve raporlama sistemi</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="fa fa-heartbeat"></i>
                    <h4><a href="{{ route('products', 'ultrason-sistemleri') }}">Ultrason Sistemleri</a></h4>
                    <p>Son nesil ultrason sistemlerimiz, gelişmiş görüntüleme teknolojileri ve ergonomik tasarımlarıyla her türlü klinik ihtiyaca cevap vermektedir. Kardiyolojiden obstetriğe, radyolojiden vasküler uygulamalara kadar geniş bir yelpazede uzmanlaşmış çözümler sunuyoruz.</p>
                    <ul class="mt-3">
                        <li>4D/5D Ultrason Sistemleri - Gerçek zamanlı hacimsel görüntüleme</li>
                        <li>Doppler Ultrason - Hassas kan akımı ölçümleri ve vasküler değerlendirme</li>
                        <li>Taşınabilir Ultrason - Yatak başı muayene ve mobil klinikler için ideal</li>
                        <li>Elastografi Özelliği - Doku sertliği ölçümü ve karakterizasyonu</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-bone"></i>
                    <h4><a href="{{ route('products', 'kemik-dansitometre') }}">Kemik Dansitometre</a></h4>
                    <p>Osteoporoz tanı ve takibinde altın standart olan DXA teknolojisini kullanan kemik dansitometre sistemlerimiz, düşük doz radyasyon ile hassas ölçümler yapabilmektedir. Vücut kompozisyon analizi özelliği ile spor hekimliği ve metabolizma kliniklerinde de tercih edilmektedir.</p>
                    <ul class="mt-3">
                        <li>DEXA Tarama Sistemleri - Yüksek hassasiyetli kemik mineral yoğunluğu ölçümü</li>
                        <li>Tam Vücut Kompozisyon Analizi - Kas ve yağ dokusu dağılımının detaylı analizi</li>
                        <li>Pediatrik Ölçüm Protokolleri - Çocuklara özel düşük doz uygulamaları</li>
                        <li>Karşılaştırmalı Analiz - Önceki ölçümlerle otomatik karşılaştırma</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-tooth"></i>
                    <h4><a href="{{ route('products', 'dental-goruntuleme') }}">Dental Görüntüleme</a></h4>
                    <p>Modern diş hekimliğinin gerektirdiği tüm görüntüleme ihtiyaçlarını karşılayan dental sistemlerimiz, implant planlamasından ortodontik tedaviye kadar geniş bir kullanım alanına sahiptir. 3D görüntüleme teknolojisi ile maksillofasiyal bölgenin detaylı incelenmesini sağlar.</p>
                    <ul class="mt-3">
                        <li>3D Dental Tomografi - Hassas implant planlaması ve cerrahi navigasyon</li>
                        <li>Panoramik Röntgen - Tek görüntüde tüm dental arkın değerlendirilmesi</li>
                        <li>Ağız İçi Sensörler - Yüksek çözünürlüklü periapikal görüntüleme</li>
                        <li>CAD/CAM Entegrasyonu - Dijital diş hekimliği uygulamaları</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service">
                    <i class="icofont icofont-tools"></i>
                    <h4><a href="{{ route('products', 'teknik-servis') }}">Teknik Servis</a></h4>
                    <p>Türkiye genelinde yaygın servis ağımız ve deneyimli teknik ekibimizle, tüm cihazlarınızın kesintisiz çalışmasını sağlıyoruz. Proaktif bakım yaklaşımımız ve hızlı müdahale süremizle, cihaz arıza sürelerini minimize ediyor, işletme maliyetlerinizi düşürüyoruz.</p>
                    <ul class="mt-3">
                        <li>7/24 Teknik Destek - Uzaktan ve yerinde hızlı çözüm desteği</li>
                        <li>Periyodik Bakım - Düzenli kontrol ve kalibrasyon hizmetleri</li>
                        <li>Yerinde Servis - Deneyimli teknik ekip ile yerinde müdahale</li>
                        <li>Yedek Parça Garantisi - Orijinal yedek parça ve sarf malzeme temini</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->

<!-- Start Call Action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>Sağlık Kurumunuz İçin En Uygun Çözümü Keşfedin</h2>
                    <p>30 yıllık deneyimimiz ve uzman kadromuzla, kurumunuzun ihtiyaçlarına özel çözümler sunuyoruz. Size özel finansman seçenekleri, teknik destek ve eğitim programlarımız hakkında bilgi almak için hemen iletişime geçin.</p>
                    <div class="button">
                        <a href="{{ route('contact') }}" class="btn">Ücretsiz Danışmanlık Alın</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action -->
@endsection

@push('styles')
<style>
.single-service {
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.single-service:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.single-service ul {
    list-style: none;
    padding-left: 20px;
    margin-top: 15px;
}

.single-service ul li {
    position: relative;
    padding-left: 25px;
    margin-bottom: 12px;
    font-size: 14px;
    color: #666;
    line-height: 1.6;
}

.single-service ul li:before {
    content: "•";
    position: absolute;
    left: 0;
    color: #1A76D1;
    font-size: 18px;
    top: -2px;
}

.single-service p {
    color: #666;
    line-height: 1.8;
    margin: 15px 0;
}

.single-service h4 {
    margin-top: 20px;
    margin-bottom: 15px;
}

.single-service i {
    font-size: 40px;
    color: #1A76D1;
    margin-bottom: 20px;
    display: block;
}

.call-action {
    padding: 100px 0;
    background: #1A76D1;
    position: relative;
    margin-top: 40px;
}

.call-action .content {
    text-align: center;
    color: #fff;
}

.call-action .content h2 {
    color: #fff;
    margin-bottom: 20px;
    font-size: 36px;
}

.call-action .content p {
    color: #fff;
    margin-bottom: 30px;
}

.call-action .btn {
    background: #fff;
    color: #1A76D1;
    padding: 15px 30px;
    font-weight: 600;
    font-size: 16px;
    border-radius: 5px;
}

.call-action .btn:hover {
    background: #f4f4f4;
}
</style>
@endpush
