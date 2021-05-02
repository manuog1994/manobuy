{{-- Display --}}
<div class="row bg-image shadow m-auto d-flex" style=" background-image: url('/categoriesImages/background-manobuy.jpg'); max-width:1200px;">
    <div class="col-12 mt-2">
        <h2>{{__('ui.categories')}}</h2>
    </div>
    <div class="splide" id="splideCategoryFull">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($categories as $category)
                <li class="splide__slide">
                    <div class="div-img text-center">
                        <a href="{{route('announcements.category', $category->id)}}">
                            <img src="{{$category->img}}" class="card img shadow-none bg-transparent" alt="{{$category->name}}"></a>
                        <p class="estilo-x mt-1">{{__("ui.{$category->name}")}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

{{-- Mobile --}}

