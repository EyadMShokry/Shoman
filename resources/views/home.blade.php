@extends('layouts.master')
@section('title', @trans('header.company_name'))
@section('content')

    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url({{asset("images/slider_1.jpg")}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                     data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('slider.title1')</h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('slider.desc1')</p>
                        <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3" data-toggle="modal"
                              data-target="#modalRequest">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url({{asset("images/slider_4.jpg")}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                     data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('slider.title2')</h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('slider.desc2')</p>
                        <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3" data-toggle="modal"
                              data-target="#modalRequest">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <form action="#" class="getaquote-form">
                        <h3>Request A Quote</h3>
                        <div class="wrap">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                      placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="row pl-md-4">
                        <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-bar-chart"></span>
                                </div>
                                <div class="media-body pl-4">
                                    <h3 class="heading">@lang('home.package1')</h3>
                                    <p>@lang('home.desc1')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-balance"></span>
                                </div>
                                <div class="media-body pl-4">
                                    <h3 class="heading">@lang('home.package2')</h3>
                                    <p>@lang('home.desc2')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-balance"></span>
                                </div>
                                <div class="media-body pl-4">
                                    <h3 class="heading">@lang('home.package3')</h3>
                                    <p>@lang('home.desc3')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-balance"></span>
                                </div>
                                <div class="media-body pl-4">
                                    <h3 class="heading">@lang('home.package4')</h3>
                                    <p>@lang('home.desc4')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-balance"></span>
                                </div>
                                <div class="media-body pl-4">
                                    <h3 class="heading">@lang('home.package5')</h3>
                                    <p>@lang('home.desc5')</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                     style="background-image: url({{asset("images/shoman_about.jpg")}});">
                    <a style="opacity: 0.75" , onmouseover="this.style.opacity = 1.0" ,
                       onmouseout="this.style.opacity = 0.75" href="{{asset("images/ShoUman-Law-Firm-.mp4")}}"
                       class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">Company Overview</span>
                            <h2 class="mb-4">Learned about the Law</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin
                            would be
                            the word "and" and the Little Blind Text should turn around and return to its own, safe
                            country.
                            But nothing the copy said could convince her and so it didn’t take long until a few
                            insidious
                            Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                            agency, where they abused her for their.</p>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline
                            of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                            road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                            way.</p>
                        <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-counter img" id="section-counter"
             style="background-image: url({{asset("images/bg_3.jpg")}});"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-lg-4">
                    <div class="heading-section pl-md-5 heading-section-white">
                        <div class="ftco-animate">
                            <span class="subheading">Some</span>
                            <h2 class="mb-4">Interesting Facts</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="18000">0</strong>
                                    <span>Trusted clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Solved Cases</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1230">0</strong>
                                    <span>Awards Win</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="800">0</strong>
                                    <span>Winning Case</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last"
                     style="background-image: url({{asset("images/shoman_help2.jpg")}});">
                </div>
                <div class="col-md-7 wrap-about ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pr-md-5 mr-md-5 text-md-right">
                            <span class="subheading">@lang('home.other_services')</span>
                            <h2 class="mb-4">@lang('home.we_can_help')</h2>
                        </div>
                    </div>
                    <div class="pr-md-5 pl-md-5 mr-md-5 mb-5">
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-balance"></span>
                            </div>
                            <div class="media-body pr-4 order-md-first text-md-right">
                                <h3 class="heading">@lang('home.real_estate')</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-balance"></span>
                            </div>
                            <div class="media-body pr-4 order-md-first text-md-right">
                                <h3 class="heading">@lang('home.establishing_ompanies')</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-balance"></span>
                            </div>
                            <div class="media-body pr-4 order-md-first text-md-right">
                                <h3 class="heading">@lang('home.trademarks')</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-balance"></span>
                            </div>
                            <div class="media-body pr-4 order-md-first text-md-right">
                                <h3 class="heading">@lang('home.patents')</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    {{--<section class="ftco-section bg-light">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center mb-5 pb-3">--}}
    {{--            <div class="col-md-7 text-center heading-section ftco-animate">--}}
    {{--                <span class="subheading">Practice Areas</span>--}}
    {{--                <h2 class="mb-4">Practice Areas</h2>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row d-flex justify-content-center">--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-family"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Family Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-auction"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Business Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-shield"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Insurance Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-handcuffs"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Criminal Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-house"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Property Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-employee"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Employment Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-fire"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Fire Accident</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-money"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Financial Law</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-medicine"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Drug Offenses</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-lg-2 text-center">--}}
    {{--                <div class="practice-area ftco-animate">--}}
    {{--                    <div class="icon d-flex justify-content-center align-items-center">--}}
    {{--                        <span class="flaticon-handcuffs"></span>--}}
    {{--                    </div>--}}
    {{--                    <h3><a href="#">Sexual Offenses</a></h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live
                        the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="user-img mb-5"
                                         style="background-image: url({{asset("images/adminpanel/testimonials/".$testimonial->image)}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5 pl-4 line">{{$testimonial->quote}}</p>
                                        <p class="name">{{$testimonial->name}}</p>
                                        <span class="position">{{$testimonial->position}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="ftco-section bg-primary">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center mb-5 pb-3">--}}
    {{--            <div class="col-md-7 heading-section ftco-animate text-center">--}}
    {{--                <span class="subheading">Working Process</span>--}}
    {{--                <h2 class="mb-4">Our Working Way</h2>--}}
    {{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live--}}
    {{--                    the blind texts. Separated they live in</p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row steps d-flex">--}}
    {{--            <div class="col-md-4 d-flex ftco-animate">--}}
    {{--                <div class="step d-flex align-self-stretch">--}}
    {{--                    <span>#01</span>--}}
    {{--                    <h3>Analyzing Case</h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-4 d-flex ftco-animate">--}}
    {{--                <div class="step d-flex align-self-stretch">--}}
    {{--                    <span>#02</span>--}}
    {{--                    <h3>Research &amp; Investigation</h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-4 d-flex ftco-animate">--}}
    {{--                <div class="step d-flex align-self-stretch">--}}
    {{--                    <span>#03</span>--}}
    {{--                    <h3>Court of Law Success</h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}

    <section class="ftco-section mt-5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Experienced Attorneys</span>
                    <h2 class="mb-4">Meet our attorneys</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live
                        the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url({{asset("images/person_1.jpg")}});"></div>
                        <div class="text pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Family Lawyer</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url({{asset("images/person_2.jpg")}});"></div>
                        <div class="text pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Consumer Lawyer</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url({{asset("images/person_3.jpg")}});"></div>
                        <div class="text pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Criminal Lawyer</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url({{asset("images/person_4.jpg")}});"></div>
                        <div class="text pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Business Lawyer</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Our latest update</span>
                    <h2 class="mb-4">Case Studies</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live
                        the blind texts. Separated they live in</p>
                </div>
            </div>


{{--            <div class="row">--}}
{{--                <div class="col-md-4 ftco-animate">--}}
{{--                    <div class="blog-entry">--}}
{{--                        <a href="blog-single.html" class="block-20"--}}
{{--                           style="background-image: url({{asset("images/image_1.jpg")}});">--}}
{{--                        </a>--}}
{{--                        <div class="text d-flex py-4">--}}
{{--                            <div class="meta mb-3">--}}
{{--                                <div><a href="#">Sep. 20, 2018</a></div>--}}
{{--                                <div><a href="#">Admin</a></div>--}}
{{--                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--                            </div>--}}
{{--                            <div class="desc pl-3">--}}
{{--                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the--}}
{{--                                        blind texts</a></h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach($cases as $case)
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20"
                               style="background-image: url({{asset("images/adminpanel/cases/".$case->image)}});">
                            </a>
                            <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                    <div><a href="#">{{$case->date}}</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="#">{{$case->name}}</a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{--                <div class="col-md-4 ftco-animate">--}}
{{--                    <div class="blog-entry" data-aos-delay="100">--}}
{{--                        <a href="blog-single.html" class="block-20"--}}
{{--                           style="background-image: url({{asset("images/image_2.jpg")}});">--}}
{{--                        </a>--}}
{{--                        <div class="text d-flex py-4">--}}
{{--                            <div class="meta mb-3">--}}
{{--                                <div><a href="#">Sep. 20, 2018</a></div>--}}
{{--                                <div><a href="#">Admin</a></div>--}}
{{--                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--                            </div>--}}
{{--                            <div class="desc pl-3">--}}
{{--                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the--}}
{{--                                        blind texts</a></h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 ftco-animate">--}}
{{--                    <div class="blog-entry" data-aos-delay="200">--}}
{{--                        <a href="blog-single.html" class="block-20"--}}
{{--                           style="background-image: url({{asset("images/image_3.jpg")}});">--}}
{{--                        </a>--}}
{{--                        <div class="text d-flex py-4">--}}
{{--                            <div class="meta mb-3">--}}
{{--                                <div><a href="#">Sep. 20, 2018</a></div>--}}
{{--                                <div><a href="#">Admin</a></div>--}}
{{--                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--                            </div>--}}
{{--                            <div class="desc pl-3">--}}
{{--                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the--}}
{{--                                        blind texts</a></h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    <section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5" id="map">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-md-5 pl-md-5 mt-5 pt-3">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">Contact Information</span>
                            <h2 class="mb-4">You may Contact Us here</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5">
                        <div class="info-contact mb-5">
                            <p><span>Phone:</span> <span>+20 102 088 9506</span></p>
                            <p><span>E-Mail:</span> <span><a href="#">info@shouman-lawfirm.com</a></span></p>
                        </div>
                        <div class="info-contact mb-5">
                            <h3>Address Information</h3>
                            <p><span>Address</span> <span>@lang('footer.address')</span>
                            </p>
                            <p><span>E-Mail:</span> <span><a href="#">info@shouman-lawfirm.com</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAppointmentLabel">Request a Quote</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="appointment_name" class="text-black">Full Name</label>
                            <input type="text" class="form-control" id="appointment_name">
                        </div>
                        <div class="form-group">
                            <label for="appointment_email" class="text-black">Email</label>
                            <input type="text" class="form-control" id="appointment_email">
                        </div>
                        <div class="form-group">
                            <label for="appointment_phone" class="text-black">Phone Number</label>
                            <input type="text" class="form-control" id="appointment_email">
                        </div>

                        <div class="form-group">
                            <label for="appointment_message" class="text-black">Message</label>
                            <textarea name="" id="appointment_message" class="form-control" cols="30"
                                      rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
