<?php
include("php/query.php");
include("components/header.php");
?>

<!-- Breadcrumb Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Blog</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-white">Blog</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Header End -->

<!-- Blog Content Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Main Blog Posts Area -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- Blog Post Item -->
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog-1.jpg" alt="Blog 1">
                                <div class="bg-primary text-white position-absolute top-0 start-0 py-2 px-4">Travel Tips</div>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                    <small><i class="fa fa-calendar-alt text-primary me-2"></i>Aug 10, 2025</small>
                                </div>
                                <h5 class="mb-3">Top 10 Hidden Gems in Europe</h5>
                                <p class="mb-4">Discover lesser-known spots across Europe that offer unique experiences off the beaten path...</p>
                                <a class="text-uppercase text-decoration-none" href="blog-details.php">Read More <i class="fa fa-angle-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat for more posts -->
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog-2.jpg" alt="Blog 2">
                                <div class="bg-success text-white position-absolute top-0 start-0 py-2 px-4">Guides</div>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="fa fa-user text-success me-2"></i>Admin</small>
                                    <small><i class="fa fa-calendar-alt text-success me-2"></i>Aug 5, 2025</small>
                                </div>
                                <h5 class="mb-3">How to Pack Smart for Backpacking</h5>
                                <p class="mb-4">Essentials to take and things to skip for a lightweight backpacking adventure...</p>
                                <a class="text-uppercase text-decoration-none" href="blog-details.php">Read More <i class="fa fa-angle-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Add more blog-items as needed... -->

                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar Area -->
            <div class="col-lg-4">
                <div class="mb-5">
                    <!-- Search Bar -->
                    <div class="bg-light p-4 rounded mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by title">
                            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Categories -->
                    <div class="bg-light p-4 rounded mb-4">
                        <h5 class="mb-4">Categories</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-decoration-none mb-2" href="#"><i class="fa fa-angle-right text-primary me-2"></i> Travel Tips</a>
                            <a class="text-decoration-none mb-2" href="#"><i class="fa fa-angle-right text-primary me-2"></i> Destination Guides</a>
                            <a class="text-decoration-none mb-2" href="#"><i class="fa fa-angle-right text-primary me-2"></i> Packing Advice</a>
                            <a class="text-decoration-none" href="#"><i class="fa fa-angle-right text-primary me-2"></i> Travel Stories</a>
                        </div>
                    </div>
                    <!-- Recent Posts -->
                    <div class="bg-light p-4 rounded mb-4">
                        <h5 class="mb-4">Recent Posts</h5>
                        <div class="d-flex mb-3">
                            <img src="img/blog-3.jpg" alt="Recent 1" class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
                            <div class="ms-3">
                                <h6><a class="text-dark" href="blog-details.php">Must-See Waterfalls Around the World</a></h6>
                                <small><i class="fa fa-calendar-alt text-primary me-2"></i>Jul 28, 2025</small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/blog-4.jpg" alt="Recent 2" class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
                            <div class="ms-3">
                                <h6><a class="text-dark" href="blog-details.php">Solo Travel Safety Tips</a></h6>
                                <small><i class="fa fa-calendar-alt text-primary me-2"></i>Jul 15, 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter Subscribe Sidebar -->
                <div class="bg-light p-4 rounded">
                    <h5 class="mb-4">Subscribe</h5>
                    <p>Get latest travel tips and exclusive offers delivered to your inbox.</p>
                    <form action="subscribe.php" method="POST">
                        <div class="input-group">
                            <input name="email" type="email" class="form-control" placeholder="Your email" required>
                            <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Content End -->

<?php
include("components/footer.php");
?>
