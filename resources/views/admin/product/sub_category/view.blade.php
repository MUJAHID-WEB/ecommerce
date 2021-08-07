@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Sub Category'])
        
        <a href="{{Route('sub_category.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Sub Category</a>
        </div>
    </div>
</div>


<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="">Sub Category Information</h3>
                
                <div class="row">
                                        
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Sub Category Name</td>
                                        <td> {{$sub_category->name}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Category Name</td>
                                        <td> {{$sub_category->category_id }} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Main Category Name</td>
                                        <td> {{$sub_category->main_category_id }} </td>
                                    </tr>
                                    <tr>
                                        <td>Sub Category Icon</td>
                                        <td> 
                                            <img src="/{{$sub_category->icon}}" class="img-responsive" height="50" width="50"> 
                                        </td>
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
