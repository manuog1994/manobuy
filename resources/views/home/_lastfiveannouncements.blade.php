<div class="row mb-2 m-auto" style="max-width: 1200px">
    <div class="col-12 text-center mt-3">
        <h2>{{__('ui.lastAnnouncements')}}</h2>
    </div>
</div>
<div class="row">
    <div class="splide d-md-none" id="splide">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($announcements->reverse()->take(5) as $key => $announcement)
                <li class="splide__slide">
                    @include('home._card')
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="d-none d-md-flex row m-auto" style="max-width: 1200px">
    <div class="splide" id="splideAds">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($announcements->reverse()->take(5) as $key => $announcement)
                <li class="splide__slide">
                    @include('home._card')
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>



