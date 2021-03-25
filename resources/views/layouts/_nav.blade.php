<nav class="navbar navbar-expand-lg my-nav shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand my-logo" href="{{route('home')}}"><i class="bi bi-megaphone p-1 rounded ms-1 me-2"></i>ManoBuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active my-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-link" href="{{route('announcements')}}">Anuncios</a>
                </li>
            </ul>
            @auth
            <li class="nav-item dropdown my-li">
                <a class="nav-link dropdown-toggle my-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Hola, {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout!</button>
                    </form>
                </ul>
            </li>
            @endauth
            <div class="d-flex">
                @guest
                <button class="my-btn btn me-2" data-bs-toggle="modal" href="#modal" role="button">Regístrate o inicia
                    sesión</button>
                @endguest
                <a class="my-btn" @if (!Auth::user()) href="#modal" data-bs-toggle="modal" role="button" @else type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAnunn" @endif >Publicar Anuncio</a>
            </div>
            <!--       <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
        </div>
    </div>
</nav>
@include('layouts._modals')
@include('layouts._modalanunn')
