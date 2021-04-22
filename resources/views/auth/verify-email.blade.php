@extends('layouts.app')
@section('title', __('ui.verifyEmail'))
@section('content')
<div class="row" style="min-height: 70vh;">
    <div class="col-10 m-auto text-center">
        <div class="card p-5">
            <h1 class="mb-5">{{__('ui.notVerify')}}</h1>
            <p>{{__('ui.introVerify1')}}</p>
            <p>{{__('ui.introVerify2')}}</p>
            <div class="col m-auto">
                <form action="{{route('verification.send')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info rounded-pill">{{__('ui.reSend')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection