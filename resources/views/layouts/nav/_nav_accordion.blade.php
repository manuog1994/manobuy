<div class="accordion accordion-flush d-lg-none" id="accordionFlushExample">
    <div class="accordion-item">
        <div class="d-flex justify-content-center">
            <p class="accordion-header" id="flush-headingOne">
                <button class="accordion-button bg-transparent shadow-none collapsed my-link" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    {{__('ui.categories')}}
                </button>
            </p>
        </div>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-mdb-parent="#accordionFlushExample">
            <div class="accordion-body">
                @foreach ($categories as $category)
                <li><a class="my-link" href="{{route('announcements.category', $category->id)}}">{{__("ui.{$category->name}")}}</a>
                </li>
                @endforeach
            </div>
        </div>
    </div>
</div>
