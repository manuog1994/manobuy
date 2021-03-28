<form action="{{route('login')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email', 'login') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
    <div id="emailHelp" class="form-text">Introduce tu email.</div>
    @error('email', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-info btn-rounded">Entrar</button>
  </div>
</form>
