@extends('admin.layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        
        @include('admin.includes.breadcrumb', ['title'=>'User Management'])
        
        <a href="{{Route('admin_user_index')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> ALL INFO</a>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{Route('admin_user_store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h5 class="card-title">Create User</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name"> </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="Email" name="email" class="form-control" placeholder="Enter Your Email"> </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Role</label>
                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Category 1">Super Admin</option>
                                    <option value="Category 2">Admin</option>
                                    <option value="Category 3">Editor</option>
                                    <option value="Category 4">Subscriber</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Female</label>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Discount</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-cut"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Discount" aria-label="Discount" aria-describedby="basic-addon2">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div> --}}
                    <h5 class="card-title m-t-40">User Description</h5>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <textarea class="form-control" name="description" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" class="form-control"> </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keyword</label>
                                <input type="text" class="form-control"> </div>
                        </div> --}}
                        <!--/span-->
                        <div class="col-md-3">
                            {{-- <h5 class="card-title m-t-20">Upload Image</h5> --}}
                            <div class="product-img"> 
                                {{-- <img src="../assets/images/gallery/chair.jpg">
                                <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                <br> --}}
                                <div class="fileupload btn btn-info waves-effect waves-light"><span><i    class="ion-upload m-r-5"></i>Upload Image</span>
                                    <input type="file" name="image" class="upload"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title m-t-40">GENERAL INFO</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered td-padding">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Username
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="username" placeholder="Mujahid 007">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="phone" placeholder="880 1849 100 112">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Address
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="address" placeholder="114/1 Shantibag, Dhaka-1217">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Passward
                                            </td>
                                            <td>
                                                <input type="password" class="form-control" name="password" placeholder="**********">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Confirm Passward
                                            </td>
                                            <td>
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="**********">
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr> </div>
                <div class="form-actions m-t-40">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
