@extends('layouts/master')
@section('content')


    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Room</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">Room</li>
                            </ol>
                        </nav>
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
                    <!-- Single Room Area -->
                    @if (isset($rooms) && count($rooms) > 0)
                        @foreach ($rooms as $room)
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp"
                                data-wow-delay="100ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail"><img alt="" src="{{ $room->image }}" /></div>
                                <!-- Room Content -->

                                <div class="room-content">
                                    <h2>{{ $room->name }}</h2>

                                    <h4>{{ $room->price }} <span>/ Night</span></h4>

                                    <div class="room-feature">
                                        <h6>Size: <span>{{ $room->size }}ft</span></h6>

                                        <h6>Bed: <span>{{ $room->bed }}</span></h6>

                                        <h6>Services: <span>gdyusgyus</span></h6>
                                    </div>
                                    <a class="btn view-detail-btn" href="/room/{{base64_encode($room->id) }}">View
                                        Details </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Single Room Area -->


                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail"><img alt="" src="/horizon/img/bg-img/hall.jpg" /></div>
                        <!-- Room Content -->

                        <div class="room-content">
                            <h2>Event&#39;s Hall</h2>

                            <h4>₦400,000 <span>/ Day</span></h4>

                            <div class="room-feature">
                                <h6>Air Condition: <span>Available</span></h6>

                                <h6>Capacity: <span>500</span></h6>
                            </div>
                            <a class="btn view-detail-btn" href="hall.html">View Details </a>
                        </div>
                    </div>
                    <!-- Pagination -->

                    <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next </a></li>
                        </ul>
                    </nav>
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
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/18.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>

                            <h6>Call +234 802 472 5065 to book directly or for info</h6>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 text-right"><a class="btn roberto-btn mb-50" href="contact.html">Contact
                            Now</a></div>
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
