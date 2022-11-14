@extends('partials.userLayout')
@section('title', '- Login')

@section('content')

    <x-HomeComps.regForm>
        <div class="card-body text-center">
            <div class="mb-4">
                <i class="feather icon-user-plus auth-icon"></i>
            </div>
            <form action="{{ route('adminRegs') }}" method="POST">
                @csrf 
                <h3 class="mb-4">Admin Registration</h3>
                <p class="mb-0 text-muted">Fill the form if you'll like to register an Admin</p>
                <hr>
                <p class="mb-0 text-muted"> </p>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{ old('firstname') }}">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{ old('lastname') }}">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Mobile Number" name="number" value="{{ old('number') }}">
                </div>
                <div class="input-group mb-4">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
                <div class="input-group mb-4">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="input-group mb-4">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                </div>
                <div class="form-group text-left">
                    <div class="checkbox checkbox-fill d-inline">
                        <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-1" checked="">
                        <label for="checkbox-fill-1" class="cr"> Save Details</label>
                    </div>
                </div>
                <div class="form-group text-left">
                    <div class="checkbox checkbox-fill d-inline">
                        <label for="checkbox-fill-2" class="cr">Mobile number must be in this format
                            (+27840000001)</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4">Sign up</button>
                    <p class="mb-0 text-muted">Here you can <a href="{{ route('adminLog') }}">Log In</a></p>
                    <!-- <p class="mb-0 text-muted"><a href="#">Reset Password</a></p> -->
                </div>
                <x-HomeComps.errorBag />
            </form>
    </x-HomeComps.regForm>
    @include('partials.twakJS')        
@endsection    
    