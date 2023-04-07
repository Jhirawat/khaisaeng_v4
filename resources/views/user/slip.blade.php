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
                {{-- start form --}}
                <div class="container-fluid mt-2">
                    <div class="row mb-2">
                        <div class="col-sm-6 ">
                            <section id="basic-horizontal-layouts">
                                <div class="row match-height">
                                    <div class="card">
                                        <div class="card-header flex-column align-items-start">
                                            <h4 class="card-title">ชำระเงินผ่าน QRcode</h4>
                                            <p class="text-muted mt-25">กรุณาสแกน QRcode ด้านล่างกรุณาชำระเงินตามยอดและ
                                                อัพโหลดหลักฐานการชำระเงิน</p>
                                        </div>
                                        <div class="card  text-center ">
                                            <div class="card-content d-flex">
                                                <div class="card-body">
                                                    <img src="https://media.discordapp.net/attachments/799534657523154967/1070204450083455016/320536374_514244424134923_4636217947386253321_n.jpg?width=481&height=701"
                                                        alt="element 06" height="450" class="mb-1">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">กรุณาอัพโหลดหลักฐานการโอนเงิน</h4>
                                </div>






                                <div class="card-content">
                                    <div class="card-body">
                                        <form name="myForm" action="{{ route('store-slip') }}" method="POST"
                                            enctype="multipart/form-data" class="number-tab-steps wizard-circle"
                                            onsubmit="return validateForm()">
                                            <fieldset>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>หลักฐานการโอน :</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="file" class="form-control" name="slip_image"
                                                                    placeholder="กดเพื่ออัพโหลรูป" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>วันที่ชำระเงิน :</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        id="datepicker" placeholder="วันที่ :"
                                                                        name="slip_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            {{-- <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                <a href="{{ route('billUserqrcode') }}" class="btn btn-danger mr-1 mb-1">Cancel</a>
                                            </div> --}}
                                            <div class="col-md-8 offset-md-4">
                                                <form method="POST" action="{{ route('billUserqrcode') }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                </form>
                                            </div>

                                        </form>
                                    </div>
                                </div>

{{--
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                    <a href="{{ route('billUserqrcode') }}"></a>
                                </div>

                                <div class="col-md-8 offset-md-4">
                                    <a href="{{ route('billUserqrcode') }}" class="btn btn-primary mr-1 mb-1">Submit</a>
                                </div> --}}


                                {{--
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>หลักฐานการโอน :</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                    <input type="file" class="form-control"
                                                                        name="image" placeholder="กดเพื่ออัพโหลรูป" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>วันที่ชำระเงิน :</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        id="datepicker"  placeholder="วันที่ :">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1">Submit</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>no
                                </div> --}}










                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Datepicker
            $('#datepicker').datepicker({
                format: 'dd/mm/yyyy',
                language: 'th',
                autoclose: true
            });

            // Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT',
                locale: 'th',
                icons: {
                    up: 'fas fa-chevron-up',
                    down: 'fas fa-chevron-down'
                }
            });
        });

        function validateForm() {
            var slipImage = document.forms["myForm"]["slip_image"].value;
            var slipDate = document.forms["myForm"]["slip_date"].value;
            if (slipImage == "") {
                alert("กรุณาอัพโหลดรูปหลักฐานการโอน");
                return false;
            }
            if (slipDate == "") {
                alert("กรุณาป้อนวันที่ชำระเงิน");
                return false;
            }
        }





    </script>
@endsection
