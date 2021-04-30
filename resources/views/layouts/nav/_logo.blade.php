<img src="/categoriesImages/logo.jpeg" style="border-radius: 5px; width: 40px;" class="me-2" alt="">
<a class="navbar-brand my-logo d-none d-lg-flex m-auto" href="{{route('home')}}">    
    <span>Mano</span> Buy</a>
<form class="navbar-brand d-lg-none d-print-flex w-75 m-auto" action="{{ route('search') }}" method="GET">
    <input type="text" class="form-control" placeholder="{{__('ui.search')}}" aria-label="Search" name="q" />
    <button class="btn shadow-none" type="submit" data-mdb-ripple-color="dark">
        <i class="bi bi-search fs-6 p-0"></i>
    </button>
</form>
{{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="iconNav"></span>
</button>  --}}
