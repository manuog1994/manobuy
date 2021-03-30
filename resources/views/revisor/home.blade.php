@extends('layouts.app')
@section('title', 'Modo Revisor')
@section('content')
@if($announcement)
<div class="row text-center mt-5">
    <h1>Revisor Anuncios</h1>
</div>
<div class="row d-flex justify-content-center m-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Anuncio Id:</th>
                <td>#{{$announcement->id}}</td>
              </tr>
              <tr>
                <th scope="row">Titulo del anuncio:</th>
                <td>{{$announcement->name}}</td>
              </tr>
              <tr>
                <th scope="row">Descripción:</th>
                <td>{{$announcement->description}}</td>
              </tr>
              <tr>
                <th scope="row">Precio:</th>
                <td>{{$announcement->price}}&euro;</td>

              </tr>
              <tr>
                <th scope="row">Descripción:</th>
                <td>{{$announcement->category_id}}</td>
               </tr>
              <tr>
                <th scope="row">Categoria:</th>
                <td>{{$announcement->user_id}}</td>
              </tr>
              <tr>
                <th scope="row">Imagenes:</th>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="https://oij.org/wp-content/uploads/2016/05/placeholder.png" width="100%;" alt="">
        </div>
        <div class="col-12 col-md-3">
            <img src="https://oij.org/wp-content/uploads/2016/05/placeholder.png" width="100%;" alt="">
        </div>
        <div class="col-12 col-md-3">
            <img src="https://oij.org/wp-content/uploads/2016/05/placeholder.png" width="100%;" alt="">
        </div>
        <div class="col-12 col-md-3">
            <img src="https://oij.org/wp-content/uploads/2016/05/placeholder.png" width="100%;" alt="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 d-flex justify-content-center">
        <form action="{{route('revisor.announcement.accept', ['id'=>$announcement->id])}}" method="POST">
        @csrf
        <button class="btn btn-outline-success text-success" type="submit"><i class="far fa-check-circle fa-2x"></i></button>
        </form>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center">
        <form action="{{route('revisor.announcement.reject', ['id'=>$announcement->id])}}" method="POST">
        @csrf
        <button class="btn btn-outline-danger text-danger" type="submit"><i class="far fa-times-circle fa-2x"></i></button>
        </form>
    </div>
</div>

@else
<div class="row">
    <div class="col-12 text-center">
        <h2 class="mt-5">No hay anuncios por revisar</h2>
        <img src="/storage/images/undraw_work_in_progress_uhmv.png" alt="">
    </div>
</div>
@endif
@endsection
