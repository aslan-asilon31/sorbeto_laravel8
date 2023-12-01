<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sorbeto </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets_frontend/ice_cream_shop/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_frontend/ice_cream_shop/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets_frontend/ice_cream_shop/css/style.css') }}" rel="stylesheet">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Banner slider  -->
    <style>
        .slider {
            width: 100%;
            height: 610px;
            position: relative;
        }
    
        .slider img {
            width: 100%;
            height: 500px;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0; /* Initially hide all images */
            transition: opacity 1s ease; /* Add a transition effect */
        }
    
        .slider img:first-child {
            z-index: 1;
            opacity: 1; /* Show the first image initially */
        }
    
        .navigation-button {
            text-align: center;
            position: relative;
            margin-top: 10px;
        }
    
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }
    
        .active,
        .dot:hover {
            background-color: #717171;
        }
    </style>
    
    <!-- end Banner slider  -->

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Aslan Aradan Product</a>
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
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">S</span>orbeto</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class=" nav-item nav-link active">Welcome</a>
                        <a href="about.html" class=" nav-item nav-link">About</a>
                        <a href="product.html" class="  nav-item nav-link">Product</a>
                    </div>
                    <a href="/" class="animate__animated animate__pulse animate__infinite	infinite  mx-1 d-none d-lg-block text-center ">
                        Welcome to <h1 class="m-0 display-4 text-primary"><span class="text-secondary">S</span>orbeto</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="slider">
        <img id="img-1" src="img-1.jpg" alt="Image 1"/>
        <img id="img-2" src="img-2.jpg" alt="Image 2"/>
        <img id="img-3" src="img-3.jpg" alt="Image 3"/>
    </div>
    
    <div class="navigation-button">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot" onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
    </div>
    


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="row m-5">
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-6 mb-4 pb-2 ">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-4 px-2">
                    <div class="bg-primary mt-n4 py-2" style="width: 54px;">
                        <h4 class="font-weight-bold text-white mb-0">$99</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n2 mb-3 p-2 card-ice-cream-image" style="width: 100px; height: 100px;">
                        <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                    </div>
                    <p style="font-size:14px;" class="font-weight-bold mb-3">Vanilla Ice Cream</p>
                    <p style="font-size:11px;" class="font-weight-bold mb-3"><a href="" class="btn btn-sm btn-secondary">Order Now</a> </p>
                    <div class="d-flex ">
                        <i class="fa fa-eye font-awesome"></i>
                        <i class="fa fa-bookmark font-awesome"></i>
                        <i class="fa fa-heart font-awesome"></i>
                        <i class="fa fa-share font-awesome"></i>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-12 text-center">
                <a href="" class="btn btn-primary py-3 px-5">Load More</a>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">S</span>orbeto</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">Jakarta, Inodnesia</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">aslanasilon.com</a>. All Rights Reserved.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<!-- banner slider  -->
<script>
    var imgs = document.querySelectorAll('.slider img');
    var dots = document.querySelectorAll('.dot');
    var currentImg = 0; // index of the first image 
    const interval = 3000; // duration(speed) of the slide

    var timer = setInterval(autoChangeSlide, interval);

    function autoChangeSlide() {
        var nextIndex = (currentImg + 1) % imgs.length;
        changeSlide(nextIndex);
    }

    function changeSlide(n) {
        for (var i = 0; i < imgs.length; i++) { // reset
            imgs[i].style.opacity = 0;
            dots[i].classList.remove('active');
        }

        currentImg = n;

        imgs[currentImg].style.opacity = 1;
        dots[currentImg].classList.add('active');
    }

    document.addEventListener('DOMContentLoaded', function() {
        var secondEventTitle = 'Hi! *Freshmen* Orientation Day'; // pull from the database
        var img1 = 'icecreamstore.co.id/banner/banner1.jpg';
        var img2 = 'icecreamstore.co.id/banner/banner2.jpg';
        var img3 = 'icecreamstore.co.id/banner/banner3.png';

        document.getElementById('img-1').src = img1;
        document.getElementById('img-2').src = img2;
        document.getElementById('img-3').src = img3;
    });
</script>
<!-- end banner slider  -->
</body>

</html>