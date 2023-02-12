<div class="col-auto d-flex">
    <a href="javascript:void(0);" onclick="window.history.back()" class="btn" style="padding: 0px 10px;display: flex;justify-content: center;text-align: center;align-items: center;font-size: 16px;background-color: #666666;border: 0px;border-radius: unset;color: white;"> <i class="fa-solid fa-arrow-left fa-lg"></i></a>
     <nav>
        @php $current_route_name=getCurrentRouteName(); @endphp
        @if(!empty($current_route_name))
            @php $menu_header_list_array=codeExampleMenuList($current_route_name); @endphp
            <ol class="custom-breadcrumb">
                @php $menu_list_count=0; @endphp
                @if(isset($menu_header_list_array) && is_array($menu_header_list_array) && count($menu_header_list_array)>0)
                @foreach($menu_header_list_array as $list)
                @php $menu_list_count++; @endphp
                    @if(count($menu_header_list_array)==$menu_list_count)
                        <li><a href="{{wire_route($list['route_name'])}}">{!!$list['route_icon']??''!!} <span>{{$list['menu_name']??''}}</span></a></li>
                    @else
                        <li><a href="{{wire_route($list['route_name'])}}">{!!$list['route_icon']??''!!} <span>{{$list['menu_name']??''}}</span></a></li>
                    @endif
                @endforeach
                @endif
            </ol>
        @endif
    </nav>
</div>