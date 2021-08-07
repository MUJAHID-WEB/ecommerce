@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Product Details'])
        
        <a href="{{Route('product.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Product</a>
        </div>
    </div>
</div>


<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="">{{$product->name}}</h3>
                
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="white-box text-center"> 
                            <img src="/{{$product->thumb_image}}" class="img-responsive"> 
                        </div>
                        <div> 
                            <a href="{{Route('product.edit', $product->id)}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Edit Product</a>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h4 class="box-title">Product Description</h4>
                        <p>{{$product->description}}</p>
                        <h2 class="m-t-40">{{$product->price}}<small class="text-success">({{$product->discount_price}}% off)</small></h2>
                        <button class="btn btn-dark btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="ti-shopping-cart"></i> </button>
                        <button class="btn btn-primary btn-rounded"> Buy Now </button>
                        <h3 class="box-title m-t-40">Product Features</h3>
                        <p>{{$product->features}}</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title m-t-40">General Info</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Brand</td>
                                        <td> {{$product->brand_info?$product->brand_info->name:''}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Code</td>
                                        <td> {{$product->code}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Sku</td>
                                        <td> {{$product->sku}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Main Category</td>
                                        <td>
                                            @foreach ($product->main_category as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Category</td>
                                        <td>
                                            @foreach ($product->category as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td width="390">Sub Category</td>
                                        <td>
                                            @foreach ($product->sub_category as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Vendor</td>
                                        <td>
                                            @foreach ($product->vendor as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="390">Color</td>
                                        <td>
                                            @foreach ($product->color as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Size</td>
                                        <td>
                                            <ul>
                                                @foreach ($product->size as $item)
                                                    <li>{{$item->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Unit</td>
                                        <td>
                                            @foreach ($product->unit as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Writer</td>
                                        <td>
                                            @foreach ($product->writer as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Publication</td>
                                        <td>
                                            @foreach ($product->publication as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Tax</td>
                                        <td> {{$product->tax}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Discount Price</td>
                                        <td> {{Helper::discount_price($product->price,$product->discount_price)}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Expiration Date</td>
                                        <td> {{$product->expiration_date}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Stock</td>
                                        <td> {{$product->stock}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Minimum Amount</td>
                                        <td> {{$product->minimum_amount}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Alert Quantity</td>
                                        <td> {{$product->alert_qty}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Free Delivery</td>
                                        <td> {{$product->free_delivery}} </td>
                                    </tr> 
                                    <tr>
                                        <td width="390">Total View</td>
                                        <td> {{$product->total_view}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Status</td>
                                        <td> {{$product->status}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Creator</td>
                                        <td> {{$product->creator_info?$product->creator_info->name:''}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Created at</td>
                                        <td> {{$product->created_at->format('d F Y h:i:s a')}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Updated at</td>
                                        <td> {{$product->updated_at->format('d F Y h:i:s a')}} </td>
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
