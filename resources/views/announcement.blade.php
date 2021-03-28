@extends('layouts.app')
@foreach ($categories as $category)
@if (Route::current()->id == $category->id)
@section('title')
Todos los anuncios, de {{$category->name}} 
@endsection
@endif
@endforeach
@section('content')
<div class="row">
    <div class="col-12 text-center mt-5 mb-5">
        <h1>Todos los anuncios de @if (URL::current() == route('announcements'))
            los anuncios
            @else
            @foreach ($categories as $category)
            @if (Route::current()->id == $category->id)
            {{$category->name}}
            @endif
            @endforeach
            @endif.</h1>
    </div>
</div>
<div class="row ms-auto me-auto">
    @foreach ($announcements->reverse() as $announcement)
    <div class="col-12 col-md-3 mt-3 d-flex justify-content-center my-cont">
        <div class="card image shadow">
            <img src="https://via.placeholder.com/286" class="card-img-top" width="100%" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{$announcement->name}}</h5>
                    <p class="text-muted">@foreach ($categories as $category)
                        @if ($announcement->category_id == $category->id)
                        {{$category->name}}
                        @endif
                        @endforeach</p>
                </div>
                <p class="card-text text-">{{substr($announcement->description, 0, 100)}}...</p>
                <p class="text-end">Precio: <strong>{{$announcement->price}}&euro;</strong></p>
                <p class="my-small text-center text-muted">{{$announcement->created_at}}</p>
            </div>
            <div class="middle">
                <a class="text-mycard" href="{{route('announcements.detail', $announcement->id)}}">Ir al anuncio</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$announcements->links()}}
        </div>
    </div>
</div>
@endsection
