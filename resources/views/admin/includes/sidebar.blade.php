<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="/{{Auth::user()->image}}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); confirm('SURE!!!') &&
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Logout
                        </a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                
                <li class="nav-small-cap">--- PERSONAL</li>
                

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i>User </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin_user_index')}}">Index </a></li>
                        <li><a href="{{route('admin_user_create')}}">Add New </a></li>
                        <li><a href="{{route('admin_user_role_index')}}">User Role</a></li>
                        
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i>Product Management </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('product.create')}}">Add Product </a></li>
                        <li><a href="{{route('product.index')}}">All Product </a></li>
                        <li><a href="{{route('brand.index')}}">Brand </a></li>
                        <li><a href="{{route('main_category.index')}}">Main Category </a></li>
                        <li><a href="{{route('category.index')}}">Category </a></li>
                        <li><a href="{{route('sub_category.index')}}">Sub Category </a></li>
                        <li><a href="{{route('color.index')}}">Color </a></li>
                        <li><a href="{{route('size.index')}}">Size </a></li>
                        <li><a href="{{route('unit.index')}}">Unit </a></li>
                        <li><a href="{{route('writer.index')}}">Writer </a></li>
                        <li><a href="{{route('publication.index')}}">Publication </a></li>
                        <li><a href="{{route('status.index')}}">Status </a></li>
                    </ul>
                </li>

                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i>Brand </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('brand.index')}}">Index </a></li>
                        <li><a href="{{route('brand.create')}}">Add New </a></li>
                    </ul>
                </li> --}}

                

                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i>Blank Pages </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin_blade_index')}}">Index </a></li>
                        <li><a href="{{route('admin_blade_create')}}">Create</a></li>
                        <li><a href="{{route('admin_blade_view')}}">View</a></li>
                    </ul>
                </li> --}}

          
                <li class="nav-small-cap">--- SUPPORT</li>
                <li> <a class="waves-effect waves-dark" href="{{route('website_index')}}" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">Website</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); 
                    confirm('SURE!!!') &&
                    document.getElementById('logout-form').submit();" aria-expanded="false">
                    <i class="far fa-circle text-success"></i>
                    <span class="hide-menu">Log Out</span>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>