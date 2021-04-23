@auth
<li class="nav-item dropdown my-li d-none d-lg-flex">
    <button type="button" class="btn shadow-none dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
        <i class="bi bi-person-circle text-white my-iconsize"></i>
    </button>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
        <span class="dropdown-item bg-info fw-bold">{{__('ui.salute')}}{{Auth::user()->name}}</span>
        <a class="my-link dropdown-item" href="{{route('profile', auth()->user()->id)}}">{{__('ui.myprofile')}}</a>
        @if (Auth::user()->is_revisor)
        <li class="nav-item d-none d-lg-flex">
            <a class="dropdown-item me-2 m-auto" type="button" class="btn btn-primary"
                href="{{route('revisor.home')}}">{{__('ui.revisorAds')}}<span
                class="badge bg-light text-dark">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
            </a>
        </li>
        @endif
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="dropdown-item" type="submit">{{__('ui.logout')}}</button>
        </form>
    </ul>
</li>

@endauth
