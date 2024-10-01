@extends('layouts.app')

@section('title', 'Asset Overview')

@section('contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Asset Overview</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Asset Distribution</h6>
        </div>
        <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="assetOverviewChart"></canvas>
            </div>
        </div>
    </div>
@endsection

