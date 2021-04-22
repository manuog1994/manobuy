  <!-- Modal -->
  <div class="modal fade" id="modalLang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header my-nav">
          <h5 class="modal-title" id="exampleModalLabel">{{__('ui.selectLang')}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-around">
            @include('layouts.nav._flags_bottons', ['lang'=>'es', 'nation'=>'es'])
            @include('layouts.nav._flags_bottons', ['lang'=>'en', 'nation'=>'gb'])
            @include('layouts.nav._flags_bottons', ['lang'=>'it', 'nation'=>'it'])
        </div>
      </div>
    </div>
  </div>