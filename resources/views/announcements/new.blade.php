@extends('layouts.app')
@section('title')
 {{ __('ui.newAnnouncement') }} - ManoBuy
@endsection
 @section('content')
<div class="row text-center mt-2">
    <div class="col-12">
        <h1>{{__('ui.newAnnouncement')}}</h1>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-6">
        <div class="card p-3 mt-3">
            @include('announcements._formcreate')
        </div>
    </div>
</div>
@endsection
