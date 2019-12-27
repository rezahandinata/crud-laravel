@extends('layouts.main')

@section('content')
<div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <h5>Orderan</h5>
                                <p class="paragraph-agileits-w3layouts text-white"></p>
                            </div>
                            <div class="s-r">
                                <h6>12
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
                                <h5>Penjualan</h5>
                                <p class="paragraph-agileits-w3layouts"></p>
                            </div>
                            <div class="s-r">
                                <h6>25
                                    <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                       
                    </div>
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
                        <div id="chartdiv"></div>
                    </div>
                    <!--// Pie-chart -->
                </div>
            </div>
            <!-- Simple-chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Graph</h4>
                <div id="Hybridgraph" class="simple-chart1">
                </div>
            </div>
            <!--// Simple-chart -->

            <!--// Bar-Chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
                <div id="chart-1"></div>
            </div>
            <!--// Bar-Chart -->

@endsection
