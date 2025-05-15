@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/product-detail-breadcrumb.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Ürün Detay</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Ana Sayfa</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li><a href="{{ route('products') }}">Ürünler</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">{{ $product->name ?? 'Ürün Detay' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

@endsection
