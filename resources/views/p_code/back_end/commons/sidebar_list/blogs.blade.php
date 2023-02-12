<li class="nav-item has-submenu">
    @php
        $show_blogs=false;
        if(in_array($current_route_name,['code.blog.list','code.blog.add','code.blog.edit']))$show_blogs=true;
    @endphp
    <a class="nav-link submenu-toggle @if($show_blogs) active @endif" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-blogs" aria-expanded="@if($show_blogs) true @else false @endif" aria-controls="submenu-blogs">
        <span class="nav-icon">
            <i class="fa-solid fa-blog fa-lg"></i>
            {{-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
            </svg> --}}
        </span>
        <span class="nav-link-text">Blogs</span>
        <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
        </span>
    </a>
    <div id="submenu-blogs" class="collapse submenu submenu-blogs @if($show_blogs) show @endif" data-bs-parent="#menu-accordion">
        <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link @if(in_array($current_route_name,['code.blog.list'])) active @endif" href="{{wire_route('code.blog.list')}}">Blog List</a></li>
            <li class="submenu-item"><a class="submenu-link @if(in_array($current_route_name,['code.blog.add'])) active @endif" href="{{wire_route('code.blog.add')}}">Create New</a></li>
        </ul>
    </div>
</li>