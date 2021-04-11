<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header my-nav">
                <h5 class="modal-title" id="exampleModalLabel">Contactar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                @foreach ($announcements as $announcement)
                @if ($announcement->id == Route::current()->id)
                    <p>{{__('ui.name')}}{{$announcement->user->name}}</p>
                    <p>{{__('ui.phone')}}{{$announcement->user->phone}}</p>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
