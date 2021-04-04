<!-- First modal Autentication -->
<div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header my-nav">
                <h5 class="modal-title" id="exampleModalLabel">{{__('ui.auth')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mt-5 mb-3">
                    <h5 class="mb-5">{{__('ui.notRegister')}}</h5>
                    <div class="d-flex justify-content-center mt-2 mb-3">
                        <button class="btn btn-info btn-rounded" data-bs-target="#modal2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">{{__('ui.register')}}</button>
                    </div>
                </div>
                <div class="mt-5 mb-5 border-top">
                    <h5 class="text-center mt-3 mb-5">{{__('ui.user')}}</h5>
                    @include('auth.login')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Second modal Register -->
<div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header my-nav">
                <h5 class="modal-title" id="exampleModalLabel">{{__('ui.register')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('auth.register')
            </div>
        </div>
    </div>
</div>
