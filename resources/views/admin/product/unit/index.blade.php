@extends('admin.layouts.admin')

@section('content')



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Unit'])
        
            <a href="{{Route('unit.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ALL Unit Info</h5>
                <div class="table-responsive m-t-30">
                    <table class="table product-overview">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Unit Name</th>
                                {{-- <th>Icon</th> --}}
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $key=>$item)
                                
                            

                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                
                                {{-- <td>
                                    <img src="/{{$item->logo}}" alt="logo" width="50">
                                </td> --}}
                                <td>{{$item->created_at->format('d M S h:i:s a')}}</td>
                                <td>
                                    
                                    <a href="{{route('unit.show',$item->id)}}" class="btn waves-effect waves-light btn-rounded btn-xs btn-info" data-toggle="tooltip" title="">View</a> 

                                    <a href="{{route('unit.edit',$item->id)}}" class="btn waves-effect waves-light btn-rounded btn-xs btn-warning" data-toggle="tooltip" title="">Edit</a> 

                                    <a type="button" href="{{route('unit.destroy',['unit'=>$item->id])}}"                                     
                                    class="delete_btn btn waves-effect waves-light btn-rounded btn-xs btn-danger" data-toggle="tooltip" title="">Delete</a>
 
                                
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

<!-- Modal -->
<div id="updateModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="updateModal">UPDATE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <form action="{{route('admin_user_role_update')}}" method="POST" class="update_role_form" name="update_role_form">
                @csrf
                <div class="modal-body">
                        

                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="" class="control-label">Brand Name</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Logo</label>
                            {{-- <img src="/{{$brand->logo}}" class="img-responsive" height="50" width="50"> --}}
                            <input type="file" class="form-control" name="logo" value="">
                        </div>   

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('cjs')
    <script>
        $('.role_update_btn').on('click',function(){
            let url = $(this).data('url');
            let name = $(this).data('name');
            let serial = $(this).data('serial');
            let id = $(this).data('id');

            $('.update_role_form').attr('url',url);
            $('.update_role_form input[name=name]').val (name);
            $('.update_role_form input[name=serial]').val (serial);
            $('.update_role_form input[name=id]').val (id);
        })
    </script>
    
@endpush
    
@endsection
