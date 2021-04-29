@extends('layouts.app')
@section('title', 'Crear Anuncio')
@section('content')
<div class="row text-center mt-2">
    <div class="col-12">
        <h1>Modifica tu anuncio</h1>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-6">
        <div class="card p-3 mt-3">
            @include('announcements._formupdate')
        </div>
    </div>
</div>
@endsection
