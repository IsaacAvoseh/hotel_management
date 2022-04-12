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
                                <h3> Admin Dashboard</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-right">
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Bookings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                @include('flash.flash')
                @include('sweetalert::alert')
                <div class="white_box mb_30">

                    <div class="default-according col-lg-8 mx-auto" id="accordion">
                        <div class="card">
                            <div class="card-header mx-auto" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed mx-10 btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Book a
                                        Room<span class="digits"></span></button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">

                                <div class="card-body">

                                    <div class="modal-body">
                                        <form action="{{ route('staff-booking') }}" method="post">
                                            @csrf
                                            <div class="form-group mb-30"><label for="checkInDate">Date</label>

                                                <div class="input-daterange" id="datepicker">
                                                    <div class="row no-gutters">
                                                        <div class="col-6">
                                                            <label for="checkInDate">Check In</label>
                                                            <input class="input-small form-control" id="checkin" name="check_in" type="datetime-local" placeholder="Check In" value="{{ old('check_in') }}" />
                                                            <span class="text-danger">@error ('check_in') {{$message}} @enderror</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="checkInDate">Check Out</label>
                                                            <input class="input-small form-control" name="check_out" value="{{ old('check_out') }}" placeholder="Check Out" type="datetime-local" />
                                                            <span class="text-danger">@error ('check_out') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30"><label>Details</label>

                                                <div class="row no-gutters">
                                                    <div class="col-6"><input class="input-small form-control" name="name" placeholder="Enter name" type="text" />
                                                        <span class="text-danger">@error ('name') {{$message}} @enderror</span>
                                                    </div>

                                                    <div class="col-6"><input class="input-small form-control" name="phone" placeholder="Guest Phone No:" value="{{ old('phone') }}" type="text" />
                                                        <span class="text-danger">@error ('phone') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30">
                                                <div class="row">
                                                    <div class="col"><input class="input-small form-control" name="email" placeholder="Enter Guest Email:" type="text" value="{{ old('email') }}" />
                                                        <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30"><label>Room Details</label>

                                                <div class="row no-gutters">
                                                    <div class="col-6"><label for="roomtype">Room Type</label>
                                                        <div>
                                                            <select class="form-control formselect required" placeholder="Select Category" name="room_type" id="sub_category_name">
                                                                <option value="0" disabled selected>Select Room type</option>
                                                                @if(isset($room_type))
                                                                @foreach($room_type as $type)
                                                                <option value="{{ base64_encode($type->id) }}">
                                                                    {{ ucfirst($type->name) }}
                                                                </option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>

                                                        <span class="text-danger">@error ('room_type') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-6"><label for="room">Room</label>
                                                        <div>
                                                            <select name="room" class="form-control required" placeholder="Select Sub Category" id="sub_category">
                                                            </select>
                                                        </div>

                                                        <span class="text-danger">@error ('room') {{$message}} @enderror</span>
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
                                                        @error ('adults') {{$message}} @enderror
                                                    </div>

                                                    <div class="col-6"><select class="form-control" id="children" name="children">
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
                                                    <div class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-label-result="Max Price: " data-max="3000" data-min="0" data-unit="$" data-value-max="3000" data-value-min="0">
                                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group"><button class="btn roberto-btn w-100 btn-primary" type="submit">Book Now</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table mb_30">

                        <table class="table lms_table_active ">
                            <thead>
                                @if(isset($bookings))
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                @endif
                            </thead>
                            <tbody>
                                @if(isset($bookings))
                                @foreach($bookings as $booking)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td>{{ $booking->check_in }}</td>
                                    <td>{{ $booking->check_out }}</td>
                                    <td> {{ $booking->status }} </td>
                                    <td>
                                        <div class="quantity mt-3" style="display: flex;">

                                            <a href="/admin/booking-details/{{ base64_encode($booking->id) }}" class="btn btn-primary">View more</a>

                                           
                                               <form> 
                                            <a href="/admin/approve-booking/{{ base64_encode($booking->id) }}" class="btn btn-success">Approve</a>
                                               </form>

                                            <form action="/admin/booking-details/update/{{ base64_encode($booking->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="cancelled">
                                                <button onclick="return confirm('Are you sure you want to cancel this booking?')" type="submit" class="btn btn-danger px-4 d-inline-block ">
                                                    <i class="me-2"></i>Cancel
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                                @else
                                <tr>No Booking data available at the moment</tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="dialog-form">
        <form>
            <label for="name">Name</label>
            <input type="text" name="name" id="txt2" class="text ui-widget-content ui-corner-all" />
        </form>
    </div> -->
</div>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

<script>
    $(function() {
        var hash = window.location.hash
        if (hash == "#success") {
            swal("Success!", "Payment Successfull!", "success");

            window.location.href = "/admin/bookings";
        }
    });
    $(function() {
        var hash = window.location.hash
        if (hash == "#cash") {
            swal("Success!", "Cash Payment logged Successfully, Keep it Safe !", "success");

            window.location.href = "/admin/bookings";
        }
    });
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
                    $('#sub_category').append(`<option value="0" disabled selected>Select available rooms </option>`);
                    response.forEach(element => {
                        $('#sub_category').append(`<option value="${ btoa(element['id'])}">${element['name']}</option>`);
                    });

                    console.log('response', response.room);


                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    swal("Oops!", "An error occurred while getting availabel rooms!", "error");
                    console.log(XMLHttpRequest, textStatus, errorThrown);
                }
            });
        });
    });





    var maxClick = 3;

    var checkName = (function ask() {
        //check if name is the logged in user
        var name = prompt("Please view the details of this booking before you approve or Enter your full name to Approve");
        if (name == "{{ Auth::user()->name }}") {
            $('#approve').attr('type', 'submit');
            swal.confirm("Are you sure you want to approve this booking?");;
            // return true;
        } else {
            if (name == '') {
                swal("Please enter {{ Auth::user()->name }}");
                if (--maxClick > 0)
                    return ask();
            } else {
                alert("You are not allowed to approve this booking, please contact admin or enter {{ Auth::user()->name }} to Approve");

                $('#approve').attr('type', 'button');

            }
        }

    });


    $(function() {
        $("#dialog-form").dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                "Ok": function() {
                    var text1 = $("#txt1");
                    var text2 = $("#txt2");
                    //Do your code here
                    text1.val(text2.val().substr(1, 9));
                    $(this).dialog("close");
                },
                "Cancel": function() {
                    $(this).dialog("close");
                }
            }
        });


        $('#approve').click(function checkName() {
            $("#dialog-form").dialog("open");
        });

    });
</script>
@endsection