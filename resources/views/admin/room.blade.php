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
                                    <h3> Rooms</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="/admin/rooms">Dashboard</a> <i class="fas fa-caret-right"></i>Room</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($services->count() < 1)
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <p class="text-danger"> No Room Feature Available, You cannot add a room without attaching a
                            feature, Please add a feature first </p>
                        <div>
                            <a class="btn btn-primary sm" href="/admin/roomfeatures">Add Room Feature</a>

                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-primary collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Add New
                                    Room<span class="digits"></span></button>
                            </h5>
                        </div>

                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="modal-body">
                                    <form action="{{ route('room') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                            <span class="text-danger">
                                                @error('name')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="price" class="form-control" placeholder="Price">
                                            <span class="text-danger">
                                                @error('price')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="size" class="form-control" placeholder="Size">
                                            <span class="text-danger">
                                                @error('size')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="capacity" class="form-control" placeholder="Capacity">
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
                                            <input type="number" name="no_of_rooms" class="form-control" placeholder="Number of Rooms">
                                            <span class="text-danger">
                                                @error('no_of_rooms')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select name="service_id" id="roomfeatures" class="form-control">
                                                <option value="">Select Room Features</option>
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
                                            <input type="file" name="image" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                @endif

                <div class="col-lg-12">
                    @include('flash.flash')
                    @include('sweetalert::alert')
                    <div class="box_body">
                        <div class="default-according" id="accordion">
                            <div class="card">



                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link btn-primary collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Add
                                            Room<span class="digits"></span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="modal-body">
                                            <form action="{{ route('room') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

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
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Price">
                                                    <span class="text-danger">
                                                        @error('price')
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
                                                    <input type="number" name="no_of_rooms" class="form-control"
                                                        placeholder="Number of Rooms">
                                                    <span class="text-danger">
                                                        @error('no_of_rooms')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <select name="service_id" id="roomfeatures" class="form-control">
                                                        <option value="">Select Room Features</option>
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
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>

                                                <button type="submit" onclick="showLoading()"
                                                    style="background-color: #323246;"
                                                    class="btn_1 full_width text-center">Add Room</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="box_body">

                <div class="default-according" id="accordion">
                    <div class="card">
                        @if (isset($rooms) && count($rooms) > 0)
                        @foreach ($rooms as $room)
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo{{$room->id}}" aria-expanded="false" aria-controls="collapseOne">{{ $room->name }}<span class="digits"></span></button>
                            </h5>
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-primary collapsed" data-toggle="collapse" data-target="#collapseEdit{{$room->id}}" aria-expanded="false" aria-controls="collapseOne">Edit
                                    Room<span class="digits"></span></button>
                            </h5>
                        </div>




                        <div class="collapse" id="collapseEdit{{ $room->id }}" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="modal-body">
                                    <form action="{{ route('room') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $room->name }}">
                                            <span class="text-danger">
                                                @error('name')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $room->price }}" >
                                            <span class="text-danger" >
                                                @error('price')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="size" class="form-control" placeholder="Size" value="{{ $room->size }}">
                                            <span class="text-danger">
                                                @error('size')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="capacity" class="form-control" placeholder="Capacity" value="{{ $room->capacity }}">
                                            <span class="text-danger">
                                                @error('capacity')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="bed" class="form-control" placeholder="Bed" value="{{ $room->bed }}">
                                            <span class="text-danger">
                                                @error('bed')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="no_of_rooms" class="form-control" placeholder="Number of Rooms" value="{{ $room->no_of_rooms }}" >
                                            <span class="text-danger">
                                                @error('no_of_rooms')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-danger" > Please Select One </p>
                                            <select name="service_id" id="roomfeatures" class="form-control">
                                                <option value="">Select Room Features</option>
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
                                            <input type="file" name="image" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">

                                        </div>

                                        <button type="submit" onclick="showLoading()" style="background-color: #323246;" class="btn_1 full_width text-center">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="collapse" id="collapseTwo{{ $room->id }}" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="modal-body">
                                <div class="white_box mb_30">
                                    <div class="QA_table mb_30">
                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Room</th>
                                                    <th scope="col">Room type</th>
                                                    <th scope="col">Room Features</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($roomNumber as $roomN)
                                                @if($roomN->room_type_id == $room->id)
                                                <tr>
                                                    <td scope="row">{{ $roomN->name }}</td>
                                                    <td>{{ $roomN->roomType->name }}</td>
                                                    <td>{{ $roomN->roomType->service->name == null? "Feature": $roomN->roomType->service->name }}</td>
                                                    <td>{{ $roomN->roomType->price }}</td>
                                                    <td style="height: 5px;" class="{{ $roomN->status == 'available'? 'status_btn': 'bg-danger status_btn'}}">{{ ucfirst($roomN->status) }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary">View</a>
                                                        <a href="#" class="btn btn-danger">Edit</a>
                                                    </td>
                                                </tr>
                                                @endif

                                                @endforeach
                                            </tbody>
                                        </table>
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
</div>
</div>
@endsection
                    <div class="box_body">
                        <div class="default-according" id="accordion">
                            <div class="card">
                                @if (isset($rooms) && count($rooms) > 0)
                                    @foreach ($rooms as $room)
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo{{ $room->id }}" aria-expanded="false"
                                                    aria-controls="collapseOne">{{ $room->name }}<span
                                                        class="digits"></span></button>
                                            </h5>
                                        </div>

                                        <div class="collapse" id="collapseTwo{{ $room->id }}"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="modal-body">
                                                    <div class="white_box mb_30">
                                                        <div class="QA_table mb_30">
                                                            <table class="table lms_table_active ">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Room</th>
                                                                        <th scope="col">Room type</th>
                                                                        <th scope="col">Room Features</th>
                                                                        <th scope="col">Price</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($roomNumber as $roomN)
                                                                        @if ($roomN->room_type_id == $room->id)
                                                                            <tr>
                                                                                <td scope="row">{{ $roomN->name }}</td>
                                                                                <td>{{ $roomN->roomType->name }}</td>
                                                                                <td>{{ $roomN->roomType->service->name == null ? 'Feature' : $roomN->roomType->service->name }}
                                                                                </td>
                                                                                <td>{{ $roomN->roomType->price }}</td>
                                                                                <td
                                                                                    class="{{ $roomN->status == 'available' ? 'status_btn sm' : 'bg-danger status_btn' }}">
                                                                                    {{ ucfirst($roomN->status) }}</td>
                                                                                <td>
                                                                                    <a href="#"
                                                                                        class="btn btn-primary">View</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-danger">Edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
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
        </div>
    </div>
@endsection
