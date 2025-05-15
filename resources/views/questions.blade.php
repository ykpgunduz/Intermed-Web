@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/faq-breadcrumb.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Sıkça Sorulan Sorular</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Ana Sayfa</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">SSS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

@endsection
