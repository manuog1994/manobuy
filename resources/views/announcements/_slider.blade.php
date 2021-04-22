<div id="secondary-slider" class="splide">
	<div class="splide__track">
		<ul class="splide__list">
            @if ($announcement->images->count() == 0)
            <li class="splide__slide text-center">
                <img src="{{$announcement->img}}500" style="max-width: 800px" alt="{{$announcement->name}}">
            </li>
            @else
            @foreach ($announcement->images as $image)
            <li class="splide__slide text-center">
                <img src="{{$image->getUrl(800,500)}}" class=" w-75" style="max-width: 800px" alt="..." >
            </li>
            @endforeach
            @endif
        </ul>
	</div>
</div>
