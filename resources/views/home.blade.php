@extends('layouts.app')
@section('title', __('ui.titlepage'))
@section('content')
<header class="row bg-image d-flex justify-content-center align-items-center shadow text-center"
    style="background-image: url('/categoriesImages/hand-shake-on-yellow.jpg'); height: 40vh;">
    <div class="col-12 text-center mask-custom rounded-pill p-2 m-5 shadow" style="max-width: 800px;">
        <h1 class="mt-2 text-dark">{{__('ui.welcome')}}<span class="iconNav"><i
                    class="bi bi-megaphone p-1 rounded mt-5 ms-1 me-2 text-light"></i>Mano<span
                    class="text-warning">Buy</span></span>
        </h1>
        <h2 class="mt-1 text-light">{{__('ui.answer1')}}</h2>
        <p class=" text-body">{{__('ui.introduction')}}</p>
    </div>
</header>
@include('home._lastfiveannouncements')
@include('home._all_categories')

<div class="row">
    <div class="col-12 mt-5 text-center">
        <h2>{{__('ui.answer2')}}</h2>
        <p class="text-muted">{{__('ui.introduction2')}}</p>
    </div>
</div>

@endsection
