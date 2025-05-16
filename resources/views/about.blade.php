@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/hakkimizda-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2 style="color: #fff;">{{ __('messages.about') }}</h2>
                    <p style="color: #fff; margin: 20px auto 0; max-width: 800px;">{{ __('messages.about_desc') }}</p>
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
                    <h2>{{ __('messages.about_title') }}</h2>
                    <img src="{{ asset('img/section-img.png') }}" alt="#">
                    <p>{{ __('messages.about_subtitle') }}</p>
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
                    <h3>{{ __('messages.technical_support') }}</h3>
                    <p>{{ __('messages.technical_support_text') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Özellik 2 -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>{{ __('messages.quality_products') }}</h3>
                    <p>{{ __('messages.quality_products_text') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Özellik 3 -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>{{ __('messages.training_consulting') }}</h3>
                    <p>{{ __('messages.training_consulting_text') }}</p>
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
                        <p>{{ __('messages.happy_clients') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 2 -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">14</span>
                        <p>{{ __('messages.expert_technicians') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 3 -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">78</span>
                        <p>{{ __('messages.installations') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- İstatistik 4 -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">10</span>
                        <p>{{ __('messages.years_experience') }}</p>
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
                            <h3 style="color: #1977cc; margin-bottom: 25px; font-size: 1.8em;">{{ __('messages.about') }}</h3>
                            <p class="mb-4">{{ __('messages.about_paragraph_1') }}</p>

                            <p class="mb-4">{{ __('messages.about_paragraph_2') }}</p>

                            <p class="mb-4">{{ __('messages.about_paragraph_3') }}</p>
                        </div>

                        <div class="experience-section" style="margin-top: 30px;">
                            <h3 style="color: #1977cc; margin-bottom: 20px; font-size: 1.8em;">{{ __('messages.our_experience') }}</h3>
                            <p style="font-size: 1.1em; line-height: 1.8; color: #444;">{{ __('messages.experience_paragraph') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
