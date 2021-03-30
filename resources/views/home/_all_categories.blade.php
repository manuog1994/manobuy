<div class="row rounded d-flex justify-content-around mt-3 mb-5 ms-auto me-auto" style="max-width: 60%;">
    <h2 class="text-center mb-5">Categorías</h2>
    @foreach($categories as $category)
    <div class="col-sm-12 col-md-6 col-lg-3 div-img">
        <a href="{{route('announcements.category', $category->id)}}">
            <img src="{{$category->img}}" class="card img shadow" style="width: 95%;" alt="..."></a>
        <p class="text">{{$category->name}}</p>
    </div>
    @endforeach
</div>