@extends('layouts.app')
@section('title', 'Vende en ManoBuy')
@section('content')
<div class="row p-5 mt-1 ms-5 me-5">
    <div class="col-12 text-center">
        <h1>Bienvenido, a <span class="">ManoBuy</span></h1>
        <h2 class="mt-3">¿Qué estas buscando?</h2>
        <p class="text-muted">Búscalo dentro de las categorías, ahí encontras el producto que desees y podrás ver los
            anuncios.</p>
    </div>
</div>

<div class="row rounded d-flex justify-content-around mt-3">
    <h2 class="text-center">Categorías</h2>
    @foreach($categories as $category)
        <div class="col-12 col-md-4 mt-3 div-img">
            <a href="#"><img
                    src="https://ethnos360aviation.org/data/FileManager/thumbnails/FileManager/img/no-image_1467973871_800x600.gif"
                    class="card img " style="width: 25rem;" alt="..."></a>
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
