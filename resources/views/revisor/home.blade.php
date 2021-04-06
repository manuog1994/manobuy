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
    <div class="row">
        @foreach ($announcement->images as $image)
        <div class="col-12 col-md-3 mt-2">
            <img src="{{$image->getUrl(300,150)}}" width="100%;" alt="">
        </div>
        <div class="col-md-8">
            <ul>
                <li>Adult : {{ $image->adult }}</li>
                <li>spoof : {{$image->spoof}}</li>
                <li>medical : {{$image->medical}}</li>
                <li>violence : {{$image->violence}}</li>
                <li>racy : {{$image->racy}}</li>
                <li>Id # : {{$image->id}}</li>
                <li>Public route : {{$image->file}}</li>
                <li>Storage route : {{Storage::url($image->file)}}</li>
            </ul>
            <br>
            <h6>Labels</h6>
            <ul>
                @if ($image->labels)
                    @foreach ($image->labels as $label)
                        <li>{{$label}}</li>
                    @endforeach
                @endif
            </ul>
        </div>
        @endforeach
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
        <img src="/storage/images/undraw_work_in_progress_uhmv.png" alt="">
    </div>
</div>
@endif
@endsection