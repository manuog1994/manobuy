<a href="{{route('home')}}"><img src="/categoriesImages/logo.jpeg" style="border-radius: 5px; width: 40px;" class="ms-2 me-2" alt="logo"></a>
<a class="navbar-brand my-logo d-none d-lg-flex m-auto me-2" href="{{route('home')}}">    
    <span>Mano</span> Buy</a>
<form class="navbar-brand d-lg-none d-print-flex w-75 m-auto" action="{{ route('search') }}" method="GET">
    <input type="text" class="form-control" placeholder="{{__('ui.search')}}" aria-label="Search" name="q" />
    <button class="btn shadow-none" type="submit" data-mdb-ripple-color="dark">
        <i class="bi bi-search fs-6 p-0"></i>
    </button>
</form>

