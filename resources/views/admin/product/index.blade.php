@extends('admin.layouts.admin')

@section('content')



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'PRODUCT MANAGEMENT'])
        
            <a href="{{Route('product.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ALL PRODUCT</h5>
                <div class="table-responsive m-t-30">
                    <table class="table product-overview">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Total Sales</th>
                                <th>Stock</th>
                                <th>Status</th>
                                
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>
                                    <img src="/{{$item->thumb_image}}" alt="" width="50">
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{Helper::discount_price($item->price,$item->discount_price)}}</td>
                                <td></td>
                                <td>{{$item->stock}}</td>
                                <td>{{$item->status}}</td>
                                {{-- <td>{{$item->status? $item->status->name:$item->serial}}</td> --}}
                                {{-- $item->role_info ? $item->role_info->name : $item->role_id --}}
                                <td>
                                    <a href="{{route('product.show',$item->id)}}" class="btn waves-effect waves-light btn-rounded btn-xs btn-info" data-toggle="tooltip" title="">View</a> 

                                    <a href="{{route('product.edit',$item->id)}}" class="btn waves-effect waves-light btn-rounded btn-xs btn-warning" data-toggle="tooltip" title="">Edit</a> 

                                    <a type="button" href="{{route('product.destroy',['product'=>$item->id])}}"                                     
                                        class="delete_btn btn waves-effect waves-light btn-rounded btn-xs btn-danger" data-toggle="tooltip" title="">Delete</a>
                                
                                </td>
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    {{$collection->links()}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-12">
            {{$collection->links()}}
        </div>
    </div> --}}
</div>
    
@endsection
