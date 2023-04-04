@extends('layouts.main_user')

@section('style')
<style>

</style>
@endsection
@section('head')
<title>ที่อยู่</title>
@endsection

@section('content')

<div class="2-columns ecommerce-application navbar-floating footer-static">
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">ที่อยู่</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item">ที่อยู่
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                    <!-- Checkout Customer Address Starts -->
                    <h6><i class="step-icon step feather icon-home"></i>ที่อยู่ของคุณ</h6>

                    <fieldset class="checkout-step-2 px-0">
                        <section id="checkout-address" class="list-view product-checkout">
                            <div class="card">
                                <div class="card-header flex-column align-items-start">
                                    <h4 class="card-title">เพิ่มที่อยู่ใหม่</h4>
                                    <!-- <p class="text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p> -->
                                </div>
                                  <div class="card-content">
                                    <div class="card-body">
                                <form action="{{ route('store.useraddress') }}" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-name">ชื่อจริง:</label>
                                                    <input type="text" class="form-control required"
                                                    name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-number">หมายเลขโทรศัพท์:</label>
                                                    <input type="number" class="form-control required"
                                                    name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-apt-number">บ้านเลขที่:</label>
                                                    <input type="text" class="form-control required"
                                                    name="address">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-landmark">รายละเอียดเพิ่มเติม:</label>
                                                    <input type="text" class="form-control required"
                                                    name="address_addon">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-city">ตำบล/อำเภอ:</label>
                                                    <input type="text" class="form-control required"
                                                     name="district">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-pincode">รหัสไปรษณีย์:</label>

                                                    <input type="number" class="form-control required"
                                                    name="province_code">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-state">จังหวัด: (เชียงใหม่ ส่งฟรี)</label>
                                                    <input type="text" class="form-control required"
                                                    name="province">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="add-type">ประเภทสถานที่:</label>
                                                    <select class="form-control" name="address_type">
                                                        <option>บ้าน</option>
                                                        <option>สำนักงาน</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button style="background-color: #257d0f ;color:white" class="btn"
                                href=""
                                type="submit">บันทึกที่อยู่</button>
                                    </div>
                                </div>
                                </fieldset>

                                         </div>
                                 </form>

                            </section>
                        </fieldset>

                    <!-- Checkout Customer Address Ends -->

                     <!-- ShowAddressLL start -->
                     <div class="row justify-content-center">
                         <div class="col-12">
                     <section id="ecommerce-products" class="grid-view">
                        <div class="row">

                   @forEach ($showAddress as $add)
                        <div class="col" style="margin-top: 25px;" >
                        <div class="card ecommerce-card" style="width: 24rem">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="item-wrapper">

                                        <div class="card-header">
                                        <h4 class="card-title">{{ $add->name }}</h4>

                                        </div>

                                    </div>
                                    <hr>
                                    <p class="mb-0">{{ $add->address }}  {{ $add->address_addon}}</p>
                                    <div>
                                    <p class="mb-0">{{ $add->district }} {{ $add->province }}</p>
                                    </div>
                                    <div>
                                    <p>{{ $add->province_code }} </p>
                                    </div>
                                    <div>
                                    <p>{{ $add->phone }}</p>
                                    </div>
                                    <hr>
                                            <div class="btn btn-primary btn-block delivery-address">แก้ไขที่อยู่</div>
                                </div>


                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach

                        </div>
                    </section>
                        </div>


            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
    function getData(data) {
            let name = document.getElementById('name')
            name.value = data.name;

            let phone = document.getElementById('phone')
            phone.value = data.phone;

            let address = document.getElementById('address')
            address.value = data.address;

            let address_addon = document.getElementById('address_addon')
            address_addon.value = data.address_addon;

            let district = document.getElementById('district')
            district.value = data.district;

            let province_code = document.getElementById('province_code')
            province_code.value = data.province_code;

            let province = document.getElementById('province')
            province.value = data.province;

            let address_type = document.getElementById('address_type')
            address_type.value = data.address_type;
    }
    // console.log(data);
</script>
@endsection

