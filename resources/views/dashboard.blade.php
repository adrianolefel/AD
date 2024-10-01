@extends('layouts.app')

@section('title', 'IT Asset Management Dashboard')

@section('contents')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Total Assets Button -->
        <div class="col-xl-3 col-md-6 mb-4">
       <button class="btn btn-block border-left-primary shadow h-100 py-2">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Assetsoverview</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1,234</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-laptop fa-2x text-gray-300"></i>
                    </div>
                </div>
            </button>
        </div>

        <!-- Computers Button -->
        <div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('computers') }}" class="btn btn-block border-left-success shadow h-100 py-2">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Computers</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">876</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-desktop fa-2x text-gray-300"></i>
            </div>
        </div>
    </a>
</div>

        <!-- Network Equipment Button -->
        <div class="col-xl-3 col-md-6 mb-4">
     <a href="{{ route('network-equipments') }}" class="btn btn-block border-left-info shadow h-100 py-2">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Network Equipment</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">245</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-network-wired fa-2x text-gray-300"></i>
                    </div>
                </div>
            </button>
        </div>

        <!-- Other Devices Button -->
        <div class="col-xl-3 col-md-6 mb-4">
            <button class="btn btn-block border-left-warning shadow h-100 py-2">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Other Devices</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">113</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hdd fa-2x text-gray-300"></i>
                    </div>
                </div>
            </button>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Assets Over Time Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Assets Over time</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="assetsOverTimeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assets by Region Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Assets by Region</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2 ">
                        <canvas id="assetsByRegionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Asset Management Actions -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Asset Management Actions</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <a href="#" class="btn btn-primary btn-block">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Add New Asset
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="#" class="btn btn-info btn-block">
                                <i class="fas fa-file-alt fa-sm text-white-50"></i> Generate Report
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="#" class="btn btn-success btn-block">
                                <i class="fas fa-calendar fa-sm text-white-50"></i> Schedule Maintenance
                            </a>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <a href="#" class="btn btn-warning btn-block">
                                <i class="fas fa-map-marker-alt fa-sm text-white-50"></i> Asset Tracking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    // Assets Over Time Chart
    var ctx = document.getElementById("assetsOverTimeChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Computers",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115,  223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [500, 600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600],
            },
            {
                label: "Network Equipment",
                lineTension: 0.3,
                backgroundColor: "rgba(28, 200, 138, 0.05)",
                borderColor: "rgba(28, 200, 138, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(28, 200, 138, 1)",
                pointBorderColor: "rgba(28, 200, 138, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(28, 200, 138, 1)",
                pointHoverBorderColor: "rgba(28, 200, 138, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [100, 120, 140, 160, 180, 200, 220, 240, 260, 280, 300, 320],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
            }
        }
    });

    // Assets by Region Chart
    var ctx = document.getElementById("assetsByRegionChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["North America", "Europe", "Asia", "Other"],
            datasets: [{
                data: [400, 300, 200, 100],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#f4b619'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

    // Assets by Platform Chart
    var ctx = document.getElementById("assetsByPlatformChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Windows", "macOS", "Linux"],
            datasets: [{
                data: [500, 300, 200],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
@endsection

@section('styles')
<style>
    .chart-area {
        height: 20rem;
    }
    .chart-pie {
        height: 15rem;
    }
</style>
@endsection