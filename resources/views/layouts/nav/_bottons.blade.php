<li class="nav-item d-lg-flex">
    @guest
    <a class="d-lg-none nav-link my-link mt-2" data-bs-toggle="modal" href="#modal"
        role="button">{{__('ui.registerOrLogin')}}</a>
    <button class="d-none d-lg-flex btn btn-info btn-rounded me-2" data-bs-toggle="modal" href="#modal"
        >{{__('ui.registerOrLogin')}}</button>
    @endguest
    <a id="dropActivation" class="d-lg-none nav-link my-link" @if (!Auth::user()) href="#modal" data-bs-toggle="modal"
        role="button" @else type="button" href="{{route('announcements.new')}}" @endif> {{__('ui.newAnnouncement')}}</a>
    <a id="dropActivacion" class="d-none d-lg-inline-flex btn btn-info btn-rounded" @if (!Auth::user()) href="#modal"
        data-bs-toggle="modal" role="button" @else type="button" href="{{route('announcements.new')}}" @endif>{{__('ui.newAnnouncement')}}</a>
</li>
