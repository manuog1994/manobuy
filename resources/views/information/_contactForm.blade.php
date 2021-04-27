<div class="modal" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close text-end" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <h1 class="mb-3">{{__('ui.contactForm')}}</h1>
                <form action="{{route('contact')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">{{__('ui.affair')}}</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="affair"></textarea>
                    </div>
                    <button class="btn btn-info rounded-pill" type="submit">{{__('ui.send')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
