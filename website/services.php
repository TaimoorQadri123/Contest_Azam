<?php
include("php/query.php");
include("components/header.php");
?>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Services</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Services</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Services Start -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Services</h5>
            <h1 class="mb-0">Explore Our Travel Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">WorldWide Tours</h5>
                                <p class="mb-0">Explore breathtaking destinations worldwide with our expertly crafted tour packages designed for every traveler.</p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-globe fa-4x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Hotel Reservation</h5>
                                <p class="mb-0">Book your stay effortlessly with our wide range of comfortable and affordable hotel options worldwide.</p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-hotel fa-4x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Travel Guides</h5>
                                <p class="mb-0">Get personalized travel advice and guides from experienced locals and experts to make your trip unforgettable.</p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-user fa-4x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Event Management</h5>
                                <p class="mb-0">From destination weddings to corporate events, we manage every detail to make your special occasions flawless.</p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-cog fa-4x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-globe fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">WorldWide Tours</h5>
                                <p class="mb-0">Explore breathtaking destinations worldwide with our expertly crafted tour packages designed for every traveler.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-hotel fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Hotel Reservation</h5>
                                <p class="mb-0">Book your stay effortlessly with our wide range of comfortable and affordable hotel options worldwide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-user fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Travel Guides</h5>
                                <p class="mb-0">Get personalized travel advice and guides from experienced locals and experts to make your trip unforgettable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-cog fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Event Management</h5>
                                <p class="mb-0">From destination weddings to corporate events, we manage every detail to make your special occasions flawless.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-4" href="services_more.php">See More Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Testimonial Start -->

       <!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonials</h5>
            <h1 class="mb-0">What Our Travelers Say</h1>
        </div>
        <div class="testimonial-carousel owl-carousel">
            <!-- Testimonial 1 -->
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">“Exploring the Swiss Alps was a dream come true. Everything from flights to hotel bookings was perfectly managed. Highly recommended!”</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-traveler-1.jpg" class="img-fluid rounded-circle" alt="Emily Clark">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">Emily Clark</h5>
                    <p class="mb-0">Toronto, Canada</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star-half-alt text-primary"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">“We had the best family vacation in Bali, thanks to your amazing tour packages. Smooth planning, great support and unforgettable memories.”</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-traveler-2.jpg" class="img-fluid rounded-circle" alt="Ahmed Khan">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">Ahmed Khan</h5>
                    <p class="mb-0">Lahore, Pakistan</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">“Booking our honeymoon to Maldives was seamless. The resort was beyond expectations. Thank you for making it so special!”</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-traveler-3.jpg" class="img-fluid rounded-circle" alt="Sophia & Liam">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">Sophia & Liam</h5>
                    <p class="mb-0">London, UK</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star-half-alt text-primary"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">“Your Europe tour package was fantastic! From Paris to Rome, everything was well organized and budget-friendly.”</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="img/testimonial-traveler-4.jpg" class="img-fluid rounded-circle" alt="Carlos Mendez">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">Carlos Mendez</h5>
                    <p class="mb-0">Madrid, Spain</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<!-- Testimonial End -->

<!-- Subscribe Start -->
<!-- <div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h1 class="text-white mb-4">Our Newsletter</h1>
            <p class="text-white mb-5">Stay updated with the latest travel deals and offers. Subscribe to our newsletter!</p>
            <form action="subscribe.php" method="POST" class="position-relative mx-auto" style="max-width: 600px;">
                <input name="email" class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email" required>
                <button type="submit" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </form>
        </div>
    </div>
</div> -->
<!-- Subscribe End -->

<?php
include("components/footer.php");
?>
