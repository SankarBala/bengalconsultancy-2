<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bengal Consultancy visa services</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all" />

    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nivo-slider.css') }}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-text.css') }}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" type="text/css" media="all" /> -->
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-default.css') }}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" type="text/css"
        media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.css') }}" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/widget.css') }}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @stack('style')

    <style>
        .modal-link {
            display: inline-block !important;
            font-size: 15px !important;
            margin: 35px 8px !important;
            text-transform: capitalize !important;
            font-weight: 700 !important;
            color: rgb(0, 0, 0) !important;
        }

        .modal-link:hover {
            text-decoration: none !important;
        }

        .float {
            position: fixed;
            height: 40px;
            top: 0px;
            right: 100px;
            text-align: center;
            z-index: 9999;
        }

        .footer-area {
            position: relative !important;
            z-index: 9900;
        }
    </style>


</head>

<body onscroll="bodyScrolled()">

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <script>
        //   window.fbAsyncInit = function() {
        //     FB.init({
        //       xfbml: true,
        //       version: 'v10.0'
        //     });
        //   };

        //   (function(d, s, id) {
        //     var js, fjs = d.getElementsByTagName(s)[0];
        //     if (d.getElementById(id)) {return;}
        //     js = d.createElement(s); js.id = id;
        //     js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
        //     fjs.parentNode.insertBefore(js, fjs);
        //   }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="103489751970972" theme_color="#0084ff"
        logged_in_greeting="Hi! How can we help you?" logged_out_greeting="Hi! How can we help you?">
    </div>

    <div class="float p-2">
        <a class="ml-1  {{ App::isLocale('bn') ? 'text-danger' : 'text-info' }}"
            href="{{ route('lang', 'en') }}">English</a>
        <a class="ml-1  {{ App::isLocale('bn') ? 'text-info' : 'text-danger' }}"
            href="{{ route('lang', 'bn') }}">বাংলা</a>
    </div>


    <div class="header-area transparent" id="sticky-header">
        <div class="container">
            <div class="m-logo">
                <a href="{{ route('home') }}"><span class="logo-txt"></span></a>
            </div>
            <div class="menu-toggle"><i class="fas fa-bars"></i></div>
            <div class="menu-wrapper">
                <div class="row align-items-center d-flex">
                    <div class="col-md-3 col-lg-4 px-1">
                        <div class="header-logo">
                            <a class="main-logo000" href="{{ route('home') }}">
                                <img class="d-inline" style="width: 330px; height:60px;"
                                    src="{{ asset('frontend/assets/images/logo.png') }}" alt="" />

                            </a>
                            {{-- <a class="stiky-logo" href="{{ route('home') }}">
                                <img class="d-inline" style="width: 320px; height:80px;"
                                    src="{{ asset('frontend/assets/images/logo.png') }}" alt="" />
                            </a> --}}
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 px-0 pl-2 pt-1 text-dark text-bold">
                        <p class="m-0 text-nowrap"><i class="fa fa-phone mx-0 px-0 mr-1"></i>{{ env('APP_PHONE') }}
                        </p>
                        {{-- <p class="m-0 text-nowrap"> --}}
                        {{-- <i class="fa fa-envelope mx-0 px-0 mr-1"></i>{{ env('APP_EMAIL') }} --}}
                        {{-- </p> --}}
                    </div>

                    <div class="col-md-7 col-lg-6 px-1">
                        <div class="header-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">{{ __('menu.home') }}</a>
                                </li>
                                <li><a href="#">{{ __('menu.country') }} <span><i
                                                class="fas fa-angle-down text-dark"></i></span><span
                                            class="mobile-menu-icon"></i></span></a>
                                    <div class="sub-menu">
                                        <ul>
                                            @foreach ($countries as $country)
                                                <li>
                                                    <a href="{{ route('showCountry', $country->name) }}">
                                                        <img src="{{ Storage::url($country->national_flag) }}"
                                                            width="24px" height="18px" />
                                                        @if (App::isLocale('bn'))
                                                            {{ $country->nameBangla }}
                                                        @else
                                                            {{ $country->name }}
                                                        @endif
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">{{ __('menu.popular') }} <span><i
                                                class="fas fa-angle-down text-dark"></i></span><span
                                            class="mobile-menu-icon"></i></span></a>
                                    <div class="sub-menu">
                                        <ul>
                                            @foreach ($populars as $popular)
                                                <li>
                                                    <a href="{{ route('popular', $popular->name) }}">
                                                        <img src="{{ Storage::url($popular->national_flag) }}"
                                                            width="24px" height="18px" />
                                                        @if (App::isLocale('bn'))
                                                            {{ $popular->nameBangla }}
                                                        @else
                                                            {{ $popular->name }}
                                                        @endif
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('aboutUs') }}">{{ __('menu.aboutUs') }}</a></li>
                                <li><a href="{{ route('news') }}">{{ __('menu.news') }}</a></li>
                                <li><a href="{{ route('contactUs') }}">{{ __('menu.contactUs') }}</a></li>
                                <li><a href="{{ route('clientStatus') }}">{{ __('menu.checkStatus') }}</a></li>
                                {{-- <li>
                                    <button type="button" class="btn btn-link modal-link" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        {{ __('menu.checkStatus') }}
                                </button>
                                </li> --}}
                            </ul>
                            <div class="mobile-menu-social-icon d-lg-none mt-40">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('content')

    <!--==================================================-->

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content mb-30">
                        <div class="footer-logo">
                            {{-- <img src="{{ asset('frontend/assets/images/logo2.png') }}" alt=""> --}}
                            <h2 class="text-dark">{{ trans('footer.text1') }}</h2>
                        </div>
                        <div class="dreamit-footer-content">
                            <p>
                                <!-- {{ trans('footer.text2') }} -->
                            </p>
                        </div>
                        <div class="dreamit-footer-social-address">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content mb-30">
                        <div class="footer-title">
                            <h2> {{ trans('footer.text3') }}</h2>
                            <p></p>
                        </div>
                        <div class="footer-adderss">
                            <p><b>{{ trans('footer.text4') }}</b><br />
                                <span>{{ trans('footer.text5') }}</span>
                            </p>
                            <p><b>{{ trans('footer.phone') }}</b> <span>{{ trans('footer.phone_number') }}</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content mb-30">
                        <div class="footer-title">
                            <h2>{{ trans('footer.newsletter') }}</h2>
                            <p>
                                {{ trans('footer.text6') }}
                            </p>
                        </div>
                        <form method="post" action="{{ route('subscription') }}">
                            @csrf
                            <div class="subscribe-area">
                                <input class="subscribe-mail-box" type="email" placeholder="Enter Your Email...."
                                    required="" name="email">
                                <p class="text-white">{{ session('message') }}</p>
                                <button class="subscribe-button" type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="pt-15 text-dark small text-justify">
                <b>Disclaimer:</b> Due to the frequent changes of information/ requirement/ document by the respective
                embassy, Bengal Consultancy does not provide any confirmation, guarantee or representation, express or
                implied that the information contained or referenced herein is completely accurate or final. Bengal
                Consultancy has no Liability for Incorrect Information/incomplete application of clients, no liability
                for Events Not in Our Control, no liability for wasted costs and expenses. Bengal Consultancy is not
                involved in the process of assessment of visa applications, or their grant or refusal, and shall not be
                liable or responsible for any delay by the respective Embassy in assessing, granting or refusing any
                visa application or for the grant or rejection of any visa application.
            </div>

            <div class="bd-top-footer pt-15 pb-15 small text-dark text-center">
                &copy; Copyright 2019 - {{ date('Y') }} | Bengal Consultancy.
            </div>
        </div>
    </div>
    <!--==================================================-->

    <a href="https://wa.me/+8801944555500" target="_blank" class="whatsapp-btn">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
    
    <style>
    .whatsapp-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        z-index: 9999;
    }
    .whatsapp-btn img {
        width: 100%;
        height: auto;
    }
    </style>
    

    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="{{ asset('frontend/venobox/venobox.js') }}"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="{{ asset('frontend/venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.scrollUp.js') }}"></script>
    <!-- theme js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/theme.html') }}"></script>
    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
