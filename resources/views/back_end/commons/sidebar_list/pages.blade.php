<li class="nav-item has-submenu">
    @php
        $show_pages=false;
        if(in_array($current_route_name,['code.pages']))$show_pages=true;
    @endphp
    <a class="nav-link submenu-toggle @if($show_pages) active @endif" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="@if($show_pages) true @else false @endif" aria-controls="submenu-1">
        <span class="nav-icon">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
            </svg>
        </span>
        <span class="nav-link-text">Pages</span>
        <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
        </span>
    </a>
    <div id="submenu-1" class="collapse submenu submenu-1 @if($show_pages) show @endif" data-bs-parent="#menu-accordion">
        <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link @if(in_array($current_route_name,['code.notifications'])) active @endif" href="notifications.html">Notifications</a></li>
            <li class="submenu-item"><a class="submenu-link @if(in_array($current_route_name,['code.account'])) active @endif" href="account.html">Account</a></li>
            <li class="submenu-item"><a class="submenu-link @if(in_array($current_route_name,['code.settings'])) active @endif" href="settings.html">Settings</a></li>
        </ul>
    </div>
</li>