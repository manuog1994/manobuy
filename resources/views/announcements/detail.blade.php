@extends('layouts.app')
@foreach ($announcements as $announcement)
@if (Route::current()->id == $announcement->id)
@section('title')
{{$announcement->name}} - ManoBuy
@endsection
@section('content')
<div class="row mt-5 align-content-center">
    <div class="card m-0 p-2 shadow bg-light-gray m-auto" style="max-width: 1000px">
        <div class="">
            @include('announcements._slider')
        </div>
        <div class="col-12 text-center mt-4 m-auto">
            <button type="button" class="btn btn-outline-info rounded-pill" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Contactar
            </button>
            <div class="mt-3 ms-2 text-start">
                {{--                 <h5 class="text-start mb-2">{{__('ui.description')}}:</h5>
                --}} 
                <p class="">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</p></strong>
                <h1 class="">{{$announcement->name}}</h1>

            </div>

            <div class="border rounded p-5" style="background-color: rgb(223, 223, 223)">
                <p>{{$announcement->description}}</p>

            </div>

            <div class="d-flex justify-content-around border-top pt-2">
                <p class="text-muted">{{__('ui.category')}}:
                    {{__("ui.{$announcement->category->name}")}}</p>
                <p>{{__('ui.created')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
@endif
@endforeach
