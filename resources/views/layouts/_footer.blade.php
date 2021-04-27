<footer class="d none d-md-flex bg-light border-top mt-5" style="padding-bottom: 20px;">
    <div class="d-md-flex m-auto">
        <div class="col-12 col-md-2 mt-3 text-md-start text-center">
            <p class="text-muted ms-2" style="font-family: 'Indie Flower', cursive; font-size: 30px;"><i
                    class="bi bi-megaphone"></i> ManoBuy
            </p>
        </div>
        <div class="col-12 col-md-2 mt-3 text-center">
            <p class="text-muted text-decoration-underline m-0">Mi Cuenta</p>
            <ul class="p-0" style="font-size: 14px;">
                <li class="" style="list-style: none">
                    <a id="dropActivacion" class="text-muted" @if (!Auth::user()) href="#modal" data-bs-toggle="modal" role="button" @elseif(Auth::user()->email_verified_at == null) type="button" href="{{route('verification.notice')}}" @else type="button" href="{{route('announcements.new')}}" @endif>{{__('ui.newAnnouncement')}}
                    </a>
                </li>
                <li class="" style="list-style: none">
                    <a id="dropActivacion" class="text-muted" 
                            @if (!Auth::user()) href="#modal" data-bs-toggle="modal" role="button" 
                            @elseif(Auth::user()->email_verified_at == null) type="button" href="{{route('verification.notice')}}"
                            @endif>{{__('ui.login')}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col mt-3 text-center">
            <p class="text-muted text-decoration-underline m-0">{{__('ui.categories')}}</p>
                @foreach ($categories as $category)
                    <a class="text-muted"
                        href="{{route('announcements.category', $category->id)}}">{{__("ui.{$category->name}")}} | </a>
                @endforeach
            </ul>
        </div>
    
        <div class="col-12 col-md-2 mt-3 text-center">
            <p class="text-muted text-decoration-underline m-0">Legal</p>
            <ul class="p-0" style="font-size: 14px;">
                <li class="" style="list-style: none">
                    <a class="text-muted" data-bs-toggle="modal" data-bs-target="#policities" role="button">{{__('ui.privatePolicities')}}</a>
                </li>
                <li class="" style="list-style: none">
                    <a class="text-muted" data-bs-toggle="modal" data-bs-target="#cookies" role="button">{{__('ui.cookies')}}</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-2 mt-3 text-center">
            <p class="text-muted text-decoration-underline m-0">Información</p>
            <ul class="p-0" style="font-size: 14px;">
                <li class="" style="list-style: none">
                    <a class="text-muted" data-bs-toggle="modal" data-bs-target="#contact" role="button">{{__('ui.contact')}}</a>
                </li>
            </ul>
            <ul class="border-top p-0" style="font-size: 14px;">
                <li class="" style="list-style: none">
                    <a class="text-muted" href="https://manuelgaliano.site">MG Web Developer</a>
                </li>
            </ul>
        </div>

    </div>

</footer>

<footer class="text-center text-white fixed-bottom d-md-none" style="background-color: #5e5e5e;">
    <!-- Grid container -->
    <div class="container p-2 d-flex justify-content-around">
        <a id="dropActivacion" class="" 
        @if (!Auth::user()) href="#modal" data-bs-toggle="modal" role="button" 
        @elseif(Auth::user()->email_verified_at == null) type="button" href="{{route('verification.notice')}}"
        @else
        href="{{route('profile', auth()->user()->id)}}"
        @endif>
        <i class="bi bi-person-circle text-white my-iconsize"></i>
        </a>
        <a id="dropActivacion" class="" 
        @if (!Auth::user()) href="#modal" data-bs-toggle="modal" role="button"
        @elseif(Auth::user()->email_verified_at == null)
        type="button" href="{{route('verification.notice')}}" 
        @else type="button" href="{{route('announcements.new')}}" 
        @endif>
        <i class="bi bi-plus-circle text-white my-iconsize"></i> 
        </a>
        @auth
        @if (Auth::user()->is_revisor)
        <a class="" type="button"
        href="{{route('revisor.home')}}"><i class="bi bi-binoculars text-white my-iconsize"></i><span
        class="badge bg-light text-dark"> {{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
        </a>
        @endif
        @endauth
    </div>

    <!-- Grid container -->
  
  </footer>

