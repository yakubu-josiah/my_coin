@extends('partials.layoutAdmin')
@section('title', '- Login')

@section('content')

    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <form class="form-element" method="GET" action="{{ route('dashboard') }}" >
                    @csrf
                    <!-- <input type="hidden" name="form_name" value="loginform"> -->
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                    <h3 class="mb-4">Login</h3>
                    <p class="mb-0 text-muted"> </p>
                    <hr>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" required="">
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" placeholder="Password" name="password" required="">
                    </div>
                    <p class="mb-0 text-right"> <a href="{{ route('password.request') }}" class="mb-0 text-muted"> Forgot Password?</a></p> 
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4">Login</button>
                    {{-- <!--<p class="mb-2 text-muted">Forgot password? <a href="https://mca-official.live/password">Reset</a></p>--> --}}
                    <p class="mb-2 text-muted">Don't have an account?  <a href="{{ route('signUp') }}">Signup</a></p>
                    {{-- <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="https://mca-official.live/signup">Signup</a></p> --> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('partials.twakJS')
@endsection