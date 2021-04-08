<div class="row">
    <div class="col-12 text-center mt-3">
        <h2>{{__('ui.lastAnnouncements')}}</h2>
    </div>
</div>
<div class="d-lg-none row">
    <div class="splide" id="">
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
<div class="d-none d-lg-block row">
    <div class="splide" id="splide">
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



