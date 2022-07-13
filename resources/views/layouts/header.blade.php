<header id="header" class="main-header">
    <nav class="main-nav nav-expanded">
      <div class="container">
        <div class="left-nav">
          <div class="nav-brand">
            <a href="/">
              <img src="{{ asset($provider->company_logo_text) }}" alt="navbar-logo" class="logo" />
            </a>
          </div>
          <input id="main-menu-state" type="checkbox" />
          <label class="main-menu-btn" for="main-menu-state">
            <span class="main-menu-btn-icon"></span> Toggle main menu
            visibility
          </label>
          <ul id="main-menu">
            @if ($menus)
                @foreach ($menus as $menu)
                  <li class="menu-item">
                    <a class="nav-link" href="{{ $menu->url }}">{{ $menu->title }}</a>
                  </li>
                @endforeach
            @endif
          </ul>          
        </div>
      </div>
    </nav>
    <!-- end navbar -->
  </header>