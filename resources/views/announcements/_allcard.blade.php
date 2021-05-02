<div class="row">
    @foreach ($ads->reverse() as $ad)
    <div class="col-12 col-md-6 mt-sm-0 d-flex justify-content-center my-cont m-auto" style="max-width: 800px">
        <div class="card mb-3 w-75">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    @if ($ad->images->count() == 0)
                    <img src="{{$ad->img}}300" width="100%;" alt="{{$ad->name}}">
                    @else
                    @foreach($ad->images->take(1) as $image)
                    <img src="{{$image->getUrl(300,300)}}" width="100%;" alt="{{$ad->name}}">
                    @endforeach
                    @endif
                </div>
                <div class="col-md-6 m-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">{{$ad->name}}</h5>
                        <p class="card-text text-center">{{substr($ad->description, 0, 50)}} <a
                                class="text-dark"
                                href="{{route('announcements.detail', $ad->id)}}">...+info</a></p>
                        <p class="text-end">{{__('ui.price')}}: <strong>{{$ad->price}}&euro;</strong></p>
                        <div class="d-flex justify-content-between m-auto" style="margin-top: 10px">
                            <a class="my-link"
                                href="{{route('announcements.category', $ad->category_id)}}">{{__("ui.{$ad->category->name}")}}</a>
                            <a class="text-mycard text-end text-info"
                                href="{{route('announcements.detail', $ad->id)}}">{{__('ui.goAnnouncement')}}</a>
                        </div>
                        <p class="card-text text-center mt-2">
                            <small class="text-muted">{{__('ui.created')}}:
                                {{$ad->created_at->format('d/m/Y')}}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
