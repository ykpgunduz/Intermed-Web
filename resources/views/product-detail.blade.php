@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay" style="background-image: url('{{ asset('img/product-detail-breadcrumb.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2 style="color: #fff;">Ürün Detay</h2>
                    <p style="color: #fff; margin-top: 20px; max-width: 800px;">Medikal görüntüleme sistemlerimiz hakkında detaylı teknik bilgi ve özellikler. Ürünlerimizin avantajlarını ve kullanım alanlarını keşfedin.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

@endsection
