<header id="header" class="main-header">
    <nav class="main-nav nav-expanded">
      <div class="container">
        <div class="left-nav">
          <div class="nav-brand">
            <a href="/">
              <img src="{{ asset('/images/logo.jpg') }}" alt="navbar-logo" width="100%" />
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

        <div class="right-nav">
          <div class="nav-menu">
            <div class="contact">
              <i class="telp-icon fas fa-phone-alt" style="line-height: 2"></i>
              <div class="contact-text">
                <span class="text-white small-text">Call Us Today</span>
                <span class="text-white telp-text"><b>+62 828 111 96 75</b></span>
              </div>
            </div>
            <div class="contact-button">
              <a href="Appointment.html" class="button style-1">Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
  </header>