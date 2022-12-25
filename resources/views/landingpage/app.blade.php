<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('asset/landingpage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/fonts/feather/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('asset/landingpage/css/style.css')}}">

    <title>Append Free HTML Template by Untree.co</title>
</head>
<body>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<div class="container">


    <nav class="site-nav">
        <div class="logo">
            <a href="index.html" class="text-white">Append<span class="text-black">.</span></a>
        </div>
        <div class="row align-items-center">

            @include('landingpage.navbar')

        </div>
    </nav> <!-- END nav -->

</div> <!-- END container -->

    @yield('content')

    @include('landingpage.footer')


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script src="{{asset('asset/landingpage/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/popper.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/aos.js')}}"></script>
<script src="{{asset('asset/landingpage/js/imagesloaded.pkgd.js')}}"></script>
<script src="{{asset('asset/landingpage/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('asset/landingpage/js/custom.js')}}"></script>


</body>
</html>
