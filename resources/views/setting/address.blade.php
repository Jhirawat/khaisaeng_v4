@extends('layouts.main_admin')
{{-- css --}}
{{-- js --}}
@section('head')
    <title> Tax</title>
    <style>
        .form-control {
            border: 1px solid #9b9b9b;
            color: #000000;
        }

        .error {
            color: red !important;
            font-style: italic;
            border-color: red !important;
        }

        .navbar-floating .header-navbar-shadow {
            display: block;
            background: linear-gradient(180deg, #524f4f00 44%, rgb(248 248 248 / 0%) 73%, rgba(255, 255, 255, 0))!important;
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            {{-- start form --}}
            <div class="content">
                <div class="col-sm-12" style="margin: auto">
                    <div class="row mb-2" style="margin-top: 100px; margin-left: 10px;">
                        <div class="col-sm-6 ">
                            <div style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                <h1 class="m-0" style="color:#555555;font-family: 'Kanit', sans-serif; font-weight:600;">
                                    <img src="{{ asset('images/tax2.png') }}" class="mr-2"
                                        style="height: 54px;
                                        width: 52px;">ที่ตั้งวิสาหกิจ
                                </h1>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <section id="basic-vertical-layouts">
                        <div class="col-md-12 col-12" style="font-family: 'Kanit', sans-serif; font-weight:400;">
                            <div class="card">
                                <div class="card-content">
                                    <div hidden>
                                        {{-- @foreach ($slip as $slip)
                                            {{ $slip->id }}
                                            {{ $slip->pay_company }}
                                            {{ $slip->pay_id }}
                                            {{ $slip->pay_address }}
                                        @endforeach --}}
                                    </div>
                                    <div class="card-body">
                                        {{-- <form action="{{ route('update.tax',$slip->id) }}" method="POST" --}}
                                            <form action="" method="POST"
                                            enctype="multipart/form-data" novalidate>
                                            @csrf
                                            @method('PUT')

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-4">
                                                        <h5
                                                            style="margin-top: 20px;font-family: 'Kanit', sans-serif; font-weight:500; color: #164176;font-size: 1.3rem;">
                                                            ชื่อบริษัท
                                                        </h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="namecompany"
                                                                style="font-size: 1.0rem !important;color: #525252;">ชื่อบริษัท<span
                                                                    style="color: red">*</span></label>
                                                            <fieldset
                                                                class="form-group position-relative has-icon-left input-divider-left">
                                                                <input type="text" placeholder="ชื่อบริษัท"
                                                                    class="form-control" value=""
                                                                    name="pay_company">
                                                                <div class="form-control-position">
                                                                    <i class="bi bi-building"></i>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-4">
                                                        <h5
                                                            style="margin-top: 20px;font-family: 'Kanit', sans-serif; font-weight:500; color: #164176;font-size: 1.3rem;">
                                                            ที่อยู่
                                                        </h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="addresscom"
                                                                style="font-size: 1.0rem !important;color: #525252;">ที่อยู่<span
                                                                    style="color: red">*</span></label>
                                                            <fieldset
                                                                class="form-group position-relative has-icon-left input-divider-left">
                                                                <input type="address" value=""
                                                                    placeholder="ที่อยู่" class="form-control"
                                                                    name="pay_address">
                                                                <div class="form-control-position">
                                                                    <i class="bi bi-geo-alt-fill"></i>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-4" style="">
                                                        <h5
                                                            style="margin-top: 20px;font-family: 'Kanit', sans-serif; font-weight:500; color: #164176;font-size: 1.3rem;">
                                                            เลขประจำตัวผู้เสียภาษี
                                                        </h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="numbertax"
                                                                style="font-size: 1.0rem !important;color: #525252;">เลขประจำตัวผู้เสียภาษี<span
                                                                    style="color: red">*</span></label>
                                                            <fieldset
                                                                class="form-group position-relative has-icon-left input-divider-left">
                                                                <input type="text" placeholder="เลขประจำตัวผู้เสียภาษี"
                                                                    class="form-control" value=""
                                                                    name="pay_id"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                <div class="form-control-position">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-4" style="">
                                                        <h5
                                                            style="margin-top: 20px;font-family: 'Kanit', sans-serif; font-weight:500; color: #164176;font-size: 1.3rem;">
                                                            รูปภาพโลโก้
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-3">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12">
                                                                <img id="Logo"
                                                                    {{-- src="{{ asset('imguse/' . $slip->pay_imglogo) }}" --}}
                                                                    src=""
                                                                    class="img-fluid"
                                                                    style="max-width: 150px;border-radius: 10px;border: 1px solid #d9d9d9;" />
                                                                <label for="Image" class="form-label"></label>
                                                                <input class="form-control" type="file" id="emImg"
                                                                    name="pay_imglogo" accept="image/*"
                                                                    onchange="readURL(this);"
                                                                    style="width: 150px;margin-top: 5px;">
                                                                <h6
                                                                    style="margin-top: 20px;font-family: 'Kanit', sans-serif; font-weight:500; color: #b62020;">
                                                                    กรุณาเลือกรูปภาพโลโก้</h6>
                                                            </div>
                                                        </div>
                                                        {{-- <input type="text" name="salaries_id"> --}}
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <section id="types">
                                                <div class="row" style="top: 0px;margin-top: 30px;">
                                                    <div class="col-12" style="text-align: center;">
                                                        <button type="submit" class="btn btn-outline round mr-1 mb-1"
                                                            data-dismiss="modal"
                                                            style="background-color: #164176;color: white;">ยืนยัน
                                                        </button>
                                                        {{-- <button id="addRow" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; Add new row</button> --}}
                                                        <button type="button"
                                                            class="btn btn-outline-secondary round mr-1 mb-1"
                                                            data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#Logo").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                $("#Logo").attr("src", noimage);
            }
        }
    </script>
    <script>
        function absent(val) {
            if (val == 3) {
                $('#hiddenfile1').show();

            } else {
                $('#hiddenfile1').hide();
            }
        }

        function hour(val) {
            if (val == 2 || val == 3) {
                $('#hiddenfile2').show();

            } else {
                $('#hiddenfile2').hide();
            }
        }
    </script>
    <script>
        jQuery.validator.addMethod("noSpace", function(value, element) {
            return value == '' || value.trim().length != 0;
        }, "No space please and don't leave it empty");
        jQuery.validator.addMethod("customEmail", function(value, element) {
            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
                value);
        }, "Please enter valid email address!");
        $.validator.addMethod("alphanumeric", function(value, element) {
            return this.optional(element) || /^\w+$/i.test(value);
        }, "Letters, numbers, and underscores only please");
        var $registrationForm = $('#submitform');
        if ($registrationForm.length) {
            $registrationForm.validate({
                rules: {
                    addresscom: {
                        required: true,
                    },
                    namecompany: {
                        required: true,

                    },
                    numbertax: {
                        required: true

                    },
                },
                messages: {
                    addresscom: {
                        required: 'กรอกที่อยู่!',
                    },
                    namecompany: {
                        required: 'กรอกชื่อบริษัท!',

                    },
                    numbertax: {
                        required: 'กรอกเลขประจำตัวผู้เสียภาษี!'
                    },
                },
                errorPlacement: function(error, element) {
                    if (element.is(":radio")) {
                        error.appendTo(element.parents('.gender'));
                    } else if (element.is(":checkbox")) {
                        error.appendTo(element.parents('.hobbies'));
                    } else {
                        error.insertAfter(element);
                    }
                },
            });
        }
    </script>
@endsection
