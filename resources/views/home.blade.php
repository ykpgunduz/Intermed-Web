@extends('layouts.app')

@section('content')
		<!-- Slider Area -->
		<section class="slider">
			<!-- Desktop Slider -->
			<div class="hero-slider desktop-slider">
				<!-- Slider 1 -->
				<div class="single-slider desktop-slider" style="background: #fff url({{ asset('img/banner-1.jpeg') }}) no-repeat bottom; background-size: contain;">
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
				<div class="single-slider desktop-slider" style="background: #e5e5e5 url({{ asset('img/banner-2.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> Superconducting<br>MRI System</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">A reborn and empowered wide bore 1.5T MRI System</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mri_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 3 -->
				<div class="single-slider desktop-slider" style="background: #efeff1 url({{ asset('img/banner-3.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> Permanent<br>MRI System</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">New generation midfield MRI system Industrial leading technology</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mri_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 4 -->
				<div class="single-slider desktop-slider" style="background: #fff url({{ asset('img/banner-4.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> Permanent<br>MRI System For Veterinary</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">A specific veterinary MRI solution The 6th Generation of ANKE permanent MRI system</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mri_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 5 -->
				<div class="single-slider desktop-slider" style="background: #e5e5e5 url({{ asset('img/banner-5.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> CT Series</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Cutting-Edge 128-Slice CT Scanner</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.ct_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 6 -->
				<div class="single-slider desktop-slider" style="background: #e5e5e5 url({{ asset('img/banner-6.jpeg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"><span>İntermed</span> CT Series</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Cutting-Edge 256-Slice CT Scanner</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.ct_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 7 -->
				<div class="single-slider desktop-slider" style="background: #fff url({{ asset('img/banner-7.jpg') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Fluoroscopy Devices</h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Fully Automatic Versatile Digital Fluoroscopy System</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.fluoroscopy_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 8 -->
				<div class="single-slider desktop-slider" style="background: #efeff1 url({{ asset('img/banner-8.png') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Mammography Devices<br><span>Femina Digital</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Digital Mammography Device Impact With An Early Diagnosis</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mammography_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 9 -->
				<div class="single-slider desktop-slider" style="background: #efeff1 url({{ asset('img/banner-9.png') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Polyrad Premium Csx<br><span>Radiography</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Full Automatic Multi Purpose Double Detector X-Ray System</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.xray_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider 10 -->
				<div class="single-slider desktop-slider" style="background: #fff url({{ asset('img/banner-10.png') }}) no-repeat right 150px bottom; background-size: contain;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Digital DXA. Radioscore-DR<br><span>Densitometry</span></h1>
									<p style="color: #333; text-shadow: 1px 1px 2px rgba(255,255,255,0.3);">Digital densitometer with control software<br>for accurate diagnosis of total and local bone density.</p>
									<div class="button">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.densitometry_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Mobile Slider -->
			<div class="hero-slider mobile-slider" style="display: none;">
				<!-- Mobile Slider 1 -->
				<div class="single-slider" style="background: #ffffff;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;"><span>Sağlık Sektörünün</span> <span>Güvenilir</span><br><span>Çözüm Ortağı</span></h1>
										<p style="color: #333;">Yılları aşkın deneyimimizle, son teknoloji medikal cihazlar ve üstün kalite standartlarıyla sağlık sektörüne öncülük ediyoruz. İntermed ile geleceğin sağlık teknolojileri yanınızda.</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-1.jpeg') }}" alt="slider image">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 2 -->
				<div class="single-slider" style="background: #cacaca;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;"><span>İntermed</span> Superconducting<br>MRI System</h1>
										<p style="color: #333;">A reborn and empowered wide bore 1.5T MRI System</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-2.jpeg') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mri_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 3 -->
				<div class="single-slider" style="background: #e0e0e0;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;"><span>İntermed</span> Permanent<br>MRI System</h1>
										<p style="color: #333;">New generation midfield MRI system Industrial leading technology</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-3.jpeg') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mri_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 4 -->
				<div class="single-slider" style="background: #ffffff;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;"><span>İntermed</span> Permanent<br>MRI System For Veterinary</h1>
										<p style="color: #333;">A specific veterinary MRI solution The 6th Generation of ANKE permanent MRI system</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-4.jpeg') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mri_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 5 -->
				<div class="single-slider" style="background: #cacaca;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;"><span>İntermed</span> CT Series</h1>
										<p style="color: #333;">Cutting-Edge 128-Slice CT Scanner</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-5.jpeg') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.ct_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 6 -->
				<div class="single-slider" style="background: #cacaca;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;"><span>İntermed</span> CT Series</h1>
										<p style="color: #333;">Cutting-Edge 256-Slice CT Scanner</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-6.jpeg') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.ct_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 7 -->
				<div class="single-slider" style="background: #ffffff;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;">Fluoroscopy Devices</h1>
										<p style="color: #333;">Fully Automatic Versatile Digital Fluoroscopy System</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-7.jpg') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.fluoroscopy_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 8 -->
				<div class="single-slider" style="background: #f8f8f8;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;">Mammography Devices<br><span>Femina Digital</span></h1>
										<p style="color: #333;">Digital Mammography Device Impact With An Early Diagnosis</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-8.png') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.mammography_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 9 -->
				<div class="single-slider" style="background: #f5f5f5;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;">Polyrad Premium Csx<br><span>Radiography</span></h1>
										<p style="color: #333;">Full Automatic Multi Purpose Double Detector X-Ray System</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-9.png') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.xray_series') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Slider 10 -->
				<div class="single-slider" style="background: #ffffff;">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="mobile-slider-content">
									<div class="text text-center">
										<h1 style="color: #333;">Digital DXA. Radioscore-DR<br><span>Densitometry</span></h1>
										<p style="color: #333;">Digital densitometer with control software<br>for accurate diagnosis of total and local bone density.</p>
									</div>
									<div class="slider-image">
										<img src="{{ asset('img/banner-10.png') }}" alt="slider image">
									</div>
									<div class="button text-center">
										<a href="#" class="btn">{{ __('messages.view_product') }}</a>
										<a href="#" class="btn primary">{{ __('messages.densitometry_series') }}</a>
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
							<h2>{{ __('messages.innovative_solutions') }}</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>{{ __('messages.move_forward') }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>{{ __('messages.who_we_are') }}</h3>
							<p>{{ __('messages.experience_text') }}</p>
							<p>{{ __('messages.support_text') }}</p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>{{ __('messages.professional_installation') }}</li>
										<li><i class="fa fa-caret-right"></i>{{ __('messages.technical_support') }}</li>
										<li><i class="fa fa-caret-right"></i>{{ __('messages.expert_team') }}</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>{{ __('messages.fast_service') }}</li>
										<li><i class="fa fa-caret-right"></i>{{ __('messages.onsite_training') }}</li>
										<li><i class="fa fa-caret-right"></i>{{ __('messages.spare_parts') }}</li>
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
							<h2>{{ __('messages.call_to_action_title') }}<br>{{ __('messages.call_us') }}<br>+994 50 235 26 86</h2>
							<p>{{ __('messages.call_to_action_text') }}</p>
							<div class="button">
								<a href="tel:+994502352686" class="btn">{{ __('messages.contact_now') }}</a>
								<a href="/contact" class="btn second">{{ __('messages.more_info') }}<i class="fa fa-long-arrow-right"></i></a>
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
							<h2>{{ __('messages.catalog_products') }}</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>{{ __('messages.catalog_description') }}</p>
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
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-3.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-4.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-5.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-6.jpeg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-7.jpg') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-8.png') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
							</div>
							<div class="single-pf" style="height: 360px; overflow: hidden;">
								<img src="{{ asset('img/banner-9.png') }}" alt="#" style="width: 100%; height: 100%; object-fit: contain; background-color: #fff;">
								<a href="portfolio-details.html" class="btn">{{ __('messages.view_detail') }}</a>
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
							<h2>{{ __('messages.healthcare_solutions') }}</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>{{ __('messages.healthcare_solutions_subtitle') }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-medical-sign"></i>
							<h4><a href="service-details.html">{{ __('messages.mr_systems') }}</a></h4>
							<p>{{ __('messages.mr_systems_desc') }}</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-xray"></i>
							<h4><a href="service-details.html">{{ __('messages.xray_systems') }}</a></h4>
							<p>{{ __('messages.xray_systems_desc') }}</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="fa fa-heartbeat"></i>
							<h4><a href="service-details.html">{{ __('messages.ultrasound_systems') }}</a></h4>
							<p>{{ __('messages.ultrasound_systems_desc') }}</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-bone"></i>
							<h4><a href="service-details.html">{{ __('messages.bone_densitometer') }}</a></h4>
							<p>{{ __('messages.bone_densitometer_desc') }}</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">{{ __('messages.dental_imaging') }}</a></h4>
							<p>{{ __('messages.dental_imaging_desc') }}</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tools"></i>
							<h4><a href="service-details.html">{{ __('messages.technical_service') }}</a></h4>
							<p>{{ __('messages.technical_service_desc') }}</p>
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
							<h2>{{ __('messages.latest_news') }}</h2>
							<img src="{{ asset('img/section-img.png') }}" alt="#">
							<p>{{ __('messages.latest_news_subtitle') }}</p>
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
									<div class="date">{{ __('messages.blog_date_1') }}</div>
									<h2><a href="blog-single.html">{{ __('messages.blog_title_1') }}</a></h2>
									<p class="text">{{ __('messages.blog_desc_1') }}</p>
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
									<div class="date">{{ __('messages.blog_date_2') }}</div>
									<h2><a href="blog-single.html">{{ __('messages.blog_title_2') }}</a></h2>
									<p class="text">{{ __('messages.blog_desc_2') }}</p>
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
									<div class="date">{{ __('messages.blog_date_3') }}</div>
									<h2><a href="blog-single.html">{{ __('messages.blog_title_3') }}</a></h2>
									<p class="text">{{ __('messages.blog_desc_3') }}</p>
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

<style>
@media only screen and (max-width: 767px) {
    .desktop-slider {
        display: none !important;
    }

    .mobile-slider {
        display: block !important;
    }

    .mobile-slider-content {
        padding: 20px 0;
    }

    .mobile-slider-content .text {
        margin-bottom: 20px;
    }

    .mobile-slider-content .text h1 {
        font-size: 24px;
        line-height: 1.4;
        margin-bottom: 8px;
    }

    .mobile-slider-content .text p {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .mobile-slider-content .slider-image {
        margin: 20px 0;
        text-align: center;
    }

    .mobile-slider-content .slider-image img {
        width: 100%;
        height: auto;
        object-fit: contain;
        max-height: 300px;
    }

    .mobile-slider-content .button {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .mobile-slider-content .button .btn {
        margin: 0;
        padding: 10px 20px;
        flex: 0 1 auto;
        height: 45px;
        line-height: 25px;
        display: flex;
        align-items: center;
    }

    .single-slider {
        height: auto !important;
    }
}

.social li a{
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
}

#scrollUp{
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
}

</style>
