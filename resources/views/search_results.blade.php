@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-12 text-center mt-3 mb-3">
                <h1>Resultados de la búsqueda:</h1>
            </div>
        </div>
        @include('search._cards')
@endsection