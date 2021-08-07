@extends('admin.layouts.admin')

@section('content')



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'USER MANAGEMENT'])
        
            <a href="{{Route('admin_user_create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ALL USER</h5>
                <div class="table-responsive m-t-30">
                    <table class="table product-overview">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>User Name</th>
                                
                                <th>Email</th>
                                
                                <th>Role Name</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                
                            

                            <tr>
                                <td>
                                    <img src="/{{$item->image}}" alt="iMac" width="50">
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                
                                
                                <td>{{$item->role_info ? $item->role_info->name : $item->role_id }}</td>
                                
                                <td>{{$item->created_at->format('d M S h:i:s a')}}</td>
                                <td>
                                    
                                    <a href="{{route('admin_user_view',$item->id)}}" class="btn waves-effect waves-light btn-rounded btn-xs btn-info" data-toggle="tooltip" title="">View</a> 

                                    <a href="{{route('admin_user_edit',$item->id)}}" class="btn waves-effect waves-light btn-rounded btn-xs btn-warning" data-toggle="tooltip" title="">Edit</a> 

                                    <a type="button" href="#" 

                                    onclick="return(confirm('sure!!!') &&
                                    $.post('{{route('admin_user_delete',['id'=>$item->id])}}',
                                    (res)=>{console.log(res,$(this).parents('tr').remove())}))"
                                    
                                    class="btn waves-effect waves-light btn-rounded btn-xs btn-danger" data-toggle="tooltip" title="">Delete</a> 
                                
                                </td>
                            </tr>

                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
