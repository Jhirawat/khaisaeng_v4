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
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                {{-- start form --}}
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div id="column-chartt"></div>
                                <div class="col-md-8">




                                    <section id="number-tabs">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">เพิ่มสินค้า</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <form action="{{ route('store') }}" method="POST"
                                                                enctype="multipart/form-data"
                                                                class="number-tab-steps wizard-circle">
                                                                <fieldset>
                                                                    @csrf

                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="name"
                                                                                    class="form-label">ชื่อรายการสินค้า
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    name="product_name"
                                                                                    placeholder="ชื่อรายการสินค้า" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="image"
                                                                                    class="form-label">รูป</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="product_image"
                                                                                    placeholder="กดเพื่ออัพโหลรูป" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="product_price"
                                                                                    class="form-label">ราคา</label>
                                                                                <input type="number" class="form-control"
                                                                                    name="product_price"
                                                                                    placeholder="ราคาสินค้า" />
                                                                            </div>
                                                                        </div>





                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="product_category" class="form-label">เลือกประเภท</label>

                                                                                    <select class="form-control" name="product_category">
                                                                                        <option value="">กรุณาเลือกประเภทสินค้า</option>
                                                                                        @foreach ($type as $item)
                                                                                        <option value="{{ $item->type_name }}">{{ $item->type_name }}</option>
                                                                                        @endforeach
                                                                                    </select>

                                                                                </div>
                                                                            </div>


{{--

                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="category"
                                                                                    class="form-label">ประเภท</label>
                                                                                    <select class="form-control" name="category">
                                                                                        <option>Audio</option>
                                                                                        <option>Computers</option>
                                                                                        <option>Fitness</option>
                                                                                        <option>Appliance</option>
                                                                                    </select>

                                                                            </div>
                                                                        </div> --}}


                                                                    </div>










                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="shortDescription1">รายละเอียด:</label>
                                                                                <textarea name="product_description" rows="5" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>




                                                                <button style="background-color: #257d0f ;color:white"
                                                                    class="btn" type="submit">Save</button>
                                                                <a href="/dashboard.admin"
                                                                    style="background-color: #f46d13 ;color:white"
                                                                    class="btn">Back to
                                                                    Admin</a>


                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function getData(data) {
            let id = document.getElementById('id')
            id.value = data.id;

            let name = document.getElementById('name');
            name.value = data.name;

            let price = document.getElementById('price');
            price.value = data.price;

            let description = document.getElementById('description');
            description.value = data.description;
        }
    </script>
@endsection
