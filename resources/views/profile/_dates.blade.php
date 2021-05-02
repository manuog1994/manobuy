    <div class="col-12 col-md-6 m-auto">
        <div class="card text-center p-3">
            <h3 class="text-center mb-4">{{__('ui.myDates')}}</h3>
            <div class="hoverButton">
                <img class="circleDates" src="
                @if(auth()->user()->imgProfile == 'https://cambodiaict.net/wp-content/uploads/2019/12/computer-icons-user-profile-google-account-photos-icon-account.jpg')
                {{auth()->user()->imgProfile}}"
                @else
                /images/{{auth()->user()->imgProfile}}"
                @endif    
                alt="{{auth()->user()->name}}">
            </div>
            <div class="mt-2 mb-5">
                <a class="" data-bs-toggle="modal" data-bs-target="#modalUpload" role="button">{{ __('ui.changeProfileImage') }} <i class="bi bi-pencil-square"></i></a>
                <p class="text-muted fontsize-12">{{ __('ui.recomendationImage') }}</p>
            </div>
            @include('auth.update')
            <div class="form-outline mt-3 mb-3 d-md-none">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-info rounded-pill" type="submit">{{__('ui.logout')}}</button>
                </form>
            </div>
        </div>
    </div>
