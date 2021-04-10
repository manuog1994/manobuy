@extends('layouts.app')
@foreach ($announcements as $announcement)
@if (Route::current()->id == $announcement->id)
@section('title')
{{$announcement->name}} - ManoBuy
@endsection
@endif
@endforeach
@section('content')
@foreach ($announcements as $announcement)
@if (Route::current()->id == $announcement->id)
<div class="row mt-5 d-flex justify-content-center align-content-center">
    <h1 class="my-nav rounded-pill mb-5 text-center" style="max-width: 1000px">{{$announcement->name}}</h1>
    <div class="col-12">
        @include('announcements._slider')
    </div>    
    <div class="col-12 text-center mt-4 w-75 m-auto" style="max-width: 1000px">
        <h5 class="text-start mb-2">{{__('ui.description')}}:</h5>
        <div class="border rounded p-5">
            <p>{{$announcement->description}}</p>
        </div>
        <p class="mt-3 me-5 text-end">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</p></strong>
        <div class="d-flex justify-content-around border-top pt-2">
            <p class="text-muted">{{__('ui.category')}}:
                {{__("ui.{$announcement->category->name}")}}</p>
            <p>{{__('ui.created')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection
