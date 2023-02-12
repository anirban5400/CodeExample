<div id="app-sidepanel" class="app-sidepanel">
    @php $currentRouteName=\Route::currentRouteName(); @endphp
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{asset('img/logo.svg')}}" alt="logo"><span class="logo-text">CodeExample</span></a>
        </div>
        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                @include('p_code.back_end.commons.sidebar_list.home',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.blogs',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.document',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.order',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.pages',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.external',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.charts',['current_route_name'=>$currentRouteName])
                @include('p_code.back_end.commons.sidebar_list.help',['current_route_name'=>$currentRouteName])
            </ul>
        </nav>
        <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
                <ul class="app-menu footer-menu list-unstyled">
                    @include('p_code.back_end.commons.sidebar_list.settings',['current_route_name'=>$currentRouteName])
                    @include('p_code.back_end.commons.sidebar_list.download',['current_route_name'=>$currentRouteName])
                    @include('p_code.back_end.commons.sidebar_list.license',['current_route_name'=>$currentRouteName])
                </ul>
            </nav>
        </div>
    </div>
</div>