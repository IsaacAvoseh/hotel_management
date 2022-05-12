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
                    <div class="white_box mb_30">
                        <div class="QA_table mb_30">
                            <table class="table lms_table_active ">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Check In</th>
                                        <th scope="col">Check Out</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Approved By</th>
                                        <th scope="col">Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($bookings) && count($bookings) > 0)
                                    @foreach ($bookings as $booking)
                                    <tr>
                                        <td scope="row"> {{ $loop->iteration }}</td>
                                        <td scope="row">{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->phone }}</td>
                                        <td>{{ $booking->check_in }}</td>
                                        <td>{{ $booking->check_out }}</td>
                                        <td>{{ $booking->status }}</td>
                                        <td>{{ $booking->approved_by }}</td>
                                        <td>{{ \Carbon\Carbon::parse($booking->created_at)->diffForHumans() }}</td>
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


</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 14:36:05 GMT -->

</html>