@extends('layouts.app')
@section('title', 'Crear Anuncio')
@section('content')
    <div class="row text-center mt-2">
        <div class="col-12">
            <h1>Modifica tu anuncio</h1>
        </div>
    </div>

    {{-- form modification --}}
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-9">
            <div class="card p-3 mt-3">
                @include('announcements._formupdate')
            </div>
        </div>
    </div>

    {{-- images announcement --}}
    <div class="row mt-5 m-auto">
        <div class="col-12 col-md-9 m-auto mt-2">
            <div class="card bg-white p-2 text-center shadow" style="min-height: 10vh;">
            <h3>Imagenes del anuncio</h3>
                @foreach ($announcements as $announcement)
                    <div>
                        @if ($announcement->id == Route::current()->id)
                            @if ($announcement->images->count() == 0)
                                <p>No imagenes</p>
                            @else
                                @foreach($announcement->images as $image)
                                    @if ($image->announcement_id == $announcement->id)
                                        <img src="{{Storage::url($image->file)}}" width="50%;" alt="{{$announcement->name}}">
                                        <form action="{{route('announcements.deleteimages.delete', ['announcementid' => $announcement->id, 'imageid' => $image->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn shadow-none"><i class="bi bi-trash-fill text-muted my-iconsize"></i></button>
                                        </form>
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

