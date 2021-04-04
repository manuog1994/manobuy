<div class="row">
    <div class="col-12 text-center mt-3">
        <h2>{{__('ui.lastAnnouncements')}}</h2>
    </div>
</div>
<div class="row d-flex justify-content-center mt-3">
    <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-inner m-auto shadow" style="max-width: 50%;">
            @foreach ($announcements->reverse()->take(5) as $key => $announcement)
            <div class="carousel-item @if($loop->first)active @endif" width="100%">
                <div class="card">
                    <div class="row g-0">
                        <div class="m-auto" style="width: 30%;">
                            <div id="slideri">
                                <figure>
                                    @foreach ($announcement->images as $image)
                                        <img src="{{ Storage::url($image->file) }}">
                                    @endforeach
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">{{$announcement->name}}</h5>
                                <p class="card-text text-center">{{substr($announcement->description, 0, 40)}} <a
                                        class="text-dark"
                                        href="{{route('announcements.detail', $announcement->id)}}">...+info</a></p>
                                <p class="text-end">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</strong></p>
                                <div class="d-flex justify-content-end mt-5">
                                    <a class="text-mycard text-end"
                                        href="{{route('announcements.detail', $announcement->id)}}">{{__('ui.goAnnouncement')}}</a>
                                </div>
                                <div class="d-flex justify-content-between" style="margin-top: 10px">
                                    <a class="my-link"
                                        href="{{route('announcements.category', $announcement->category_id)}}">{{__("ui.{$announcement->category->name}")}}</a>
                                    <p class="card-text">
                                        <small class="text-muted">{{__('ui.created')}}: {{$announcement->created_at->format('d/m/Y')}}
                                            -- {{$announcement->user->name}}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
