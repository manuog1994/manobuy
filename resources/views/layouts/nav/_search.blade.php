<form class="d-flex input-group w-auto" action="{{ route('search') }}" method="GET">
    <input
      type="text"
      class="form-control"
      placeholder="Buscar..."
      aria-label="Search"
      name="q"
    />
    <button
      class="btn btn-outline-dark"
      type="submit"
      data-mdb-ripple-color="dark"
    >
    <i class="bi bi-search"></i>
    </button>
  </form>

