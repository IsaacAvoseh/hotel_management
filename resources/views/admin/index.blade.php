@extends('layouts/main')
@section('content')
@include('flash.flash')

    <div class="main_content_iner overly_inner">
        <div class="container-fluid p-0 ">
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Hotel </a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>

                            </ol>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Create Report
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/admin/booking-report">Booking Report</a>
                                <a class="dropdown-item" href="/admin/payments-report">Payment Report</a>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="white_btn3">Create Report</a> -->
                </div>
            </div>
        </div>

            <div class="row ">
                <div class="col-md-10 mt-100px">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-6" style="margin-top: 100px">
                            <div class="card l-bg-cherry">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0 text-white">Total Rooms</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h4 class="d-flex align-items-center mb-0 text-white">
                                                {{ $total_rooms === null ? 0 : $total_rooms }}
                                            </h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 14px;">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">100
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top: 100px">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0 text-white">Rooms Available</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h4 class="d-flex align-items-center mb-0 text-white">
                                            {{ $total_rooms_available !== null ? $total_rooms_available : 'Loading...' }}
                                            </h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>{{ round($percentage_rooms_available , 1)}}% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 14px;">
                                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="{{  round($percentage_rooms_available , 1)}}" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">{{ round($percentage_rooms_available , 1)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top: 100px">
                        <div class="card l-bg-green-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0 text-white">Rooms Booked</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 text-white">
                                            {{ $total_rooms_booked !== null ? $total_rooms_booked : 'Loading...' }}
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>10% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 14px;">
                                    <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top: 100px">
                        <div class="card l-bg-orange-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0 text-white">Total Revenue</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h5 class="d-flex align-items-center mb-0 text-white">
                                           N {{ number_format($total_sales , 2) }}
                                        </h5>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>100% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 14px;">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">100
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection