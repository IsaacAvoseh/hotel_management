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
                                    <td>{{ $booking->status }}</td>
                                    <td>
                                        <a href="/admin/booking-details/{{ base64_encode($booking->id) }}" class="btn btn-primary">View more</a>
                                        <a href="#" onclick="checkName()" class="btn btn-success">Approve</a>
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
</div>

<script>
    let again = false;
    var checkName = (function ask() {
        //check if name is the logged in user
        var name = prompt("Please enter your full name to Approve");
        if (name == "{{ Auth::user()->name }}") {
            alert("Approved");
            return true;
        } else{
            if (name == '') {
                alert("Please enter {{ Auth::user()->name }}");
                return ask();
            } 
              else{    
                alert("You are not allowed to approve this booking, please contact admin or enter {{ Auth::user()->name }} to Approve");
                return false;
            }
        }
        

    });
</script>
@endsection