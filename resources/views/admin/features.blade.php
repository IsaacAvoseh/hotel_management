@extends('layouts/main')
@section('content')

    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">



                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3> Room Features</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="/admin/roomfetures">Dashboard</a> <i class="fas fa-caret-right"></i> Room Features
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @include('flash.flash')

                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card_box box_shadow position-relative mb_30">
                                    <div class="white_box_tittle ">
                                        <div class="main-title2 ">
                                            <div class="modal-content cs_modal">
                                                <div style="background-color: #323246;"
                                                    class="modal-header justify-content-center">

                                                    <h5 class="modal-title text_white">Features</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_body">
                                        <div class="default-according" id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="false"
                                                            aria-controls="collapseOne">Add a new Room Feature<span
                                                                class="digits"></span></button>
                                                    </h5>
                                                </div>
                                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                                    data-parent="#accordion">

                                                    <div class="card-body">

                                                        <div class="modal-body">
                                                            <form action="{{ route('features') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="form-control"
                                                                        placeholder="Feature 1">
                                                                    <span class="text-danger">
                                                                        @error('first_name')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-check">
                                                                        <input class=" form -control form-check-input"
                                                                            name="air_conditioner" type="checkbox"
                                                                            id="gridCheck1">
                                                                        <label class="form-label form-check-label"
                                                                            for="gridCheck1">
                                                                            Air Conditioning
                                                                        </label>

                                                                    </div>

                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-check">
                                                                        <input class=" form -control form-check-input"
                                                                            name="drinks" type="checkbox" id="gridCheck1">
                                                                        <label class="form-label form-check-label"
                                                                            for="gridCheck1">
                                                                            Free Drinks
                                                                        </label>

                                                                    </div>

                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-check">
                                                                        <input class=" form -control form-check-input"
                                                                            name="restaurant" type="checkbox"
                                                                            id="gridCheck1">
                                                                        <label class="form-label form-check-label"
                                                                            for="gridCheck1">
                                                                            Restaurant
                                                                        </label>

                                                                    </div>

                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-check">
                                                                        <input class=" form -control form-check-input"
                                                                            name="cable_tv" type="checkbox" id="gridCheck1">
                                                                        <label class="form-label form-check-label"
                                                                            for="gridCheck1">
                                                                            Cable TV
                                                                        </label>

                                                                    </div>

                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-check">
                                                                        <input class=" form -control form-check-input"
                                                                            name="cable_tv" type="checkbox" id="gridCheck1">
                                                                        <label class="form-label form-check-label"
                                                                            for="gridCheck1">
                                                                            Cable TV
                                                                        </label>

                                                                    </div>

                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="form-check">
                                                                        <input class=" form -control form-check-input"
                                                                            name="unlimited_wifi" type="checkbox"
                                                                            id="gridCheck1">
                                                                        <label class="form-label form-check-label"
                                                                            for="gridCheck1">
                                                                            Unlimited Wifi
                                                                        </label>

                                                                    </div>


                                                                </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="form-check">
                                                                <input class=" form -control form-check-input"
                                                                    name="hour_front_desk" type="checkbox" id="gridCheck1">
                                                                <label class="form-label form-check-label" for="gridCheck1">
                                                                    24 Hour Reception
                                                                </label>

                                                            </div>

                                                        </div>


                                                    </div>


                                                </div>


                                            </div>

                                            @if (isset($staffs) && count($staffs) > 0)
                                                @foreach ($staffs as $staff)
                                                    <div class="col-md-3">
                                                        <div class="white_card position-relative">
                                                            <div class="card-body">
                                                                <div class="ribbon1 rib1-primary"><span
                                                                        class="text-white text-center rib1-primary">Staff
                                                                        No: {{ $loop->iteration }}</span></div>
                                                                <img src="{{ $staff->image }}" alt=""
                                                                    class="d-block mx-auto my-2" height="150" width="170">
                                                                <div class="row my-2">
                                                                    <div class="col"><span
                                                                            class="badge_btn_3  mb-1">{{ $staff->roles->name }}</span>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <h4 class="text-dark mt-0">Name:
                                                                            {{ $staff->first_name . ' ' . $staff->last_name }}
                                                                        </h4>

                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <button class="btn_2 btn-block">View Details</button>
                                                                    <button class="btn_2 btn-block">Suspend</button>
                                                                    <button class="btn_2 btn-block">Delete</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif


                                        </div>
                                    </div>
                                </div>


                            @endsection
