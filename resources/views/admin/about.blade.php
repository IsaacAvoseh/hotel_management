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
                                    <h3> About</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="/admin/about">Dashboard</a> <i class="fas fa-caret-right"></i> About</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @include('flash.flash')
                    <div class="box_body">
                        <div class="default-according" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Add
                                            About<span class="digits"></span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="modal-body">
                                            <form action="{{ route('about') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="phone" class="form-control"
                                                        placeholder="Phone Number">
                                                    <span class="text-danger">
                                                        @error('phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="Address">
                                                    <span class="text-danger">
                                                        @error('address')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Email">
                                                    <span class="text-danger">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Title">
                                                    <span class="text-danger">
                                                        @error('title')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <textarea type="text" name="content" class="form-control" placeholder="Content"></textarea>
                                                    <span class="text-danger">
                                                        @error('content')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <button type="submit" style="background-color: #323246;"
                                                    class="btn_1 full_width text-center">Add About</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="white_box mb_30">
                        <div class="QA_table mb_30">
                            <table class="table lms_table_active ">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Open Time</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($abouts))
                                        <tr>
                                            <td scope="row">{{ $abouts->id }}</td>
                                            <td scope="row">{{ $abouts->phone }}</td>
                                            <td>{{ $abouts->address }}</td>
                                            <td>24HRS</td>
                                            <td>{{ $abouts->email }}</td>
                                            <td>{{ $abouts->title }}</td>
                                            <td>{{ $abouts->content }}</td>
                                            <td>
                                                <a href="/admin/editabout" class="btn btn-primary"
                                                    onclick="showLoading()">Edit</button>
                                            </td>
                                        </tr>
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
