<li class="nav-item m-auto ms-3 me-3 clearfix">
    <form action="{{route('locale', ['locale' => $lang])}}" method='POST'>
        @csrf
        <button type="submit" class="my-flags">
            <span class="flag-icon flag-icon-{{$nation}}"></span>
        </button>

    </form>
    
</li>






    