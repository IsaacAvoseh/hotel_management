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
                <div class="white_box mb_30">

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

                                            <form action="/admin/booking-details/update/{{ base64_encode($booking->id) }}" method="POST" class="mx-2">
                                                @csrf
                                                <input type="hidden" name="status" value="approved">
                                                <button onclick="checkName()" id="approve" type="submit" class="btn btn-success px-4 d-inline-block ">
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

<script>
    var maxClick = 3;

    function ask2() {
        $("#approve").click(function() {
            $.dialog({
                "body": "fjkfgjgjg!",
                "title": "jfjfk",
                "show": true
            });
        });
    }
    var checkName = (function ask() {
        //check if name is the logged in user
        var name = prompt("Please view the details of this booking before you approve or Enter your full name to Approve");
        if (name == "{{ Auth::user()->name }}") {
            $('#approve').attr('type', 'submit');
            confirm("Are you sure you want to approve this booking?");;
            // return true;
        } else {
            if (name == '') {
                alert("Please enter {{ Auth::user()->name }}");
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