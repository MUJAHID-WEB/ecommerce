@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Sub Category'])
        
        <a href="{{Route('sub_category.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> ALL INFO</a>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" class="update_form" action="{{Route('sub_category.update', $sub_category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-body">
                    <h5 class="card-title">Edit Sub Category</h5>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Main Category</label>
                                <select name="main_category_id" id="main_category" class="form-control">
                                    <option>Select ...</option> 
                                    @foreach ($main_category as $item)
                                        <option {{$sub_category->main_category_id==$item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option>Select ...</option> 
                                    @foreach ($category as $item)
                                        <option {{$sub_category->category_id==$item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" value="{{$sub_category->name}}" class="form-control"> 
                                <span class="text-denger name"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!--/span-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Icon</label>
                                <input type="file" name="icon" class="form-control"> 
                                <span class="text-denger icon"></span>
                                <img src="/{{$sub_category->icon}}" height="50" width="50" alt="Logo">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <hr> 
                </div>
                <div class="form-actions m-t-40">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                    <button type="button" class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('cjs')
    <script>
        $('#main_category').on('change', function(){
            let value = $(this).val();
            $.get("/admin/product/get-all-category-selected-by-main-category/"+value,(res)=>{
                $('#category').html(res);
            })
        })
    </script>
    
@endpush
    
@endsection
