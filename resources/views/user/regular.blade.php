@extends('layouts/master')
@section('content')
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Regular Room View</h2>

                        <h2 class="room-price">₦15,000 <span>/ Per Night</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Rooms Area Start -->

    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div class="carousel slide" data-ride="carousel" id="room-thumbnail--slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img alt="" class="d-block w-100"
                                            src="/horizon/img/regular/11.jpg" /></div>

                                    <div class="carousel-item"><img alt="" class="d-block w-100"
                                            src="/horizon/img/regular/27.jpg" /></div>

                                    <div class="carousel-item"><img alt="" class="d-block w-100"
                                            src="/horizon/img/regular/38.jpg" /></div>

                                    <div class="carousel-item"><img alt="" class="d-block w-100"
                                            src="/horizon/img/regular/41.jpg" /></div>

                                    <div class="carousel-item"><img alt="" class="d-block w-100"
                                            src="/horizon/img/regular/45.jpg" /></div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#room-thumbnail--slide"><img
                                            alt="" class="d-block w-100" src="/horizon/img/regular/11.jpg" /></li>
                                    <li data-slide-to="1" data-target="#room-thumbnail--slide"><img alt=""
                                            class="d-block w-100" src="/horizon/img/regular/27.jpg" /></li>
                                    <li data-slide-to="2" data-target="#room-thumbnail--slide"><img alt=""
                                            class="d-block w-100" src="/horizon/img/regular/38.jpg" /></li>
                                    <li data-slide-to="3" data-target="#room-thumbnail--slide"><img alt=""
                                            class="d-block w-100" src="/horizon/img/regular/41.jpg" /></li>
                                    <li data-slide-to="4" data-target="#room-thumbnail--slide"><img alt=""
                                            class="d-block w-100" src="/horizon/img/regular/45.jpg" /></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Room Features -->

                        <div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Size: <span>350-425sqf</span></h6>

                            <h6>Capacity: <span>Max person 2</span></h6>

                            <h6>Bed: <span>King beds</span></h6>

                            <h6>Services: <span>Wifi, television ...</span></h6>
                        </div>
                    </div>
                    <!-- Room Service -->

                    <div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            <li><img alt="" src="/horizon/img/core-img/icon1.png" /> Air Conditioning</li>
                            <li><img alt="" src="/horizon/img/core-img/icon2.png" /> Drinks</li>
                            <li><img alt="" src="/horizon/img/core-img/icon3.png" /> Restaurant quality</li>
                            <li><img alt="" src="/horizon/img/core-img/icon4.png" /> Cable TV</li>
                            <li><img alt="" src="/horizon/img/core-img/icon5.png" /> Unlimited Wifi</li>
                            <li><img alt="" src="/horizon/img/core-img/icon6.png" /> Service 24/7</li>
                        </ul>
                    </div>
                    <!-- Room Review -->

                    <div class="room-review-area mb-100"></div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="http://www.horizonsuites.com.ng/reservation.php" method="post">
                            <div class="form-group mb-30"><label for="checkInDate">Date</label>

                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6"><input class="input-small form-control" id="checkin"
                                                name="checkin" placeholder="Check In" type="text" /></div>

                                        <div class="col-6"><input class="input-small form-control" name="checkout"
                                                placeholder="Check Out" type="text" /></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-30"><label>Details</label>

                                <div class="row no-gutters">
                                    <div class="col-6"><input class="input-small form-control" name="name"
                                            placeholder="Enter name" type="text" /></div>

                                    <div class="col-6"><input class="input-small form-control" name="phone"
                                            placeholder="Phone No:" type="text" /></div>
                                </div>
                            </div>

                            <div class="form-group mb-30"><label>Room Details</label>

                                <div class="row no-gutters">
                                    <div class="col-6"><label for="roomtype">Room Type</label> <select
                                            class="form-control" id="roomtype" name="roomtype">
                                            <option value="royalsuites">Royal Suites</option>
                                            <option value="classicsuites">Classic Suites</option>
                                            <option value="orangesuites">Orange Suites</option>
                                            <option value="greensuites">Green Deluxe Suite</option>
                                            <option value="businesssuites">Business Suites</option>
                                            <option value="regularsuite">Regular Double</option>
                                        </select></div>

                                    <div class="col-6"><label for="rooms">Room</label> <select
                                            class="form-control" id="rooms" name="rooms">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select></div>
                                </div>
                            </div>

                            <div class="form-group mb-30"><label for="guests">Guests</label>

                                <div class="row">
                                    <div class="col-6"><select class="form-control" id="adults" name="adults">
                                            <option value="adults">Adults</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select></div>

                                    <div class="col-6"><select class="form-control" id="children"
                                            name="children">
                                            <option value="children">Children</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select></div>
                                </div>
                            </div>

                            <div class="form-group mb-50">
                                <div class="slider-range">
                                    <div class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-label-result="Max Price: " data-max="3000" data-min="0" data-unit="$"
                                        data-value-max="3000" data-value-min="0">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"><button class="btn roberto-btn w-100" type="submit">Book
                                    Now</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
    <!-- Call To Action Area Start -->

    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/18.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>

                            <h6>Call +234 802 472 5065 to book directly or for info</h6>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 text-right"><a class="btn roberto-btn mb-50" href="contact.html">Contact
                            Now</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->
@endsection
