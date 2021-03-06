@extends('layouts/master')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url(/horizon/img/bg-img/18.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center mt-100">
                    <h2 class="page-title">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Google Maps & Contact Info Area Start -->
<section class="google-maps-contact-info">
    <div class="container-fluid">
        <div class="google-maps-contact-content">
            <div class="row">
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Phone</h4>
                        @if(isset($aboutus))
                        <p>{{ $aboutus->phone }}</p>
                        @endif
                    </div>
                </div>
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Address</h4>
                        @if(isset($aboutus))
                        <p>{{ $aboutus->address }}</p>
                        @endif
                    </div>
                </div>
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Open time</h4>
                        <p>24hrs</p>
                    </div>
                </div>
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>Email</h4>
                        @if(isset($aboutus))
                        <p>{{ $aboutus->email }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126623.54847446381!2d3.7762014004997306!3d7.355477253663934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398c45dbf8c05d%3A0x53c3236f8fbb2458!2sHorizon%20Suite%20Oluyole%20Ibadan!5e0!3m2!1sen!2sng!4v1590870392637!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Google Maps & Contact Info Area End -->

<!-- Contact Form Area Start -->
<div class="roberto-contact-form-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h6>Contact Us</h6>
                    <h2>Leave Message</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Form -->
                <div class="roberto-contact-form">
                    <form method="post">
                        @include('flash.flash')
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-6 wow fadeInUp mb-30" data-wow-delay="100ms">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control " placeholder="Your Name">
                                <span class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 col-lg-6 wow fadeInUp mb-30" data-wow-delay="100ms">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email">
                                <span class="text-danger">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 wow fadeInUp mb-30" data-wow-delay="100ms">
                                <textarea name="message" value="{{ old('message') }}" class="form-control" placeholder="Your Message"></textarea>
                                <span class="text-danger">
                                    @error('message')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                <button type="submit" class="btn roberto-btn mt-15">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form Area End -->

<!-- Call To Action Area Start -->
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
                    <a href="/contact" class="btn roberto-btn mb-50">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Area End -->
@endsection