<div class="accordion accordion-flush d-lg-none" id="accordionFlushExample">
    <div class="accordion-item">
        <div class="d-flex justify-content-center">
            <p class="accordion-header" id="flush-headingOne">
                <button class="accordion-button bg-transparent shadow-none collapsed my-link" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne">
                  @if (App::getLocale() == 'es')
                    <div class="flag-icon flag-icon-es"></div>
                  @elseif(App::getLocale() == 'en')
                    <div class="flag-icon flag-icon-gb"></div>
                  @else
                    <div class="flag-icon flag-icon-it"></div>
                  @endif
                </button>
            </p>
        </div>
        <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-mdb-parent="#accordionFlush">
            <div class="accordion-body">
                @include('layouts.nav._flags_bottons', ['lang'=>'es', 'nation'=>'es'])
                @include('layouts.nav._flags_bottons', ['lang'=>'en', 'nation'=>'gb'])
                @include('layouts.nav._flags_bottons', ['lang'=>'it', 'nation'=>'it'])
            </div>
        </div>
    </div>
</div>