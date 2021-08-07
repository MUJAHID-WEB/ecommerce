@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'VIEW'])
        
        <a href="{{Route('admin_user_create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>


<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="">View Information</h3>
                
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="white-box text-center"> <img src="/{{$user->image}}" class="img-responsive"> </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h4 class="box-title m-t-40">{{$user->name}}</h4>
                        <p>{{$user->description}}</p>
                        
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title m-t-40">General Info</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Username</td>
                                        <td> {{$user->username}} </td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td> {{$user->role_id}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Gender</td>
                                        <td> {{$user->gender}} </td>
                                    </tr>
                                    <tr>
                                        <td width="390">Email</td>
                                        <td> {{$user->email}} </td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td> {{$user->phone}} </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Address</td>
                                        <td> {{$user->address}} </td>
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
