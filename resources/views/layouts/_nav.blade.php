<nav class="navbar navbar-expand-lg my-nav shadow fixed">
    <div class="container-fluid">
        <a class="navbar-brand my-logo" href="{{route('home')}}"><i class="bi bi-megaphone p-1 rounded ms-1 me-2"
                style="color: white;"></i><span>Mano</span> Buy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="iconNav"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active my-link text-light d-none d-lg-block" aria-current="page"
                        href="{{route('home')}}"><i class="fas fa-home fa-2x"></i></a>
                    <a class="nav-link active my-link d-lg-none" aria-current="page" href="{{route('home')}}">{{__('ui.home')}}</a>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle my-link text-light ms-2 d-none d-lg-block" href="#"
                        id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-list fa-2x"></i>
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="{{route('announcements.category', $category->id)}}">{{__("ui.{$category->name}")}}</a></li>
                        @endforeach
                    </ul>
                </li>
                {{-- Accordion Menú --}}
                @include('layouts.nav._nav_accordion')
            </ul>
            {{-- Flags bottons --}}
            <ul class="navbar-nav ms-auto">
                @include('layouts.nav._flags_bottons', ['lang'=>'es', 'nation'=>'es'])
                @include('layouts.nav._flags_bottons', ['lang'=>'en', 'nation'=>'gb'])
                @include('layouts.nav._flags_bottons', ['lang'=>'it', 'nation'=>'it'])
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                @auth
                <li class="nav-item dropdown my-li d-sm-flex align-self-sm-center">
                    <a class="nav-link dropdown-toggle my-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.salute')}}{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">{{__('ui.logout')}}</button>
                        </form>
                    </ul>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item d-lg-flex clearfix">
                    <a class="d-lg-none nav-link my-link" type="button" class="btn btn-primary"
                        href="{{route('revisor.home')}}">{{__('ui.revisorAds')}}<span
                            class="badge bg-light text-dark">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
                    </a>
                    <a class="d-none d-lg-block btn btn-info btn-rounded me-2" type="button" class="btn btn-primary"
                        href="{{route('revisor.home')}}">{{__('ui.revisorAds')}}<span
                            class="badge bg-light text-dark">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
                    </a>
                </li>
                @endif
                @endauth
                <li class="nav-item d-lg-flex clearfix">
                    @guest
                    <a class="d-lg-none nav-link my-link" data-bs-toggle="modal" href="#modal" role="button">{{__('ui.registerOrLogin')}}</a>
                    <a class="d-none d-lg-block btn btn-info btn-rounded me-2" data-bs-toggle="modal" href="#modal"
                        role="button">{{__('ui.registerOrLogin')}}</a>
                    @endguest
                    <a id="dropActivation" class="d-lg-none nav-link my-link" @if (!Auth::user()) href="#modal"
                        data-bs-toggle="modal" role="button" @else type="button" href="{{route('announcements.new')}}" @endif> {{__('ui.newAnnouncement')}}</a>
                    <a id="dropActivacion" class="d-none d-lg-block btn btn-info btn-rounded" @if (!Auth::user())
                        href="#modal" data-bs-toggle="modal" role="button" @else type="button" href="{{route('announcements.new')}}" @endif>
                        <i class="fas fa-plus me-1"></i> {{__('ui.newAnnouncement')}}</a>
                </li>
            </ul>
            <!--       <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
        </div>
    </div>
</nav>
@include('auth._modals')

