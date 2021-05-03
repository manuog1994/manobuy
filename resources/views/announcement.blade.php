@extends('layouts.app')
@foreach ($categories as $category)
    @if (Route::current()->id == $category->id)
        @section('title')
            @if($loop->first)
                {{ __('ui.allAnnouncements') }}
            @else
                {{__('ui.tab')}} {{$category->name}}
            @endif
        @endsection
    @endif
@endforeach

@section('content')
    <header class="row text-center">
        @include('home._allcategories')
    </header>

    <div class="row">
        <div class="col-12 text-center mt-5 mb-5">
            <h1>
                @foreach ($categories as $category)
                    @if (Route::current()->id == $category->id)
                        @if($loop->first)
                            {{ __('ui.allAnnouncement') }}
                        @else
                            {{__('ui.allAnnouncementCategory')}}
                            {{__("ui.{$category->name}")}}
                        @endif
                    @endif
                @endforeach
            </h1>
        </div>
    </div>
    @if(Route::current()->id == 1)
        @include('announcements._allcard')
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                {{$ads->links()}}
            </div>
        </div>
    @endif
    
    @if ($announcements)
    @include('announcements._announcements_card')
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$announcements->links()}}
        </div>
    </div>
    @endif
@endsection
