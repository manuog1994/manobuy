<form class=" d-inline-flex w-100" action="{{ route('search') }}" method="GET">
    <input type="text" class="form-control" placeholder="{{__('ui.search')}}" aria-label="Search" name="q" />
    <button class="btn shadow-none" type="submit" data-mdb-ripple-color="dark">
        <i class="bi bi-search fs-6 p-0"></i>
    </button>
</form>
