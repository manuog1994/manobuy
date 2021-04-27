<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header my-nav">
                <h5 class="modal-title" id="exampleModalLabel">{{__('ui.informationContact')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                @foreach ($announcements as $announcement)
                @if ($announcement->id == Route::current()->id)
                <div class="m-auto">
                    <img class="circleProfile ms-3"
                        src="https://images.unsplash.com/photo-1571929232190-30f765788262?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1070&q=80"
                        alt="profile {{$announcement->user->name}}">
                </div>
                <div class="m-auto">
                    <p>{{__('ui.name')}}{{$announcement->user->name}}</p>
                    <p>{{__('ui.phone')}}{{$announcement->user->phone}}</p>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
