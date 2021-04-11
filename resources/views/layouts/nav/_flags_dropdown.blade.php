<!-- Navbar dropdown -->
<li class="nav-item dropdown ms-2 dropstart d-none d-lg-block">
    <a
      class="nav-link dropdown-toggle my-link"
      href="#"
      id="navbarDropdown"
      role="button"
      data-mdb-toggle="dropdown"
      aria-expanded="false"
    >
    @if (App::getLocale() == 'es')
      <div class="flag-icon flag-icon-es"></div>
    @elseif(App::getLocale() == 'en')
      <div class="flag-icon flag-icon-gb"></div>
    @else
      <div class="flag-icon flag-icon-it"></div>
    @endif
    </a>
    <!-- Dropdown menu -->
    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
        @include('layouts.nav._flags_bottons', ['lang'=>'es', 'nation'=>'es'])
        @include('layouts.nav._flags_bottons', ['lang'=>'en', 'nation'=>'gb'])
        @include('layouts.nav._flags_bottons', ['lang'=>'it', 'nation'=>'it'])
    </ul>
</li>

