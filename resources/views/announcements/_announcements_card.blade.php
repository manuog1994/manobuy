<div class="row ms-auto me-auto">
    @foreach ($announcements->reverse() as $announcement)
    <div class="col-12 mt-3 d-flex justify-content-center my-cont">
        <div class="card mb-3" style="width: 60%; max-width: 900px;">
            <div class="row g-0">
                <div class="col-md-4 align-self-center d-flex justify-content-center">
                    <img src="https://via.placeholder.com/286" alt="..." class="img-fluid w-100 ms-1" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">{{$announcement->name}}</h5>
                        <p class="card-text text-center">{{substr($announcement->description, 0, 150)}} <a class="text-dark"
                                href="{{route('announcements.detail', $announcement->id)}}">+info...</a></p>
                        <p class="text-end">Precio: <strong>{{$announcement->price}}&euro;</strong></p>
                        <div class="d-flex justify-content-end mt-5">
                            <a class="text-mycard text-end"
                                href="{{route('announcements.detail', $announcement->id)}}">Ir al anuncio</a>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-top: 10px">
                            <p class="text-muted">{{$announcement->category->name}}</p>
                            <p class="card-text">
                                <small class="text-muted">Creado: {{$announcement->created_at->format('d/m/Y')}}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            {{$announcements->links()}}
        </div>
    </div>
</div>