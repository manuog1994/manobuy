<a class="nav-link dropdown-toggle my-link text-light ms-2 d-none d-lg-block" href="#" id="navbarDropdown" role="button"
    data-mdb-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-list my-iconsize"></i>
</a>
<!-- Dropdown menu -->
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    @foreach ($categories as $category)
    <li><a class="dropdown-item"
            href="{{route('announcements.category', $category->id)}}">{{__("ui.{$category->name}")}}</a></li>
    @endforeach
</ul>
