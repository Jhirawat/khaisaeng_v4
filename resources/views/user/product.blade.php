@extends('layouts.main_user')

@section('head')
<title>ไขแสง</title>
@endsection


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
        .skin-2 .num-in {
        background: #FFFFFF;
        box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.15);
        border-radius: 25px;
        height: 40px;
        width: 110px;
        float: left;
         }

        .skin-2 .num-in button {
        width: 40%;
        display: block;
        height: 40px;
        float: left;
        position: relative;
        }

        .skin-2 .num-in button:before,
        .skin-2 .num-in button:after {
        content: '';
        position: absolute;
        background-color: #667780;
        height: 2px;
        width: 10px;
        top: 50%;
        left: 50%;
        margin-top: -1px;
        margin-left: -5px;
         }

        .skin-2 .num-in button.plus:after {
        transform: rotate(90deg);
        }

        .skin-2 .num-in input {
        float: left;
        width: 20%;
        height: 40px;
        border: none;
        text-align: center;
        }
        @media(max-width:767px) {
        .mobile {
            font-size: 10px;
        }

        h5 {
            font-size: 14px;
        }

        h6 {
            font-size: 9px;
        }

        #mobile-font {
            font-size: 11px;
        }

        #prc {
            font-weight: 700;
            margin-left: -45px;
            padding-left: 105px;
        }

        #quantity {
            font-weight: 700;
            padding-left: 6px;
        }

        #produc {
            font-weight: 700;
            padding-left: 0px;
        }

        #total {
            font-weight: 700;
            padding-left: 9px;
        }

        #image {
            width: 60px;
            height: 60px;
        }

        .col {
            width: 100%;
        }

        #zero-pad {
            padding: 2%;
            margin-left: 10px;
        }

        #footer-font {
            font-size: 12px;
        }

        #heading {
            padding-top: 15px;
        }
    }
    </style>
@endsection


@section('content')
    @php
        $count = count($products);
    @endphp
    ///ตัวนับproduct

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{-- <h2 class="content-header-title float-left mb-0">  {{ $count }} รายการสินค้า</h2> --}}
                            <div class="search-results">
                                {{ $count }} รายการสินค้า
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-detached content-center">
                <div class="content-body">

                    <!-- Ecommerce Products Starts -->
                    <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-12">
                     <section id="ecommerce-products" class="grid-view">
                        <div class="row">
                        @foreach ($products as $item)
                        <div class="col" style="margin-top: 25px;" >
                        <div class="card ecommerce-card" style="width: 24rem">
                            <div class="card-content">
                            <div class="card-body">
                            <img src="{{ asset('images/' . $item->product_image) }}" class="card-img-top" width="24" height="400" />
                        </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div>
                                            <h6 class="item-price">
                                            {{ $item->product_price }} Baht
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        {{ $item->product_name }}
                                    </div>
                                    <div>
                                        <p class="item-description">
                                        {{ $item->product_description }}
                                        </p>
                                    </div>
                                </div>

                                    <div class="cart">
                                        <form action="{{ route('cartAdd.user') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="item-options text-center">
                                            <div class="card-body">
                                            <div class="item-wrapper">
                                                <div>
                                                <div class="num-block skin-2">
                                                    <div class="num-in">
                                                        <button class="minus dis"></button>
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <input type="hidden" value="{{ $item->product_name }}" name="name">
                                                        <input type="hidden" value="{{ $item->product_price }}" name="price">
                                                        <input type="hidden" value="{{ $item->product_image }}" name="image">
                                                        <input type="hidden" value="1" name="quantity">

                                                        <input type="text" class="in-num" value="1" readonly name="quantity" value="{{ $item->product_quantity }}" class="w-6 text-center bg-gray-300" />

                                                        <button class="plus"></button>

                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="item-wrapper">
                                                <div>
                                                <button class="text-white bg-blue-800 rounded"
                                            style="background-color: #9c6d5a;height: 40px;width: 120px;padding: 0;
                                            color:white;border-radius:25px;" type="submit"><i class="feather icon-shopping-cart"></i>ใส่ตระกร้า</button>
                                                </div>
                                            </div>
                                            </div>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        @endforeach
                        </div>
                    </section>
                        </div></div></div>
                    <!-- Ecommerce Products Ends -->

                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link"
                                                href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                @endsection


                @section('script')
                    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
                    <!-- BEGIN Vendor JS-->

                    <!-- BEGIN: Page Vendor JS-->
                    {{-- <script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
                    <script src="../../../app-assets/vendors/js/extensions/wNumb.js"></script>
                    <script src="../../../app-assets/vendors/js/extensions/nouislider.min.js"></script>
                    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
                    <!-- END: Page Vendor JS-->

                    <!-- BEGIN: Theme JS-->
                    <script src="../../../app-assets/js/core/app-menu.js"></script>
                    <script src="../../../app-assets/js/core/app.js"></script>
                    <script src="../../../app-assets/js/scripts/components.js"></script>
                    <!-- END: Theme JS-->

                    <!-- BEGIN: Page JS-->
                    <script src="../../../app-assets/js/scripts/pages/app-ecommerce-shop.js"></script> --}}

                    <script>
                        $(document).ready(function() {
                            "use strict";
                            // RTL Support
                            var direction = 'ltr';
                            if ($('html').data('textdirection') == 'rtl') {
                                direction = 'rtl';
                            }

                            var sidebarShop = $(".sidebar-shop"),
                                shopOverlay = $(".shop-content-overlay"),
                                sidebarToggler = $(".shop-sidebar-toggler"),
                                priceFilter = $(".price-options"),
                                gridViewBtn = $(".grid-view-btn"),
                                listViewBtn = $(".list-view-btn"),
                                ecommerceProducts = $("#ecommerce-products"),
                                cart = $(".cart"),
                                wishlist = $(".wishlist");


                            // show sidebar
                            sidebarToggler.on("click", function() {
                                sidebarShop.toggleClass("show");
                                shopOverlay.toggleClass("show");
                            });

                            // remove sidebar
                            $(".shop-content-overlay, .sidebar-close-icon").on("click", function() {
                                sidebarShop.removeClass("show");
                                shopOverlay.removeClass("show");
                            })

                            //price slider
                            var slider = document.getElementById("price-slider");
                            if (slider) {
                                noUiSlider.create(slider, {
                                    start: [51, 5000],
                                    direction: direction,
                                    connect: true,
                                    tooltips: [true, true],
                                    format: wNumb({
                                        decimals: 0,
                                    }),
                                    range: {
                                        "min": 51,
                                        "max": 5000
                                    }
                                });
                            }
                            // for select in ecommerce header
                            if (priceFilter.length > 0) {
                                priceFilter.select2({
                                    minimumResultsForSearch: -1,
                                    dropdownAutoWidth: true,
                                    width: '100%'
                                });
                            }

                            /***** CHANGE VIEW *****/
                            // Grid View
                            gridViewBtn.on("click", function() {
                                ecommerceProducts.removeClass("list-view").addClass("grid-view");
                                listViewBtn.removeClass("active");
                                gridViewBtn.addClass("active");
                            });

                            // List View
                            listViewBtn.on("click", function() {
                                ecommerceProducts.removeClass("grid-view").addClass("list-view");
                                gridViewBtn.removeClass("active");
                                listViewBtn.addClass("active");
                            });

                            // For View in cart
                            cart.on("click", function() {
                                var $this = $(this),
                                    addToCart = $this.find(".add-to-cart"),
                                    viewInCart = $this.find(".view-in-cart");
                                if (addToCart.is(':visible')) {
                                    addToCart.addClass("d-none");
                                    viewInCart.addClass("d-inline-block");
                                } else {
                                    var href = viewInCart.attr('href');
                                    window.location.href = href;
                                }
                            });

                            $(".view-in-cart").on('click', function(e) {
                                e.preventDefault();
                            });

                            // For Wishlist Icon
                            wishlist.on("click", function() {
                                var $this = $(this)
                                $this.find("i").toggleClass("fa-heart-o fa-heart")
                                $this.toggleClass("added");
                            })

                            // Checkout Wizard
                            var checkoutWizard = $(".checkout-tab-steps"),
                                checkoutValidation = checkoutWizard.show();
                            if (checkoutWizard.length > 0) {
                                $(checkoutWizard).steps({
                                    headerTag: "h6",
                                    bodyTag: "fieldset",
                                    transitionEffect: "fade",
                                    titleTemplate: '<span class="step">#index#</span> #title#',
                                    enablePagination: false,
                                    onStepChanging: function(event, currentIndex, newIndex) {
                                        // allows to go back to previous step if form is
                                        if (currentIndex > newIndex) {
                                            return true;
                                        }
                                        // Needed in some cases if the user went back (clean up)
                                        if (currentIndex < newIndex) {
                                            // To remove error styles
                                            checkoutValidation.find(".body:eq(" + newIndex + ") label.error").remove();
                                            checkoutValidation.find(".body:eq(" + newIndex + ") .error").removeClass(
                                                "error");
                                        }
                                        // check for valid details and show notification accordingly
                                        if (currentIndex === 1 && Number($(".form-control.required").val().length) <
                                            1) {
                                            toastr.warning('Error', 'Please Enter Valid Details', {
                                                "positionClass": "toast-bottom-right"
                                            });
                                        }
                                        checkoutValidation.validate().settings.ignore = ":disabled,:hidden";
                                        return checkoutValidation.valid();
                                    },
                                });
                                // to move to next step on place order and save address click
                                $(".place-order, .delivery-address").on("click", function() {
                                    $(".checkout-tab-steps").steps("next", {});
                                });
                                // check if user has entered valid cvv
                                $(".btn-cvv").on("click", function() {
                                    if ($(".input-cvv").val().length == 3) {
                                        toastr.success('Success', 'Payment received Successfully', {
                                            "positionClass": "toast-bottom-right"
                                        });
                                    } else {
                                        toastr.warning('Error', 'Please Enter Valid Details', {
                                            "positionClass": "toast-bottom-right"
                                        });
                                    }
                                })
                            }

                            // checkout quantity counter
                            var quantityCounter = $(".quantity-counter"),
                                CounterMin = 1,
                                CounterMax = 10;
                            if (quantityCounter.length > 0) {
                                quantityCounter.TouchSpin({
                                    min: CounterMin,
                                    max: CounterMax
                                }).on('touchspin.on.startdownspin', function() {
                                    var $this = $(this);
                                    $('.bootstrap-touchspin-up').removeClass("disabled-max-min");
                                    if ($this.val() == 1) {
                                        $(this).siblings().find('.bootstrap-touchspin-down').addClass("disabled-max-min");
                                    }
                                }).on('touchspin.on.startupspin', function() {
                                    var $this = $(this);
                                    $('.bootstrap-touchspin-down').removeClass("disabled-max-min");
                                    if ($this.val() == 10) {
                                        $(this).siblings().find('.bootstrap-touchspin-up').addClass("disabled-max-min");
                                    }
                                });
                            }

                            // remove items from wishlist page
                            $(".remove-wishlist , .move-cart").on("click", function() {
                                $(this).closest(".ecommerce-card").remove();
                            })
                        })
                        // on window resize hide sidebar
                        $(window).on("resize", function() {
                            if ($(window).width() <= 991) {
                                $(".sidebar-shop").removeClass("show");
                                $(".shop-content-overlay").removeClass("show");
                            } else {
                                $(".sidebar-shop").addClass("show");
                            }
                        });
                    </script>
                    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
                    <script>$(document).ready(function() {
                            $('.num-in button').click(function() {
                                var $input = $(this).parents('.num-block').find('input.in-num');
                                if ($(this).hasClass('minus')) {
                                    var count = parseFloat($input.val()) - 1;

                                    count = count < 1 ? 1 : count;

                                    if (count < 2) {
                                        $(this).addClass('dis');
                                    } else {
                                        $(this).removeClass('dis');
                                    }

                                    $input.val(count);

                                    // $('#submit').click();
                                } else {
                                    var count = parseFloat($input.val()) + 1
                                    $input.val(count);

                                    // $('#submit').click();

                                    if (count > 1) {
                                        $(this).parents('.num-block').find(('.minus')).removeClass('dis');
                                    }
                                }

                                $input.change();
                                return false;
                            });

                        });
                    </script>
                @endsection
