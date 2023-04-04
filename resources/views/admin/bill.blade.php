@extends('layouts.main_admin')

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
    {{-- start form --}}
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12">

                </div>

            </div>
            <div class="content-body">
                <!-- invoice functionality start -->
                <section class="invoice-print mb-1">
                    <div class="row">

                        <fieldset class="col-12 col-md-5 mb-1 mb-md-0">

                        </fieldset>
                        <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                            <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-download"></i>
                                Download</button>

                        </div>
                    </div>
                </section>
                <!-- invoice functionality end -->
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div class="text-center">
                            {{-- <h1>ใบกำกับภาษี/ใบเสร็จรับเงิน</h1> --}}
                            <h1>ใบเสร็จรับเงิน</h1>
                        </div>
                        <div id="invoice-company-details" class="row">
                            <div class="col-sm-6 col-12 text-left pt-1">
                                <div class="media pt-1">
                                    <img src="https://media.discordapp.net/attachments/799538881258979358/1083277509405192232/Red_Retro_Doodle_Strawberry_Original_Fruit_Logo_2.png?width=312&height=312"
                                        alt="company logo"
                                        style="
                                    max-width: 150px;
                                " />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-right">
                                <div class="invoice-details mt-2">
                                    <h6 class="mt-2"> วันที่</h6>
                                    <div class="col text-right">{{ date('d/m/Y') }}</div>
                                </div>

                                <div> <button onclick="generateNumber()"><h5>ORDER</button></h5>
                                    <p class="text" id="result"></p>
                                </div>

                            </div>
                        </div>
                        <!--/ Invoice Company Details -->

                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-sm-6 col-12 text-left">
                                <h5>รายละเอียดลูกค้า</h5>
                                <div class="recipient-info my-2">
                                    <p>คุณ ก</p>
                                    <p>134 หมู่.4 ตำบล.บ่อแก้ว อำเภอ.สะเมิง จังหวัด.เชียงใหม่ 50250</p>
                                </div>
                                <div class="recipient-contact pb-2">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        poomji@mail.com
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        ติดต่อ 081-0334-xxx
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-left">
                                <h5>ร้านค้าผู้ให้บริการ</h5>
                                <div class="company-info my-2">
                                    <p>คุณ กัณญาภัค พึ่งกิตตน </p>
                                    <p>134 หมู่.4 ตำบล.บ่อแก้ว อำเภอ.สะเมิง จังหวัด.เชียงใหม่ 50250</p>

                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        hello@pixinvent.net
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        ติดต่อ 081-0334-xxx
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Recipient Details -->

                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>รายการสินค้า</th>
                                                <th>จำนวน</th>
                                                <th>ราคาต่อหน่วย</th>
                                                <th>รวม</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Website Redesign</td>
                                                <td>60</td>
                                                <td>15 USD</td>
                                                <td>90000 USD</td>
                                            </tr>
                                            <tr>
                                                <td>Newsletter template design</td>
                                                <td>20</td>
                                                <td>12 USD</td>
                                                <td>24000 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>ยอดรวมย่อย</th>
                                                    <td>114000 USD</td>
                                                </tr>
                                                <tr>
                                                    <th>ค่าจัดส่ง (5%)</th>
                                                    <td>5700 USD</td>
                                                </tr>
                                                <tr>
                                                    <th>ยอดรวม</th>
                                                    <td>108300 USD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-right pt-3">
                            <p>ขอบคุณมากที่ให้โอกาสให้เราได้บริการคุณค่ะ/ครับ
                                เราขอแสดงความนับถือและความชื่นชมที่สูงสุดให้กับท่านที่ไว้วางใจในบริการของเรา
                                {{-- <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
                                <span>IBAN: <strong>G882-1111-2222-3333</strong></span> --}}
                            </p>
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>
                <!-- invoice page end -->

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        document.getElementById("current-date").textContent = dd + '/' + mm + '/' + yyyy;



        function generateNumber() {
            // Generate a random number between 100000 and 999999
            const randomNumber = Math.floor(Math.random() * 900000) + 100000;

            // Display the result in the HTML element with id "result"
            document.getElementById("result").innerHTML = "Your random number is: #" + randomNumber;
        }
    </script>
@endsection
