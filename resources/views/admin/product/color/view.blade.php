@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Color'])
        
        <a href="{{Route('color.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Color</a>
        </div>
    </div>
</div>


<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="">Color Information</h3>
                
                <div class="row">
                    
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Color Name</td>
                                        <td> {{$color->name}} </td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Brand Logo</td>
                                        <td> 
                                            <img src="/{{$brand->logo}}" class="img-responsive" height="50" width="50"> 
                                        </td>
                                    </tr> --}}
                                    
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
