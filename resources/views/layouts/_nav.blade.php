<nav class="navbar navbar-expand-lg my-nav shadow fixed">
    <div class="container-fluid">
        @include('layouts.nav._logo')
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @include('layouts.nav._home')
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    @include('layouts.nav._dropdown')
                </li>
                {{-- Accordion Menú --}}

                    @include('layouts.nav._nav_accordion')

                <li class="nav-item ms-lg-3 me-lg-3 m-auto" style="">
                    @include('layouts.nav._search')
               </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                @include('layouts.nav._user')
                @include('layouts.nav._accordion_user')
                @include('layouts.nav._bottons')
            </ul>
            {{-- Flags bottons --}}
            <ul class="navbar-nav">
                @include('layouts.nav._flags_dropdown')
                @include('layouts.nav._accordion_lang')
            </ul>
        </div>
    </div>
</nav>
@include('auth._modals')
@include('announcements._contact_modal')

