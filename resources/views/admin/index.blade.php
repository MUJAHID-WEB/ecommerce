@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'DASHBOARD'])
        
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
        </div>
    </div>
</div>

<div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ORDER RECEIVED</h4>
                    <div class="text-right"> <span class="text-muted">Todays Order</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-up text-success"></i></sup> 12,000</h1>
                    </div>
                    <span class="text-success">20%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">TAX DEDUCATION</h4>
                    <div class="text-right"> <span class="text-muted">Monthly Deduction</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-up text-primary"></i></sup> $5,000</h1>
                    </div>
                    <span class="text-primary">30%</span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">REVENUE STATS</h4>
                    <div class="text-right"> <span class="text-muted">Todays Income</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-down text-info"></i></sup> $8,000</h1>
                    </div>
                    <span class="text-info">60%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">YEARLY SALES</h4>
                    <div class="text-right"> <span class="text-muted">Yearly  Income</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-up text-inverse"></i></sup> $12,000</h1>
                    </div>
                    <span class="text-inverse">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-inverse" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- charts -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex m-b-40 align-items-center no-block">
                        <h5 class="card-title ">PRODUCT SALES</h5>
                        <div class="ml-auto">
                            <ul class="list-inline font-12">
                                <li><i class="fa fa-circle text-cyan"></i> Iphone</li>
                                <li><i class="fa fa-circle text-primary"></i> IMac</li>
                            </ul>
                        </div>
                    </div>
                    <div id="morris-area-chart2" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4 col-md-12">
            <div class="row">
                <!-- Column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ORDER STATS</h5>
                            <div id="morris-donut-chart" class="ecomm-donute"></div>
                            <ul class="list-inline m-t-30 text-center mb-1 d-flex">
                                <li class="list-inline-item p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> Order</h5>
                                    <h4 class="m-b-0">8500</h4>
                                </li>
                                <li class="list-inline-item p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i> Pending</h5>
                                    <h4 class="m-b-0">3630</h4>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i> Delivered</h5>
                                    <h4 class="m-b-0">4870</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- charts -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Product Overview</h5>
                    <div class="table-responsive m-t-30">
                        <table class="table product-overview">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Order ID</th>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Steave Jobs</td>
                                    <td>#85457898</td>
                                    <td>
                                        <img src="{{asset('contents/admin')}}/assets/images/gallery/chair.jpg" alt="iMac" width="80">
                                    </td>
                                    <td>Rounded Chair</td>
                                    <td>20</td>
                                    <td>10-7-2017</td>
                                    <td>
                                        <span class="label label-success">Paid</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Varun Dhavan</td>
                                    <td>#95457898</td>
                                    <td>
                                        <img src="{{asset('contents/admin')}}/assets/images/gallery/chair2.jpg" alt="iPhone" width="80">
                                    </td>
                                    <td>Wooden Chair</td>
                                    <td>25</td>
                                    <td>09-7-2017</td>
                                    <td>
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Ritesh Desh</td>
                                    <td>#68457898</td>
                                    <td>
                                        <img src="{{asset('contents/admin')}}/assets/images/gallery/chair3.jpg" alt="apple_watch" width="80">
                                    </td>
                                    <td>Gray Chair</td>
                                    <td>12</td>
                                    <td>08-7-2017</td>
                                    <td>
                                        <span class="label label-success">Paid</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Hrithik</td>
                                    <td>#45457898</td>
                                    <td>
                                        <img src="{{asset('contents/admin')}}/assets/images/gallery/chair4.jpg" alt="mac_mouse" width="80">
                                    </td>
                                    <td>Pure Wooden chair</td>
                                    <td>18</td>
                                    <td>02-7-2017</td>
                                    <td>
                                        <span class="label label-danger">Failed</span>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
