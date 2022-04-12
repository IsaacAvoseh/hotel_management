@extends('layouts/main')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
           
            <div class="col-lg-12">
                @include('flash.flash')

                <div class="white_box mb_30">
                    <div class="QA_table mb_30">
                        <button class="btn btn-primary" >Export to PDF</button>
                        <table class="table lms_table_active ">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">Action</th>
                                    <!-- <th scope="col">Role</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($payments) && count($payments) > 0)
                                @foreach ($payments as $payment)
                                <tr>
                                    <td scope="row">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $payment->guest_name }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->status }}</td>
                                    <td>{{ $payment->payment_method }}</td>
                                    <td>
                                        <div style="display: flex">
                                            
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

           

</div>
</div>


</div>
</div>
</div>
@endsection