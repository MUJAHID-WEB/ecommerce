  
   <h4 class="text-themecolor">{{$title}}</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                @php
                                    $path_info = $_SERVER['PATH_INFO'];
                                    $path_info = explode('/', $path_info);
                                @endphp

                                @foreach ($path_info as $item)

                                 <li class="breadcrumb-item"><a href="{{route('admin_index')}}">{{$item}}</a></li>
                                    
                                @endforeach

                            </ol>