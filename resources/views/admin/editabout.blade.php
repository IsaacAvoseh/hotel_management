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
                                    <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> New Staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @include('flash.flash')
                    <div class="card-body">
                        <div class="modal-body">
                            <form action="{{ route('editabout') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="phone" value="{{ $abouts->phone }}" class="form-control"
                                        placeholder="Phone Number">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" value="{{ $abouts->address }}" class="form-control"
                                        placeholder="Address">
                                    <span class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" value="{{ $abouts->email }}" class="form-control"
                                        placeholder="Email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="title" value="{{ $abouts->title }}" class="form-control"
                                        placeholder="Title">
                                    <span class="text-danger">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="content" value="{{ $abouts->content }}" class="form-control"
                                        placeholder="Content"></textarea>
                                    <span class="text-danger">
                                        @error('content')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <button type="submit" style="background-color: #323246;"
                                    class="btn_1 full_width text-center">Edit About</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
