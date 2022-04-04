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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($messages))
                                @foreach($messages as $message)
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> {{ $message->name }} </a></th>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($message->message, 20, $end='....') }}</td>
                                    <td>{{ date('d/m/Y', strtotime($message->created_at))  }}</td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">View</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
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