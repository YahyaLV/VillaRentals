<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="admin/login">Admin</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="login">user</a>


                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">R</span>villa</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{url('/booking')}}" class="nav-item nav-link active">booking</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Contact</a>

                        <a class="nav-link" href="{{url('/logout')}}">Logout</a>


                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Book Now</h4>
                            <h3 class="display-3 text-white mb-md-4">Villa Rentals</h3>
                            <a href="{{url('/booking')}}" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">booking</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Book Now</h4>
                            <h3 class="display-3 text-white mb-md-4">Villa Rentals</h3>
                            <a href="{{url('/booking')}}" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">booking</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Services Start -->

    <!-- Services End -->


    <!-- Features Start -->

    <!-- Features End -->


    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">

                    <h1 class="mb-4">our type of villas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">luxury</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">small</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">house</li>
                    </ul>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">luxury 1</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="#">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">small 1</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">house 1</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">luxury 2</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">small 2</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">house 2</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->

    <!-- Testimonial End -->


    <!-- Blog Start -->

    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Newsletter</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
