@extends('layouts/main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="white_card position-relative mb_20">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_title" id="message">

                        </div>
                    </div>
                </div>
                @include('flash.flash')
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <img src="{{ $booking->roomType->image }}" alt="" class="mx-auto d-block sm_w_100" height="300" />
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

                                <li>Check-In: {{ $booking->check_in }}</li>
                                <li>Check-Out: {{ $booking->check_out }}</li>



                            </ul>

                            <h4 class="pro-title">Booking Status: {{ ucfirst($booking->status) }}</h4>



                            <div class="quantity mt-3" style="display: flex;">


                                <form action="/admin/approve-booking/{{ base64_encode($booking->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ base64_encode( $booking->id ) }}">
                                    <button type="submit" class="btn btn-success px-4 d-inline-block ">
                                        <i class="me-2"></i>Approve
                                    </button>
                                </form>

                                <form action="/admin/booking-details/update/{{ base64_encode($booking->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="cancelled">
                                    <button onclick="return confirm('Are you sure you want to cancel this booking?')" type="submit" class="btn btn-danger px-4 d-inline-block ">
                                        <i class="me-2"></i>Cancel
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    @endsection