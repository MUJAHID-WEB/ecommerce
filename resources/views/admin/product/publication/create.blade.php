@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'Publication'])
        
        <a href="{{Route('publication.index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> ALL INFO</a>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" class="insert_form" action="{{Route('publication.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h5 class="card-title">Create Publication</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Publication Name</label>
                                <input type="text" name="name" class="form-control" placeholder=""> 
                                <span class="text-denger name"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea class="form-control summernote" name="description" rows="4"></textarea>
                                <span class="text-denger name"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!--/span-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Image</label>
                                <input type="file" name="image" class="form-control">
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

@push('ccss')
    
    <link rel="stylesheet" type="text/css" href="/contents/admin/assets/node_modules/summernote/dist/summernote-bs4.css">
@endpush

@push('cjs')
    
   <script src="/contents/admin/assets/node_modules/summernote/dist/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            
            // For summernote
            $('.summernote').summernote({
                height: 150, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
        
    </script>

    
    
@endpush
    
    
@endsection
