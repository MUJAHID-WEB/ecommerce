@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'User Management'])
        
        <a href="{{Route('brand.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> ALL INFO</a>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" class="insert_form" action="{{Route('brand.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h5 class="card-title">Create Brand</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name"> 
                                <span class="text-denger name"></span>
                            </div>
                                
                        </div>
                    </div>

                    <div class="row">
                        <!--/span-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Logo</label>
                                <input type="file" name="logo" class="form-control"> 
                                <span class="text-denger logo"></span>
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
    
@endsection
