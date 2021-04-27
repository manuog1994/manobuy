{{-- Display --}}
<div class="row bg-image shadow m-auto d-none d-md-flex" style=" background-image: url('/categoriesImages/background-manobuy.jpg'); max-width:1200px;">
    <div class="col-12">
        <h2>{{__('ui.categories')}}</h2>
    </div>
    <div class="col-12">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($categories as $category)
                <div class="swiper-slide">
                    <div class="">
                        <a href="{{route('announcements.category', $category->id)}}">
                            <img src="{{$category->img}}" class="shadow rounded w-50" alt="{{$category->name}}">
                        </a>
                        <p class="fs-5">{{__("ui.{$category->name}")}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

{{-- Mobile --}}
@include('home._categoriesSlide')

