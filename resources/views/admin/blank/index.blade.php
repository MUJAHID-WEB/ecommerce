@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'ALL'])
        
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
        </div>
    </div>
</div>



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
                                <td>
                                    
                                    <a href="javascript:void(0)" class="btn waves-effect waves-light btn-rounded btn-xs btn-info" data-toggle="tooltip" title="">View</a> 

                                    <a href="javascript:void(0)" class="btn waves-effect waves-light btn-rounded btn-xs btn-warning" data-toggle="tooltip" title="">Edit</a> 

                                    <a href="javascript:void(0)" class="btn waves-effect waves-light btn-rounded btn-xs btn-danger" data-toggle="tooltip" title="">Delete</a> 
                                
                                </td>
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
                                <td>
                                    <a href="javascript:void(0)" class="btn waves-effect waves-light btn-rounded btn-xs btn-info" data-toggle="tooltip" title="">View</a> 

                                    <a href="javascript:void(0)" class="btn waves-effect waves-light btn-rounded btn-xs btn-warning" data-toggle="tooltip" title="">Edit</a> 

                                    <a href="javascript:void(0)" class="btn waves-effect waves-light btn-rounded btn-xs btn-danger" data-toggle="tooltip" title="">Delete</a> 
                                
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
