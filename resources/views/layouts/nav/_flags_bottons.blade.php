    <li class="nav-item m-auto ms-3 me-3">
        <form action="{{route('locale', ['locale' => $lang])}}" method='POST'>
            @csrf
            <button type="submit" class="btn btn-outline-white rounded-pill">
                <span class="flag-icon flag-icon-{{$nation}}"></span>
            </button>

        </form>
    </li>



    