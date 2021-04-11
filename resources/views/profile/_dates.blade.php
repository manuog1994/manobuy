<div class="col-12 m-auto text-center mt-3">
    <div class="card bg-light mb-3" style="max-width: 1500px">
        <h1 class="card-header">{{__('ui.myprofile')}}</h1>
        <div class="card-body">
          <h5 class="card-title">{{__('ui.dates')}}</h5>
          <p class="">
            {{__('ui.name')}}{{auth()->user()->name}}
          </p>
          <p class="">
            {{__('ui.email')}}: {{auth()->user()->email}}
          </p>
          <p>{{__('ui.phone')}} {{auth()->user()->phone}}</p>
        </div>
    </div>
</div>