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




    <!-- about-section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two"><br><br>
                            <h1> <strong>Whene should i begin to Look at school?</strong></h1>
                        </div>
                        <div class="bold-text">Explore a system that is designed, keeping the demands of students and
                            teachers in mind. Smarty is not a traditional online learning system. But, Smarty gives you
                            the flexibility of conducting bidirectional classes on all operating systems, web browsers,
                            or a mobile device.
                        </div>
                        <div class="btn-box"><a href="#" class="theme-btn">Learn more</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="{{ asset('website/images/resource/about-5.jpg') }}"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- service-section -->
    <section class="service-section sec-pad offer-section centred"
        style="background-image: url({{ asset('website/images/background/service-bg.jpg') }});">
        <div class="container">
            <div class="sec-title">
                <h1 style="color: aliceblue;">Notice Board</h1>
            </div>
            <div class="row">

                @foreach ($notices as $notice)
                    <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding-bottom: 15px;">
                        <div class="single-offer-block wow fadeInUp animated animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <h3>{{ $notice->title }}</h3>
                            <div class="text">{{ $notice->description }}</div>
                            <a href="#" class="theme-btn"
                                style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 1000;"
                                download>
                                Download
                            </a>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- classes-section -->
    <section class="classes-section sec-pad activities-section centred" style="background-color: white; color: #0644ee;">
        <div class="container">
            <div class="row">

                <div class="content-box">
                    <div class="title-box">
                        <div class="sec-title">
                            <h1 style="color:#2b3c6b;">Why choose Smarty?</h1>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                <div class="single-item wow fadeInLeft" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <!-- <i class="flaticon-abc-block"></i> -->
                                        <div style="width:60px;">
                                            <i class="icon-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                                    enable-background="new 0 0 511.558 511.558"
                                                    viewBox="0 0 511.558 511.558" fill="currentColor">
                                                    <g>
                                                        <path
                                                            d="m491.947 357.513c-12.801-14.575-30.713-22.602-50.436-22.602h-2.981c.004-3.389-.552-6.795-1.71-10.07-7.065-19.978-13.244-49.565-2.552-77.077 0 0 0 0 0-.001 3.588-9.231 2.39-19.623-3.203-27.797-5.594-8.175-14.847-13.055-24.752-13.055h-336.268c-41.242 0-70.045 32.486-70.045 79 0 22.927 6.853 42.652 19.819 57.045 12.755 14.158 30.592 21.955 50.227 21.955h5.21c.001 3.662.669 7.341 2.034 10.853 11.417 29.377 3.302 61.527-2.552 78.077-3.255 9.202-1.839 19.448 3.787 27.405 5.607 7.931 14.755 12.665 24.472 12.665h338.516c19.635 0 37.472-7.797 50.227-21.955 12.966-14.393 19.819-34.118 19.819-57.045-.001-22.943-6.783-42.791-19.612-57.398zm-461.947-71.602c0-29.767 15.719-49 40.045-49l336.277-.064c0 .001-.004.017-.017.05-14.025 36.087-6.527 73.183 2.231 97.948 0 0-.007.036-.013.066h-303.28-35.198c-24.326 0-40.045-19.233-40.045-49zm411.512 178-338.479-.003c-.005-.029-.012-.063-.012-.063 7.239-20.467 17.155-60.532 2.237-98.934h303.304 32.95c23.953 0 40.046 20.094 40.046 50 0 29.767-15.719 49-40.046 49z" />
                                                        <path
                                                            d="m344.738 285.911c0-8.284-6.716-15-15-15h-236.053c-8.284 0-15 6.716-15 15s6.716 15 15 15h236.054c8.283 0 14.999-6.715 14.999-15z" />
                                                        <path
                                                            d="m418.315 398.879h-236.054c-8.284 0-15 6.716-15 15s6.716 15 15 15h236.054c8.284 0 15-6.716 15-15s-6.715-15-15-15z" />
                                                        <path
                                                            d="m160.013 69.803c2.33 0 4.695-.545 6.905-1.693.891-.464 90.138-45.794 178.159-.003 7.351 3.827 16.407.967 20.229-6.384 3.823-7.35.966-16.406-6.384-20.229-42.174-21.94-91.095-28.923-141.469-20.193-37.862 6.562-63.308 19.637-64.372 20.19-7.351 3.821-10.212 12.877-6.392 20.228 2.673 5.14 7.905 8.084 13.324 8.084z" />
                                                        <path
                                                            d="m210.429 143.985c-7.692 3.076-11.458 11.815-8.381 19.508 2.347 5.867 7.968 9.441 13.917 9.441 1.85 0 3.731-.346 5.556-1.075.348-.137 35.236-13.488 68.908-.021 7.69 3.077 16.422-.664 19.498-8.355 3.077-7.692-.664-16.422-8.355-19.498-45.055-18.023-89.281-.744-91.143 0z" />
                                                        <path
                                                            d="m319.995 119.617c5.937 0 11.559-3.549 13.916-9.394 3.099-7.683-.617-16.423-8.3-19.521-68.821-27.757-136.38-1.146-139.222 0-7.67 3.094-11.374 11.807-8.297 19.484s11.803 11.408 19.488 8.351c.587-.235 59.467-23.142 116.809-.013 1.84.743 3.738 1.093 5.606 1.093z" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h3>Blended learning Model</h3>
                                    <div class="text">Facility to deliver online and offline classes. Even when you
                                        continue with regular schooling. </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                <div class="single-item wow fadeInRight" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <!-- <i class="flaticon-teddy-bear"></i> -->
                                        <div style="width:60px;">
                                            <i class="icon-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                                    fill="currentColor" enable-background="new 0 0 512 512"
                                                    viewBox="0 0 512 512">
                                                    <g>
                                                        <path
                                                            d="m471 385.284v-49.284c0-12.971-6.335-25.477-17.379-34.313-.249-.199-.508-.386-.76-.58 6.34-8.011 10.139-18.121 10.139-29.107 0-20.671-13.42-38.256-32-44.531v-182.469c0-24.813-20.187-45-45-45h-260c-24.813 0-45 20.187-45 45v182.469c-18.58 6.275-32 23.86-32 44.531 0 10.998 3.808 21.118 10.16 29.134-11.144 8.607-18.16 21.049-18.16 34.866v49.284c-22.468 2.496-40 21.593-40 44.716v37c0 24.813 20.187 45 45 45h420c24.813 0 45-20.187 45-45v-37c0-23.123-17.532-42.22-40-44.716zm-160-.284v-49c0-12.971-6.335-25.477-17.379-34.313-.249-.199-.508-.386-.76-.58 3.313-4.187 5.927-8.946 7.67-14.107h70.938c1.747 5.172 4.368 9.94 7.691 14.134-11.144 8.607-18.16 21.049-18.16 34.866v49zm-160 0v-49c0-12.971-6.335-25.477-17.379-34.313-.249-.199-.508-.386-.76-.58 3.313-4.187 5.927-8.946 7.67-14.107h70.938c1.747 5.172 4.368 9.94 7.691 14.134-11.144 8.607-18.16 21.049-18.16 34.866v49zm-80-49c0-9.056 11.683-17 25-17 7.143 0 14.023 2.229 18.88 6.113 2.285 1.829 6.12 5.675 6.12 10.887v49h-50zm185-47c-9.374 0-17-7.626-17-17s7.626-17 17-17 17 7.626 17 17-7.626 17-17 17zm-25 47c0-9.056 11.683-17 25-17 7.143 0 14.023 2.229 18.88 6.113 2.285 1.829 6.12 5.675 6.12 10.887v49h-50zm160 0c0-9.056 11.683-17 25-17 7.143 0 14.023 2.229 18.88 6.113 2.285 1.829 6.12 5.675 6.12 10.887v49h-50zm25-47c-9.374 0-17-7.626-17-17s7.626-17 17-17 17 7.626 17 17-7.626 17-17 17zm-290-259h260c8.271 0 15 6.729 15 15v182.469c-13.866 4.684-24.848 15.665-29.531 29.531h-70.938c-6.276-18.58-23.86-32-44.531-32s-38.255 13.42-44.531 32h-70.938c-4.684-13.866-15.665-24.848-29.531-29.531v-182.469c0-8.271 6.729-15 15-15zm-47 242c0-9.374 7.626-17 17-17s17 7.626 17 17-7.626 17-17 17-17-7.626-17-17zm402 195c0 8.271-6.729 15-15 15h-420c-8.271 0-15-6.729-15-15v-37c0-8.271 6.729-15 15-15h420c8.271 0 15 6.729 15 15z" />
                                                        <path
                                                            d="m226.7 193.894c3.636 1.919 7.597 2.869 11.545 2.868 4.881 0 9.742-1.451 13.938-4.318l56.046-38.294c6.723-4.594 10.749-12.197 10.771-20.339.022-8.141-3.961-15.766-10.656-20.396l.001.001-56.046-38.77c-7.583-5.244-17.367-5.845-25.536-1.563-8.167 4.282-13.24 12.67-13.24 21.891v77.062c-.001 9.192 5.049 17.567 13.177 21.858zm16.822-88.84 41.435 28.662-41.435 28.312z" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h3>Designed for everyone</h3>
                                    <div class="text">Conduct classes for Preschooler, Kindergarten, high school,
                                        colleges, universities, or professional training services. </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                <div class="single-item wow fadeInLeft" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <!-- <i class="flaticon-championship"></i> -->
                                        <div style="width:60px;">
                                            <i class="icon-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                                    enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                                    fill="currentColor">
                                                    <g>
                                                        <path
                                                            d="m467 41h-422c-24.813 0-45 20.187-45 45v340c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-340c0-24.813-20.187-45-45-45zm-422 30h422c8.271 0 15 6.729 15 15v83h-452v-83c0-8.271 6.729-15 15-15zm422 370h-108v-89c0-8.284-6.716-15-15-15s-15 6.716-15 15v89h-58v-57c0-8.284-6.716-15-15-15s-15 6.716-15 15v57h-58v-33c0-8.284-6.716-15-15-15s-15 6.716-15 15v33h-103.024l69.544-75.046 90.946-15.158c5.042-.84 9.308-4.189 11.321-8.887l20.104-46.909h70.109c1.612 0 3.214-.26 4.743-.77l28.644-9.548c-.995 4.397-.02 9.189 3.089 12.92 2.967 3.56 7.233 5.398 11.531 5.398 3.386 0 6.791-1.141 9.595-3.477l48-40c4.852-4.043 6.651-10.692 4.501-16.63s-7.788-9.893-14.103-9.893h-64c-8.284 0-15 6.716-15 15 0 3.566 1.25 6.838 3.329 9.412l-22.763 7.588h-77.566c-6 0-11.423 3.576-13.787 9.091l-20.769 48.461-87.91 14.651c-3.276.546-6.279 2.164-8.537 4.6l-70.997 76.615v-219.418h452v227c0 8.271-6.729 15-15 15z" />
                                                        <circle cx="209.04" cy="120" r="15" />
                                                        <circle cx="145.04" cy="120.002" r="15" />
                                                        <circle cx="81.04" cy="120" r="15" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h3>High level of engagement</h3>
                                    <div class="text">Conduct activities throughout your classes and sessions to keep
                                        your audience engaged and motivated. </div>
                                </div>
                            </div>

                        </div><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 column column-second">
                                <div class="single-item wow fadeInLeft" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <!-- <i class="flaticon-abc-block"></i> -->
                                        <div style="width:60px;">
                                            <i class="icon-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                                    enable-background="new 0 0 512.305 512.305"
                                                    viewBox="0 0 512.305 512.305" fill="currentColor">
                                                    <g>
                                                        <path
                                                            d="m141.305 329c0-38.682-31.694-70.152-70.652-70.152s-70.653 31.47-70.653 70.152c0 21.033 9.383 39.919 24.196 52.788-9.912 8.689-16.196 21.477-16.196 35.724v79.641c0 8.284 6.716 15 15 15h93.11c8.284 0 15-6.716 15-15v-79.641c0-13.727-5.831-26.103-15.122-34.76 15.463-12.88 25.317-32.191 25.317-53.752zm-70.653-40.152c22.416 0 40.652 18.012 40.652 40.152s-18.236 40.152-40.652 40.152-40.652-18.012-40.652-40.152 18.236-40.152 40.652-40.152zm30.458 193.304h-63.11v-64.641c0-9.572 7.626-17.359 17-17.359h29.11c9.374 0 17 7.788 17 17.359z" />
                                                        <path
                                                            d="m486.988 382.751c15.463-12.879 25.316-32.191 25.316-53.751 0-38.682-31.694-70.152-70.652-70.152s-70.652 31.47-70.652 70.152c0 21.033 9.383 39.919 24.196 52.788-9.912 8.689-16.196 21.477-16.196 35.724v64.641c0 16.542 13.458 30 30 30h63.11c16.542 0 30-13.458 30-30v-64.641c0-13.727-5.831-26.103-15.122-34.761zm-45.336-93.903c22.416 0 40.652 18.012 40.652 40.152s-18.236 40.152-40.652 40.152-40.652-18.012-40.652-40.152 18.236-40.152 40.652-40.152zm30.458 193.304h-63.11v-64.641c0-9.572 7.626-17.359 17-17.359h29.11c9.374 0 17 7.788 17 17.359l.019 64.64s-.006.001-.019.001z" />
                                                        <path
                                                            d="m296 482.152h-25v-35h2c16.542 0 30-13.458 30-30v-58c0-16.542-13.458-30-30-30h-34c-16.542 0-30 13.458-30 30v58c0 16.542 13.458 30 30 30h2v35h-25c-8.284 0-15 6.716-15 15s6.716 15 15 15h80c8.284 0 15-6.716 15-15s-6.716-15-15-15zm-57-123h34l.003 58h-34.003z" />
                                                        <path
                                                            d="m389.697 232.472-11.927-39.762v-79.798c0-24.813-20.187-45-45-45h-13.77v-22.76c0-24.813-20.187-45-45-45h-149c-24.813 0-45 20.187-45 45v80.798l-11.929 39.763c-3.623 12.076.512 24.821 10.534 32.47 5.398 4.12 11.772 6.202 18.176 6.202 5.485 0 10.991-1.527 15.924-4.61h.001l26.063-16.29v21.427c0 24.813 20.187 45 45 45h134.698l26.59 16.619c4.938 3.086 10.446 4.616 15.935 4.615 6.401 0 12.775-2.082 18.172-6.2 10.024-7.648 14.158-20.395 10.533-32.474zm-262.647-77.039-30.244 18.903 12.562-41.873c.42-1.398.633-2.85.633-4.31v-83c0-8.271 6.729-15 15-15h149c8.271 0 15 6.729 15 15v93c0 8.271-6.729 15-15 15h-139.001c-2.812-.001-5.566.789-7.95 2.28zm233.91 85.66-30.24-18.9c-2.384-1.49-5.139-2.28-7.95-2.28h-139c-8.271 0-15-6.729-15-15v-21.76h105.23c24.813 0 45-20.187 45-45v-40.24h13.77c8.271 0 15 6.729 15 15v82c0 1.46.213 2.912.633 4.31l12.561 41.872s0 .001.001.001c-.003-.002-.004-.003-.005-.003z" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h3>Guardian involvement</h3>
                                    <div class="text">Involve parents to track their child's progress report on a
                                        regular basis. Understand how your child is performing in the classroom. </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 column column-second">
                                <div class="single-item wow fadeInRight" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <!-- <i class="flaticon-teddy-bear"></i> -->
                                        <div style="width:60px;">
                                            <i class="icon-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                                    enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                                    fill="currentColor">
                                                    <g>
                                                        <path
                                                            d="m467 0h-422c-24.813 0-45 20.187-45 45v293c0 24.813 20.187 45 45 45h160.819c-2.249 10.458-5.636 24.517-10.199 38.99-13.608 43.163-26.602 56.122-33.196 60.011h-42.424c-8.284 0-15 6.716-15 15s6.716 15 15 15h272c8.284 0 15-6.716 15-15s-6.716-15-15-15h-41.614c-6.574-3.878-19.523-16.782-33.099-59.701-4.602-14.548-8.023-28.749-10.293-39.3h160.006c24.813 0 45-20.187 45-45v-293c0-24.813-20.187-45-45-45zm-422 30h422c8.271 0 15 6.729 15 15v220h-45.686l-21.844-37.089v-68.935c8.065-.25 14.53-6.851 14.53-14.976 0-8.284-6.716-15-15-15h-96c-8.284 0-15 6.716-15 15s6.716 15 15 15h1.61v68.542l-24.426 37.458h-73.703l-22.481-67.435v-102.565h17c8.284 0 15-6.716 15-15s-6.716-15-15-15h-128c-8.284 0-15 6.716-15 15s6.716 15 15 15h17v102.565l-22.481 67.435h-52.519v-220c0-8.271 6.729-15 15-15zm304.61 202v-73h34.86v73c0 2.677.716 5.306 2.075 7.612l14.953 25.388h-70.499l16.176-24.807c1.589-2.437 2.435-5.284 2.435-8.193zm-214.61-32v-105h34v105c0 1.612.26 3.214.77 4.744l20.088 60.256h-75.716l20.088-60.256c.51-1.53.77-3.132.77-4.744zm153.577 231.011c6.654 21.105 13.961 38.049 22.02 50.99h-108.385c8.059-12.941 15.366-29.885 22.02-50.99 5.911-18.75 9.938-36.588 12.239-48.011h39.868c2.3 11.423 6.327 29.261 12.238 48.011zm178.423-78.011h-20v-9c0-8.284-6.716-15-15-15s-15 6.716-15 15v9h-372c-8.271 0-15-6.729-15-15v-43h452v43c0 8.271-6.729 15-15 15z" />
                                                        <circle cx="342" cy="88.001" r="15" />
                                                        <circle cx="406" cy="72.001" r="15" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h3>Play sessions</h3>
                                    <div class="text">Conduct games, role-play sessions for the students and engage
                                        them
                                        with the real-time group sessions. </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 column column-second">
                                <div class="single-item wow fadeInLeft" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <!-- <i class="flaticon-championship"></i> -->
                                        <div style="width:60px;">
                                            <i class="icon-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                                    enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                                    fill="currentColor">
                                                    <g>
                                                        <path
                                                            d="m417.558 287.187-60.334-32.488c-9.385-5.054-20.453-4.808-29.606.658-9.154 5.467-14.618 15.096-14.618 25.756v74.258c0 11.195 6.16 21.377 16.077 26.573 4.394 2.302 9.172 3.441 13.933 3.441 5.983 0 11.94-1.8 17.066-5.348l60.335-41.771c8.65-5.988 13.464-15.834 12.877-26.338-.586-10.504-6.467-19.753-15.73-24.741zm-74.558 68.178v-74.251l60.332 32.49z" />
                                                        <path
                                                            d="m176 241h-96c-8.284 0-15 6.716-15 15s6.716 15 15 15h96c8.284 0 15-6.716 15-15s-6.716-15-15-15z" />
                                                        <path
                                                            d="m176 305h-96c-8.284 0-15 6.716-15 15s6.716 15 15 15h96c8.284 0 15-6.716 15-15s-6.716-15-15-15z" />
                                                        <path
                                                            d="m176 369h-96c-8.284 0-15 6.716-15 15s6.716 15 15 15h96c8.284 0 15-6.716 15-15s-6.716-15-15-15z" />
                                                        <path
                                                            d="m467 41h-422c-24.813 0-45 20.187-45 45v340c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-340c0-24.813-20.187-45-45-45zm-422 30h422c8.271 0 15 6.729 15 15v83h-452v-83c0-8.271 6.729-15 15-15zm422 370h-422c-8.271 0-15-6.729-15-15v-227h452v227c0 8.271-6.729 15-15 15z" />
                                                        <circle cx="80" cy="120" r="15" />
                                                        <circle cx="144" cy="120.001" r="15" />
                                                        <circle cx="208" cy="120" r="15" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h3>Host unlimited sessions</h3>
                                    <div class="text">Host unlimited sessions and upload your customized content for
                                        the
                                        audience to revisit and revise. </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- classes-section end -->

    <!-- cta-section -->
    <section id="getstarted" style="background-color: white; color: #fea633;">
        <section class="cta-section centred">
            <div class="parallax-scene parallax-scene-1 parallax-icon">
                <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="content-box">
                    <h3>Join with Smarty</h3>
                    <h1>Get Started</h1>
                    <div class="text">Request a demo of the Smarty virtual learning platform and<br> experience a new
                        level of online education!</div>
                    <div class="btn-box"><a href="contact.html" class="theme-btn"
                            style="text-transform: none;font-size: 25px;">Launch Smarty</a></div>
                </div>
            </div>
        </section>
    </section>
    <!-- cta-section end -->

    <!-- pricing-section -->
    <section class="pricing-section sec-pad" style="background-color: white; color: #0644ee;">
        <div class="container">
            <div class="sec-title centred">
                <h1 style="color:#2b3c6b;">Smarty Plans</h1>
            </div>
            <div class="inner-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h1>Basic<span></span></h1>
                                <h4></h4>
                                <div class="text">Lorem ipsum dolor amet consectetur do adipisicing sed.</div>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li>Complete implementation and set-up</li>
                                    <li>Admin Dashboard</li>
                                    <li>Live classroom streaming</li>
                                    <li>Session recording</li>
                                    <li>Drive storage upto 30GB per user</li>
                                    <li>Shared Hosting Server</li>
                                    <li>Student performance report</li>
                                    <li>Teachers analysis report</li>
                                    <li>Discussion board</li>
                                    <li>Parent participation</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="theme-btn">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h1>Standard<span></span></h1>
                                <h4></h4>
                                <div class="text">Lorem ipsum dolor amet consectetur do adipisicing sed.</div>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li>Complete implementation and set-up</li>
                                    <li>Admin Dashboard</li>
                                    <li>Live classroom streaming</li>
                                    <li>Session recording</li>
                                    <li>Drive space upto 1 TB each teacher</li>
                                    <li>Virtual staffroom</li>
                                    <li>Student performance report</li>
                                    <li>Classroom analysis report</li>
                                    <li>Discussion board</li>
                                    <li>Parent participation</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="theme-btn">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h1>Universal<span></span></h1>
                                <h4></h4>
                                <div class="text">Lorem ipsum dolor amet consectetur do adipisicing sed.</div>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li>Complete implementation and set-up</li>
                                    <li>Admin control</li>
                                    <li>Live-streaming of classes</li>
                                    <li>Session recording</li>
                                    <li>Drive space to organize content</li>
                                    <li>Virtual staffroom</li>
                                    <li>Student performance report</li>
                                    <li>Teachers analysis report</li>
                                    <li>Discussion board</li>
                                    <li>Parent participation</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="theme-btn">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


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

</body><!-- End of .page_wrapper -->

</html>
