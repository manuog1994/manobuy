@foreach ($announcements->reverse() as $announcement)
@if ($announcement->user_id == auth()->user()->id)
<div class="col-12 col-md-4 mt-sm-0 d-flex justify-content-around my-cont m-auto" style="max-width: 800px">
    <div class="card mb-3">
        <div class="row">
            <div class="col-12 col-md-6 m-auto">
                @include('home._carousel')
            </div>
            <div class="col-xxl-6">
                <div class="card-body">
                    <div class="d-flex">
                        <h5 class="card-title m-auto mb-4">{{$announcement->name}}</h5> 
                        <p class="d-flex justify-content-end">
                        @if ($announcement->is_accepted === 1)
                            <p><i class="bi bi-patch-check text-success"></i></p>
                        @elseif($announcement->is_accepted === null)
                            <p><i class="bi bi-patch-question"></i></p>
                        @else
                            <p><i class="bi bi-patch-exclamation text-danger"></i></p>
                        @endif
                        </p>
                    </div>
                    <p class="card-text text-center">{{substr($announcement->description, 0, 30)}} <a
                            class="text-dark"
                            href="{{route('announcements.detail', $announcement->id)}}">...+info</a></p>
                    <p class="text-end">{{__('ui.price')}}: <strong>{{$announcement->price}}&euro;</strong></p>
                    <div class="d-flex justify-content-between m-auto" style="margin-top: 10px">
                        <a class="my-link"
                            href="{{route('announcements.category', $announcement->category_id)}}">{{__("ui.{$announcement->category->name}")}}</a>
                        <a class="text-mycard text-end my-link"
                            href="{{route('announcements.detail', $announcement->id)}}">{{__('ui.goAnnouncement')}}</a>
                    </div>
                    <p class="card-text text-center mt-2">
                        <small class="text-muted">{{__('ui.created')}}:
                            {{$announcement->created_at->format('d/m/Y')}} --
                            {{$announcement->user->name}}
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach