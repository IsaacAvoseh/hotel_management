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
                                <p><a href="/admin">Dashboard</a> <i class="fas fa-caret-right"></i> login</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div style="background-color: #323246;" class="modal-header justify-content-center">
                                    <h5 class="modal-title text_white">Log in</h5>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <a style="background-color: #323246;" href="#" class="btn_1 full_width text-center">Log in</a>
                                        <p>Need an account? <a data-toggle="modal" data-target="#sing_up" data-dismiss="modal" href="#"> Sign Up</a></p>
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