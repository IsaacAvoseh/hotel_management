<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 14:33:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Marketing</title>
    <link rel="icon" href="/img/logo.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


    <link rel="stylesheet" href="/css/bootstrap.min.css" />

    <link rel="stylesheet" href="/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="/vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="/vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="/vendors/morris/morris.css">

    <link rel="stylesheet" href="/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="/css/metisMenu.css">

    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/colors/default.css" id="colorSkinCSS">
    <style>
        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #a86008, #ffba56) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: 0.1;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-green {
            background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #f9900e, #ffba56) !important;
            color: #fff;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .loading {
            /* z-index: -1; */
            position: absolute;
            top: 0;
            left: -5px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);

        }

        .loading-content {
            position: absolute;
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            top: 40%;
            left: 35%;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

    </style>
</head>

<body class="crm_body_bg" id="loading">

    <nav class="sidebar vertical-scroll dark_sidebar  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between" id="loading-content">
            <a href="/admin/dashboard"><img src="/img/logo_white.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        @if (Auth::check())
            <ul id="sidebar_menu">
                <li class="mm-active">
                    <a href="/admin/dashboard" class="has-arrow/" href="#" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/dashboard.svg" alt="">
                        </div>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/room" class="has-arrow/" href="#" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/2.svg" alt="">
                        </div>
                        <span>Rooms</span>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow/" href="/admin/bookings" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/3.svg" alt="">
                        </div>
                        <span>Bookings</span>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow/" href="/admin/booking-report" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/3.svg" alt="">
                        </div>
                        <span>Booking Reports</span>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow/" href="/admin/payments-report" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/3.svg" alt="">
                        </div>
                        <span>Payments Report</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/messages" class="has-arrow/" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/4.svg" alt="">
                        </div>
                        <span>Messages</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/staff" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/5.svg" alt="">
                        </div>
                        <span>Staff</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/roomfeatures" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/6.svg" alt="">
                        </div>
                        <span>Room Features</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/6.svg" alt="">
                        </div>
                        <span>Restaurant</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/6.svg" alt="">
                        </div>
                        <span>Laundry</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/about" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/7.svg" alt="">
                        </div>
                        <span>About</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/logout" class="has-arrow/" href="#" aria-expanded="false">
                        <div class="icon_menu">
                            <img src="/img/menu-icon/16.svg" alt="">
                        </div>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        @endif
    </nav>

    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        @if (Auth::check())
                            <div class="sidebar_icon d-lg-none">
                                <i class="ti-menu"></i>
                            </div>
                            <div class="serach_field-area d-flex align-items-center">
                                <div class="search_inner">
                                    <form action="">
                                        <div class="search_field">
                                            <input type="text" placeholder="Search here...">
                                        </div>
                                        <button type="submit"> <img src="/img/icon/icon_search.svg" alt=""> </button>
                                    </form>
                                </div>
                                <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                            </div>
                            <div class="header_right d-flex justify-content-between align-items-center">
                                <div class="header_notification_warp d-flex align-items-center">
                                    <li>
                                        <a class="bell_notification_clicker nav-link-notify" href="#"> <img
                                                src="/img/icon/bell.svg" alt="">
                                        </a>

                                        <div class="Menu_NOtification_Wrap">
                                            <div class="notification_Header">
                                                <h4>Notifications</h4>
                                            </div>
                                            <div class="Notification_body">
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="#"><img src="/img/staf/2.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="#">
                                                            <h5>Cool Marketing </h5>
                                                        </a>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="#"><img src="/img/staf/4.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="#">
                                                            <h5>Awesome packages</h5>
                                                        </a>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="#"><img src="/img/staf/3.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="#">
                                                            <h5>what a packages</h5>
                                                        </a>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>

                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="#"><img src="/img/staf/2.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="#">
                                                            <h5>Cool Marketing </h5>
                                                        </a>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="#"><img src="/img/staf/4.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="#">
                                                            <h5>Awesome packages</h5>
                                                        </a>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="#"><img src="{{ Auth::user()->image }}" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="#">
                                                            <h5>what a packages</h5>
                                                        </a>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nofity_footer">
                                                <div class="submit_button text-center pt_20">
                                                    <a href="#" class="btn_1">See More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="CHATBOX_open nav-link-notify" href="#"> <img src="/img/icon/msg.svg"
                                                alt=""> </a>
                                    </li>
                                </div>
                                <div class="profile_info">
                                    <img src="{{ Auth::user()->image }}" alt="#">
                                    <div class="profile_info_iner">
                                        <div class="profile_author_name">
                                            <p>Admin </p>
                                            <h5>{{ Auth::user()->name }}</h5>
                                        </div>
                                        <div class="profile_info_details">
                                            <a href="#">My Profile </a>
                                            <a href="#">Settings</a>
                                            <a href="/admin/logout">Log Out </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>


        @yield('content')


        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="footer_iner text-center">
                            <p>2022 © Hotel <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <script src="/js/jquery-3.4.1.min.js"></script>

    <script src="/js/popper.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/metisMenu.js"></script>

    <script src="/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="/vendors/chartlist/Chart.min.js"></script>

    <script src="/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="/vendors/datatable/js/jszip.min.js"></script>
    <script src="/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="/vendors/datatable/js/buttons.print.min.js"></script>

    <script src="/vendors/datepicker/datepicker.js"></script>
    <script src="/vendors/datepicker/datepicker.en.js"></script>
    <script src="/vendors/datepicker/datepicker.custom.js"></script>
    <script src="/js/chart.min.js"></script>
    <script src="/vendors/chartjs/roundedBar.min.js"></script>

    <script src="/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="/vendors/tagsinput/tagsinput.js"></script>

    <script src="/vendors/text_editor/summernote-bs4.js"></script>
    <script src="/vendors/am_chart/amcharts.js"></script>

    <script src="/vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="/vendors/scroll/scrollable-custom.js"></script>

    <script src="/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <script src="/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

    <script src="/vendors/apex_chart/apex-chart2.js"></script>
    <script src="/vendors/apex_chart/apex_dashboard.js"></script>
    <script src="/vendors/echart/echarts.min.js"></script>
    <script src="/vendors/chart_am/core.js"></script>
    <script src="/vendors/chart_am/charts.js"></script>
    <script src="/vendors/chart_am/animated.js"></script>
    <script src="/vendors/chart_am/kelly.js"></script>
    <script src="/vendors/chart_am/chart-custom.js"></script>

    <script src="/js/dashboard_init.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script>
        function showLoading() {
            document.querySelector('#loading').classList.add('loading');
            document.querySelector('#loading-content').classList.add('loading-content');
        }

        function hideLoading() {
            document.querySelector('#loading').classList.remove('loading');
            document.querySelector('#loading-content').classList.remove('loading-content');
        }
    </script>

</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 14:36:05 GMT -->

</html>
