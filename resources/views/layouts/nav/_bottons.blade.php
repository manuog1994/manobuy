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