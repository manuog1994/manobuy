<li class="nav-item d-lg-flex">
    @guest
    <button class="d-none d-lg-flex btn bg-transparent shadow-none text-white me-2" data-bs-toggle="modal" href="#modal"
        ><i class="bi bi-person-circle fs-3"></i>
    </button>
    @endguest
    <a id="dropActivacion" class="d-none d-lg-flex btn btn-info btn-rounded m-auto" 
    @if (!Auth::user()) href="#modal" data-bs-toggle="modal" role="button"
    @elseif(Auth::user()->email_verified_at == null)
    type="button" href="{{route('verification.notice')}}" 
    @else role="button" href="{{route('announcements.new')}}" 
    @endif>{{__('ui.newAnnouncement')}}
    </a>
</li>
