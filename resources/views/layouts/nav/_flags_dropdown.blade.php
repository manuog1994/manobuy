<!-- Navbar dropdown -->
<li class="nav-item dropdown d-none d-lg-flex">
    <button type="button" class="btn shadow-none dropdown-toggle" data-bs-toggle="modal" data-bs-target="#modalLang">
        @if (App::getLocale() == 'es')
        <div class="fs-5 flag-icon flag-icon-es"></div>
        @elseif(App::getLocale() == 'en')
        <div class="fs-5 flag-icon flag-icon-gb"></div>
        @else
        <div class="fs-5 flag-icon flag-icon-it"></div>
        @endif
    </button>
</li>
