@extends('layouts.main_admin')

@section('head')
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

@section('js')
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
                                <h3>รายการสินค้า</h3>
                                <div class="content-body">
                                    <!-- Data list view starts -->
                                    <section id="data-thumb-view" class="data-thumb-view-header">


                                        <!-- dataTable starts -->
                                        <div class="table-responsive">
                                            <table class="table data-thumb-view">
                                                <thead>
                                                    <tr>
                                                        {{-- <th></th>
                                                    <th>Image</th>
                                                    <th>NAME</th>
                                                    <th>CATEGORY</th>
                                                    <th>POPULARITY</th>
                                                    <th>ORDER STATUS</th>
                                                    <th>PRICE</th>
                                                    <th>ACTION</th> --}}

                                                        <th scope="col">ID</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Category</th>


                                                        {{--
                                                        <select class="form-control" name="product_category">
                                                            <option value="">กรุณาเลือกประเภทสินค้า</option>
                                                            @foreach ($type as $item)
                                                            <option value="{{ $item->type_name }}">{{ $item->type_name }}</option>
                                                            @endforeach
                                                        </select> --}}

                                                        <th scope="col">Update</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($productss as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>
                                                                <img src="{{ asset('images/' . $item->product_image) }}"
                                                                    class="card-img-top"
                                                                    style="max-width: 50px;max-height: 150px" />
                                                            </td>
                                                            <td>{{ $item->product_name }}</td>
                                                            <td>{{ $item->product_price }}</td>
                                                            <td>{{ $item->product_description }}</td>
                                                            <td>{{ $item->product_category }}</td>
                                                            {{-- <td>{{ $item->type_name }}</td> --}}
                                                            <td>


                                                                <button type="button" class="btn " data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                    onclick="getData({{ $item }})"
                                                                    style="background-color: #158c1d;height: 30px;width: 75px;padding: 0; color:white;border-radius: 7px;">
                                                                    <i class="feather icon-edit"></i>แก้ไข
                                                                </button>

                                                            </td>
                                                            <td>



                                                                <button onclick="deletepro('{{ $item->id }}')"
                                                                    type="button" class="btn btn-danger"
                                                                    data-bs-toggle="modal" data-bs-target="#inlineFormEdit"
                                                                    onclick="getData('{{ $item->id }}')"
                                                                    style="background-color: #c00f35;height: 30px;width: 75px;padding: 0; color:white;border-radius: 7px;">
                                                                    <i class="feather icon-edit"></i>ลบ
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                                                                Product</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.update') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf

                                                                <input type="text" id="id" name="id"
                                                                    class="hidden" />

                                                                {{-- <input type="text" class="form-control" id="product-id" name="id"> --}}
                                                                <label class="form-label">Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" />
                                                                {{--
                                                <label for="image" class="form-label">Image</label>
                                                <input type="text" class="form-control" id="product-image" name="image"> --}}
                                                                <label for="product_image" class="form-label">Image</label>
                                                                <input type="file" class="form-control" name="image"
                                                                    placeholder="Image URL" />

                                                                <label for="product_price" class="form-label">Price</label>
                                                                <input type="text" class="form-control" id="price"
                                                                    name="price" />

                                                                <label for="product_category"
                                                                    class="form-label">ประเภท</label>
                                                                {{-- <select class="form-control" name="product_category">
                                                                    <option value="">กรุณาเลือกประเภทสินค้า</option>
                                                                    @foreach ($type as $item)
                                                                        <option value="{{ $item->type_name }}">
                                                                            {{ $item->type_name }}</option>
                                                                    @endforeach
                                                                </select> --}}






                                                                <label for="product_description"
                                                                    class="form-label">Description</label>
                                                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                                <br>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
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
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
