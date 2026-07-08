@extends('layouts.backend')

@section('title', 'Analytics')

@section('content')

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Analytics Overview
            </h2>

            <p class="text-muted mb-0">
                Track your Ecobazar store performance and monitor business growth.
            </p>
        </div>

        <div class="d-flex gap-2">

            <select class="form-select" style="width:220px">
                <option>Jun 1 - Jul 7, 2026</option>
                <option>Last 30 Days</option>
                <option>Last 90 Days</option>
            </select>

            <button class="btn btn-success">
                Export Report
            </button>

        </div>

    </div>

    <!-- Statistic Cards -->

    <div class="row">

        <!-- Sales -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Total Sales
                            </small>

                            <h2 class="fw-bold mt-2">
                                $57,820
                            </h2>

                            <span class="text-success">
                                ↑ 23.6%
                            </span>

                            <small class="text-muted">
                                vs last month
                            </small>

                        </div>

                        <div>

                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">

                                <i class="bx bx-dollar fs-2"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Orders -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Orders
                            </small>

                            <h2 class="fw-bold mt-2">
                                1,248
                            </h2>

                            <span class="text-success">
                                ↑ 18.4%
                            </span>

                            <small class="text-muted">
                                vs last month
                            </small>

                        </div>

                        <div>

                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">

                                <i class="bx bx-cart fs-2"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Customers -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Customers
                            </small>

                            <h2 class="fw-bold mt-2">
                                892
                            </h2>

                            <span class="text-success">
                                ↑ 20.7%
                            </span>

                            <small class="text-muted">
                                vs last month
                            </small>

                        </div>

                        <div>

                            <div class="rounded-circle bg-info text-white d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">

                                <i class="bx bx-user fs-2"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Visitors -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Visitors
                            </small>

                            <h2 class="fw-bold mt-2">
                                24,569
                            </h2>

                            <span class="text-success">
                                ↑ 28.9%
                            </span>

                            <small class="text-muted">
                                vs last month
                            </small>

                        </div>

                        <div>

                            <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">

                                <i class="bx bx-show fs-2"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Sales Overview Section Starts Here -->

    <div class="row">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Sales Overview
                    </h5>

                </div>

                <div class="card-body">

                    <canvas id="salesChart" height="120"></canvas>

                </div>

            </div>

        </div>

        <div class="col-lg-8">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <h5 class="mb-0">
                Sales Overview
            </h5>

        </div>

        <div class="card-body">

            <canvas id="salesChart" height="120"></canvas>

        </div>

    </div>

</div>

<!-- Top Categories -->

<div class="col-lg-4">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <h5 class="mb-0">
                Top Categories
            </h5>

        </div>

        <div class="card-body">

            <div class="mb-3">

                <div class="d-flex justify-content-between">
                    <span>Vegetables</span>
                    <span>75%</span>
                </div>

                <div class="progress">

                    <div class="progress-bar bg-success"
                        style="width:75%">
                    </div>

                </div>

            </div>

            <div class="mb-3">

                <div class="d-flex justify-content-between">
                    <span>Fruits</span>
                    <span>60%</span>
                </div>

                <div class="progress">

                    <div class="progress-bar bg-primary"
                        style="width:60%">
                    </div>

                </div>

            </div>

            <div class="mb-3">

                <div class="d-flex justify-content-between">
                    <span>Dairy</span>
                    <span>45%</span>
                </div>

                <div class="progress">

                    <div class="progress-bar bg-warning"
                        style="width:45%">
                    </div>

                </div>

            </div>

            <div>

                <div class="d-flex justify-content-between">
                    <span>Bakery</span>
                    <span>35%</span>
                </div>

                <div class="progress">

                    <div class="progress-bar bg-danger"
                        style="width:35%">
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<!-- Recent Orders -->

<div class="row mt-4">

<div class="col-lg-8">

<div class="card shadow-sm border-0">

<div class="card-header bg-white">

<h5 class="mb-0">

Recent Orders

</h5>

</div>

<div class="table-responsive">

<table class="table table-hover align-middle mb-0">

<thead class="table-light">

<tr>

<th>#</th>

<th>Customer</th>

<th>Product</th>

<th>Total</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td>#1001</td>

<td>John Smith</td>

<td>Fresh Apple</td>

<td>$120</td>

<td><span class="badge bg-success">Completed</span></td>

</tr>

<tr>

<td>#1002</td>

<td>Emma Wilson</td>

<td>Organic Milk</td>

<td>$80</td>

<td><span class="badge bg-warning">Pending</span></td>

</tr>

<tr>

<td>#1003</td>

<td>David Lee</td>

<td>Tomato</td>

<td>$95</td>

<td><span class="badge bg-primary">Delivered</span></td>

</tr>

<tr>

<td>#1004</td>

<td>Sophia</td>

<td>Orange Juice</td>

<td>$150</td>

<td><span class="badge bg-danger">Cancelled</span></td>

</tr>

<tr>

<td>#1005</td>

<td>James</td>

<td>Banana</td>

<td>$65</td>

<td><span class="badge bg-success">Completed</span></td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

<!-- Top Products -->

<div class="col-lg-4">

<div class="card shadow-sm border-0">

<div class="card-header bg-white">

<h5 class="mb-0">

Top Selling Products

</h5>

</div>

<div class="card-body">

<ul class="list-group">

<li class="list-group-item d-flex justify-content-between">

Fresh Apple

<span class="badge bg-success">

250

</span>

</li>

<li class="list-group-item d-flex justify-content-between">

Organic Milk

<span class="badge bg-primary">

210

</span>

</li>

<li class="list-group-item d-flex justify-content-between">

Tomato

<span class="badge bg-warning">

180

</span>

</li>

<li class="list-group-item d-flex justify-content-between">

Orange

<span class="badge bg-danger">

160

</span>

</li>

<li class="list-group-item d-flex justify-content-between">

Potato

<span class="badge bg-info">

145

</span>

</li>

</ul>

</div>

</div>

</div>

</div>

<!-- Customer Growth -->

<div class="row mt-4">

    <div class="col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">

                <h5 class="mb-0">
                    Customer Growth
                </h5>

            </div>

            <div class="card-body">

                <div class="mb-3">

                    <div class="d-flex justify-content-between">

                        <span>New Customers</span>

                        <strong>78%</strong>

                    </div>

                    <div class="progress">

                        <div class="progress-bar bg-success"
                             style="width:78%">
                        </div>

                    </div>

                </div>

                <div class="mb-3">

                    <div class="d-flex justify-content-between">

                        <span>Returning Customers</span>

                        <strong>64%</strong>

                    </div>

                    <div class="progress">

                        <div class="progress-bar bg-primary"
                             style="width:64%">
                        </div>

                    </div>

                </div>

                <div class="mb-3">

                    <div class="d-flex justify-content-between">

                        <span>Active Users</span>

                        <strong>85%</strong>

                    </div>

                    <div class="progress">

                        <div class="progress-bar bg-warning"
                             style="width:85%">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">

                <h5 class="mb-0">
                    Traffic Sources
                </h5>

            </div>

            <div class="card-body">

                <table class="table">

                    <thead>

                        <tr>

                            <th>Source</th>

                            <th>Visitors</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Google Search</td>

                            <td>12,450</td>

                        </tr>

                        <tr>

                            <td>Facebook</td>

                            <td>8,200</td>

                        </tr>

                        <tr>

                            <td>Instagram</td>

                            <td>5,640</td>

                        </tr>

                        <tr>

                            <td>YouTube</td>

                            <td>2,310</td>

                        </tr>

                        <tr>

                            <td>Direct</td>

                            <td>1,980</td>

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

const ctx=document.getElementById('salesChart');

new Chart(ctx,{

type:'line',

data:{

labels:[
'January',
'February',
'March',
'April',
'May',
'June',
'July'
],

datasets:[{

label:'Sales',

data:[
1200,
1800,
1500,
2500,
2200,
3000,
3500
],

borderColor:'#16a34a',

backgroundColor:'rgba(22,163,74,.15)',

fill:true,

tension:.4,

borderWidth:3

}]

},

options:{

responsive:true,

plugins:{

legend:{

display:true

}

},

scales:{

y:{

beginAtZero:true

}

}

}

});

</script>

@endsection