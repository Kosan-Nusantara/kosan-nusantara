@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/hotel/facilities/banner.png);"></div>
        <div class="auto-container">
            <div class="content-box centered">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Intro -->
    <section class="packages-three no-padd-top">
        <div class="search-one" style="background-color: #00B2FF;">
            <div class="auto-container">
                <div class="outer">
                    <div class="row justify-content-between">
                        <div class="col-4 mx-2 my-2">
                            <span>
                                <b style="font-size: 25px; color: white;">
                                    Plan Your Stay
                                </b>
                                <br>
                                <span style="font-size: 16px; color: white;">Best Price Guarantee</span>
                            </span>
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <div class="link text-end">
                                <a href="kost.html" class="theme-btn btn-style-one"
                                    style="border-color: white; background-color: white;">
                                    <span style="color: black;">Find Room</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix justify-content-center align-items-center">
                <div class="col-7 mb-5">
                    <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h2 class="text-center"><span>Reach Us</span></h2>
                    </div>
                    <div class="text-content text-center">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum leo tempor
                            pellentesque efficitur. Curabitur tellus neque, posuere non ex eget, venenatis
                            vestibulum justo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix align-items-center">
                <!--Block-->
                <div class="col-lg-4 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities/icon/marker.png" alt="">
                            </div>
                        </div>
                        <h5>Location</h5>
                        <div class="text-content text-center">
                            <span>
                                201 Orion Road
                            </span>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="col-lg-4 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/phone.png" alt="">
                            </div>
                        </div>
                        <h5>Phone</h5>
                        <div class="text-content text-center">
                            <span>
                                +123 456 789000
                            </span>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="col-lg-4 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/mail.png" alt="">
                            </div>
                        </div>
                        <h5>Email</h5>
                        <div class="text-content text-center">
                            <span>
                                kosanusantara@gmail.com
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                <h3 class="text-center">Send Us A Message</h3>
                <div class="form-box site-form">
                    <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate">
                        <div class="row clearfix">
                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="username" value="" placeholder="Your name"
                                        required="">
                                </div>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="Your email"
                                        required="">
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Start writing your message here" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-one"><span>Send
                                        Message</span></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
    </section>
    <!-- End Intro -->

    <section class="contact-section">
        <div class="auto-container">
            <div class="map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.366840372981!2d108.35089878482357!3d-7.31262205304883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5ea03cec29d5%3A0xe7e65e8df2e9dacc!2sFakultas%20Ekonomi%20Universitas%20Galuh!5e0!3m2!1sid!2sid!4v1699728667864!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
