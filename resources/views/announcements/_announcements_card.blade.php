<div class="row">
    @foreach ($announcements->reverse() as $announcement)
    <div class="col-12 mt-sm-0 d-flex justify-content-center my-cont m-auto" style="max-width: 800px">
        <div class="card mb-3 w-75">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    @if ($announcement->images->count() == 0)
                    <img src="{{$announcement->img}}300" width="100%;" alt="{{$announcement->name}}">
                    @else
                    @foreach($announcement->images->take(1) as $image)
                    <img src="{{$image->getUrl(300,300)}}" width="100%;" alt="{{$announcement->name}}">
                    @endforeach
                    @endif
                </div>
                <div class="col-md-6 m-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">{{$announcement->name}}</h5>
                        <p class="card-text text-center">{{substr($announcement->description, 0, 50)}} <a
                                class="text-dark"
                                href="{{route('announcements.detail', $announcement->id)}}">...+info</a></p>
                        <p class="text-end">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</strong></p>
                        <div class="d-flex justify-content-between m-auto" style="margin-top: 10px">
                            <a class="my-link"
                                href="{{route('announcements.category', $announcement->category_id)}}">{{__("ui.{$announcement->category->name}")}}</a>
                            <a class="text-mycard text-end btn btn-outline-info rounded-pill text-info"
                                href="{{route('announcements.detail', $announcement->id)}}">{{__('ui.goAnnouncement')}}</a>
                        </div>
                        <p class="card-text text-center mt-2">
                            <small class="text-muted">{{__('ui.created')}}:
                                {{$announcement->created_at->format('d/m/Y')}}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$announcements->links()}}
        </div>
    </div>
</div>
