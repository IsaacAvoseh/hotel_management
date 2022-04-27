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
                                <h3> Default Dashboard</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-right">
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Resister</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div style="background-color: #323246;" class="modal-header justify-content-center">
                                @include('flash.flash')
                                    <h5 class="modal-title text_white">Resister</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Full Name">
                                            <span class="text-danger">@error ('name') {{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                                            <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">
                                           
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                            <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                            <span class="text-danger">@error ('password_confirmation') {{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group cs_check_box">
                                            <input type="checkbox" id="check_box" class="common_checkbox">
                                            <label for="check_box">
                                                Keep me up to date
                                            </label>
                                        </div>
                                        <button onclick="showLoading()" type="submit" style="background-color: #323246;" class="btn_1 full_width text-center"> Sign Up</button>
                                        <p>Have an an account? <a class="btn btn-primary text-white" href="/admin/login">Log in</a></p>
                                        <div class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#forgot_password" data-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection