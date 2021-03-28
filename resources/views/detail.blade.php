@extends('layouts.app')
@foreach ($announcements as $announcement)
@if (Route::current()->id == $announcement->id)
@section('title')
{{$announcement->name}} 
@endsection
@endif
@endforeach
@section('content')
@foreach ($announcements as $announcement)
@if (Route::current()->id == $announcement->id)
<div class="row mt-1">
    <div class="col-12">
        <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner text-center">
              <div class="carousel-item active" data-mdb-interval="10000">
                <img
                  src="https://mdbootstrap.com/img/new/slides/041.jpg"
                  class="img-fluid w-100"
                  style="max-height: 50vh; max-width: 100rem;"
                  alt="..."
                />
              </div>
              <div class="carousel-item" data-mdb-interval="2000">
                <img
                  src="https://mdbootstrap.com/img/new/slides/042.jpg"
                  class="img-fluid w-100"
                  style="max-height: 50vh; max-width: 100rem;"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="https://mdbootstrap.com/img/new/slides/043.jpg"
                  class="img-fluid w-100"
                  style="max-height: 50vh; max-width: 100rem;"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              data-mdb-target="#carouselExampleInterval"
              type="button"
              data-mdb-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              data-mdb-target="#carouselExampleInterval"
              type="button"
              data-mdb-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
      <div class="col-12 text-center mt-4">
          <h1 class="my-nav rounded-pill">{{$announcement->name}}</h1>
          <h5 class="text-start mb-2">Descripcion:</h5>
          <div class="border rounded p-5">
            <p>{{$announcement->description}}</p>
          </div>
          <p class="mt-3 me-5 text-end">Precio: <strong>{{$announcement->price}}&euro;</p></strong>
          <div class="d-flex justify-content-around border-top pt-2">
            <p class="text-muted">Categoria: @foreach ($categories as $category)
              @if ($announcement->category_id == $category->id)
              {{$category->name}}
              @endif
              @endforeach</p>
              <p>{{$announcement->created_at}}</p>
        </div>
        </div>
</div>
@endif    
@endforeach
@endsection
    
