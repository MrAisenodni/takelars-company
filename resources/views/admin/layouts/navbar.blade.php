
<div class="page-sidebar ">
    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
        <!-- USER INFO - START -->
        <div class="profile-info row">
            <div class="profile-image col-lg-4 col-md-4 col-4">
                <a href="ui-profile.html">
                    <img src="{{ asset('/admin/data/profile/profile-blog.jpg') }}" class="img-fluid rounded-circle">
                </a>
            </div>
            <div class="profile-details col-lg-8 col-md-8 col-8">
                <h3>
                    <a href="ui-profile.html">Mark Yurey</a>
                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>
                <p class="profile-title">Administrator</p>
            </div>
        </div>
        <!-- USER INFO - END -->
        <ul class='wraplist'>
            @if ($menus)
                @foreach ($menus as $menu)
                    @if ($menu->parent == 1)
                        <li class="@if ($menu->url == strpos($path, $menu->url)) open @endif"> 
                            <a href="javascript:;">
                                <i class="{{ $menu->icon }}"></i>
                                <span class="title">{{ $menu->title }}</span>
                                <span class="arrow @if ($menu->url == strpos($path, $menu->url)) open @endif"></span>
                            </a>
                            <ul class="sub-menu" >
                                @foreach ($menu->submenu as $submenu)
                                    <li>
                                        <a class="@if ($submenu->url == $path) active @endif" href="{{ $submenu->url }}" >
                                            <i class="{{ $submenu->icon }}"></i>
                                            <span class="title">{{ $submenu->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="@if ($menu->url == $path) open @endif"> 
                            <a href="{{ $menu->url }}">
                                <i class="{{ $menu->icon }}"></i>
                                <span class="title">{{ $menu->title }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif	
        </ul>
    </div>
    <!-- MAIN MENU - END -->
    <div class="project-info">
        <div class="block1">
            <div class="data">
                <span class='title'>New&nbsp;Users</span>
                <span class='total'>245</span>
            </div>
            <div class="graph">
                <span class="sidebar_orders">...</span>
            </div>
        </div>
        <div class="block2">
            <div class="data">
                <span class='title'>Subscribers</span>
                <span class='total'>990</span>
            </div>
            <div class="graph">
                <span class="sidebar_visitors">...</span>
            </div>
        </div>
    </div>
</div>