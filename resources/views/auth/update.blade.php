<form action="{{route('user-profile-information.update')}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-outline mb-3">
        <input type="text" id="typeText" class="form-control" value="{{Auth::user()->name}}" name="name"/>
        <label class="form-label" for="typeText">{{__('ui.fullName')}}</label>
    </div>
    <div class="form-outline mb-3">
        <input type="email" id="typeEmail" class="form-control" value="{{Auth::user()->email}}" name="email"/>
        <label class="form-label" for="typeEmail">{{__('ui.email')}}</label>
    </div>
    <div class="form-outline mb-3">
        <input type="number" id="typePhone" class="form-control" value="{{Auth::user()->phone}}" name="phone"/>
        <label class="form-label" for="typePhone">{{__('ui.phone')}}</label>
    </div>
    <div class="mb-3">
        <button class="btn btn-info rounded-pill">{{__('ui.modif')}}</button>
    </div>
</form>