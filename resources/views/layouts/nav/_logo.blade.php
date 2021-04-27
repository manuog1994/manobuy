<a class="navbar-brand my-logo d-none d-lg-flex" href="{{route('home')}}"><i
        class="bi bi-megaphone p-1 rounded ms-1 me-2" style="color: white;"></i><span>Mano</span> Buy</a>
<a class="navbar-brand my-logo d-lg-none" href="{{route('home')}}"><i class="bi bi-megaphone p-1 rounded ms-1 me-2"
        style="color: white;"></i></a>
<form class="navbar-brand d-lg-none d-inline-flex" action="{{ route('search') }}" method="GET">
    <input type="text" class="form-control" placeholder="{{__('ui.search')}}" aria-label="Search" name="q" />
    <button class="btn shadow-none" type="submit" data-mdb-ripple-color="dark">
        <i class="bi bi-search fs-6 p-0"></i>
    </button>
</form>
{{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="iconNav"></span>
</button>  --}}
