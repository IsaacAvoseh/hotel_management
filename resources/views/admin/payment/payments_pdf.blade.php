<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
           
            <div class="col-lg-12">
                @include('flash.flash')

                <div class="white_box mb_30">
                    <div class="QA_table mb_30">
                    
                        <table class="table lms_table_active ">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">Date</th>
                                    <!-- <th scope="col">Role</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                
                                @forelse ($payments as $payment)
                                <tr>
                                    <td scope="row">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $payment->guest_name }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->status }}</td>
                                    <td>{{ $payment->payment_method }}</td>
                                    
                                        <td>{{ \Carbon\Carbon::parse($payment->created_at)->diffForHumans() }}</td>
                                   
                                </tr>
                                @empty
                                <tr>No records</tr>
                                @endforelse
                                
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
</body>
</html>