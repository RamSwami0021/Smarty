<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="" content="">
    <title>Home - Smarty</title>
    <link rel="apple-touch-icon" href="{{ asset('/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}
    ">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/plugins/forms/form-validation.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                                data-feather="moon"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="{{ asset('/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar"
                                height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>


                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="{{asset('admin/welcome')}}">
                        <h2 class="brand-text">Smarty</h2>
                    </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="{{ request()->is('admin/welcome') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{asset('admin/welcome')}}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Home">Home</span></a>
                </li>
                <li class="{{ request()->is('admin/noticeboard*') ? 'active' : '' }}
                    nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="layout"></i><span class="menu-title text-truncate"
                            data-i18n="Page Layouts">Notice Board</span></a>
                    <ul class="menu-content">
                        <li><a class="{{ request()->is('admin/noticeboard/create') ? 'active' : '' }} d-flex align-items-center" href="{{asset('admin/noticeboard/create')}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Collapsed Menu">New</span></a>
                        </li>
                        <li><a class="{{ request()->is('admin/noticeboard') ? 'active' : '' }} d-flex align-items-center" href="{{asset('admin/noticeboard')}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Full">Listing</span></a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/gallery*') ? 'active' : '' }}
                    nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="layout"></i><span class="menu-title text-truncate"
                            data-i18n="Page Layouts">Gallery</span></a>
                    <ul class="menu-content">
                        <li><a class="{{ request()->is('admin/gallery/create') ? 'active' : '' }} d-flex align-items-center" href="{{asset('admin/gallery/create')}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Collapsed Menu">New</span></a>
                        </li>
                        <li><a class="{{ request()->is('admin/gallery') ? 'active' : '' }} d-flex align-items-center" href="{{asset('admin/gallery')}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Full">Listing</span></a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/contact') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{asset('admin/contact')}}"><i
                    data-feather="home"></i><span class="menu-title text-truncate"
                    data-i18n="Home">Contact Us</span></a>
        </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    {{-- Main --}}
    <div class="container">
        @yield('content')
    </div>
    {{-- Main --}}

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a
                    class="ms-25" href="#" target="_blank">Smarty</a><span class="d-none d-sm-inline-block">,
                    All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made
                with<i data-feather="heart"></i></span></p>
    </footer>


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/app-assets/js/scripts/forms/form-repeater.js')}}"></script>
    <script src="{{ asset('/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page Vendor JS-->
    {{-- <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script> --}}
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/app-user-list.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
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
                timer: 1000
            });
        </script>
    @endif
</body>
<!-- END: Body-->

</html>
