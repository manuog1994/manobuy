@auth
<li class="nav-item dropdown my-li align-self-sm-center d-none d-lg-flex">
    <a class="nav-link dropdown-toggle my-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{__('ui.salute')}}{{Auth::user()->name}}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="my-link dropdown-item" href="{{route('profile', auth()->user()->id)}}">{{__('ui.myprofile')}}</a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="dropdown-item" type="submit">{{__('ui.logout')}}</button>
        </form>
    </ul>
</li>
@if (Auth::user()->is_revisor)
<li class="nav-item d-none d-lg-flex clearfix">
    <a class="btn btn-info btn-rounded me-2" type="button" class="btn btn-primary"
        href="{{route('revisor.home')}}">{{__('ui.revisorAds')}}<span
            class="badge bg-light text-dark">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
    </a>
</li>
@endif
@endauth
