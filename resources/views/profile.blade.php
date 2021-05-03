@extends('layouts.app')
@section('title')
{{__('ui.myprofile')}} - ManoBuy
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
<div class="row mt-5 ">
    <div class="col-12 d-flex justify-content-center border-top">
        <form action="{{ route('user.delete', auth()->user()->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-info rounded-pill mt-5">{{ __('ui.removeProfile') }}</button>
        </form>
    </div>
</div>
@endsection
