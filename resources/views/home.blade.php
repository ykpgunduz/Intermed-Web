@extends('layouts.app')

@section('content')
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Slider 1 -->
				<div class="single-slider" style="background: #fff url({{ asset('img/banner-1.jpeg') }}) no-repeat bottom; background-size: contain;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-7 text-center" style="margin-top: -50px;">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>Sağlık Sektörünün</span> <span>Güvenilir</span> <span>Çözüm Ortağı</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Yılları aşkın deneyimimizle, son teknoloji medikal cihazlar ve üstün kalite standartlarıyla sağlık sektörüne öncülük ediyoruz. İntermed ile geleceğin sağlık teknolojileri yanınızda.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 2 -->
				<div class="single-slider" style="background: #e5e5e5 url({{ asset('img/banner-2.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> Superconducting<br>MRI System</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">A reborn and empowered wide bore 1.5T MRI System</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">MRI Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 3 -->
				<div class="single-slider" style="background: #efeff1 url({{ asset('img/banner-3.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> Permanent<br>MRI System</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">New generation midfield MRI system Industrial leading technology</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">MRI Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 4 -->
				<div class="single-slider" style="background: #fff url({{ asset('img/banner-4.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> Permanent<br>MRI System For Veterinary</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">A specific veterinary MRI solution The 6th Generation of ANKE permanent MRI system</p>
									<div class="button">
                                        <a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">MRI Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 5 -->
				<div class="single-slider" style="background: #e5e5e5 url({{ asset('img/banner-5.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> CT Series</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Cutting-Edge 128-Slice CT Scanner</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">CT Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 6 -->
				<div class="single-slider" style="background: #e5e5e5 url({{ asset('img/banner-6.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> CT Series</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Cutting-Edge 256-Slice CT Scanner</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">CT Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 7 -->
				<div class="single-slider" style="background: #fff url({{ asset('img/banner-7.jpg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Fluoroscopy Devices</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Fully Automatic Versatile Digital Fluoroscopy System</p>
									<div class="button">
                                        <a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">Fluoroscopy Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 8 -->
				<div class="single-slider" style="background: #efeff1 url({{ asset('img/banner-8.png') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Mammography Devices<br><span>Femina Digital</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Digital Mammography Device Impact With An Early Diagnosis</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">Mammography Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 9 -->
				<div class="single-slider" style="background: #efeff1 url({{ asset('img/banner-9.png') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Polyrad Premium Csx<br><span>Radiography</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Full Automatic Multi Purpose Double Detector X-Ray System</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">Röntgen Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <!-- Slider 10 -->
				<div class="single-slider" style="background: #fff url({{ asset('img/banner-10.png') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Digital DXA. Radioscore-DR<br><span>Densitometry</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Digital densitometer with control software<br>for accurate diagnosis of total and local bone density.</p>
									<div class="button">
										<a href="#" class="btn">Ürünü İncele</a>
										<a href="#" class="btn primary">Densitometry Series</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Sağlık Sektörüne Yenilikçi Görüntüleme Çözümleri Sunuyoruz</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>En son teknoloji tıbbi görüntüleme sistemleri ile sağlık hizmetlerinizi ileriye taşıyın</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Biz Kimiz?</h3>
							<p>Medikal görüntüleme sektöründe 20 yılı aşkın deneyimimizle, hastanelere ve sağlık kuruluşlarına en gelişmiş görüntüleme sistemlerini sunuyoruz. MR, röntgen ve ultrason cihazlarında uzmanlaşmış ekibimizle yanınızdayız.</p>
							<p>Satış sonrası teknik servis ve eğitim desteğimizle kesintisiz hizmet garantisi veriyoruz.</p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Profesyonel Kurulum</li>
										<li><i class="fa fa-caret-right"></i>7/24 Teknik Destek</li>
										<li><i class="fa fa-caret-right"></i>Uzman Kadro</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Hızlı Servis Ağı</li>
										<li><i class="fa fa-caret-right"></i>Yerinde Eğitim</li>
										<li><i class="fa fa-caret-right"></i>Yedek Parça Garantisi</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->

		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Tıbbi Cihaza mı İhtiyacınız Var?<br>Bizi Arayın<br>+994 50 235 26 86</h2>
							<p>Tıbbi cihaz ihtiyaçlarınız için 7/24 yanınızdayız. Uzman ekibimiz size en uygun çözümü sunmak için hazır.</p>
							<div class="button">
								<a href="tel:+994502352686" class="btn">Hemen İletişime Geçin</a>
								<a href="/contact" class="btn second">Daha Fazla Bilgi<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Kataloğumuzdan Bazı Ürünler</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>Geniş ürün yelpazemizde MR, röntgen, ultrason ve diğer tıbbi görüntüleme sistemleri bulunmaktadır. En son teknoloji ile donatılmış cihazlarımız, yüksek kalite ve güvenilirlik standartlarını karşılamaktadır.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-2.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-3.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-4.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-5.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-6.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-7.jpg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-8.png') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-9.png') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">Detaylı İncele</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->

        <!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<div style="height: 200px; display: flex; align-items: center; justify-content: center;">
									<img src="{{ asset('img/anke-logo.png') }}" alt="#" style="max-height: 100px; width: auto; object-fit: contain;">
								</div>
							</div>
							<div class="single-clients">
								<div style="height: 200px; display: flex; align-items: center; justify-content: center;">
									<img src="{{ asset('img/radiologia-logo.png') }}" alt="#" style="max-height: 150px; width: auto; object-fit: contain;">
								</div>
							</div>
							<div class="single-clients">
								<div style="height: 200px; display: flex; align-items: center; justify-content: center;">
									<img src="{{ asset('img/mindways-logo.png') }}" alt="#" style="max-height: 200px; width: auto; object-fit: contain;">
								</div>
							</div>
							<div class="single-clients">
								<div style="height: 200px; display: flex; align-items: center; justify-content: center;">
									<img src="{{ asset('img/us-xray-logo.png') }}" alt="#" style="max-height: 190px; width: auto; object-fit: contain;">
								</div>
							</div>
							<div class="single-clients">
								<div style="height: 200px; display: flex; align-items: center; justify-content: center;">
									<img src="{{ asset('img/intermed-logo.png') }}" alt="#" style="max-height: 100px; width: auto; object-fit: contain;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->

		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Sağlık Sektörüne Yönelik Çözümlerimiz</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>Tıbbi görüntüleme alanında en son teknolojiye sahip cihazlarla hizmetinizdeyiz</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-medical-sign"></i>
							<h4><a href="service-details.html">MR Sistemleri</a></h4>
							<p>En son teknoloji MR cihazlarımız ile yüksek çözünürlüklü ve detaylı görüntüleme imkanı sunuyoruz.</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-xray"></i>
							<h4><a href="service-details.html">Röntgen Sistemleri</a></h4>
							<p>Dijital ve analog röntgen cihazlarımız ile hızlı ve güvenilir görüntüleme hizmeti sağlıyoruz.</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa fa-heartbeat"></i>
							<h4><a href="service-details.html">Ultrason Sistemleri</a></h4>
							<p>Yüksek performanslı ultrason cihazlarımız ile hassas ve net görüntüleme imkanı sunuyoruz.</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-bone"></i>
							<h4><a href="service-details.html">Kemik Dansitometre</a></h4>
							<p>Kemik mineral yoğunluğu ölçümü için güvenilir ve hassas sonuçlar veren sistemler.</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">Dental Görüntüleme</a></h4>
							<p>Diş hekimliği için özel tasarlanmış panoramik ve periapikal röntgen sistemleri.</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tools"></i>
							<h4><a href="service-details.html">Teknik Servis</a></h4>
							<p>Tüm cihazlarımız için profesyonel bakım, onarım ve kalibrasyon hizmetleri sunuyoruz.</p>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->

		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Tıbbi Görüntüleme Dünyasından Son Gelişmeler</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>Sağlık teknolojileri ve görüntüleme sistemleri hakkında güncel haberler</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{ asset('img/blog1.jpg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">15 Ocak, 2024</div>
									<h2><a href="blog-single.html">Yapay Zeka Destekli MR Görüntüleme: Yeni Nesil Teşhis</a></h2>
									<p class="text">Modern MR sistemlerinde yapay zeka teknolojisinin kullanımı, teşhis sürecini nasıl hızlandırıyor ve doğruluk oranını nasıl artırıyor? Detaylı incelememiz ile keşfedin.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{ asset('img/blog2.jpg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">10 Ocak, 2024</div>
									<h2><a href="blog-single.html">Dijital Röntgen Sistemlerinin Avantajları</a></h2>
									<p class="text">Geleneksel röntgen sistemlerinden dijital sistemlere geçişin hasta ve hekim açısından sağladığı faydalar, maliyet analizi ve çevresel etkileri ele alıyoruz.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{ asset('img/blog3.jpg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">5 Ocak, 2024</div>
									<h2><a href="blog-single.html">4D Ultrason Teknolojisindeki Son Yenilikler</a></h2>
									<p class="text">Modern 4D ultrason cihazlarının sunduğu yüksek çözünürlüklü görüntüleme teknolojisi ve klinik uygulamalardaki başarılı sonuçları inceliyoruz.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
@endsection
