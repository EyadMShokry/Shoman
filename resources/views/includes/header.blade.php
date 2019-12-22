<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">

    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{asset("css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery.timepicker.css")}}">


    <link rel="stylesheet" href="{{asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>
<!-- START nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span class="flaticon-auction"></span>@lang('header.company_name')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('home', ['locale' => 'en'])}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('about_us', ['en'])}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Practice Areas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Attorneys</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Case Studies</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->