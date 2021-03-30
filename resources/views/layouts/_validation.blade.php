@if (session('created'))
    <div class="alert alert-success">{{session('created')}}</div>
@endif
@if (session('registered'))
    <div class="alert alert-success">{{session('registered')}}</div>
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