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
                @auth
                <div class="mb-3">
                    <img class="circleProfileNav" src="
                    @if(auth()->user()->imgProfile == 'https://cambodiaict.net/wp-content/uploads/2019/12/computer-icons-user-profile-google-account-photos-icon-account.jpg')
                    {{auth()->user()->imgProfile}}"
                    @else
                    /images/{{auth()->user()->imgProfile}}"
                    @endif    
                    alt="{{auth()->user()->name}}">
                </div>        
                @endauth
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
