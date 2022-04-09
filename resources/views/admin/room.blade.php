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
                                    <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i>Room</p>
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
                                            Room Type<span class="digits"></span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                    data-parent="#accordion" style="">

                                    <div class="card-body">

                                        <div class="modal-body">
                                            <form action="{{ route('room') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <select name="service_id" id="roomfeatures" class="form-control">
                                                        <option value="">Select Room Service</option>
                                                        @if (isset($services) && count($services) > 0)
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('service_id')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Name">
                                                    <span class="text-danger">
                                                        @error('name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="size" class="form-control"
                                                        placeholder="Size">
                                                    <span class="text-danger">
                                                        @error('size')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="capacity" class="form-control"
                                                        placeholder="Capacity">
                                                    <span class="text-danger">
                                                        @error('capacity')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="bed" class="form-control" placeholder="Bed">
                                                    <span class="text-danger">
                                                        @error('bed')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Price">
                                                    <span class="text-danger">
                                                        @error('price')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="no_of_rooms" class="form-control"
                                                        placeholder="Number Of Rooms">
                                                    <span class="text-danger">
                                                        @error('no_of_rooms')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image_1" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image_2" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image_3" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image_4" class="form-control">

                                                </div>
                                                <button type="submit" style="background-color: #323246;"
                                                    class="btn_1 full_width text-center">Add Room</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (isset($rooms) && count($rooms) > 0)
                            @foreach ($rooms as $room)
                                <div class="default-according" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseOne">{{ $room->name }}<span
                                                        class="digits"></span></button>
                                            </h5>
                                        </div>
                                        <div class="collapse" id="collapseTwo" aria-labelledby="headingOne"
                                            data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <div class="white_box mb_30">
                                                    <div class="QA_table mb_30">

                                                        <table class="table lms_table_active ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">S/N</th>
                                                                    <th scope="col">Room type</th>
                                                                    <th scope="col">Room Features</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (isset($rooms) && count($rooms) > 0)
                                                                    @foreach ($rooms as $room)
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td>{{ $room->name }}</td>
                                                                            <td>{{ $room->service_id }}</td>
                                                                            <td>{{ $room->price }}</td>
                                                                            <td>Available</td>
                                                                            <td>
                                                                                <a href="roomsingle"
                                                                                    class="btn btn-primary">View</a>
                                                                                <a href="#" class="btn btn-danger">Edit</a>
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
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
