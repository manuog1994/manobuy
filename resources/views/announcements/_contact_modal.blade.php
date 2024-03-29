<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('ui.informationContact')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @foreach ($announcements as $announcement)
                @if ($announcement->id == Route::current()->id)                    
                <div class="hoverButton">
                    <img class="circleProfile" src="
                    @if($announcement->user->imgProfile == 'https://cambodiaict.net/wp-content/uploads/2019/12/computer-icons-user-profile-google-account-photos-icon-account.jpg')
                    {{$announcement->user->imgProfile}}"
                    @else
                    /images/{{$announcement->user->imgProfile}}"
                    @endif    
                    alt="{{$announcement->user->name}}">
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
