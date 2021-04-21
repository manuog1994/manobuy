@if (session('created'))
    <div class="alert alert-success">{{session('created')}}</div>
@endif
@if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
@endif
@if (session('email'))
    <div class="alert alert-success">{{session('email')}}</div>
@endif
@if (session('registered'))
    <div class="alert alert-success">{{session('registered')}}</div>
@endif
@if (session('loging'))
    <div class="alert alert-success">{{session('loging')}}</div>
@endif
@if (session('errorLogin'))
    <div class="alert alert-danger">{{session('errorLogin')}}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('error.revisor'))
<div class="alert alert-danger">{{session('error.revisor')}}</div>
@endif