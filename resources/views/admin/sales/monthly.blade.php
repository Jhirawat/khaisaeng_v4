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
             <!-- Doughnut Chart -->
             <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Doughnut Chart</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="height-300">
                                <canvas id="simple-doughnut-chart"></canvas>
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

@section('script')
<script>
 // Doughnut Chart
  // ---------------------------------------------

  //Get the context of the Chart canvas element we want to select
  var doughnutChartctx = $("#simple-doughnut-chart");

  // Chart Options
  var doughnutchartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    responsiveAnimationDuration: 500,
    title: {
      display: true,
      text: 'Predicted world population (millions) in 2050'
    }
  };

  // Chart Data
  var doughnutchartData = {
    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
    datasets: [{
      label: "My First dataset",
      data: [2478, 5267, 734, 784, 433],
      backgroundColor: themeColors,
    }]
  };

  var doughnutChartconfig = {
    type: 'doughnut',

    // Chart Options
    options: doughnutchartOptions,

    data: doughnutchartData
  };

  // Create the chart
  var doughnutSimpleChart = new Chart(doughnutChartctx, doughnutChartconfig);

</script>
@endsection

