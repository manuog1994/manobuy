<form class="d-flex w-auto" action="{{ route('search') }}" method="GET">
    <input type="text" class="form-control" placeholder="{{__('ui.search')}}" aria-label="Search" name="q" />
    <button class="btn btn-outline-info" type="submit" data-mdb-ripple-color="dark">
        <i class="bi bi-search"></i>
    </button>
</form>
