<div class="card m-auto w-75">
    <div class="row">
        <div class="col-12 m-auto">
            @include('home._carousel')
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
                <div class="d-flex justify-content-end mt-5">
                    <a class="text-mycard text-end"
                        href="{{route('announcements.detail', $announcement->id)}}">{{__('ui.goAnnouncement')}}</a>
                </div>
                <div class="d-flex justify-content-between" style="margin-top: 10px">
                    <a class="my-link"
                        href="{{route('announcements.category', $announcement->category_id)}}">{{__("ui.{$announcement->category->name}")}}</a>
                    <p class="card-text">
                        <small class="text-muted">{{__('ui.created')}}:
                            {{$announcement->created_at->format('d/m/Y')}}
                            -- {{$announcement->user->name}}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>