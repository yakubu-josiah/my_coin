@extends('partials.userLayout')
@section('title', '-Admin Login')

@section('content')

    <x-HomeComps.regForm>
        <form class="form-element" method="POST" action="{{ route('adminLog')  }}" >
            @csrf
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-lock auth-icon"></i>
                </div>
                <h3 class="mb-4">Email Verification</h3>
                <p class="mb-0 text-muted"> Forgot your password? Provide your email address of your account and you will be allowed to reset your password.</p>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ old('email') }}" placeholder="Email" name="email" required>
                    
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">Reset Password</button>
                <p class="mb-2 text-muted">Remember account information? <a href="{{ route('adminLog') }}">Log In</a></p>
            </div>
            <x-HomeComps.errorBag/>

        </form>
    </x-HomeComps.regForm>
    @include('partials.twakJS')
@endsection