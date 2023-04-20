@extends('layouts.main_user')

@section('style')
    <style>
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
    </style>
@endsection

@section('head')
    <title>ตะกร้าสินค้า</title>
@endsection

@section('content')
    <div class="2-columns ecommerce-application navbar-floating footer-static">
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            {{-- <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">ตะกร้าสินค้า</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('products') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item active">ตะกร้าสินค้า
                                </ol>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="content-body">

                    <!-- Checkout Place order starts -->
                    {{-- <h6><i class="step-icon step feather icon-shopping-cart"></i> ตะกร้าสินค้า</h6> --}}
                    <fieldset class="checkout-step-1 px-0">
                        <section id="place-order" class="list-view product-checkout">
                            <div class="checkout-items">
                                @foreach ($cartItems as $cart)
                                    <div class="card ecommerce-card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="item-img text-center">
                                                    <img src="{{ asset('images/' . $cart->attributes->image) }}"
                                                        class="img-fluid" alt="img-placeholder">
                                                </div>
                                            </div>
                                            {{-- <div class="item-img text-center">
                                                <a href="app-ecommerce-details.html">
                                                    <img src="../../../app-assets/images/pages/eCommerce/1.png" class="img-fluid" alt="img-placeholder">
                                                </a>
                                            </div> --}}

                                            {{-- <div class="users-view-image">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                            </div> --}}

                                            <div class="card-body">
                                                <div class="item-name">
                                                    {{ $cart->name }}
                                                    <span></span>
                                                </div>
                                                <div class="item-quantity">
                                                    <p class="quantity-title">จำนวน</p>
                                                    <form action="{{ route('cartUpdate.user') }}" method="POST">
                                                        @csrf
                                                        <div class="pl-md-0 pl-2">
                                                            <div class="num-block skin-2">
                                                                <div class="num-in">
                                                                    <button class="minus dis"
                                                                        style="width 22px; wi"></button>
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $cart->id }}">
                                                                    <input type="text" class="in-num" readonly
                                                                        name="quantity"
                                                                        value="{{ $cart->quantity }}"class="w-6 text-center bg-gray-300" />
                                                                    <button class="plus"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" id="submit"
                                                            class="btn btn-primary mr-1 waves-effect waves-light">ยืนยันการเพิ่มจำนวนสินค้า</button>
                                                    </form>
                                                </div>


                                                {{-- <div class="item-quantity">

                                                <div class="input-group quantity-counter-wrapper">
                                                    <input type="text" class="quantity-counter" value="1">
                                                </div>
                                            </div> --}}

                                                {{-- <form action="{{ route('cartUpdate.user') }}" method="POST">
                                                    @csrf
                                                    <div class="pl-md-0 pl-2">
                                                        <div class="num-block skin-2">
                                                            <div class="num-in">
                                                                <button class="minus dis"></button>
                                                                <input type="hidden" name="id"
                                                                    value="{{ $cart->id }}">
                                                                <input type="text" class="in-num" readonly
                                                                    name="quantity"
                                                                    value="{{ $cart->quantity }}"class="w-6 text-center bg-gray-300" />
                                                                <button class="plus"></button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" id="submit">ยืนยัน</button>
                                                </form>
                                            </div> --}}



                                            </div>
                                            <div class="item-options text-center">
                                                <div class="item-wrapper">
                                                    <div class="item-cost">
                                                        <h6 class="item-price">
                                                            {{ $cart->price }} บาท
                                                        </h6>

                                                    </div>
                                                </div>
                                                <form action="{{ route('cartremove.user') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $cart->id }}" name="id"
                                                        type="submit">
                                                    <button class=" btn btn-Light btn-block wishlist" type="submit"><i
                                                            class="feather icon-x align-middle"></i> ลบจากรายการ</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="checkout-options">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">


                                            <div class="price-details">
                                                <p>รายละเอียด ราคา</p>
                                            </div>


                                            {{-- <div class="detail">
                                                <div class="detail-title">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>รายการสินค้า</th>
                                                        <th>จำนวน</th>
                                                        <th>ราคาต่อหน่วย</th>
                                                        <th>รวม</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cartItems as $cart)
                                                        <tr>
                                                            <td>{{ $cart->name }}</td>
                                                            <td>{{ $cart->quantity }}</td>
                                                            <td>{{ $cart->price }}</td>
                                                            <td>{{ ($cart->quantity) * ($cart->price) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </div>
                                        </div> --}}

                                            {{-- <div class="detail">
                                            <div class="detail-title">
                                                @foreach ($cartItems as $cart)
                                                <td>{{ $cart->name }}</td>
                                            </div>
                                            <div class="detail-amt">
                                                <td> {{ ($cart->quantity) * ($cart->price) }} บาท</td>
                                                @endforeach
                                            </div>
                                        </div> --}}



                                            {{-- <div class="detail">
                                                @foreach ($cartItems as $cart)
                                                    <div class="detail-title">
                                                        {{ $cart->name }}</ </div>
                                                        <div class="detail-amt">

                                                            {{ $cart->quantity * $cart->price }} บาท

                                                        </div>
                                                @endforeach
                                            </div> --}}


                                            {{-- <div class="detail">
                                                <div class="detail-title">
                                               จำนวนสินค้า
                                                </div>
                                                <div class="detail-amt">
                                                    {{ Cart::getTotalQuantity() }} ชิ้น
                                                </div>
                                            </div> --}}


                                            @foreach ($cartItems as $cart)
                                                <div class="detail">
                                                    <div class="detail-amt">
                                                        {{ $cart->name }}
                                                    </div>
                                                    <div class="detail-amt">
                                                        {{ $cart->price }} x
                                                        {{ $cart->quantity }}
                                                    </div>
                                                    <div class="detail-amt">
                                                        {{ $cart->quantity * $cart->price }} บาท
                                                    </div>
                                                </div>
                                            @endforeach




                                            <div class="detail">
                                                <div class="detail-title">
                                                    จำนวนสินค้า
                                                </div>
                                                <div class="detail-amt">
                                                    {{ Cart::getTotalQuantity() }} ชิ้น
                                                </div>
                                            </div>





                                            <div class="detail">
                                                <div class="detail-title">
                                                    ยอดรวม
                                                </div>
                                                <div class="detail-amt">

                                                    {{ Cart::getTotal() }} บาท

                                                </div>
                                            </div>




                                            <div class="detail">
                                                <div class="detail-title">
                                                    ค่าจัดส่ง
                                                </div>
                                                <div class="detail-amt discount-amt">
                                                    {{ (Cart::getTotal() * 30) / 100 }} บาท
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="detail">
                                                <div class="detail-title detail-total">ยอดรวมสุทธิ : </div>
                                                <div class="detail-amt total-amt">{{ (Cart::getTotal() * 130) / 100 }} บาท
                                                </div>
                                            </div>
                                            {{-- <div class="btn btn-primary btn-block place-order">PLACE ORDER</div>
                                            <div class="btn btn-primary btn-block place-order">PLACE ORDER</div> --}}

                                        </div>
                                    </div>
                                </div>


                                <div class="checkout-options">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="{{ route('cartClear.user') }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-primary btn-block place-order">ลบรายการทั้งหมด
                                                        :</button>
                                                </form>

                                                <hr>

                                                {{--
                                                <form action="{{ route('checkout') }}" method="GET">
                                                    @csrf
                                                    <button class="btn btn-primary btn-block place-order">ดำเนินการต่อ :</button>
                                                </form> --}}
                                                <form id="checkoutForm" action="{{ route('checkout') }}" method="GET">
                                                    @csrf
                                                    <button class="btn btn-primary btn-block place-order">ดำเนินการต่อ
                                                        :</button>
                                                </form>

                                                {{-- <div class="btn btn-primary btn-block delivery-address">
                                                    <a href="{{ route('checkout') }}"
                                                        style="color:#FFFFFF;">เลือกที่อยู่นี้</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </fieldset>
                    <!-- Checkout Place order Ends -->

                    <!-- Checkout Customer Address Starts -->
                    {{-- <h6><i class="step-icon step feather icon-home"></i> เลือกที่อยู่</h6>
                    <fieldset class="checkout-step-2 px-0">
                        <section id="checkout-address" class="list-view product-checkout">
                            <div class="card">
                                <div class="card-header flex-column align-items-start">
                                    <h4 class="card-title">เพิ่มที่อยู่ใหม่</h4>
                                    <!-- <p class="text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p> -->
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-name">ชื่อจริง:</label>
                                                    <input type="text" id="checkout-name" class="form-control required" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-number">หมายเลขโทรศัพท์:</label>
                                                    <input type="number" id="checkout-number" class="form-control required" name="mnumber">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-apt-number">บ้านเลขที่:</label>
                                                    <input type="number" id="checkout-apt-number" class="form-control required" name="apt-number">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-landmark">รายละเอียดเพิ่มเติม:</label>
                                                    <input type="text" id="checkout-landmark" class="form-control required" name="landmark">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-city">ตำบล/อำเภอ:</label>
                                                    <input type="text" id="checkout-city" class="form-control required" name="city">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-pincode">รหัสไปรษณีย์:</label>
                                                    <input type="number" id="checkout-pincode" class="form-control required" name="pincode">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-state">จังหวัด:</label>
                                                    <input type="text" id="checkout-state" class="form-control required" name="state">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="add-type">ประเภทสถานที่:</label>
                                                    <select class="form-control" id="add-type">
                                                        <option>บ้าน</option>
                                                        <option>สำนักงาน</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 offset-md-6">
                                                <div class="btn btn-primary delivery-address float-right">
                                                    <a href="{{ route('checkout') }}" style="color:#FFFFFF;"> บันทึกที่อยู่ และ ตรวจสอบการชำระเงิน</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">John Doe</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body actions">
                                            <p class="mb-0">9447 Glen Eagles Drive</p>
                                            <p>Lewis Center, OH 43035</p>
                                            <p>UTC-5: Eastern Standard Time (EST) </p>
                                            <p>202-555-0140</p>
                                            <hr>
                                            <div class="btn btn-primary btn-block delivery-address">
                                                <a href="{{ route('checkout') }}" style="color:#FFFFFF;">เลือกที่อยู่นี้</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset> --}}

                    <!-- Checkout Customer Address Ends -->
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function() {
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


        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
            var cartItemsCount = {{ count($cartItems) }};
            if (cartItemsCount === 0) {
                event.preventDefault(); // ไม่ให้ฟอร์มส่งข้อมูล
                alert('กรุณาเพิ่มสินค้าก่อนทำการดำเนินการต่อ');
            }
        });
    </script>
@endsection
