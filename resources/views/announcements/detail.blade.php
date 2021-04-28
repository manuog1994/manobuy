@extends('layouts.app')
@foreach ($announcements as $announcement)
@if (Route::current()->id == $announcement->id)
@section('title')
{{$announcement->name}} - ManoBuy
@endsection
@section('content')
<div class="row mt-md-5 mt-2 align-content-center">
    <div class="card m-0 p-2 shadow bg-light-gray m-auto" style="max-width: 1000px">
        <div class="d-flex justify-content-between m-3">
            <div class="d-flex">
                <div class="hoverButton">
                    <img class="circleProfile" src="
                    @if($announcement->user->imgProfile == 'https://cambodiaict.net/wp-content/uploads/2019/12/computer-icons-user-profile-google-account-photos-icon-account.jpg')
                    {{$announcement->user->imgProfile}}"
                    @else
                    /images/{{$announcement->user->imgProfile}}"
                    @endif    
                    alt="{{$announcement->user->name}}">
                </div>
                <div class="ms-2">
                    <p class="m-0">{{$announcement->user->name}}</p>
                    <p class="fontsize-12">{{__('ui.created')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
            <div class="text-end mt-2">
                <button type="button" class="btn btn-outline-info rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    {{__('ui.informationContact')}}
                </button>
            </div>
        </div>
        <div class="">
            @include('announcements._slider')
        </div>
        <div class="col-12 text-center mt-4 m-auto">

            <div class="mt-3 ms-2 text-start">
                {{--                 <h5 class="text-start mb-2">{{__('ui.description')}}:</h5>
                --}}
                <p class="">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</p></strong>
                <h1 class="">{{$announcement->name}}</h1>

            </div>

            <div class="border rounded p-5" style="background-color: rgb(223, 223, 223)">
                <p>{{$announcement->description}}</p>

            </div>

            <div class="d-flex justify-content-center border-top pt-2">
                <p class="text-muted">{{__('ui.category')}}:
                    {{__("ui.{$announcement->category->name}")}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
@endif
@endforeach
