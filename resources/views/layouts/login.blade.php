<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/selectize.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/metismenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/simplebar.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dropzone.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/top-page.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="main-header-area">
            <!-- Start Topbar Area -->
            <div class="topbar-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <ul class="topbar-social-list">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <ul class="topbar-action">
                                <li>
                                    <a href="{{route('login')}}"><i class="flaticon-user"></i> ????????????</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar Area -->

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="container">
                        <div class="main-responsive-menu">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/images/logo-2.png')}}" class="white-logo" alt="logo">
                                    <img src="{{asset('assets/images/logo.png')}}" class="black-logo" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="{{asset('assets/images/logo-2.png')}}" class="white-logo" alt="logo">
                                <img src="{{asset('assets/images/logo.png')}}" class="black-logo" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">
                                            ??????????????????                                          
                                        </a>
                                       
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('search')}}" class="nav-link">
                                            ???????????? 
                                        </a>

                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('service')}}" class="nav-link">
                                            ??????????????????
                                        </a>

                                    </li>
        
                                    <!-- <li class="nav-item">
                                        <a href="" class="nav-link">
                                            ???????????????
                                        </a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a href="{{route('company')}}" class="nav-link">
                                            ??????????????????????????????
                                        </a>
                                    </li>

                                </ul>

                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <a href="{{route('user_register')}}" class="default-btn"> 30??????????????? </a>
                                    </div>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Header Area -->


        <!-- Start Page Banner Area -->
        <div class="page-banner-area item-bg-four" style="height: 660px;">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="content">
                            <h1 style="text-align: left;">
                                <div class="text_1"><span class="bold_text">??????</span>???<span class="bold_text">??????</span>???</div>
                                <div class="text_2"><span class="normal_text">???????????????</span></div>
                            </h1>

                            <div class="description_1">Professional???????????????????????????????????????????????????????????????????????????</div>
                            <div class="description_2">??????????????????????????????????????????????????????????????????</div>
                            <div class="description_3">?????????????????????????????????????????????????????????????????????????????????</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        

        @yield('content')

        @yield('scripts')



        <!-- Start Footer Area -->
        <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="{{route('home')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt="image"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetet ur sadipscing elitr sed diam nonumy eirmod tempor invidunt labore.</p>

                            <ul class="widget-social-links">
                                <li><span>Follow:</span></li>

                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>Company</h3>

                            <ul class="quick-links">
                                <li><a href="">About Eeza</a></li>
                                <li><a href="">Browse Jobs</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Candidate Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Resources</h3>

                            <ul class="quick-links">
                                <li><a href="">Blog</a></li>
                                <li><a href="">Post A Job</a></li>
                                <li><a href="">Candidates</a></li>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Contact</h3>
                            
                            <ul class="widget-info">
                                <li>
                                    <i class="flaticon-a"></i>
                                    32, Wales Street, New York, USA
                                </li>

                                <li>
                                    <i class="flaticon-p"></i>
                                    <a href="tel:00901361246725">(009)01361246725</a>
                                </li>

                                <li>
                                    <i class="flaticon-e"></i>
                                    <a href="mailto:hello@eeza.com">hello@eeza.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <p>
                        <i class="ri-copyright-line"></i> 2021 Eeza. All Rights Reserved by 
                        <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
                    </p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Links of JS files -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script> 
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('assets/js/selectize.min.js')}}"></script>
        <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/js/dropzone.min.js')}}"></script>
        <script src="{{asset('assets/js/sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script>
            var route_notification = "{{route('notification')}}";
            var base_path = "{{route('home')}}";
            var token = "{{ csrf_token() }}";
            var path_storage = "{{asset('storage/')}}";
            var path_svg = "{{asset('assets/images/dashboard/mailbox.svg')}}";
            var path_setting = "{{route('user_setting')}}";
            var base_url = "{{url('')}}";
        </script>
        
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/login.js')}}"></script>

    </body>
</html>