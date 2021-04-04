<div class="row ms-auto me-auto">
    @foreach ($announcements->reverse() as $announcement)
    <div class="col-12 mt-3 d-flex justify-content-center my-cont">
        <div class="card mb-3" style="width: 60%; max-width: 900px;">
            <div class="row g-0">
                <div class="m-auto"  style="width: 30%;">
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
                        <p class="card-text text-center">{{substr($announcement->description, 0, 150)}} <a
                                class="text-dark"
                                href="{{route('announcements.detail', $announcement->id)}}">...+info</a></p>
                        <p class="text-end">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</strong></p>
                        <div class="d-flex justify-content-end mt-5">
                            <a class="text-mycard text-end"
                                href="{{route('announcements.detail', $announcement->id)}}">{{__('ui.goAnnouncement')}}</a>
                        </div>
                        <div class="d-flex justify-content-md-between m-auto" style="margin-top: 10px">
                            <a class="my-link me-5 me-sm-0"
                                href="{{route('announcements.category', $announcement->category_id)}}">{{__("ui.{$announcement->category->name}")}}</a>
                            <p class="card-text">
                                <small class="text-muted">{{__('ui.created')}}:
                                    {{$announcement->created_at->format('d/m/Y')}} --
                                    {{$announcement->user->name}}</small>
                            </p>
                        </div>
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
