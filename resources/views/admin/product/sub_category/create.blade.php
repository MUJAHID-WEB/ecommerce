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
            <form method="POST" class="insert_form" action="{{Route('sub_category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h5 class="card-title">Create Sub Category</h5>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Main Category</label>
                                <select name="main_category_id" id="main_category" class="form-control">
                                    <option>Select ...</option> 
                                    @foreach ($main_category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select>
                                {{-- <select name="main_category_id" id="main_category" class="form-control">
                                    
                                    @foreach ($main_category as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select> --}}
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
                                        <option value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select>

                                {{-- <select name="category_id" id="category" class="form-control">
                                    @foreach ($category as $key=>$item)
                                        <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
                                    @endforeach
                                </select> --}}
                                
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder=""> 
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
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <hr> 
                </div>
                <div class="form-actions m-t-40">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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
