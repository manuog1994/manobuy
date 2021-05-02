<form action="{{route('announcements.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
    <div class="mb-3">
        <label for="validationCustom04" class="form-label">{{__('ui.selectCategory')}}:</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_id"
            id="validationCustom04" required>
            {{-- <option selected>--{{__('ui.categories')}}--</option> --}}
            @foreach ($categories as $mycategory)
            <option value="{{$mycategory->id}}" {{old('mycategory') == $mycategory->id ? 'selected' : ''}}>
               @if ($loop->first)
               {{ __('ui.categories') }}
               @else
                {{__("ui.{$mycategory->name}")}}
                @endif
            </option>
            @endforeach
        </select>
        @error('option')
        <small id="nameHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
            <label for="exampleInputName" class="form-label">{{__('ui.titleAnnouncement')}}:</label>
            <input type="text" class="form-control" id="form1" aria-describedby="nameHelp"
            placeholder="" data-mdb-showcounter="true"
            maxlength="60" name="name" value="{{old('name')}}">
            <div id="nameHelp" class="form-text">{{__('ui.enterTitleAnnouncement')}}</div>
        @error('name')
        <small id="nameHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPrice" class="form-label">{{__('ui.price')}}:</label>
        <div class="input-group">
            <span class="input-group-text">&euro;</span>
            <input type="number" class="form-control" id="exampleInputPrice" name="price" value="{{old('price')}}" >
        </div>
        <div id="priceHelp" class="form-text">{{__('ui.enterPrice')}}</div>
        @error('price')
        <small id="priceHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">{{__('ui.description')}}:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="description"
            aria-describedby="descriptionHelp" minlength="50">{{old('description')}}</textarea>
        <div id="descriptionHelp" class="form-text">Introduce al menos 50 caracteres.</div>
        @error('description')
        <small id="descriptionHelp" class="form-text" style="color:red;">
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="announcementImages" class="form-label">{{__('ui.dragImages')}}</label>
        <div class="dropzone" id="drophere"></div>
        @error('content')
        <small class="form-text" style="color: red">
        </small>
        @enderror
    </div>

    <div class="d-flex justify-content-center mb-5">
        <button id="send" type="submit" class="btn btn-info btn-rounded mt-3">{{__('ui.postAnnouncement')}}</button>
    </div>
</form>