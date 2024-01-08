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
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">



    <style>
        .pricing-section .pricing-table .table-header h1 {
            font-size: 40px;
        }
    </style>
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
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred" style="background-color: #fea633">
        <div class="container">
            <div class="sec-title">
                <h5>Contact</h5>
                <h1 style="color:#2b3c6b;">Get In Touch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="info-column">
                        <div class="single-info-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h3 style="vertical-align: middle;"><i class="flaticon-address"
                                        style="font-size: 55px; vertical-align: middle; color: #fde400;"></i> Our
                                    Location</h3>
                                <div class="text">
                                    <div class="text">103/85<br />Pratap Nagar, Jaipur ,
                                        Rajasthan <br /> India Pin – 000000</div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                    <div class="info-column">
                        <div class="single-info-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h3 style="vertical-align: middle;"><i class="flaticon-vintage-hand-phone"
                                        style="font-size: 55px; vertical-align: middle; color: #2ba7fa;"></i> Phone
                                    Number</h3>
                                <div class="text">
                                    <a href="tel:+91-986 080 0135">+91-000 000 0000</a><br />
                                    <a href="tel:+91-839 090 5726">+91-000-000-0000</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <section class="contact-form-section sec-pad" style="padding-top: 0px;">
                        <div class="container" style="background-color: #fea633">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 form-column">
                                    <div class="contact-form">
                                        <form action="{{ route('contact.store') }}" method='POST'
                                            enctype='multipart/form-data' id='contactForm'>
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                    <input type="text" name="First Name" placeholder="FirstName*"
                                                        required>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                    <input type="text" name="Last Name" placeholder="LastName*"
                                                        required>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <input type="email" name="Email" placeholder="Email*"
                                                        title="Eg: emailid@domain.com"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                                </div>

                                                <div class="col-lg-4  col-md-12 col-sm-12 form-group">
                                                    <select name="CONTACTCF2"
                                                        style="width: 100%;
                                                height: 60px;
                                                background: #fff;
                                                border: 3px solid #fff;
                                                border-radius: 20px;
                                                padding: 10px 20px;
                                                font-size: 15px;
                                                color: #2b3c6b;
                                                transition: all 500ms ease;">
                                                        <option value="+91">+91 (Ind)</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-8  col-md-12 col-sm-12 form-group">
                                                    <input type="text" name="Phone" title="Eg:9876543210"
                                                        pattern="([0-9]{10})" placeholder="Phone number" required>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <input type="text" name="Title" placeholder="Subject"
                                                        required>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <textarea name="Description" placeholder="Write here message" style="margin-bottom:0;"></textarea>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                                    <button type="reset" class="theme-btn" name="submit-form"
                                                        onclick='disableSubmitwhileReset()'>Reset</button>
                                                    <button type="submit" id='formsubmit' class="theme-btn"
                                                        name="submit-form">Submit Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
    </section>
    <!-- contact-info-section end -->




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
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Contact us</a></li>
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

    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('sweet'))
        @php
            $sweetData = session('sweet');
        @endphp
        <script>
            Swal.fire({
                icon: '{{ $sweetData['icon'] }}',
                title: '{{ $sweetData['title'] }}',
                text: '{{ $sweetData['message'] }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif


</body><!-- End of .page_wrapper -->

</html>
