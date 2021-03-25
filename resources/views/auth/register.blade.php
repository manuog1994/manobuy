<form action="{{route('register')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="José Gómez López" name="name">
    <div id="nameHelp" class="form-text">Introduce tu nombre completo.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email">
    <div id="emailHelp" class="form-text">Introduce tu email.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
    <label for="exampleInputPassword1" class="form-label">Confirma tu contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
  </div>
  <div class="d-flex justify-content-center mb-5">
      <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>