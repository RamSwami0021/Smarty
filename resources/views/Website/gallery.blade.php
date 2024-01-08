<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Smarty</title>

    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">

    <style>
        .pricing-section .pricing-table .table-header h1 {
            font-size: 40px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body class="boxed_wrapper">
    <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>

            </div>
        </div>
    </div>
    <!-- search-box-layout end -->


    <!-- Main Header -->
    <header class="main-header">

        <div class="header-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="logo-box pull-left mt-3">
                        <h1> <strong>Smarty</strong></h1>
                    </div>
                    <div class="nav-outer pull-right clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">

                                        {{-- <li class="dropdown"><a href="index.html">About</a>
                                            <ul>
                                                <li><a href="#">Meals</a></li>
                                                <li><a href="#">Staff</a></li>

                                            </ul>
                                        </li> --}}
                                        <li class="{{ request()->is('/') ? 'current' : '' }}">
                                            <a href="{{ asset('/') }}">About</a>
                                        </li>
                                        <li class="{{ request()->is('gallery') ? 'current' : '' }}">
                                            <a href="{{ asset('gallery') }}">Gallery</a>
                                        </li>

                                        <li class="{{ request()->is('contact') ? 'current' : '' }}">
                                            <a href="{{ asset('contact') }}">Contact Us</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title centred"
        style="background-image: url({{ asset('website/images/background/page-title.jpg') }});">
        <div class="container">
            <div class="content-box">
                <h1>Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ asset('/') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h5>Gallery</h5>
                <h1 style="color:#2b3c6b;">Welcome to Gallery</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mb-2">
                            <button type="button" class="theme-btn" data-image-name="All">All</button>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mb-2">
                            <button type="button" class="theme-btn" data-image-name="Classroom All">Classroom</button>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mb-2">
                            <button type="button" class="theme-btn"
                                data-image-name="Playground All">Playground</button>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mb-2">
                            <button type="button" class="theme-btn" data-image-name="Event All">Event</button>
                        </div>


                    </div>
                    <div class="col-12 text-center mt-5">
                        <div class="row justify-content-between">
                            @foreach ($galleryData as $galleryItem)
                                <div class="col-12 col-md-6 col-lg-4 mb-3 image-container"
                                    data-image-name="{{ $galleryItem->image_type }} All">
                                    <figure class="image image-1" style="width: 300px;">
                                        <img src="{{ asset($galleryItem->image_path) }}"
                                            alt="{{ $galleryItem->image_name }}">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- contact-info-section end -->

    <section class="about-section">
        <div class="container">
            <div class="sec-title text-center">
                <h1 style="color:#2b3c6b;">Testimonial</h1>
            </div>
            <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                   <img src="{{ asset('website/images/background/aboutus.jpg') }}
                   " alt="About Us" width="220px"
                 style=" border: 15px solid #fff; border-radius: 30px; box-shadow: 0 30px 50px rgba(8,13,62,.15); margin-top: 50px; ">
                </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                   <img src="{{ asset('website/images/background/aboutus.jpg') }}
                   " alt="About Us" width="220px"
                 style=" border: 15px solid #fff; border-radius: 30px; box-shadow: 0 30px 50px rgba(8,13,62,.15); margin-top: 50px; ">
                </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                   <img src="{{ asset('website/images/background/aboutus.jpg') }}
                   " alt="About Us" width="220px"
                 style=" border: 15px solid #fff; border-radius: 30px; box-shadow: 0 30px 50px rgba(8,13,62,.15); margin-top: 50px; ">
                </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                   <img src="{{ asset('website/images/background/aboutus.jpg') }}
                   " alt="About Us" width="220px"
                 style=" border: 15px solid #fff; border-radius: 30px; box-shadow: 0 30px 50px rgba(8,13,62,.15); margin-top: 50px; ">
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.theme-btn').click(function() {
                var imageName = $(this).data('image-name');
                if (imageName === "All") {
                    $('.image-container').show();
                } else {
                    $('.image-container').hide();
                    $('.image-container[data-image-name="' + imageName + '"]').show();
                }
                $('.theme-btn').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="parallax-scene parallax-scene-2 parallax-icon">
                <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <h3 class="widget-title">About Smarty</h3>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>An online learning tool to help you continue education in offline or online
                                            mode with excellent user engagement.</p>
                                        <p>Now experience the live classroom with benefits of doing classwork,
                                            assignments, homework, and quizzes with Smarty. Accelerated learning!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="link-widget footer-widget">
                                <h3 class="widget-title">Useful Link</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="{{ asset('/') }}">About us</a></li>
                                        <li><a href="{{ asset('/') }}">Gallery</a></li>
                                        <li><a href="{{ asset('/') }}">Contact us</a></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">Get in Touch</h3>
                                <div class="widget-content">
                                    <div class="text">Got questions, or want to request a demo? Send an email to
                                        ramswami0021@gmail.com </div>
                                    <ul class="info-list">
                                        <li><i class="fas fa-home"></i>103/85, Pratap nagar Jaipur, Rajasthan, India
                                            Pin – 000000</li>
                                        <li><i class="fas fa-phone"></i><a
                                                href="tel:91-839-090-05726">+91-000-000-0000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="subscribe-widget footer-widget">
                                <h3 class="widget-title">Subscribe Now</h3>
                                <div class="widget-content">
                                    <div class="text">Don’t miss out! Subscribe to receive updates about our product,
                                        services, and solutions.</div>
                                    <div class="subscribe-inner">
                                        <form action="#" method="post" class="subscribe-form">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Enter Your Email"
                                                    required="">
                                                <button type="submit" class="theme-btn">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fa fa-arrow-up"></i>
    </button>



    <!-- jequery plugins -->
    <script src="{{ asset('website/js/jquery.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('website/js/owl.js') }}"></script>
    <script src="{{ asset('website/js/wow.js') }}"></script>
    <script src="{{ asset('website/js/validation.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('website/js/appear.js') }}"></script>
    <script src="{{ asset('website/js/parallax.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('website/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

</html>
