<form action="{{route('home')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
            placeholder="No introduzcas un nombre como 'Vendo consola...'" name="name">
        <div id="nameHelp" class="form-text">Introduce el nombre del producto que quieres vender.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPrice" class="form-label">Precio</label>
        <input type="number" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp" placeholder=""
            name="price">
        <div id="priceHelp" class="form-text">Introduce el precio del producto.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputName" class="form-label"></label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="categories[]">
            <option selected>Selecciona una categoría</option>
            @foreach ($categories as $mycategory)
            <option value="{{$mycategory->id}}">{{$mycategory->name}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-5">
        <button type="submit" class="btn btn-primary mt-3">Publicar anuncio</button>
    </div>
</form>
