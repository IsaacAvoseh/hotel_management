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
                <div class="white_box mb_30">


                    <div class="white_card_body">
                        <h6 class="card-subtitle mb-2">It's difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples..</h6>
                        <form>
                            <div class="mb-3">
                                <label class="form-label text-danger" for="exampleInputEmail1">You cannot edit this amount</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" readonly value="{{ $roomType->price }}">

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
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://js.paystack.co/v1/inline.js"></script>
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
                        _token: '{{ csrf_token() }}'

                        // user_id: "{{ auth()->id() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        // window.location = data.data
                        console.log(response);
                        swal({
                            title: "Success!",
                            text: response.data,
                            icon: "success"
                        }).then(function() {
                            window.location.href = "{{ url()->current() }}";
                        });
                    },
                    error: function(error) {
                        swal({
                            title: "Error!",
                            text: error.responseJSON.data,
                            icon: "error",
                        });
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
</script>

@endsection