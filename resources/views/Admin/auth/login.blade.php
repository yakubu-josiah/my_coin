@extends('partials.userLayout')
@section('title', '-Admin Login')

@section('content')

    <x-HomeComps.regForm>
        <form class="form-element" method="POST" action="{{ route('adminSubmitLogin') }}" >
            @csrf
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-users auth-icon"></i>
                </div>
                <h3 class="mb-4">Admin Login</h3>
                <p class="mb-0 text-muted"> </p>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ old('email') }}" placeholder="Email" name="email" required>
                    
                </div>
                <div class="input-group mb-2">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <p class="mb-0 text-right"> <a href="{{ route('password.request') }}" class="mb-0 text-muted"> Forgot Password?</a></p> 
                <div class="form-group text-left">
                    <div class="checkbox checkbox-fill d-inline">
                        <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                        <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                <p class="mb-2 text-muted">Need new Admin Account? <a href="{{ route('adminReg') }}">Signup</a></p>
            </div>
            <x-HomeComps.errorBag/>

        </form>
    </x-HomeComps.regForm>
    @include('partials.twakJS')
@endsection