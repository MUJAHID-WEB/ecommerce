{{-- 
<span class="input-group-append">
    <select name="{{$name}}{{$attributes?'[]' : ''}}" id="select{{$name}}" class="form-control {{$class}}" multiple>
        <option>Select ...</option> 
        @foreach ($collection as $key=>$item)
            <option {{$key==0?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>  
        @endforeach
    </select>
    <button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#{{$name}}Modal">+</button>
</span>
<span class="text-denger {{$name}}"></span>


<div id="{{$name}}Modal" class="modal" tabindex="-1" aria-labelledby="{{$name}}ModalLabel" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="{{$name}}Modal" id="{{$name}}ModalLabel">{{ str_replace('_','',str_replace('_id','',$name)) }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <forms action="{{$action}}" class="component_form" data-target_select="#select{{$name}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                   
                    @foreach ($fields as $item)
                        @php
                            $item = (object) $item;
                        @endphp
                        <div class="form-group">
                            <label for="" class="control-label">{{$item->name}}</label>
                            <div class="">
                                @if ($item->type == 'text' || $item->type == 'file' || $item->type == 'email' )
                                <input type="{{$item->type}}" class="form-control" name="{{$item->name}}" value="">   
                                @endif

                                @if ($item->type == 'textarea' )
                                <textarea name="{{$item->name}}" class="form-control" rows="4"></textarea>
                                @endif

                                @if ($item->type == 'select')
                                <span class="input-group-append">
                                    <select name="{{$name}}" id="select{{$name}}" class="form-control {{$class}}" multiple>
                                        <option value="">Press Reload Btn</option> 
                                        
                                    </select>
                                    <button type="button" class="btn btn-secondary btn-outline bootstrap-touchspin-up load_options"  data-url="{{$item->option_route}}">@</button>
                                </span>
                                @endif

                            <span class="text-denger {{$item->name}}"></span>
                            </div>
                        </div>
                        
                    @endforeach
                          
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="component_form_submit btn btn-danger waves-effect waves-light">Save</button>
                </div>
            </forms>
            
        </div>
    </div>
</div> --}}