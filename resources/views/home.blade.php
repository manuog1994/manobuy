@extends('layouts.app')
@section('title', 'Vendelo en ManoBuy')
@section('content')
<header class="row bg-image d-flex align-items-center"
    style="background-image: url('/storage/images/hand-shake-on-yellow.jpg'); height: 40vh;">
    <div class="col-12 text-center">
        <h1 class="mt-2 text-light">Bienvenido, a <span class="iconNav"><i
                    class="bi bi-megaphone p-1 rounded mt-5 ms-1 me-2 text-light"></i>Mano<span
                    class="text-warning">Buy</span></span>
        </h1>
        <h2 class="mt-3 text-light">¿Qué estas buscando?</h2>
        <p class="text-light">Búscalo dentro de las categorías, ahí encontras el producto que desees y podrás ver los
            anuncios.</p>
    </div>
</header>
<div class="row d-flex justify-content-center align-items-center mt-3">
    <h2 class="text-center mb-3">Anuncios Recientes</h2>
    @foreach ($announcements->reverse()->take(5) as $announcement)
    <div class="col-12 col-xl-2 col-lg-3 col-md-4 m-2 d-flex justify-content-center my-cont">
        <div class="card image shadow">
            <img src="https://via.placeholder.com/286" class="card-img-top" width="100%" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$announcement->name}}</h5>
                <p class="card-text">{{substr($announcement->description, 0, 20)}}...</p>
                <p class="text-end">Precio: <strong>{{$announcement->price}}&euro;</strong></p>
                <p class="my-small text-center text-muted">{{$announcement->created_at}}</p>
                <p class="text-muted">@foreach ($categories as $category)
                    @if ($announcement->category_id == $category->id)
                    {{$category->name}}
                    @endif
                    @endforeach</p>
            </div>
            <div class="middle">
                <a class="text-mycard" href="{{route('announcements.detail', $announcement->id)}}">Ir al anuncio</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row rounded d-flex justify-content-around mt-3 mb-5">
    <h2 class="text-center mb-5">Categorías</h2>
    @foreach($categories as $category)
    <div class="col-sm-12 col-md-6 col-lg-3 div-img">
        <a href="{{route('announcements.category', $category->id)}}">
            <img src="{{$category->img}}" class="card img shadow" style="width: 95%;" alt="..."></a>
        <p class="text">{{$category->name}}</p>
    </div>
    @endforeach
</div>

<div class="row">
    <div class="col-12 mt-5 text-center">
        <h2>¿Tienes miles de cosas en el trastero y no sabes que hacer con todo?</h2>
        <p class="text-muted">Pues no esperes más, registrate y publica tu anuncio. Es fácil y sencillo y totalmente
            gratuito.</p>
    </div>
</div>

@endsection
