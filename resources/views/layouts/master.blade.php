<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Horizon Suites</title>

    <!-- Favicon -->
    <link rel="icon" href="/horizon/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/horizon/style.css">
    <link href="/horizon/js/reservation.js" rel="stylesheet" type="text/css" />
    <link href="/horizon/style.css" rel="stylesheet" /><!-- Sweet Alert -->
    <script src="/horizon/jquery-3.3.1.min.html"></script>
    <script src="/horizon/sweetalert2/dist/sweetalert2.min.js"></script>
    <link href="/horizon/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="loader"></div>
    </div> --}}
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput"
                        placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    @if (isset($abouts) && count($abouts) > 0)
                        @foreach ($abouts as $about)
                            <div class="col-6">
                                <div class="top-header-content">
                                    <a href="#"><i class="icon_phone"></i> <span>{{ $about->phone }}</span></a>
                                    <a href="#"><i class="icon_mail"></i> <span>{{ $about->email }}</span></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span
                                        class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="room">Rooms</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="booking">Book Now <i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->



    @yield('content')



    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        @if (isset($abouts) && count($abouts) > 0)
                            @foreach ($abouts as $about)
                                <div class="single-footer-widget mb-80">
                                    <!-- Footer Logo -->
                                    <a href="#" class="footer-logo"><img src="/img/core-img/logo2.png" alt=""></a>

                                    <h4>{{ $about->phone }}</h4>
                                    <span>{{ $about->email }}</span>
                                    <span>{{ $about->address }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Connect With Us</h5>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="" class="post-title">Facebook</a>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="" class="post-title">Twitter</a>
                            </div>
                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="" class="post-title">Instagram</a>
                            </div>

                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Home </a>
                                </li>
                                <li><a href="room"><i class="fa fa-caret-right" aria-hidden="true"></i> Our
                                        Room</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#"
                                    target="_blank">Horizon Suites</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="/horizon/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="/horizon/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/horizon/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="/horizon/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="/horizon/js/default-assets/active.js"></script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        // var Tawk_API = Tawk_API || {},
        //     Tawk_LoadStart = new Date();
        // (function() {
        //     var s1 = document.createElement("script"),
        //         s0 = document.getElementsByTagName("script")[0];
        //     s1.async = true;
        //     s1.src = 'https://embed';
        //     s1.charset = 'UTF-8';
        //     s1.setAttribute('crossorigin', '*');
        //     s0.parentNode.insertBefore(s1, s0);
        // })();
    </script>

    <!--End of Tawk.to Script-->

</body>

</html>
