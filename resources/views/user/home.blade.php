@extends('layouts/master')
@section('content')
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" data-img-url="/horizon/img/bg-img/16.jpg"
                style="background-image: url(/horizon/img/bg-img/16.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Welcome to Horizon Suites</h2>
                                    <a class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms"
                                        href="/booking">Book Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img bg-overlay" data-img-url="/horizon/img/bg-img/17.jpg"
                style="background-image: url(/horizon/img/bg-img/17.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="500ms">Discover Beauty</h2>
                                    <a class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms"
                                        href="/booking">Book Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img bg-overlay" data-img-url="/horizon/img/bg-img/17.jpg"
                style="background-image: url(/horizon/img/classic/59.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="500ms">A Luxury Stay</h2>
                                    <a class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms"
                                        href="/booking">Book Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img bg-overlay" data-img-url="/horizon/img/bg-img/19.jpg"
                style="background-image: url(/horizon/img/bg-img/19.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="500ms">Delicious Meal</h2>
                                    <a class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms"
                                        href="/booking">Book Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img bg-overlay" data-img-url="/horizon/img/bg-img/141.jpg"
                style="background-image: url(/horizon/img/bg-img/141.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Modern Hall Facilities</h2>
                                    <a class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms"
                                        href="/booking">Book Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->
    <!-- About Us Area Start -->

    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="" method="post">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3"><label for="name">Name</label> <input
                                    class="form-control" id="name" name="name" type="text" /></div>

                            <div class="col-6 col-md-2 col-lg-3"><label for="num">Phone No:</label> <input
                                    class="form-control" id="phone" name="phone" type="text" /></div>

                            <div class="col-6 col-md-2 col-lg-3"><label for="email">E-mail</label> <input
                                    class="form-control" id="email" name="email" type="text" /></div>

                            <div class="col-6 col-md-2 col-lg-3"><label for="roomtype">Room Type</label> <select
                                    class="form-control" id="roomtype" name="roomtype">
                                    <option value="royalsuites">Royal Suites</option>
                                    <option value="classicsuites">Classic Suites</option>
                                    <option value="orangesuites">Orange Suites</option>
                                    <option value="greensuites">Green Suites</option>
                                    <option value="businesssuites">Business Suites</option>
                                    <option value="regularsuite">Regular Double</option>
                                </select></div>

                            <div class="col-6 col-md-2 col-lg-3"><label for="checkin">Check In</label> <input
                                    class="form-control" id="checkin" name="checkin" type="date" /></div>

                            <div class="col-6 col-md-2 col-lg-3"><label for="checkout">Check Out</label> <input
                                    class="form-control" id="checkout" name="checkout" type="date" /></div>

                            <div class="col-4 col-md-1"><label for="rooms">Room</label> <select class="form-control"
                                    id="rooms" name="rooms">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select></div>

                            <div class="col-4 col-md-1"><label for="adults">Adult</label> <select class="form-control"
                                    id="adults" name="adults">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select></div>

                            <div class="col-4 col-md-2 col-lg-1"><label for="children">Children</label> <select
                                    class="form-control" id="children" name="children">
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select></div>

                            <div class="col-12 col-md-3"><button class="form-control btn roberto-btn w-100"
                                    type="submit">Book Now</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>

                        <h2>Welcome to<br />
                            Horizon Suites</h2>
                    </div>

                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">Horizon Suites is a perfect accommodation choice
                            for guests who desire a classy and comfortable stay within the popular Oluyole estate area
                            of Ibadan the capital city of Oyo State. The hotel boasts a restaurant, a conference room
                            and is also close to multinational companies.</h5>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb"><img alt="" src="/horizon/img/bg-img/13.jpg" /></div>

                                <div class="single-thumb"><img alt="" src="/horizon/img/bg-img/14.jpg" /></div>
                            </div>

                            <div class="col-6">
                                <div class="single-thumb"><img alt="" src="/horizon/img/bg-img/55.jpg" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->
    <!-- Service Area Start -->

    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms"><img alt=""
                                src="/horizon/img/core-img/icon-5.png" />
                            <h5>Accommodation</h5>
                        </div>
                        <!-- Single Service Area -->

                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms"><img alt=""
                                src="/horizon/img/core-img/icon-3.png" />
                            <h5>Restaurant &amp; Bar</h5>
                        </div>
                        <!-- Single Service Area -->

                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms"><img alt=""
                                src="/horizon/img/core-img/icon-6.png" />
                            <h5>Laundry service</h5>
                        </div>
                        <!-- Single Service Area -->

                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms"><img alt=""
                                src="/horizon/img/core-img/icon-7.png" />
                            <h5>High speed internet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->
    <!-- Our Room Area Start -->

    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/bg-img/orange1.jpg);">
                </div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Royal Suite</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦80,000 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="royal">View
                        Details</a>
                </div>
            </div>
            <!-- Single Room Slide -->

            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/business/b3.jpg);"></div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Business Suite</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦23,500 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="business">View
                        Details</a>
                </div>
            </div>
            <!-- Single Room Slide -->

            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/bg-img/purple1.jpg);">
                </div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Purple Deluxe Suite</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦28,000 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="purple">View
                        Details</a>
                </div>
            </div>
            <!-- Single Room Slide -->

            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/regular/41.jpg);"></div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Regular Double</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦15,000 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="regular">View
                        Details</a>
                </div>
            </div>
            <!-- Single Room Slide -->

            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/bg-img/lemon.jpg);">
                </div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Green Deluxe Suite</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦28,000 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="green">View
                        Details</a>
                </div>
            </div>
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/bg-img/17.jpg);"></div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Orange Suite</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦30,000 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="orange">View
                        Details</a>
                </div>
            </div>
            <!-- Single Room Slide -->

            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/cs/24.jpg);"></div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Classic Suite</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">₦25,000 <span>/ Night</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Size</span> <span>: 30 ft</span></li>
                        <li><span>Capacity</span> <span>: Max persion 2</span></li>
                        <li><span>Bed</span> <span>: King Beds</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Bathroom</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="classic">View
                        Details</a>
                </div>
            </div>
            <!-- Single food Slide -->

            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(/horizon/img/food.jpg);"></div>
                <!-- Content -->

                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Restaurant</h2>

                    <h3 data-animation="fadeInUp" data-delay="300ms">Delicious <span>/ Meals</span></h3>

                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span>Capacity</span> <span>: Spacious</span></li>
                        <li><span>Services</span> <span>: Wifi, Television, Rest Room</span></li>
                    </ul>
                    <a class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms" href="#">View
                        Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End -->
    <!-- Testimonials Area Start -->

    <section class="roberto-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100"><img alt="" src="/horizon/img/bg-img/50.jpg" />
                        <img alt="" src="/horizon/img/bg-img/49.jpg" />
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h6>Testimonials</h6>

                        <h2>Our Guests Love Us</h2>
                    </div>
                    <!-- Testimonial Slide -->

                    <div class="testimonial-slides owl-carousel mb-100">
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>&ldquo;Had My best stay in the hotel. They have one of the best service. Good security,
                                delicious food and a good bar to have cold drinks. I would love to come there againn
                                when i visit Ibadan.&rdquo;</h5>

                            <div class="rating-title">
                                <div class="rating"></div>

                                <h6>Kunle Opeyemi <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial Slide -->

                        <div class="single-testimonial-slide">
                            <h5>&ldquo;We came to lodge there so that we can celebrate our 10 years aniversary. I love
                                the place and the reception we got was a nice one. The rooms are with modern facilities
                                and they have very nice meals. We will surely like to recommend the hotel.!&rdquo;</h5>

                            <div class="rating-title">
                                <div class="rating"></div>

                                <h6>Mrs Smart <span>- CEO Clementina</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->
    <!-- Google Maps & Contact Info Area Start -->

    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <h4>Phone</h4>

                            <p>0802 472 5065</p>

                            <p>0815 364 5433</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->

                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <h4>Address</h4>

                            <p>No 1, Isaac Boladuro street, 7UP Road, Oluyole Estate, Ibadan, Nigeria</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->

                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <h4>Open time</h4>

                            <p>24hrs</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->

                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <h4>Email</h4>

                            <p>info@horizonsuites.com.ng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps & Contact Info Area End -->
@endsection
