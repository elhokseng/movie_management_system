@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <h4 class="mt-3 mb-4">Dashboard Home</h4>
        <div class="row">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2">0</h4>
                                    <p class="mb-0">Total Users</p>
                                </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2">0</h4>
                                    <p class="mb-0">New Users</p>
                                </div>
                                <div> {{$totalMovie}} </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2">0</h4>
                                    <p class="mb-0">Total Ticket</p>
                                </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2">0</h4>
                                    <p class="mb-0">Ticket Sell Out</p>
                                </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2"> {{ $totalMovies }} </h4>
                                    <p class="mb-0">Total Movies</p>
                                </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2">
                                        0
                                        <span>
                                            $
                                        </span>
                                    </h4>
                                    <p class="mb-0">Total Imcome Today</p>
                                </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-5">
            <h3>Static Column Chart</h3>
            <div id="chart"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Static data for the chart
        const staticData = {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [{
                name: 'Sales',
                data: [30, 40, 35, 50, 49, 60, 55, 45, 40, 50, 55, 65]
            }]
        };

        // Options for the chart
        const options = {
            series: staticData.series,
            chart: {
                type: 'bar',
                height: 400 // Adjust height here
            },
            xaxis: {
                categories: staticData.categories
            }
        };

        // Initialize the chart with options
        const chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
