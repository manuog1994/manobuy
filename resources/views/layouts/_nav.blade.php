<nav class="navbar navbar-expand-lg my-nav shadow fixed-top" style="position: sticky; top: 0;">
    <div class="container-fluid">
        @include('layouts.nav._logo')
        <div class="collapse navbar-collapse text-center ms-2" id="navbarSupportedContent">
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
            </ul>
            <ul class="navbar-nav m-auto" style="width:60%;">
                <li class="nav-item ms-lg-3 me-lg-3 w-100">
                    @include('layouts.nav._search')
               </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @include('layouts.nav._user')
                @include('layouts.nav._accordion_user')
            </ul>

            <ul class="navbar-nav">
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


