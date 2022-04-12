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
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                @include('flash.flash')
                @include('sweetalert::alert')
                <div class="white_box mb_30">









                    <div class="box_body">
                        <div class="default-according" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">Pay With Cash<span class="digits"></span></button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseTwo" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">

                                        <div class="modal-body">
                                            <div class="white_card_body">
                                                <h6 class="card-subtitle mb-2">
                                                    Details below and customer is paying with cash
                                                </h6>
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label text-danger" for="exampleInputEmail1">You cannot edit this amount</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $roomType->price }}">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="exampleInputEmail1"> Guest Name </label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $bookingData->name }}">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="exampleInputEmail1">Room</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $roomType->name }}">

                                                    </div>
                                                    <div class="mb-3">

                                                        <button type="button" onclick="payWithCash()" class="btn btn-primary">Cash Payment</button>

                                                    </div>



                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="height: 20px;">
                    <div class="default-according" id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Pay with Card or Bank Account <span class="digits"></span></button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="modal-body">



                                        <div class="white_card_body">
                                            <h6 class="card-subtitle mb-2">
                                                Details below and customer is paying with card or bank account.

                                            </h6>
                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label text-danger" for="exampleInputEmail1">You cannot edit this amount</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $roomType->price }}">

                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleInputEmail1"> Guest Name </label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $bookingData->name }}">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleInputEmail1">Room</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $roomType->name }}">

                                                </div>
                                                <div class="mb-3">

                                                    <button type="button" onclick="payNow()" class="btn btn-primary">Pay Now</button>


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
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script>
    // function uploadReceipt(paymentId) {
    //     document.getElementById('payment-id').value = paymentId;
    //     $('#uploadReceipt').modal('show');
    // }

    function payNow() {
        alert('yes')
        // var amount = parseInt(amount);
        // return 9;
        console.log('amount', 'About to pay');
        var handler = PaystackPop.setup({
            key: 'pk_test_ca5483b1ebbff03f56af48ca9e744bd36d10e50c',
            email: "{{ $bookingData->email }}",
            // amount: paystackCharge(amount),
            amount: "{{ $roomType->price }}" * 100,
            ref: '' + Math.floor((Math.random() * 1000000000) + 1),
            currency: "NGN",
            // console.log('response', response);
            callback: function(response) {
                $.ajax({
                    method: 'post',
                    url: '/admin/payment',
                    data: {
                        amount: "{{ $roomType->price }}",
                        guest_name: "{{ $bookingData->name }}",
                        reference: response.reference,
                        booking_id: "{{ $bookingData->id }}",
                        payment_method: "Paystack",
                        _token: '{{ csrf_token() }}',
                        status: response.status
                    },
                    dataType: 'json',
                    success: function(response) {

                        swal({
                            title: 'Payment Successful',
                            text: 'Please wait while we verify your payment...',
                            icon: 'success',
                            timer: 3000,
                            buttons: false,
                        })
                        $.ajax({
                            url: '/admin/booking-details/update/{{ base64_encode($bookingData->id) }}',
                            type: 'POST',
                            data: {
                                status: 'approved',
                                id: '{{ base64_encode($bookingData->id) }}',
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(data) {
                                console.log(data);
                                // alert('success');
                                console.log(response);
                                swal({
                                    title: "Success!",
                                    text: response.data,
                                    icon: "success"
                                })
                                window.location.href = '/admin/bookings#success';

                            },
                            error: function(data) {
                                console.log('rrtrttttttt');
                                alert('error');
                            }



                        });

                    },
                    error: function(error) {
                        alert('An error occured');

                    }
                });
            },
            onClose: function() {
                alert('Seems you are not ready to pay now... You can always come back and pay later')
            }
        });
        handler.openIframe();
        // console.log('handler', handler);
    }

    function payWithCash() {
        alert('Are you sure you want to pay with cash?');
        swal({
            title: 'Cash Payment',
            text: 'Customer is paying with cash',
            icon: 'warning',
            buttons: true,
            dangerMode: true,

        })
        setTimeout(() => {


            $.ajax({
                method: 'post',
                url: '/admin/payment',
                data: {
                    amount: "{{ $roomType->price }}",
                    guest_name: "{{ $bookingData->name }}",
                    reference: Math.floor((Math.random() * 1000000000) + 1),
                    booking_id: "{{ $bookingData->id }}",
                    payment_method: "Cash",
                    _token: '{{ csrf_token() }}',
                    status: 'paid'
                },
                dataType: 'json',
                success: function(response) {

                    swal({
                        title: 'Cash Payment',
                        text: 'Cashier wil verify your payment...',
                        icon: 'success',
                        timer: 3000,
                        buttons: false,
                    })
                    $.ajax({
                        url: '/admin/booking-details/update/{{ base64_encode($bookingData->id) }}',
                        type: 'POST',
                        data: {
                            status: 'approved',
                            id: '{{ base64_encode($bookingData->id) }}',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            console.log(data);
                            // alert('success');
                            console.log(response);
                            swal({
                                title: "Thank you!",
                                text: 'Please verify the cash payment',
                                icon: "success"
                            })
                            window.location.href = '/admin/bookings#cash';

                        },
                        error: function(data) {
                            console.log('rrtrttttttt');
                            alert('error');
                        }



                    });

                },
                error: function(error) {
                    alert('An error occured');

                }
            });
        }, 2000)
    }
</script>

@endsection