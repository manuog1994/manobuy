{{-- success --}}
@if (session('created'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('created')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('imageDelete'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('imageDelete')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('email'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('email')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('registered'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('registered')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('modification'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('modification')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('nuevo'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('nuevo')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('loging'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('loging')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('messageVerify'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('messageVerify')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('deleteAnnouncement'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('deleteAnnouncement')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('reMessage'))
    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        {{session('reMessage')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- error --}}
@if (session('errorLogin'))
    <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        {{session('errorLogin')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('nousercreator'))
    <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        {{session('nousercreator')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('alerta'))
    <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        {{session('alerta')}}<a href="{{route('password.request')}}"> {{__('ui.forgotPassword')}}</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error.revisor'))
<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
    {{session('error.revisor')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif