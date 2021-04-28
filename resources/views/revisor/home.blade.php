@extends('layouts.app')
@section('title', 'Modo Revisor')
@section('content')
@if($announcement)
<div class="row text-center mt-5">
    <h1>{{__('ui.revisorAdstitle')}}</h1>
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
                <th scope="row">{{__('ui.announcementId')}}:</th>
                <td>#{{$announcement->id}}</td>
            </tr>
            <tr>
                <th scope="row">{{__('ui.titleAnnouncement')}}:</th>
                <td>{{$announcement->name}}</td>
            </tr>
            <tr>
                <th scope="row">{{__('ui.description')}}:</th>
                <td>{{$announcement->description}}</td>
            </tr>
            <tr>
                <th scope="row">{{__('ui.price')}}:</th>
                <td>{{$announcement->price}}&euro;</td>

            </tr>
            <tr>
                <th scope="row">{{__('ui.categories')}}:</th>
                <td>{{$announcement->category->name}}</td>
            </tr>
            <tr>
                <th scope="row">{{__('ui.userName')}}:</th>
                <td>{{$announcement->user->name}}</td>
            </tr>
            <tr>
                <th scope="row">{{__('ui.revisorAdsimg')}}:</th>
            </tr>
        </tbody>
    </table>
    <div class="row d-flex">
        @if ($announcement->images->count() == 0)
        <div class="col-12 mt-2">
            <img src="{{$announcement->img}}300" width="100%;" alt="{{$announcement->name}}">
        </div>
        @else
        @foreach ($announcement->images as $image)
        <div class="d-flex mb-5 m-auto">
            <div class="col-12 col-md-4 mt-2">
                <img src="{{$image->getUrl(300,300)}}" width="300px;" alt="{{$announcement->name}}">
            </div>
            <div class="col-12 col-md-4">
                <h6>Análisis</h6>
                <ul>
                    <li>{{__('ui.adult')}} : {{__("ui.{$image->adult}")}}</li>
                    <li>{{__('ui.spoof')}} : {{__("ui.{$image->spoof}")}}</li>
                    <li>{{__('ui.medical')}} : {{__("ui.{$image->medical}")}}</li>
                    <li>{{__('ui.violence')}} : {{__("ui.{$image->violence}")}}</li>
                    <li>{{__('ui.racy')}} : {{__("ui.{$image->racy}")}}</li>
                    <li>Id image # : {{$image->id}}</li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <h6>Labels</h6>
                <ul class="mb-2">
                    @if ($image->labels)
                    @foreach ($image->labels as $label)
                    <li>{{$label}}</li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
            @endforeach
            @endif
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 d-flex justify-content-center">
        <form action="{{route('revisor.announcement.accept', ['id'=>$announcement->id])}}" method="POST">
            @csrf
            <button class="btn btn-outline-success text-success" type="submit"><i
                    class="far fa-check-circle fa-2x"></i></button>
        </form>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center">
        <form action="{{route('revisor.announcement.reject', ['id'=>$announcement->id])}}" method="POST">
            @csrf
            <button class="btn btn-outline-danger text-danger" type="submit"><i
                    class="far fa-times-circle fa-2x"></i></button>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-12 text-center">
        <h2 class="mt-5">{{__('ui.notAnnouncements')}}</h2>
        <img src="/categoriesImages/undraw_work_in_progress_uhmv.png" class="w-100" alt="No announcements">
    </div>
</div>
@endif
@endsection
