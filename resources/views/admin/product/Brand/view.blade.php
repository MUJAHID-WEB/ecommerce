@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'VIEW'])
        
        <a href="{{Route('brand.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Brand</a>
        </div>
    </div>
</div>


<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="">Brand Information</h3>
                
                <div class="row">
                    {{-- <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="white-box text-center"> <img src="/{{$brand->logo}}" class="img-responsive"> </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h4 class="box-title m-t-40">{{$brand->name}}</h4>
                        
                        
                    </div> --}}
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Brand Name</td>
                                        <td> {{$brand->name}} </td>
                                    </tr>
                                    <tr>
                                        <td>Brand Logo</td>
                                        <td> 
                                            <img src="/{{$brand->logo}}" class="img-responsive" height="50" width="50"> 
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
