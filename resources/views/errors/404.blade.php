<!doctype html>
<html class="no-js" lang="tr">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
        <title>404 - Sayfa Bulunamadı</title>

		<!-- Favicon -->
        <link rel="icon" href="{{ asset('img/favicon.png') }}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row" style="height: 100vh; display: flex; align-items: center; justify-content: center;">
                <div class="col-lg-6 text-center">
                    <h1 style="font-size: 120px; color: #1977cc;">404</h1>
                    <h2 style="margin-bottom: 30px;">Sayfa Bulunamadı</h2>
                    <p style="margin-bottom: 30px;">Aradığınız sayfa bulunamadı veya taşınmış olabilir.</p>
                    <a href="{{ url('/') }}" class="btn" style="background: #1977cc; color: #fff; padding: 12px 30px; border-radius: 50px; text-decoration: none;">Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>

        <!-- jquery Min JS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
