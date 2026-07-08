@extends('layouts.backend')

@section('title','Reports')

@section('content')

<div class="container-fluid mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">Reports</h2>
            <p class="text-muted">
                Comprehensive insights and performance reports for your store.
            </p>
        </div>

        <div class="d-flex gap-2">

            <input type="date"
                   class="form-control">

            <button class="btn btn-success">
                Export Report
            </button>

        </div>

    </div>

    <!-- Report Tabs -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <ul class="nav nav-pills">

                <li class="nav-item me-2">
                    <a href="#"
                       class="nav-link active">
                        Overview
                    </a>
                </li>

                <li class="nav-item me-2">
                    <a href="#"
                       class="nav-link">
                        Sales Report
                    </a>
                </li>

                <li class="nav-item me-2">
                    <a href="#"
                       class="nav-link">
                        Orders Report
                    </a>
                </li>

                <li class="nav-item me-2">
                    <a href="#"
                       class="nav-link">
                        Product Report
                    </a>
                </li>

                <li class="nav-item me-2">
                    <a href="#"
                       class="nav-link">
                        Customer Report
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link">
                        Inventory Report
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <!-- Statistics -->

    <div class="row">

        <!-- Sales -->

        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Sales
                    </h6>

                    <h2 class="fw-bold text-success">
                        $57,820
                    </h2>

                    <small class="text-success">
                        ↑ 23.6% from last month
                    </small>

                </div>

            </div>

        </div>

        <!-- Orders -->

        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Orders
                    </h6>

                    <h2 class="fw-bold text-primary">
                        1,248
                    </h2>

                    <small class="text-primary">
                        ↑ 18.4% from last month
                    </small>

                </div>

            </div>

        </div>

        <!-- Customers -->

        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h6 class="text-muted">
                        Customers
                    </h6>

                    <h2 class="fw-bold text-warning">
                        892
                    </h2>

                    <small class="text-warning">
                        ↑ 20.7% from last month
                    </small>

                </div>

            </div>

        </div>

        <!-- Visitors -->

        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Visitors
                    </h6>

                    <h2 class="fw-bold text-info">
                        24,569
                    </h2>

                    <small class="text-info">
                        ↑ 28.9% from last month
                    </small>

                </div>

            </div>

        </div>

    </div>

    <!-- Sales Chart -->

    <div class="row">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">

                    Sales Performance

                </div>

                <div class="card-body">

                    <canvas id="reportChart"
                            height="120">
                    </canvas>

                </div>

            </div>

        </div>

                <!-- Sales By Channel -->

        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">

                    Sales by Channel

                </div>

                <div class="card-body">

                    <canvas id="channelChart"
                            height="240">
                    </canvas>

                </div>

            </div>

        </div>

    </div>

    <!-- Tables -->

    <div class="row mt-4">

        <!-- Top Selling Products -->

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">

                    Top Selling Products

                </div>

                <div class="card-body p-0">

                    <table class="table table-hover mb-0">

                        <thead>

                        <tr>

                            <th>#</th>
                            <th>Product</th>
                            <th>Sold</th>
                            <th>Revenue</th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>

                            <td>1</td>
                            <td>Organic Apples</td>
                            <td>1256</td>
                            <td>$3,256</td>

                        </tr>

                        <tr>

                            <td>2</td>
                            <td>Fresh Banana</td>
                            <td>982</td>
                            <td>$2,410</td>

                        </tr>

                        <tr>

                            <td>3</td>
                            <td>Organic Milk</td>
                            <td>756</td>
                            <td>$1,890</td>

                        </tr>

                        <tr>

                            <td>4</td>
                            <td>Green Lettuce</td>
                            <td>642</td>
                            <td>$1,320</td>

                        </tr>

                        <tr>

                            <td>5</td>
                            <td>Tomatoes</td>
                            <td>532</td>
                            <td>$1,120</td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- Top Customers -->

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">

                    Top Customers

                </div>

                <div class="card-body p-0">

                    <table class="table table-hover mb-0">

                        <thead>

                        <tr>

                            <th>#</th>
                            <th>Customer</th>
                            <th>Orders</th>
                            <th>Revenue</th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>

                            <td>1</td>
                            <td>John Doe</td>
                            <td>18</td>
                            <td>$1,258</td>

                        </tr>

                        <tr>

                            <td>2</td>
                            <td>Sarah Wilson</td>
                            <td>15</td>
                            <td>$1,046</td>

                        </tr>

                        <tr>

                            <td>3</td>
                            <td>Michael Brown</td>
                            <td>12</td>
                            <td>$934</td>

                        </tr>

                        <tr>

                            <td>4</td>
                            <td>Emma Davis</td>
                            <td>10</td>
                            <td>$875</td>

                        </tr>

                        <tr>

                            <td>5</td>
                            <td>David Smith</td>
                            <td>9</td>
                            <td>$745</td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>


        <!-- Bottom Row -->

    <div class="row mt-4">

        <!-- Summary -->

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">

                    Summary

                </div>

                <div class="card-body">

                    <table class="table">

                        <tbody>

                            <tr>

                                <td>Total Revenue</td>

                                <td class="text-end fw-bold text-success">
                                    $57,820
                                </td>

                            </tr>

                            <tr>

                                <td>Total Orders</td>

                                <td class="text-end fw-bold">
                                    1,248
                                </td>

                            </tr>

                            <tr>

                                <td>Total Customers</td>

                                <td class="text-end fw-bold">
                                    892
                                </td>

                            </tr>

                            <tr>

                                <td>Refunds</td>

                                <td class="text-end text-danger fw-bold">
                                    $1,245
                                </td>

                            </tr>

                            <tr>

                                <td>Net Profit</td>

                                <td class="text-end text-success fw-bold">
                                    $18,942
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- Sales By Location -->

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-success text-white">

                    Sales by Location

                </div>

                <div class="card-body">

                    <table class="table table-striped">

                        <thead>

                        <tr>

                            <th>Country</th>

                            <th>Revenue</th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>

                            <td>Bangladesh</td>

                            <td>$18,420</td>

                        </tr>

                        <tr>

                            <td>United States</td>

                            <td>$13,250</td>

                        </tr>

                        <tr>

                            <td>Canada</td>

                            <td>$8,620</td>

                        </tr>

                        <tr>

                            <td>United Kingdom</td>

                            <td>$7,150</td>

                        </tr>

                        <tr>

                            <td>Australia</td>

                            <td>$5,430</td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Chart JS -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const reportChart = document.getElementById('reportChart');

new Chart(reportChart, {

    type: 'line',

    data: {

        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],

        datasets: [{

            label: 'Monthly Sales',

            data: [12000,18000,16000,25000,22000,32000,30000],

            borderColor: '#22c55e',

            backgroundColor: 'rgba(34,197,94,.15)',

            fill: true,

            tension: .4

        }]

    }

});

const channelChart = document.getElementById('channelChart');

new Chart(channelChart, {

    type: 'doughnut',

    data: {

        labels: [

            'Direct',

            'Organic Search',

            'Social Media',

            'Referral'

        ],

        datasets: [{

            data: [

                42,

                30,

                18,

                10

            ],

            backgroundColor: [

                '#16a34a',

                '#3b82f6',

                '#f59e0b',

                '#a855f7'

            ]

        }]

    }

});

</script>

@endsection