<!-- Button trigger modal -->
@foreach ($announcements as $announcement)
    @if ($announcement->id == Route::current()->id)
        <div class="modal fade" id="fullScreenCarousel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-transparent">
                    <div class="d-flex justify-content-end mt-5">
                        <button type="button" class="btn-close fs-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            @if($announcement->images->count() == 0)
                            <div class="carousel-item active">
                                <img src="{{$announcement->img}}500" class="d-block w-50 m-auto" alt="{{$announcement->name}}">
                            </div>
                            @else
                            @foreach($announcement->images as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <a data-bs-toggle="modal" data-bs-target="#fullScreenCarousel">
                                    <img src="{{$image->getUrl(800,500)}}" class="d-block w-100 m-auto"
                                        alt="{{$announcement->name}}">
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
     @endif
@endforeach
