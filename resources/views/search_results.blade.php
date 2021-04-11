@extends('layouts.app')
@section('title', __('ui.titlepage'))
@section('content')
        <div class="row">
            <div class="col-12 text-center mt-3 mb-3">
                <h1>{{__('ui.results')}}</h1>
            </div>
        </div>
        @include('search._cards')
@endsection