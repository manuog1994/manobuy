<!-- First modal Autentication -->
<div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="mb-2">
                    <h5 class="text-center mt-3 mb-3 fs-4 fw-bolder text-muted" style="font-family: 'Abel', sans-serif;">{{__('ui.user')}}</h5>
                    @include('auth.login')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Second modal Register -->
<div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="text-center mt-3 mb-3 fs-4 fw-bolder text-muted" style="font-family: 'Abel', sans-serif;">{{__('ui.formRegister')}}</h5>
                @include('auth.register')
            </div>
        </div>
    </div>
</div>

