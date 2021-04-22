<div class="row mb-5">
  <div class="col-6 m-auto text-center mt-3 card p-5">
    <h3 class="text-center mb-4">{{__('ui.myDates')}}</h3>
      <div class="form-outline mb-3">
        <input disabled type="text" id="typeText" class="form-control" value="{{Auth::user()->name}}" />
        <label class="form-label" for="typeText">{{__('ui.fullName')}}</label>
      </div>
      <div class="form-outline mb-3">
        <input disabled type="email" id="typeEmail" class="form-control" value="{{Auth::user()->email}}"/>
        <label class="form-label" for="typeEmail">{{__('ui.email')}}</label>
      </div>
      <div class="form-outline mb-3">
        <input disabled type="number" id="typePhone" class="form-control" value="{{Auth::user()->phone}}"/>
        <label class="form-label" for="typePhone">{{__('ui.phone')}}</label>
      </div>
      <div class="d-flex justify-content-center clearfix">
    </div>
  </div>
</div>


