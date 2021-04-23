@extends('layouts.app')
@section('title', __('ui.titlepage'))
@section('content')
<header class="row bg-image shadow text-center d-none d-md-flex"
    style="background-image: url('/categoriesImages/hand-shake-on-yellow.jpg'); padding-bottom: 10px;">
    @include('home._all_categories')
</header>
@include('home._lastfiveannouncements')
<div class="row">
    <div class="col-12 mt-5 text-center">
        <h2>{{__('ui.answer2')}}</h2>
        <p class="text-muted">{{__('ui.introduction2')}}</p>
    </div>
</div>
{{-- <script>
    window.onload = function(){
        alert('Atención!! Esto es una página de test ningún contenido dentro de ella es real.')
    }
</script> --}}
@endsection



  