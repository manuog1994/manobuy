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
        <h1>Todos los anuncios de 
            @foreach ($categories as $category)
            @if (Route::current()->id == $category->id)
            {{$category->name}}
            @endif
            @endforeach
            .</h1>
    </div>
</div>
@include('announcements._announcements_card')
@endsection
