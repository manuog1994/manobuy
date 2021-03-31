<div class="row d-flex justify-content-center align-items-center mt-3 ms-auto me-auto" style="max-width: 90%;">
    <h2 class="text-center mb-3">Anuncios Recientes</h2>
    @foreach ($announcements->reverse()->take(5) as $announcement)
    <div class="col-12 col-lg-2 col-md-3 col-sm-4 m-2 d-flex justify-content-center my-cont">
        <div class="card image shadow">
            <img src="https://via.placeholder.com/286" class="card-img-top" width="100%" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$announcement->name}}</h5>
                <p class="card-text">{{substr($announcement->description, 0, 20)}}...</p>
                <p class="text-end">Precio: <strong>{{$announcement->price}}&euro;</strong></p>
            </div>
            <div class="middle">
                <a class="text-mycard" href="{{route('announcements.detail', $announcement->id)}}">Ir al anuncio</a>
            </div>
        </div>
    </div>
    @endforeach
</div>