@extends('layouts.main_admin')
@section('style')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
            width: 250px;
            font-size: 17px;
        }
    </style>
@endsection
@section('head')
    <title>เพิ่มประเภทสินค้า</title>
@endsection
<style>
    table.dataTable thead th,
    table.dataTable thead td,
    table.dataTable tfoot th,
    table.dataTable tfoot td {
        font-size: 0.85rem;
        border: 0;
        font-family: 'Kanit', sans-serif;
        font-weight: 600 !important;
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
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="container-fluid mt-2">
                    <div class="row mb-2">
                        <div class="col-sm-6 ">
                            <div style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                <h1 class="m-0" style="color:#555555;font-family: 'Kanit', sans-serif; font-weight:600;">
                                    <img src="{{ asset('images/list.png') }}" class="mr-2"
                                        style="height: 44px;
                                        width: 46px;">ประเภทสินค้า
                                </h1>
                            </div>
                        </div><!-- /.col -->
                    </div>
                    <!-- Form and scrolling Components start -->
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-sm-6" style="margin-top: -55px;font-family: 'Kanit', sans-serif; font-weight:500;">
                            <div style="text-align: end;">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary text-white px-5"
                                    style="font-size: 18px; border-radius: 23px; padding-left: 2rem !important;
                                    padding-right: 2rem !important; background-color:#164176 !important"
                                    data-toggle="modal" data-target="#inlineFormAdd"><i class="fa fa-plus mr-1"
                                        style="font-size: 1.3rem !important;"></i>
                                    เพิ่มประเภทสินค้า
                                    </a>
                                </button>
                                <!-- Modal add-->
                                <form action="{{ route('store.type-product') }}" method="POST" class="form form-vertical"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="modal fade text-left" id="inlineFormAdd" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content"
                                                style="font-family: 'Kanit', sans-serif; font-weight:500;">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33" style="color: #164176;"><i
                                                            class="fa fa-plus mr-1"
                                                            style="font-size: 1.3rem;"></i>เพิ่มประเภทสินค้า</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    {{-- <label
                                                        style="font-size: 1.0rem !important;color: #525252;">รหัสประเภทแผนก
                                                        :
                                                    </label> --}}
                                                    {{-- <div class="form-group">
                                                        <input type="text" id="" name="dpId"
                                                            value="{{ $dpid }}" disabled
                                                            placeholder="รหัสประเภทแผนก" class="form-control">
                                                    </div> --}}

                                                    <label
                                                        style="font-size: 1.0rem !important;color: #525252;">ชื่อประเภทสินค้า
                                                        :
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" id="" name="type_name" value=""
                                                            placeholder="ชื่อประเภทสินค้า" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="justify-content: center;">
                                                    <button type="submit" class="btn btn-outline round mr-1 mb-1"
                                                        style="background-color: #164176;color: white;">ยืนยัน
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary round mr-1 mb-1"
                                                        data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--End Modal add-->
                                <!-- Modal Edit-->
                                <div class="modal fade text-left" id="inlineFormEdit" tabindex="-1" role="dialog"
                                    aria-labelledby="inlineFormEdit" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content"
                                            style="font-family: 'Kanit', sans-serif; font-weight:500;">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="inlineFormEdit" style="color: #164176;"><i
                                                        class="feather icon-edit mr-1"
                                                        style="font-size: 1.3rem;"></i>แก้ไขประเภทสินค้า</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('update.type-product') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" name="id" value="" id="type_id"
                                                            placeholder="รหัสประเภทแผนก" class="form-control" hidden>
                                                    </div>
                                                    <label
                                                        style="font-size: 1.0rem !important;color: #525252;">ชื่อประเภทสินค้า
                                                        :
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" name="type_name" value=""
                                                            id="type_name" placeholder="ชื่อประเภทสินค้า"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                {{-- @include('sweetalert::alert') --}}
                                                <div class="modal-footer" style="justify-content: center;">
                                                    <button type="submit" class="btn btn-outline round mr-1 mb-1"
                                                        style="background-color: #164176;color: white;">ยืนยัน
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary round mr-1 mb-1"
                                                        data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal Edit-->
                            </div>
                            <!-- Form and scrolling Components end -->
                        </div>
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <section id="add-row">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive mt-1 dataTables_scroll">
                                                <table class="table zero-configuration "
                                                    style="white-space: nowrap;font-family: 'Kanit', sans-serif; font-weight:600;border: 0px  solid  !important">
                                                    <thead class="thead">
                                                        <tr class="dataTables_scroll">
                                                            <th style=" border-radius: 15px 0px 0px 0px;font-size: 1rem;">
                                                                ลำดับ</th>
                                                            {{-- <th style=" font-size: 1rem;">
                                                                รหัสประเภท</th> --}}
                                                            <th style="font-size: 1rem;">
                                                                ชื่อประเภทสินค้า
                                                            </th>
                                                            <th style="font-size: 1rem;width: 100px;">
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i = 0;

                                                        @endphp
                                                        @foreach ($data as $data)
                                                            <tr>
                                                                <td>{{ ++$i }}</td>
                                                                <td>
                                                                    {{ $data->type_name }}
                                                                </td>
                                                                <td style="padding: 0;">
                                                                    <div class="d-flex" style="justify-content: center;">

                                                                        <div class="btn-group dropdown">
                                                                            <div class="btn-group mr-1 mt-1">
                                                                                <button type="button" class="btn "
                                                                                    data-toggle="modal"
                                                                                    data-target="#inlineFormEdit"
                                                                                    onclick="getData('{{ $data->id }}')"
                                                                                    style="background-color: #e27fb1;height: 30px;width: 75px;padding: 0; color:white;border-radius: 7px;">
                                                                                    <i class="feather icon-edit"></i>แก้ไข
                                                                                </button>
                                                                                <br>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-switch custom-switch-success mr-2 "
                                                                                    style="margin-top: 4px;">
                                                                                    <input type="checkbox"
                                                                                        name="type_status"
                                                                                        id="customSwitch4{{ $data->id }}"
                                                                                        class="custom-control-input"
                                                                                        {{ $data->type_status ? 'checked' : '' }}
                                                                                        onclick="changeUserStatus(event.target, {{ $data->id }});">
                                                                                    <label
                                                                                        class="custom-control-label mt-1"
                                                                                        for="customSwitch4{{ $data->id }}"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
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
@endsection
@section('script')
    <script>
        var draw = function() {
            console.log('Table redrawn ' + new Date());
        };

        $('form#submitform').DataTable({
            drawCallback: draw
        });
    </script>
    <script type="text/javascript">
        function getData(id) {
            console.log(id)
            var url = "{{ route('type-product.show', ':id') }}";
            url = url.replace(':id', id);
            $.get(url, function(data) {
                $('#inlineFormEdit').modal('show');
                $('#type_id').val(data.id);
                console.log(data);
                // $("#department-dpid").val(data.dpid);
                $("#type_name").val(data.type_name);
                $("#type_status").val(data.type_status);
            })
        }
        // ('#close_modal').click(function(){
        //     $('#exampleModalCenter').modal('hide');
        // })
    </script>
    <script>
        function changeUserStatus(_this, id) {
            var type_status = $(_this).prop('checked') == true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ route('updatestatus.type-product') }}",
                data: {
                    _token: _token,
                    id: id,
                    type_status: type_status
                },
                success: function(result) {
                    if (result.successful == true) {
                        // toastr.success('อัพเดตสถานะ', {timeOut: 100000})
                        toastr.success('อัพเดตสถานะแล้ว', {
                            timeOut: 5000
                        })
                    } else {
                        toastr.error('เกิดข้อผิดพลาด')
                    }

                }
            });
        }
    </script>
@endsection
