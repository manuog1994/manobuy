<div class="row mt-3 mb-5 m-auto d-none d-md-flex justify-content-around" style="max-width: 1300px">
    <h2 class="text-center mb-5">{{__('ui.categories')}}</h2>
    @foreach($categories as $category)
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 div-img">
        <a href="{{route('announcements.category', $category->id)}}">
            <img src="{{$category->img}}" class="card img shadow" style="width: 95%;" alt="..."></a>
        <p class="text">{{__("ui.{$category->name}")}}</p>
    </div>
    @endforeach
</div>
<div class="row d-md-none mt-5"> 
    <h2 class="text-center mb-5">{{__('ui.categories')}}</h2>
      <div class="splide" id="splideCategory">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($categories as $category)
                <li class="splide__slide">
                    <div class="col-6 m-auto div-img">
                        <a href="{{route('announcements.category', $category->id)}}">
                            <img src="{{$category->img}}" class="card img shadow w-100 m-auto" style="" alt="..."></a>
                            <p class="text">{{__("ui.{$category->name}")}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div> 

