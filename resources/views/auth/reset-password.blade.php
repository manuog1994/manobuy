@extends('layouts.app')
@section('title', __('ui.resetPassword'))
@section('content')
<div class="row mt-5">
    <div class="col-6 mt-5 m-auto">
        <div class="card p-5 mt-5">
            <h1 class="text-center mb-3">{{__('ui.enterCredentials')}}</h1>
            <form action="{{route('password.update')}}" method="POST" class="mt-3">
                @csrf    
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example1" class="form-control" name="email"/>
                    <label for="exampleFormControlInput1" class="form-label">{{__('ui.email')}}</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="form1Example1" class="form-control" name="password"/>
                    <label for="exampleFormControlInput1" class="form-label">{{__('ui.newPassword')}}</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="form1Example1" class="form-control" name="password_confirmation"/>
                    <label for="exampleFormControlInput1" class="form-label">{{__('ui.confirmNewPassword')}}</label>
                </div>
                <input type="text" value="{{$token}}" name="token" hidden>
            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">{{__('ui.send')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection