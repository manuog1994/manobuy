<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($announcement->images as $image)
            @if($announcement->images->count() == 0)
                <div class="carousel-item active">
                    <img src="{{$announcement->img}}500" class="d-block w-50 m-auto" alt="{{$announcement->name}}">
                </div>
            @else
                <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{$image->getUrl(800,500)}}" class="d-block w-50 m-auto" alt="{{$announcement->name}}">
                </div>
            @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
