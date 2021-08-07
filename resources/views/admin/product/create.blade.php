@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Product Management'])
        
        <a href="{{Route('product.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> ALL Product</a>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" class="insert_form product_insert_form" action="{{Route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h5 class="card-title">Add Product</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label card-title">Name</label>
                                <input type="text" name="name" class="form-control"> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label card-title">Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                    <option>Select ...</option> 
                                    @foreach ($brands as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach    
                                </select> 

                                {{-- @include('admin.product.components.select',[
                                    'name'=>'brand',
                                    'attributes'=>'multiple',
                                    'class' =>'select2 select2-multiple',
                                    'collection' => $brands,
                                    'action' => route('brand.store'),
                                    'fields' => [
                                        ['name'=>'name', 'type'=>'text'],
                                        ['name'=>'icon', 'type'=>'file'],
                                    ]
                                ]) --}}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label card-title">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option>Select ...</option> 
                                    {{-- <option value="draft">Draft</option> 
                                    <option value="active">Active</option>  --}}
                                    @foreach ($status as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->serial}}">{{$item->name}}</option>  
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label card-title">Main Category</label>
                                <select name="main_category_id" id="main_category" class="form-control">
                                    <option>Select ...</option> 
                                    @foreach ($main_categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select> 
                                {{-- <select name="main_category_id" id="main_category" class="form-control">
                                    <option>Select ...</option> 
                                                                      
                                    @foreach ($main_categories as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select>  --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label card-title">Category</label>
                                {{-- @include('admin.product.components.select',[
                                    'name'=>'category_id',
                                    'attributes'=>'multiple',
                                    'class' =>'select2 select2-multiple',
                                    'collection' => $categories,
                                    'action' => route('category.store'),
                                    'fields' => [
                                        ['name'=>'main_category_id', 'type'=>'select','option_route'=>route('get_main_category_json')],
                                        ['name'=>'name', 'type'=>'text'],
                                        ['name'=>'icon', 'type'=>'file'],
                                        
                                    ]
                                ]) --}}
                                
                                <select name="category_id" id="category" multiple class="form-control select2 select2-multiple">
                                    <option>Select ...</option> 
                                    @foreach ($categories as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label card-title">Sub Category</label>
                                <select name="sub_category_id" id="sub_category" multiple="multiple" class="form-control select2 select2-multiple">
                                    
                                    @foreach ($sub_categories as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select> 
                                {{-- @include('admin.product.components.select',[
                                    'name'=>'sub_category_id',
                                    'attributes'=>'multiple',
                                    'class' =>'select2 select2-multiple',
                                    'collection' => $sub_categories,
                                    'action' => route('sub_category.store'),
                                    'fields' => [
                                        ['name'=>'main_category_id', 'type'=>'select','option_route'=>route('get_main_category_json')],
                                        ['name'=>'category_id', 'type'=>'select','option_route'=>route('get_category_json')],
                                        ['name'=>'name', 'type'=>'text'],
                                        ['name'=>'icon', 'type'=>'file'],
                                        
                                    ]
                                ]) --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <h5 class="card-title m-t-40">Product Description</h5>
                                <textarea class="form-control" name="description" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <h5 class="card-title m-t-40">Product Features</h5>
                                <textarea class="form-control" name="features" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label card-title">Thumb Image</label>
                                <div>
                                    <img src="" height="50" width="50">
                                </div>
                                <input type="file" name="thumb_image" class="form-control">
                                <span class="text-denger thumb_image"></span> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label card-title">Related Image</label>
                                <div>
                                    <img src="" height="50" width="50">
                                </div>
                                
                                <input type="file" multiple name="related_images" class="form-control">
                                <span class="text-denger icon"></span> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title m-t-40">GENERAL INFO</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered td-padding">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Color</h6>
                                            </td>
                                            <td>
                                                <select name="color_id" id="" class="form-control select2 select2-multiple" multiple="multiple">
                                                    
                                                    @foreach ($colors as $key=>$item)
                                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                                    @endforeach
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Size</h6>
                                            </td>
                                            <td>
                                                <select name="size_id" id="" class="form-control select2 select2-multiple" multiple="multiple">
                                                    @foreach ($sizes as $key=>$item)
                                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Unit</h6>
                                            </td>
                                            <td>
                                                <select name="unit_id" id="" class="form-control select2 select2-multiple" multiple="multiple">
                                                    
                                                    @foreach ($units as $key=>$item)
                                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Writer</h6>
                                            </td>
                                            <td>
                                                <select name="writer_id" id="" class="form-control select2 select2-multiple" multiple="multiple">
                                                                                      
                                                    @foreach ($writers as $key=>$item)
                                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Publication</h6>
                                            </td>
                                            <td>
                                                <select name="publication_id" id="" class="form-control select2 select2-multiple" multiple="multiple">
                                                   
                                                    @foreach ($publications as $key=>$item)
                                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Price</h6>
                                            </td>
                                            <td>
                                                <input type="number" step="0.01" class="form-control" name="price">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Tax</h6>
                                            </td>
                                            <td>
                                                <input type="number" step="0.01" class="form-control" name="tax">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Discount Price</h6>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="discount_price">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Expiration Date</h6>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="expiration_date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Stock</h6>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="stock">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Alert Quantity</h6>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="alert_qty">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="card-title m-t-10">Free Delivery</h6>
                                            </td>
                                            <td>
                                                <select name="free_delivery" id="" class="form-control">
                                                <option>Select..</option>
                                                <option>On</option>
                                                <option>Off</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr> </div>
                <div class="form-actions m-t-40">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('ccss')
    
    <link href="/contents/admin/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/contents/admin/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/contents/admin/assets/node_modules/summernote/dist/summernote-bs4.css">
@endpush

@push('cjs')
    
    <script src="/contents/admin/assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/contents/admin/assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script src="/contents/admin/assets/node_modules/summernote/dist/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // For select 2
            $(".select2").select2();
            // For multiselect
            $('#pre-selected-options').multiSelect();
            
            // For summernote
            $('.summernote').summernote({
                height: 150, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            

        });
        
    </script>

    {{-- <script>
        $('#main_category').on('change', function(){
            let value = $(this).val();
            $.get("/admin/product/get-all-category-selected-by-main-category/"+value,(res)=>{
                $('#category').html(res);
                                
            })
            
        })
        
    </script> --}}
    
@endpush
    
@endsection
