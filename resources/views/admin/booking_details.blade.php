@extends('layouts/main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="white_card position-relative mb_20">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <img src="/admin/room.jpg" alt="" class="mx-auto d-block sm_w_100" height="300" />
                    </div>

                    <div class="col-lg-6 align-self-center">
                        <div class="single-pro-detail">
                            <p class="mb-1">{{ $booking->room->name }} <sup class="text-success"> {{ ucfirst($booking->room->status) }} </sup> </p>
                            <div class="custom-border mb-3"></div>
                            <p class="text-muted mb-0">Room Type: {{ $booking->roomType->name }} </p>
                            <h3 class="pro-title">{{ $booking->name }}</h3>
                            <p class="text-muted mb-0"> Email: {{ $booking->email }} </p>
                            <p class="text-muted mb-0"> Phone: {{ $booking->phone }} </p>

                            <h2 class="pro-price">
                                Amount to Pay: N{{ $booking->roomType->price }}
                            </h2>
                            <!-- <h6 class="text-muted font_s_13 mt-2 mb-1">Features :</h6> -->
                            <ul class="list-unstyled pro-features border-0">

                                <li> Children: {{ $booking->children }}</li>
                                <li> Adult: {{ $booking->adults }}</li>


                            </ul>
                            <ul class="list-unstyled text-primary border-0">

                                <li>Check-In: 22/01/2022</li>
                                <li>Check-Out: 22/01/2022</li>



                            </ul>

                            <h4 class="pro-title">Booking Status: {{ ucfirst($booking->status) }}</h4>



                            <div class="quantity mt-3">

                                <a href="" class="btn green_bg text-white px-4 d-inline-block ">
                                    <i class="me-2"></i>Approve
                                </a>
                                <a href="" onclick="return confirm('Are you sure you want to reject this booking request?')" class="btn btn-danger text-white px-4 d-inline-block ">
                                    <i class="me-2"></i>Reject
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    @endsection