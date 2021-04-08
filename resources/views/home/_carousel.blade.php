<div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
      @foreach ($announcement->images as $image)
      <div class="carousel-item  @if($loop->first) active @endif">
        <img
          src="{{$image->getUrl(800,500)}}"
          class="d-block w-100"
          alt="..."
        >
      </div>
      @endforeach
    </div>
  </div>

