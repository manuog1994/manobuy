<div class="row">
    <div class="col-md-4 d-flex align-content-center">
        <form action="{{route('locale', ['locale' => $lang])}}" method='POST'>
            @csrf
            <button type="submit" class="my-flags">
                <span class="fs-1 my-btnFlags flag-icon flag-icon-{{$nation}}"></span>
            </button>
        </form>
        <p>{{$lang}}</p>
    </div>
</div>

