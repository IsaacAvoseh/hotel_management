@extends('layouts/master')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">{{ $room->name }} View</h2>
                        <h2 class="room-price">₦{{ $room->price }} <span>/ Per Night</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ $room->image }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ $room->image_1 }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ $room->image_2 }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ $room->image_3 }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ $room->image_4 }}" class="d-block w-100" alt="">
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                        <img src="{{ $room->image }}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                        <img src="{{ $room->image_1 }}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                        <img src="{{ $room->image_2 }}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                        <img src="{{ $room->image_3 }}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                        <img src="{{ $room->image_4 }}" class="d-block w-100" alt="">
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Size: <span>{{$room->size}}</span></h6>
                            <h6>Capacity: <span>Max person {{$room->capacity}}</span></h6>
                            <h6>Bed: <span>{{$room->bed}}</span></h6>
                            <h6>Services: <span>Wifi, television ...</span></h6>
                        </div>


                    </div>

                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            <li><img src="/horizon/img/core-img/icon1.png" alt=""> Air Conditioning</li>
                            <li><img src="/horizon/img/core-img/icon2.png" alt=""> Drinks</li>
                            <li><img src="/horizon/img/core-img/icon3.png" alt=""> Restaurant quality</li>
                            <li><img src="/horizonimg/core-img/icon4.png" alt=""> Cable TV</li>
                            <li><img src="/horizon/img/core-img/icon5.png" alt=""> Unlimited Wifi</li>
                            <li><img src="/horizon/img/core-img/icon6.png" alt=""> Service 24/7</li>
                        </ul>
                    </div>

                    <!-- Room Review -->
                    <div class="room-review-area mb-100">

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        @include('flash.flash')
                        <form action="{{ route('get-booking') }}" method="post">
                            @csrf
                            <div class="form-group mb-30"><label for="checkInDate">Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6"><input class="input-small form-control" id="checkin"
                                                name="check_in" placeholder="Check In" value="{{ old('check_in') }}"
                                                type="text" />
                                            <span class="text-danger">
                                                @error('check_in')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-6"><input class="input-small form-control" name="check_out"
                                                value="{{ old('check_out') }}" placeholder="Check Out" type="text" />
                                            <span class="text-danger">
                                                @error('check_out')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30"><label>Details</label>
                                <div class="row no-gutters">
                                    <div class="col-6"><input class="input-small form-control" name="name"
                                            placeholder="Enter name" type="text" />
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-6"><input class="input-small form-control" name="phone"
                                            placeholder="Phone No:" value="{{ old('phone') }}" type="text" />
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col"><input class="input-small form-control" name="email"
                                            placeholder="Email:" type="text" value="{{ old('email') }}" />
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30"><label>Room Details</label>
                                <div class="row no-gutters">
                                    <div class="col-6"><label for="roomtype">Room Type</label>
                                        <div>
                                            <select class="form-control formselect required" placeholder="Select Category"
                                                name="room_type" id="sub_category_name">
                                                <option value="0" disabled selected>Select Room type</option>
                                                @if (isset($room_type))
                                                    @foreach ($room_type as $type)
                                                        <option value="{{ base64_encode($type->id) }}">
                                                            {{ ucfirst($type->name) }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <span class="text-danger">
                                            @error('room_type')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-6"><label for="room">Room</label>
                                        <div>
                                            <select name="room" class="form-control required"
                                                placeholder="Select Sub Category" id="sub_category">
                                            </select>
                                        </div>

                                        <span class="text-danger">
                                            @error('room')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30"><label for="guests">Guests</label>

                                <div class="row">
                                    <div class="col-6"><select class="form-control" id="adults" name="adults">
                                            <option value="adults">Adults</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                        @error('adults')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="col-6"><select class="form-control" id="children"
                                            name="children">
                                            <option value="children">Children</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-50">
                                <div class="slider-range">
                                    <div class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-label-result="Max Price: " data-max="3000" data-min="0" data-unit="$"
                                        data-value-max="3000" data-value-min="0">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"><button class="btn roberto-btn w-100" type="submit">Book
                                    Now</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/18.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Call +234 802 472 5065 to book directly or for info</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="contact.html" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Area End -->
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

    <script>
        $(document).ready(function() {
            console.log('ready');
            $('#sub_category_name').on('change', function() {
                let id = $(this).val();
                console.log('id', id);
                $('#sub_category').empty();
                // $('#sub_category').style.display = 'block';
                $('.nice-select').show();
                $('#sub_category').show();
                // $(".nice-select").hide();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: '/get-rooms',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        // alert('yes', response.room)
                        console.log('response', response);
                        var response = JSON.parse(response);
                        console.log('response', response);
                        $('#sub_category').empty();
                        $('#sub_category').append(
                            `<option value="0" disabled selected>Select Sub Category*</option>`
                        );
                        response.forEach(element => {
                            $('#sub_category').append(
                                `<option value="${ btoa(element['id'])}">${element['name']}</option>`
                            );
                        });

                        console.log('response', response.room);


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("some error", errorThrown);
                        console.log(XMLHttpRequest, textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
@endsection
