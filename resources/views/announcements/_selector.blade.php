<div class="row d-flex justify-content-center mt-5">
    <div class="col-12 col-lg-8">
        <select class="form-select form-select-lg" aria-label=".form-select-lg example" onchange="location = this.value;">
             @foreach ($categories as $mycategory)
            <option value="{{$mycategory->id}}" {{Route::current()->id == $mycategory->id ? 'selected' : ''}}>
                <a href="{{route('announcements.category', $mycategory->id)}}">{{__("ui.{$mycategory->name}")}}</a>
            </option>
            @endforeach
        </select>
    </div>
</div>
        
        
        
        