@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'VIEW'])
        
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
        </div>
    </div>
</div>


<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="">Rounded Chair</h3>
                <h6 class="card-subtitle">globe type chair for rest</h6>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="white-box text-center"> <img src="../assets/images/gallery/chair.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h4 class="box-title m-t-40">Product description</h4>
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
                        <h2 class="m-t-40">$153 <small class="text-success">(36% off)</small></h2>
                        <button class="btn btn-dark btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="ti-shopping-cart"></i> </button>
                        <button class="btn btn-primary btn-rounded"> Buy Now </button>
                        <h3 class="box-title m-t-40">Key Highlights</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i> Sturdy structure</li>
                            <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                            <li><i class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title m-t-40">General Info</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Brand</td>
                                        <td> Stellar </td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Condition</td>
                                        <td> Knock Down </td>
                                    </tr>
                                    <tr>
                                        <td>Seat Lock Included</td>
                                        <td> Yes </td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td> Office Chair </td>
                                    </tr>
                                    <tr>
                                        <td>Style</td>
                                        <td> Contemporary &amp; Modern </td>
                                    </tr>
                                    <tr>
                                        <td>Wheels Included</td>
                                        <td> Yes </td>
                                    </tr>
                                    <tr>
                                        <td>Upholstery Included</td>
                                        <td> Yes </td>
                                    </tr>
                                    <tr>
                                        <td>Upholstery Type</td>
                                        <td> Cushion </td>
                                    </tr>
                                    <tr>
                                        <td>Head Support</td>
                                        <td> No </td>
                                    </tr>
                                    <tr>
                                        <td>Suitable For</td>
                                        <td> Study &amp; Home Office </td>
                                    </tr>
                                    <tr>
                                        <td>Adjustable Height</td>
                                        <td> Yes </td>
                                    </tr>
                                    <tr>
                                        <td>Model Number</td>
                                        <td> F01020701-00HT744A06 </td>
                                    </tr>
                                    <tr>
                                        <td>Armrest Included</td>
                                        <td> Yes </td>
                                    </tr>
                                    <tr>
                                        <td>Care Instructions</td>
                                        <td> Handle With Care, Keep In Dry Place, Do Not Apply Any Chemical For Cleaning. </td>
                                    </tr>
                                    <tr>
                                        <td>Finish Type</td>
                                        <td> Matte </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
    
@endsection
