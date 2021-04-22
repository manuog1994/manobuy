<div class="card w-75 m-auto shadow" style=" max-height: 98%;">
    <div class="col-12">
        @if ($announcement->images->count() == 0)
        <img src="{{$announcement->img}}300" width="100%;" alt="{{$announcement->name}}">
        @else
        @foreach($announcement->images->take(1) as $image)
        <img src="{{$image->getUrl(500,500)}}" width="100%;" alt="{{$announcement->name}}">
        @endforeach
        @endif
    </div>
    <div class="col-12">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">{{$announcement->name}}</h5>
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
                    {{$announcement->created_at->format('d/m/Y')}}
                </small>
            </p>
        </div>
    </div>
</div>
