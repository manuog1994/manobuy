@extends('layouts.app')
@section('title', 'Vendelo en ManoBuy')
@section('content')
<header class="row bg-image d-flex align-items-center"
    style="background-image: url('/storage/images/hand-shake-on-yellow.jpg'); height: 40vh;">
    <div class="col-12 text-center">
        <h1 class="mt-2 text-light">{{__('ui.welcome')}}<span class="iconNav"><i
                    class="bi bi-megaphone p-1 rounded mt-5 ms-1 me-2 text-light"></i>Mano<span
                    class="text-warning">Buy</span></span>
        </h1>
        <h2 class="mt-3 text-light">¿Qué estas buscando?</h2>
        <p class="text-light">Búscalo dentro de las categorías, ahí encontras el producto que desees y podrás ver los
            anuncios.</p>
            <a href="#" id="testing">Click!</a>
    </div>
</header>
@include('home._last_announcements')
@include('home._all_categories')

<div class="row">
    <div class="col-12 mt-5 text-center">
        <h2>¿Tienes miles de cosas en el trastero y no sabes que hacer con todo?</h2>
        <p class="text-muted">Pues no esperes más, registrate y publica tu anuncio. Es fácil y sencillo y totalmente
            gratuito.</p>
    </div>
</div>

@endsection
