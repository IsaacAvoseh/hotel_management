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
                                    <h5 class="modal-title text_white">Resister</h5>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group cs_check_box">
                                            <input type="checkbox" id="check_box" class="common_checkbox">
                                            <label for="check_box">
                                                Keep me up to date
                                            </label>
                                        </div>
                                        <a style="background-color: #323246;" href="#" class="btn_1 full_width text-center"> Sign Up</a>
                                        <p>Need an account? <a data-toggle="modal" data-target="#sing_up" data-dismiss="modal" href="#">Log in</a></p>
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