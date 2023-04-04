@extends('layouts.main_admin')

@section('style')
<style>
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
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            {{-- start form --}}
            <div class="container-fluid mt-2">
                <div class="row mb-2">
                    <div class="col-sm-12 ">
                        <div>
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Column Chart</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="column-chartt"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function () {
    var e = "#7367F0",
        t = [e, "#4ea397", "#22c3aa", "#7bd9a5", "#a8e7d2"],
        a = !1;
    "rtl" == $("html").data("textdirection") && (a = !0);
    var r = {
        chart: { height: 350, type: "line", zoom: { enabled: !1 } },
        colors: t,
        dataLabels: { enabled: !1 },
        stroke: { curve: "straight" },
        series: [
            { name: "Desktops", data: [10, 41, 35, 51, 49, 62, 69, 91, 148] },
        ],
        title: { text: "Product Trends by Month", align: "left" },
        grid: { row: { colors: ["#f3f3f3", "transparent"], opacity: 0.5 } },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
            ],
        },
        yaxis: { tickAmount: 5, opposite: a },
    };
    new ApexCharts(document.querySelector("#line-chart"), r).render();
    var n = {
        chart: { height: 350, type: "area" },
        colors: t,
        dataLabels: { enabled: !1 },
        stroke: { curve: "smooth" },
        series: [
            { name: "series1", data: [31, 40, 28, 51, 42, 109, 100] },
            { name: "series2", data: [11, 32, 45, 32, 34, 52, 41] },
        ],
        legend: { offsetY: -10 },
        xaxis: {
            type: "datetime",
            categories: [
                "2019-09-18T00:00:00",
                "2019-09-18T01:00:00",
                "2019-09-18T02:00:00",
                "2019-09-18T03:00:00",
                "2019-09-18T04:00:00",
                "2019-09-18T05:00:00",
                "2019-09-18T06:00:00",
            ],
        },
        yaxis: { opposite: a },
        tooltip: { x: { format: "dd/MM/yy HH:mm" } },
    };
    new ApexCharts(document.querySelector("#line-area-chart"), n).render();
    var o = {
        chart: { height: 350, type: "bar" },
        colors: t,
        plotOptions: {
            bar: { horizontal: !1, endingShape: "rounded", columnWidth: "55%" },
        },
        dataLabels: { enabled: !1 },
        stroke: { show: !0, width: 2, colors: ["transparent"] },
        series: [
            { name: "Net Profit", data: [44, 55, 57, 56, 61, 58, 63, 60, 66] },
            { name: "Revenue", data: [76, 85, 101, 98, 87, 105, 91, 114, 94] },
            {
                name: "Free Cash Flow",
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
            },
        ],
        legend: { offsetY: -10 },
        xaxis: {
            categories: [
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
            ],
        },
        yaxis: { title: { text: "$ (thousands)" }, opposite: a },
        fill: { opacity: 1 },
        tooltip: {
            y: {
                formatter: function (e) {
                    return "$ " + e + " thousands";
                },
            },
        },
    };
    new ApexCharts(document.querySelector("#column-chartt"), o).render();
    var i = {
        chart: { height: 350, type: "bar" },
        colors: t,
        plotOptions: { bar: { horizontal: !0 } },
        dataLabels: { enabled: !1 },
        series: [
            { data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380] },
        ],
        xaxis: {
            categories: [
                "South Korea",
                "Canada",
                "United Kingdom",
                "Netherlands",
                "Italy",
                "France",
                "Japan",
                "United States",
                "China",
                "Germany",
            ],
            tickAmount: 5,
        },
        yaxis: { opposite: a },
    };

});
</script>
@endsection

