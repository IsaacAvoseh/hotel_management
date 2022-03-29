@extends('layouts/master')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">Reservation Form</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Hotel Search Form Area -->
    <div class="hotel-search-form-area">
        <div class="container-fluid">
            <div class="hotel-search-form">
                <form action="http://www.horizonsuites.com.ng/reservation.php" method="post">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="num">Phone No:</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="roomtype">Room Type</label>
                            <select name="roomtype" id="roomtype" class="form-control">
                                <option value="royalsuites">Royal Suites</option>
                                <option value="classicsuites">Classic Suites</option>
                                <option value="orangesuites">Orange Suites</option>
                                <option value="businesssuites">Business Suites</option>
                                <option value="regularsuite">Regular Double</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="checkin">Check In</label>
                            <input type="date" class="form-control" id="checkin" name="checkin">
                        </div>
                        <div class="col-6 col-md-2 col-lg-3">
                            <label for="checkout">Check Out</label>
                            <input type="date" class="form-control" id="checkout" name="checkout">
                        </div>
                        <div class="col-4 col-md-1">
                            <label for="rooms">Room</label>
                            <select name="rooms" id="rooms" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-4 col-md-1">
                            <label for="adults">Adult</label>
                            <select name="adults" id="adults" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-4 col-md-2 col-lg-1">
                            <label for="children">Children</label>
                            <select name="children" id="children" class="form-control">
                                <option value="00">00</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="form-control btn roberto-btn w-100">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Call To Action Area Start -->
    <!-- Testimonials Area Start -->
    <section class="roberto-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        <img src="/horizon/img/bg-img/49.jpg" alt="">
                        <img src="horizon/img/bg-img/49.jpg" alt="">
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
                            <h5>“Had My best stay in the hotel. They have one of the best service. Good security, delicious
                                food and a good bar to have cold drinks. I would love to come there againn when i visit
                                Ibadan.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Kunle Opeyemi <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>“We came to lodge there so that we can celebrate our 10 years aniversary. I love the place
                                and the reception we got was a nice one. The rooms are with modern facilities and they have
                                very nice meals. We will surely like to recommend the hotel.!”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Mrs Smart <span>- CEO Clementina</span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->
    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="/horizon/img/core-img/icon-5.png" alt="">
                            <h5>Accommodation</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="/horizon/img/core-img/icon-3.png" alt="">
                            <h5>Restaurant &amp; Bar</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="/horizon/img/core-img/icon-6.png" alt="">
                            <h5>Laundry service</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="/horizon/img/core-img/icon-7.png" alt="">
                            <h5> High speed internet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/18.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Call +234 802 472 5065 to book directly or for info</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="contact.html" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->
@endsection
