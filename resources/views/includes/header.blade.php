<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">


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
{{--    <link rel="stylesheet" href="{{asset("css/whisper_style.css")}}">--}}
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
                <li class="nav-item active"><a href="{{route('home', ['lang' => 'en'])}}" class="nav-link">@lang('header.home')</a></li>
                <li class="nav-item"><a href="{{route('about_us', ['en'])}}" class="nav-link">@lang('header.about')</a></li>
                <li class="nav-item"><a href="{{route('our_services', ['en'])}}" class="nav-link">@lang('header.our_services')</a></li>
                <li class="nav-item"><a href="{{route('attorneys', ['en'])}}" class="nav-link">@lang('header.attorneys')</a></li>
                <li class="nav-item"><a href="{{route('case_studies', ['en'])}}" class="nav-link">@lang('header.case_studies')</a></li>
                <li class="nav-item"><a href="#" class="nav-link">@lang('header.blog')</a></li>
                <li class="nav-item"><a href="#" class="nav-link">@lang('header.vacancies')</a></li>
                <li class="nav-item"><a href="#" class="nav-link">@lang('header.trainings')</a></li>
                <li class="nav-item"><a href="{{route('contact', ['en'])}}" class="nav-link">@lang('header.contact')</a></li>
                <li class="nav-item"><a href="#" class="nav-link">@lang('header.login')</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->