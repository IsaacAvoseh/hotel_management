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
                                    <h3> Booking Report</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="/admin/booking-report">Booking Report</a> <i
                                            class="fas fa-caret-right"></i>Booking Report</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="QA_table mb_30">
                            <table class="table lms_table_active ">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Check In</th>
                                        <th scope="col">Check Out</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Approved By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($bookings) && count($bookings) > 0)
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td scope="row">{{ $booking->id }}</td>
                                                <td scope="row">{{ $booking->name }}</td>
                                                <td>{{ $booking->email }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->check_in }}</td>
                                                <td>{{ $booking->check_out }}</td>
                                                <td>{{ $booking->status }}</td>
                                                <td>{{ $booking->approved_by }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
