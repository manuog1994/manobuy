@extends('layouts.app')
@foreach ($categories as $category)
@if (Route::current()->id == $category->id)
@section('title')
{{__('ui.tab')}} {{$category->name}}
@endsection
@endif
@endforeach
@section('content')
<header class="row text-center">
    @include('announcements._categoriesSlide')
</header>
<div class="row">
    <div class="col-12 text-center mt-5 mb-5">
        <h1>{{__('ui.allAnnouncementCategory')}}
            @foreach ($categories as $category)
            @if (Route::current()->id == $category->id)
            {{__("ui.{$category->name}")}}
            @endif
            @endforeach
            .</h1>
    </div>
</div>
@include('announcements._announcements_card')
@endsection
