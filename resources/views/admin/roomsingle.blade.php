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
                                    <h3>Admin Dashboard</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Messages</p>
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
                                    <tr>
                                        <th scope="col">Size</th>
                                        <th scope="col">Capacity</th>
                                        <th scope="col">Bed</th>
                                        <th scope="col">Checkin</th>
                                        <th scope="col">Checkout</th>
                                        <th scope="col">Adults</th>
                                        <th scope="col">Children</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">cdhusfuhd</td>
                                        <td>hfsauihiuh</td>
                                        <td>frhewiur</td>
                                        <td>dsfidus</td>
                                        <td><a href="#" class="status_btn">Active</a></td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
