<!-- First modal Autentication -->
<div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Autentificación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <h5 class="mb-5">Si aún no estas registrado, registrate</h5>
                    <div class="d-flex justify-content-center mt-2 mb-3">
                        <button class="btn btn-primary" data-bs-target="#modal2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Regístrate</button>
                    </div>
                </div>
                <div class="text-center mt-3 mb-3 border-top">
                    <h5 class="mt-3 mb-5">O si estas registrado, inicia sesión</h5>
                    <div class="d-flex justify-content-center mt-2 mb-3">
                        <button class="btn btn-primary" data-bs-target="#modal3" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Inicia sesión</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Second modal Register -->
<div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Regístrate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('auth.register')
            </div>
        </div>
    </div>
</div>
<!-- Third modal Login -->
<div class="modal fade" id="modal3" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicia sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('auth.login')
            </div>
        </div>
    </div>
</div>