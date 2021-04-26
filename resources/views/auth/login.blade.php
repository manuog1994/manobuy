<form action="{{route('login')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="email" class="form-label">{{__('ui.email')}}:</label>
    <input type="email" class="form-control @error('email', 'login') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
    <div id="emailHelp" class="form-text">{{__('ui.inputEmail')}}</div>
    @error('email', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="col text-end">
    <!-- Simple link -->
    <a href="{{route('password.request')}}">{{__('ui.forgotPassword')}}</a>
  </div>
</div>
  <div class="d-flex justify-content-center clearfix">
      <button type="submit" class="btn btn-info btn-rounded">{{__('ui.enter')}}</button>
  </div>
    <!-- Register buttons -->
    <div class="text-center mt-3 mb-3">
      <p>{{__('ui.notRegister')}}                        
        <a class="" data-bs-target="#modal2" data-bs-toggle="modal"
        data-bs-dismiss="modal" role="button">{{__('ui.register')}}</a></p>
      <p>{{__('ui.orRegister')}}</p>
      <a class="btn btn-primary btn-floating mx-1 fs-5" href="/auth/redirect-facebook">
        <i class="fab fa-facebook"></i>
      </a>
      <a class="btn btn-primary btn-floating mx-1 fs-5" href="/auth/redirect">
        <i class="fab fa-google"></i>
      </a>
    </div>
</form>
