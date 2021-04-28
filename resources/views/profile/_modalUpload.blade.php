<!-- Modal -->
<div class="modal fade" id="modalUpload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close text-end" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="text-center">
                    <h2>Selecciona tu imagen</h2>
                </div>
                <div class="p-5">
                    @auth
                    <form action="{{route('upload.image', auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="imgProfile">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="mb-3 m-auto">
                            <button type="submit" class="btn btn-info rounded-pill">{{__('ui.send')}}</button>
                        </div>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
