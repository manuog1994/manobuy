<div class="row bg-image m-auto shadow p-3" style=" background-image: url('/categoriesImages/background-manobuy.jpg'); max-width: 1200px;">
    <div class="col-12 text-center">
        <h1 class="mt-2 text-dark" hidden>{{__('ui.welcome')}}<span class="iconNav"><i
                    class="bi bi-megaphone p-1 rounded mt-2 ms-1 me-2 text-muted" hidden></i>Mano<span
                    class="text-warning" hidden>Buy</span></span>
        </h1>
        <h2 class="mt-1 text-muted d-block">{{__('ui.answer1')}}</h2>
    </div>
   <p class="text-body mb-5 d-block">{{__('ui.introduction')}}</p>
    <div class="splide d-none d-md-flex" id="splideCategoryFull">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($categories as $category)
                <li class="splide__slide">
                    <div class="div-img">
                        <a href="{{route('announcements.category', $category->id)}}">
                            <img src="{{$category->img}}" class="card img shadow-none bg-transparent" style="width: 100px;" alt="{{$category->name}}"></a>
                        <p class="mt-1 estilo-x">{{__("ui.{$category->name}")}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

