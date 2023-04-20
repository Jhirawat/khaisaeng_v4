<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
    {{-- <title> INFINITY </title> --}}
    <link rel="apple-touch-icon"
        href="https://cdn.discordapp.com/attachments/799538881258979358/1055414370076729384/Red_Retro_Doodle_Strawberry_Original_Fruit_Logo_1_2.png">
    <link rel="shortcut icon"
        href="https://cdn.discordapp.com/attachments/799538881258979358/1055414370076729384/Red_Retro_Doodle_Strawberry_Original_Fruit_Logo_1_2.png">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/ag-grid/ag-grid.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/ag-grid/ag-theme-material.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">



    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/tour/tour.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@100;200&family=Mitr:wght@200&family=Prompt:wght@300&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/aggrid.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('bootstrap-datepicker-thai/css/datepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.css') }}">


    <!-- END: Custom CSS-->

    <style>
        .dataTables_scroll {
            /* border: 1px solid #ccc; */
            margin: 1.5rem 0;
            border-radius: 15px
                /* border-top-left-radius: 8px;
             border-top-right-radius: 4px;
             border-bottom-left-radius: 4px;
             border-bottom-right-radius: 4px; */
        }

        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
            width: 250px;
            font-size: 18px;
            border-radius: 15px
        }

        .error {
            color: red !important;
            font-style: italic;
            border-color: red !important;
        }

        strong {
            font-weight: 400 !important;
        }

        .nav.nav-tabs .nav-item .nav-link.active {
            color: #ea5455;
        }

        .nav.nav-tabs .nav-item .nav-link.active:after {
            background: linear-gradient(30deg, #d08cd4, rgb(231, 145, 234)) !important;
            box-shadow: 0 0 8px 0 rgb(243, 147, 174) !important;
        }

        .table td {
            font-weight: 400 !important;
            font-size: 1.0rem !important;

        }

        table.dataTable thead th,
        table.dataTable thead td,
        table.dataTable tfoot th,
        table.dataTable tfoot td {
            font-size: 1.0rem;
            border: 0;
            color: #ea5455;
        }

        .swal2-title {
            position: relative;
            max-width: 100%;
            margin: 0 0 0.4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            font-family: 'Kanit', sans-serif;
            font-weight: 400;
            text-align: center;
            text-transform: none;
            word-wrap: break-word;
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #e19be9 !important;
            color: #fff;
            font-size: 1.0625em;
        }

        .datepicker {
            font-size: 0.85rem;
            border: 2;
            font-family: 'Kanit', sans-serif;
            font-weight: 400 !important;
        }

        .disablediv {
            pointer-events: none;
            opacity: 0.4;
        }

        .loader {
            display: none;
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 999999999999999999999999;
            width: 120px;
            height: 120px;
            margin: -76px 0 0 -76px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #e97bad;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        #toast-container>.toast-success {
            max-width: 181px;
            background-color: #0ba008;
            font-size: 15px;
        }

        div.dataTables_wrapper div.dataTables_filter label,
        div.dataTables_wrapper div.dataTables_length label {
            margin-top: 1rem;
            font-size: 1.2rem;
        }

        div.dataTables_wrapper div.dataTables_info {
            padding-top: 0.85em;
            white-space: nowrap;
            font-size: 1.2rem;
        }

        .main-menu.menu-light .navigation>li.active>a {
            background: linear-gradient(118deg, #ea5455, #ea545552)!important;
            box-shadow: 0 0 10px 1px rgb(148 148 148 / 70%);
            color: #fff;
            font-weight: 400;
            border-radius: 4px;
        }
    </style>
    @yield('style')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns" style="background: color;background-color: #ea545573; ">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content" style="font-family: 'Kanit', sans-serif; font-weight:800;">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">

                            <!-- select.bookmark-select-->
                            <!--   option Chat-->
                            <!--   option email-->
                            <!--   option todo-->
                            <!--   option Calendar-->
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">

                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-bell"></i>
                                <span class="badge badge-pill badge-primary badge-up bellcount">0</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">

                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"> <strong class="bellcount">0</strong> ใหม่</h3><span
                                            class="notification-title">การแจ้งเตือน</span>
                                    </div>
                                </li>

                                <li class="scrollable-container media-list" id="data_notify">
                                </li>
                                {{-- <form action="{{ route('update.read') }}" method="GET">
                                    @csrf
                                    <input type="text" value="1"id="status_read" name="status_read" hidden>
                                    <li class="dropdown-menu-footer">
                                        <a class="dropdown-item p-1 text-center" onclick="readAll()">อ่านทั้งหมด</a>
                                    </li>
                                </form> --}}
                            </ul>
                        </li>


                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ Auth::user() }} </span>
                                </div><span>
                                    <img class="round"src="https://i.pinimg.com/564x/a5/e8/1f/a5e81f19cf2c587876fd1bb08ae0249f.jpg"
                                        alt="avatar"height="40" width="40">
                                    {{-- @if (Auth::user()->emimg != null)
                                        <img class="round"src="{{ asset('imguse/' . Auth::user()) }}"
                                            alt="avatar"height="40" width="40">
                                    @else
                                        <img class="round"src="https://i.pinimg.com/564x/a5/e8/1f/a5e81f19cf2c587876fd1bb08ae0249f.jpg"
                                            alt="avatar"height="40" width="40">
                                    @endif --}}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href=""><i class="feather icon-user"></i> โปรไฟล์</a>
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i class="feather icon-user"></i> Edit Profile</a> --}}
                                {{-- <a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a>
                                <a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                        class="feather icon-power"></i>ออกจากระบบ</a>
                                <form id="logout-form" action="" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- <ul class="main-search-list-defaultlist d-none"style="font-family: 'Kanit', sans-serif; font-weight:800;">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/jpg.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/pdf.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/doc.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">{{ Auth::user()->fullname }}</p><small
                            class="text-muted">{{ Auth::user()->emimg }}</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">{{ Auth::user()->department }}</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul> --}}
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header" style="display: flex; margin-top: 10px; margin-bottom: 5px;">
            <div style="width: 25%"></div>
            <a href="{{ url('dashboard.admin') }}">
                <img
                    src="https://cdn.discordapp.com/attachments/799538881258979358/1055414370076729384/Red_Retro_Doodle_Strawberry_Original_Fruit_Logo_1_2.png"style="max-width: 100px;">
            </a>
            {{-- <div style="width: 25%"></div> --}}
            {{-- <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Infinity</h2>
                    </a>
                </li>
            </ul> --}}
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                style="margin-top: 18px; font-family: 'Kanit', sans-serif; font-weight:800;">
                {{-- <li class=" navigation-header"><span>Dashboard</span>
                </li> --}}
                <li class="{{ Request::routeIs('dashboard.admin') ? 'active' : '' }} nav-item"><a
                        href="{{ route('dashboard.admin') }}"><i class="bi bi-house-door-fill"
                            style="margin-top: 3px ;"></i><span class="menu-title" data-i18n="Email"
                            style="font-size: 18px">หน้าหลัก</span></a>
                </li>
                <li class="{{ Request::routeIs('order.info') ? 'active' : '' }} nav-item"><a
                    href="{{ route('order.info') }}"><i class="fa fa-list"
                        style="margin-top: 3px;"></i><span class="menu-title" data-i18n="Email"
                        style="font-size: 18px">รายการสั่งซื้อ</span></a>
            </li>

                <li class="{{ Request::routeIs('products.list', 'create') ? 'active' : '' }} nav-item">
                    <a href=""><i class="bi bi-box-seam"style="margin-top: 3px;"></i><span class="menu-title"
                            data-i18n="Todo"style="font-size: 18px; ">สินค้า</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::routeIs('products.list') ? 'active' : '' }} nav-item"><a
                                href="{{ route('products.list') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item"
                                    data-i18n="Shop">รายการสินค้า</span></a>
                        </li>
                        <li class="{{ Request::routeIs('create') ? 'active' : '' }} nav-item"><a
                                href="{{ route('create') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item"
                                    data-i18n="Shop">เพิ่มสินค้า</span></a>
                        </li>
                    </ul>
                </li>



                <li class="{{ Request::routeIs('tracking') ? 'active' : '' }} nav-item"><a href="{{ route('tracking') }}"><i class="fa fa-truck"
                        style="margin-top: 3px;"></i><span class="menu-title" data-i18n="Email"
                            style="font-size: 18px">การจัดส่ง</span></a>
                </li>

                <li class="{{ Request::routeIs('bill') ? 'active' : '' }} nav-item"><a href="{{ route('bill') }}"><i class="fa fa-file-text"
                        style="margin-top: 3px;"></i><span class="menu-title" data-i18n="Email"
                            style="font-size: 18px">รายการใบเสร็จ</span></a>
                </li>


                <li class="{{ Request::routeIs('monthly.admin','yearly.admin') ? 'active' : '' }} nav-item">
                    <a href=""><i class="fa fa-line-chart"style="margin-top: 3px;"></i><span
                            class="menu-title" data-i18n="Calender"style="font-size: 18px; ">ยอดขาย
                        </span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::routeIs('monthly.admin') ? 'active' : '' }} nav-item"><a
                                href="{{ route('monthly.admin') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item">รายเดือน</span></a>
                        </li>
                        <li class="{{ Request::routeIs('yearly.admin') ? 'active' : '' }} nav-item"><a
                                href="{{ route('yearly.admin') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item">รายปี</span></a>
                        </li>
                        {{-- <li class="{{ Request::routeIs('employeesetting') ? 'active' : '' }} nav-item"><a
                                href="{{ route('employeesetting') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item"
                                    data-i18n="Shop">รายชื่อพนักงานลาออก</span></a>
                        </li> --}}
                    </ul>
                </li>
                <li class="{{ Request::routeIs('type.product', 'address') ? 'active' : '' }} nav-item"><a
                        href=""><i class="fa fa-gear"style="margin-top: 3px;"></i><span class="menu-title"
                            data-i18n="Todo"style="font-size: 18px; ">ตั้งค่า</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::routeIs('departsetting') ? 'active' : '' }} nav-item"><a <<<<<<< HEAD
                                href="{{ route('type.product') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item"
                                    data-i18n="Details">ประเภทสินค้า</span></a>
                        </li>

                        <li class="{{ Request::routeIs('') ? 'active' : '' }} nav-item"><a href=""><i
                                    class="feather icon-circle" style="font-size: 1.2rem;"></i><span
                                    class="menu-item" data-i18n="Checkout">หน่วยสินค้า
                                </span></a>
                        </li>
                        <li class="{{ Request::routeIs('') ? 'active' : '' }} nav-item"><a href=""><i
                                    class="feather icon-circle" style="font-size: 1.2rem;"></i><span
                                    class="menu-item" data-i18n="Checkout">การจัดส่งภายในจังหวัด
                                </span></a>
                        <li class="{{ Request::routeIs('') ? 'active' : '' }} nav-item"><a href=""><i
                                    class="feather icon-circle" style="font-size: 1.2rem;"></i><span
                                    class="menu-item" data-i18n="Checkout">การจัดส่งต่างจังหวัดจังหวัด
                                </span></a>
                        <li class="{{ Request::routeIs('address') ? 'active' : '' }} nav-item"><a
                                href="{{ route('address') }}"><i class="feather icon-circle"
                                    style="font-size: 1.2rem;"></i><span class="menu-item"
                                    data-i18n="Checkout">ที่ตั้งวิสาหกิจ
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::routeIs('logout') ? 'active' : '' }} nav-item"><a href=""
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                            class="bi bi-box-arrow-right"style="margin-top: 3px;"></i><span class="menu-title"
                            data-i18n="Ecommerce"style="font-size: 18px; ">ออกจากระบบ</span></a>
                    <form id="logout-form" action="" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <div id="loader" class="loader"></div>
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        {{-- <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a
                    class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">Pixinvent,</a>All rights Reserved</span><span
                class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                    class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p> --}}
        {{-- <small>
            <time class="media-meta" datetime="${timeM}">${timeM}</time>
        </small> --}}

    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Page Vendor JS-->

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->

    <!-- END: Page JS-->



    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js ')}}"></script>


    <script src="{{ asset('app-assets/vendors/js/charts/echarts/echarts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-user1.js') }}"></script>

    <script src="{{ asset('app-assets/js/scripts/forms/number-input.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.js') }}"></script>

    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/modal/components-modal.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/navs/navs.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/popover/popover.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/charts/chart-apex.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/charts/chart-chartjs.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/extensions/dropzone.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/invoice.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/wizard-steps.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script type="text/javascript" src="{{ asset('bootstrap-datepicker-thai/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap-datepicker-thai/js/bootstrap-datepicker-thai.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap-datepicker-thai/js/locales/bootstrap-datepicker.th.js') }}">
    </script>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- END: Page JS-->
    @yield('script')

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.js"></script>

</body>
<!-- END: Body-->

</html>
