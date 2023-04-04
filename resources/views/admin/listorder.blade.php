@extends('layouts.main_user')

@section('style')
    <style>
        .navbar-floating .header-navbar-shadow {
            display: block;
            background: linear-gradient(180deg, #524f4f00 44%, rgb(248 248 248 / 0%) 73%, rgba(255, 255, 255, 0)) !important;
            padding-top: 2.2rem;
            background-repeat: repeat;
            width: 100%;
            height: 102px;
            position: fixed;
            top: 0;
            z-index: 11;
        }
    </style>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Thumb View</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Data List</a>
                                    </li>
                                    <li class="breadcrumb-item active">Thumb View
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a
                                    class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button"
                                    class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another
                                        Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th>NAME</th>
                                    <th>CATEGORY</th>
                                    <th>POPULARITY</th>
                                    <th>ORDER STATUS</th>
                                    <th>PRICE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/apple-watch.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Apple Watch series 4 GPS</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$69.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/magic-mouse.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Beats HeadPhones</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:83%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">Delivered</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$69.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/iphone-x.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Altec Lansing - Bluetooth Speaker</td>
                                    <td class="product-category">Audio</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:57%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">canceled</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/ipad-pro.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Aluratek - Bluetooth Audio Receiver</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:65%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$29.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/jbl-speaker.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Aluratek - Bluetooth Audio Transmitter</td>
                                    <td class="product-category">Audio</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">canceled</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img
                                            src="../../../app-assets/images/elements/beats-headphones.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Basis - Peak Fitness and Sleep Tracker</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:47%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/homepod.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Antec - Nano Diamond Thermal Compound</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:55%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-primary">
                                            <div class="chip-body">
                                                <div class="chip-text">pending</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$29.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/macbook-pro.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Antec - SmartBean Bluetooth Adapter</td>
                                    <td class="product-category">Computer</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:63%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">canceled</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$39.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img
                                            src="../../../app-assets/images/elements/beats-headphones.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Beats by Dr. Dre - 3' USB-to-Micro USB Cable</td>
                                    <td class="product-category">Computer</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">delivered</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/jbl-speaker.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Beats by Dr. Dre - Bike Mount for Pill Speakers</td>
                                    <td class="product-category">Audio</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">delivered</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$49.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/apple-watch.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Bose® - SoundLink® Color Bluetooth Speaker</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:90%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-primary">
                                            <div class="chip-body">
                                                <div class="chip-text">pending</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$129.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/macbook-pro.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">BRAVEN - Portable Bluetooth Speaker</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/homepod.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Craig - Portable Wireless Speaker</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-danger">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:20%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">canceled</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/apple-watch.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Definitive Technology - Wireless Speaker</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:75%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-primary">
                                            <div class="chip-body">
                                                <div class="chip-text">pending</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$399.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img
                                            src="../../../app-assets/images/elements/beats-headphones.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Fitbit - Charge HR Activity Tracker + Heart Rate (Large)</td>
                                    <td class="product-category">Audio</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:60%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-primary">
                                            <div class="chip-body">
                                                <div class="chip-text">pending</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$149.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/magic-mouse.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Fitbit - Flex 1" USB Charging Cable</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$14.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/iphone-x.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Fitbit - Activity Tracker</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-danger">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:35%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">canceled</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$99.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/ipad-pro.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Fitbit - Charge Wireless Activity Tracker (Large)</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-primary">
                                            <div class="chip-body">
                                                <div class="chip-text">pending</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$129.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/apple-watch.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Craig - Tower Speaker</td>
                                    <td class="product-category">Audio</td>
                                    <td>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:68%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$69.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/jbl-speaker.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">BRAVEN - Outdoor Speaker</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">delivered</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img src="../../../app-assets/images/elements/homepod.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Bose® - Bluetooth Speaker Travel Bag</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:89%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">on hold</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$44.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-img"><img
                                            src="../../../app-assets/images/elements/beats-headphones.png"
                                            alt="Img placeholder">
                                    </td>
                                    <td class="product-name">Altec Lansing - Mini H2O Bluetooth Speaker</td>
                                    <td class="product-category">Fitness</td>
                                    <td>
                                        <div class="progress progress-bar-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">delivered</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">$199.99</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Thumb View Data</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Name</label>
                                            <input type="text" class="form-control" id="data-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category"> Category </label>
                                            <select class="form-control" id="data-category">
                                                <option>Audio</option>
                                                <option>Computers</option>
                                                <option>Fitness</option>
                                                <option>Appliance</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Order Status</label>
                                            <select class="form-control" id="data-status">
                                                <option>Pending</option>
                                                <option>Canceled</option>
                                                <option>Delivered</option>
                                                <option>On Hold</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">Price</label>
                                            <input type="text" class="form-control" id="data-price">
                                        </div>
                                        <div class="col-sm-12 data-field-col data-list-upload">
                                            <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                                <div class="dz-message">Upload Image</div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary">Add Data</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS--> --}}

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            "use strict"
            // init list view datatable
            var dataListView = $(".data-list-view").DataTable({
                responsive: false,
                columnDefs: [{
                    orderable: true,
                    targets: 0,
                    checkboxes: {
                        selectRow: true
                    }
                }],
                dom: '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
                oLanguage: {
                    sLengthMenu: "_MENU_",
                    sSearch: ""
                },
                aLengthMenu: [
                    [4, 10, 15, 20],
                    [4, 10, 15, 20]
                ],
                select: {
                    style: "multi"
                },
                order: [
                    [1, "asc"]
                ],
                bInfo: false,
                pageLength: 4,
                buttons: [{
                    text: "<i class='feather icon-plus'></i> Add New",
                    action: function() {
                        $(this).removeClass("btn-secondary")
                        $(".add-new-data").addClass("show")
                        $(".overlay-bg").addClass("show")
                        $("#data-name, #data-price").val("")
                        $("#data-category, #data-status").prop("selectedIndex", 0)
                    },
                    className: "btn-outline-primary"
                }],
                initComplete: function(settings, json) {
                    $(".dt-buttons .btn").removeClass("btn-secondary")
                }
            });

            dataListView.on('draw.dt', function() {
                setTimeout(function() {
                    if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
                    }
                }, 50);
            });

            // init thumb view datatable
            var dataThumbView = $(".data-thumb-view").DataTable({
                responsive: false,
                columnDefs: [{
                    orderable: true,
                    targets: 0,
                    checkboxes: {
                        selectRow: true
                    }
                }],
                dom: '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
                oLanguage: {
                    sLengthMenu: "_MENU_",
                    sSearch: ""
                },
                aLengthMenu: [
                    [4, 10, 15, 20],
                    [4, 10, 15, 20]
                ],
                select: {
                    style: "multi"
                },
                order: [
                    [1, "asc"]
                ],
                bInfo: false,
                pageLength: 4,
                buttons: [{
                    text: "<i class='feather icon-plus'></i> Add New",
                    action: function() {
                        $(this).removeClass("btn-secondary")
                        $(".add-new-data").addClass("show")
                        $(".overlay-bg").addClass("show")
                    },
                    className: "btn-outline-primary"
                }],
                initComplete: function(settings, json) {
                    $(".dt-buttons .btn").removeClass("btn-secondary")
                }
            })

            dataThumbView.on('draw.dt', function() {
                setTimeout(function() {
                    if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
                    }
                }, 50);
            });

            // To append actions dropdown before add new button
            var actionDropdown = $(".actions-dropodown")
            actionDropdown.insertBefore($(".top .actions .dt-buttons"))


            // Scrollbar
            if ($(".data-items").length > 0) {
                new PerfectScrollbar(".data-items", {
                    wheelPropagation: false
                })
            }

            // Close sidebar
            $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function() {
                $(".add-new-data").removeClass("show")
                $(".overlay-bg").removeClass("show")
                $("#data-name, #data-price").val("")
                $("#data-category, #data-status").prop("selectedIndex", 0)
            })

            // On Edit
            $('.action-edit').on("click", function(e) {
                e.stopPropagation();
                $('#data-name').val('Altec Lansing - Bluetooth Speaker');
                $('#data-price').val('$99');
                $(".add-new-data").addClass("show");
                $(".overlay-bg").addClass("show");
            });

            // On Delete
            $('.action-delete').on("click", function(e) {
                e.stopPropagation();
                $(this).closest('td').parent('tr').fadeOut();
            });

            // dropzone init
            Dropzone.options.dataListUpload = {
                complete: function(files) {
                    var _this = this
                    // checks files in class dropzone and remove that files
                    $(".hide-data-sidebar, .cancel-data-btn, .actions .dt-buttons").on(
                        "click",
                        function() {
                            $(".dropzone")[0].dropzone.files.forEach(function(file) {
                                file.previewElement.remove()
                            })
                            $(".dropzone").removeClass("dz-started")
                        }
                    )
                }
            }
            Dropzone.options.dataListUpload.complete()

            // mac chrome checkbox fix
            if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
            }
        })
    </script>
@endsection
