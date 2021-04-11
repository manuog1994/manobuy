@auth
<div class="accordion accordion-flush d-lg-none" id="accordionFlushExample">
    <div class="accordion-item">
        <div class="d-flex justify-content-center">
            <p class="accordion-header" id="flush-headingOne">
                <button class="accordion-button bg-transparent shadow-none collapsed my-link" type="button"
                    data-mdb-toggle="collapse" data-mdb-target="#flush-collapse3" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    {{__('ui.salute')}}{{Auth::user()->name}}
                </button>
            </p>
        </div>
        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-mdb-parent="#accordionFlushExample">
            <div class="accordion-body">
                <a class="my-link dropdown-item"
                    href="{{route('profile', auth()->user()->id)}}">{{__('ui.myprofile')}}</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">{{__('ui.logout')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@if (Auth::user()->is_revisor)
<li class="nav-item d-lg-none clearfix">
    <a class="nav-link my-link" type="button" class="btn btn-primary"
        href="{{route('revisor.home')}}">{{__('ui.revisorAds')}}<span
            class="badge bg-light text-dark">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
    </a>
</li>
@endif
@endauth
