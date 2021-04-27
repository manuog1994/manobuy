@extends('layouts.app')
@section('title')
{{__('ui.myprofile')}} -- {{auth()->user()->name}}
@endsection
@section('content')

<div class="row m-auto" style="max-width: 1500px">
    @include('profile._dates')
</div>
<div class="row m-auto" style="max-width: 1500px">
    <div class="col-12 text-center mb-3">
        <h2 class="mt-3">{{__('ui.myannouncements')}}</h2>
    </div>
    @include('profile._card')
</div>

@endsection
