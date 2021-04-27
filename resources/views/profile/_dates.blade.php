    <div class="col-12 col-md-6 m-auto">
        <div class="card text-center p-3">
            <h3 class="text-center mb-4">{{__('ui.myDates')}}</h3>
            @include('auth.update')
            <div class="form-outline mt-3 mb-3 d-md-none">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-info rounded-pill" type="submit">{{__('ui.logout')}}</button>
                </form>
            </div>
        </div>
    </div>
