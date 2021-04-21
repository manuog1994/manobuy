@extends('layouts.app')
@section('title', __('ui.resetPassword'))
@section('content')
<div class="row d-flex align-content-center" style="min-height: 70vh;">
    <div class="col-6 m-auto">
        <div class="card p-5">
            <h1 class="text-center mb-5">{{__('ui.forgotPassword')}}</h1>
            <form action="{{route('password.request')}}" method="POST">
                @csrf    
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example1" class="form-control" name="email"/>
                    <label for="exampleFormControlInput1" class="form-label">{{__('ui.email')}}</label>
                </div>
            
                <!-- Submit button -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-info rounded-pill">{{__('ui.send')}}</button>
                </div>
            </form>
        </div>
        <div class="col-12 mt-5 m-auto">
            <div class=" p-3">
                <p class="text-center text-muted">{{__('ui.helpResetPassword')}}</p>
            </div>
        </div>
    </div>
</div>
@endsection