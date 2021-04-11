<form action="{{route('register')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">{{__('ui.fullName')}}:</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
            placeholder="José Gómez López" name="name">
        <div id="nameHelp" class="form-text">{{__('ui.enterFullName')}}.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="name@example.com" name="email">
        <div id="emailHelp" class="form-text">{{__('ui.inputEmail')}}</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('ui.confirmPassword')}}:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
    </div>
    <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">{{__('ui.phone')}}:</label>
        <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp"
            placeholder="+34777000222" name="phone">
        <div id="phoneHelp" class="form-text">{{__('ui.enterPhone')}}.</div>
    </div>
    <div class="d-flex justify-content-center mb-5 clearfix">
        <button type="submit" class="btn btn-info rounded-pill">{{__('ui.register')}}</button>
    </div>
</form>
