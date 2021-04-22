<div class="card m-auto w-75">
    <div class="row">
        <div class="col-12 m-auto">
            @foreach($announcement->images->take(1) as $image)
            <img src="{{$image->getUrl(800,500)}}" width="100%;" alt="{{$announcement->name}}">
            @endforeach
        </div>
        <div class="col-12">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">{{$announcement->name}}</h5>
                <p class="card-text text-center">{{substr($announcement->description, 0, 40)}} <a
                        class="text-dark"
                        href="{{route('announcements.detail', $announcement->id)}}">...+info</a></p>
                <p class="text-end">{{__('ui.price')}}:
                    <strong>{{$announcement->price}}&euro;</strong>
                </p>
                <div class="d-flex justify-content-between m-auto" style="margin-top: 10px">
                    <a class="my-link"
                        href="{{route('announcements.category', $announcement->category_id)}}">{{__("ui.{$announcement->category->name}")}}</a>
                    <a class="text-mycard my-link"
                        href="{{route('announcements.detail', $announcement->id)}}">{{__('ui.goAnnouncement')}}</a>
                </div>
                <p class="card-text text-center mt-2">
                    <small class="text-muted">{{__('ui.created')}}:
                        {{$announcement->created_at->format('d/m/Y')}} |
                        {{substr($announcement->user->name, 0, 20)}}
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>