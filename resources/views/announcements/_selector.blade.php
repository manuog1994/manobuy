<div class="col-12 p-3">
    <select class="form-select form-select-lg" aria-label=".form-select-lg example"
        onchange="location = this.value;">
        @foreach ($categories as $category)
        <option value="{{route('announcements.category', $category->id)}}"
            {{Route::current()->id == $category->id ? 'selected' : ''}}>
            <a href="{{route('announcements.category', $category->id)}}">{{__("ui.{$category->name}")}}</a>
        </option>
        @endforeach
    </select>
</div>

