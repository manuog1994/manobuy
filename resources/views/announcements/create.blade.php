<form action="{{route('announcements.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
            placeholder="No introduzcas un nombre como 'Vendo consola...'" name="name" value="{{old('name')}}">
        <div id="nameHelp" class="form-text">Introduce el nombre del producto que quieres vender.</div>
        @error('name')
        <small id="nameHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPrice" class="form-label">Precio</label>
        <input type="number" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp" placeholder=""
            name="price" value="{{old('price')}}">
        <div id="priceHelp" class="form-text">Introduce el precio del producto.</div>
        @error('price')
        <small id="priceHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="validationCustom04" class="form-label"></label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_id"
            id="validationCustom04" required>
            <option selected>Selecciona una categoría</option>
            @foreach ($categories as $mycategory)
            <option value="{{$mycategory->id}}" {{old('mycategory') == $mycategory->id ? 'selected' : ''}}>
                {{$mycategory->name}}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">Por favor seleccione una categoría</div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
            aria-describedby="descriptionHelp">{{old('description')}}</textarea>
        @error('description')
        <small id="descriptionHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputImage" class="form-label">Arrastre sus imágenes</label>
        <div class="dropzone" id="drophere"></div>
        @error('image')
        <small id="imageHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>

    <div class="d-flex justify-content-center mb-5">
        <button id="send" type="submit" class="btn btn-info btn-rounded mt-3">Publicar anuncio</button>
    </div>
</form>
