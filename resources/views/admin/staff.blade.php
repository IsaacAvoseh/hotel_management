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
                    <div class="box_body">
                        <div class="default-according" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseOne">Click here to add new role<span
                                                class="digits"></span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseTwo" aria-labelledby="headingOne"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">

                                        <div class="modal-body">
                                            <form action="{{ route('role') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Role">
                                                    <span class="text-danger">
                                                        @error('name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="description" id="" cols="15" rows="10" class="form-control"
                                                        placeholder="Enter role description"></textarea>
                                                    <span class="text-danger">
                                                        @error('description')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <button type="submit" style="background-color: #323246;"
                                                    class="btn_1 full_width text-center">Add Role</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="default-according" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">Click here to add new Staff<span
                                                class="digits"></span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                    data-parent="#accordion" style="">

                                    <div class="card-body">

                                        <div class="modal-body">
                                            <form action="{{ route('staff') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="first_name" class="form-control"
                                                        placeholder="First Name">
                                                    <span class="text-danger">
                                                        @error('first_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="last_name" class="form-control"
                                                        placeholder="Last Name">
                                                    <span class="text-danger">
                                                        @error('last_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Enter staff email">
                                                    <span class="text-danger">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter staff phone number">
                                                    <span class="text-danger">
                                                        @error('phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="">Select Role</option>
                                                        @if (isset($roles) && count($roles) > 0)
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->id }}">
                                                                    {{ $role->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('role')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="address"
                                                        placeholder="Enter staff home address">
                                                    <span class="text-danger">
                                                        @error('address')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <button type="submit" style="background-color: #323246;"
                                                    class="btn_1 full_width text-center">Add Staff</button>

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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($staffs) && count($staffs) > 0)
                                        @foreach ($staffs as $staff)
                                            <tr>
                                                <td scope="row">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td scope="row">
                                                    {{ $staff->first_name }} {{ $staff->last_name }}
                                                </td>
                                                <td>{{ $staff->email }}</td>
                                                <td>{{ $staff->phone }}</td>
                                                <td>{{ $staff->address }}</td>
                                                <td>{{ $staff->roles->name }}</td>
                                                <td><img width="50px" style="border-radius: 100%" height="50px"
                                                        src="{{ $staff->image }}" alt=""></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div style="display: flex">
                                                        <a href="#" style="margin-right: 5px"
                                                            class="btn btn-primary">Suspend</a>
                                                        <a href="#" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- @if (isset($staffs) && count($staffs) > 0)
                    @foreach ($staffs as $staff)
                        <div class="col-md-3">
                            <div class="white_card position-relative">
                                <div class="card-body">
                                    <div class="ribbon1 rib1-primary"><span
                                            class="text-white text-center rib1-primary">Staff No:
                                            {{ $loop->iteration }}</span></div>
                                    <img src="{{ $staff->image }}" alt="" class="d-block mx-auto my-2" height="150"
                                        width="170">
                                    <div class="row my-2">
                                        <div class="col"><span
                                                class="badge_btn_3  mb-1">{{ $staff->roles->name }}</span></div>
                                        <div class="col-auto">
                                            <h4 class="text-dark mt-0">Name:
                                                {{ $staff->first_name . ' ' . $staff->last_name }}</h4>

                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn_2 btn-block">View Details</button>
                                        <button class="btn_2 btn-block">Suspend</button>
                                        <button class="btn_2 btn-block">Delete</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @endif --}}


            </div>
        </div>
    </div>
@endsection
