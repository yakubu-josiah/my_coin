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
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <form method="post" action="{{ route('login') }}">

                        <h3 class="mb-4">Sign up</h3>
                        <p class="mb-0 text-muted">We welcome you to our family</p>
                        <hr>
                        <p class="mb-0 text-muted"> </p>
                        <hr>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Mobile Number +27" name="phone">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="input-group mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email">
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
                        <p class="mb-0 text-muted">Already have an account? <a href="{{ route('login')}}"> Log in</a></p>
                        <!-- <p class="mb-0 text-muted"><a href="https://mca-official.live/password">Reset Password</a></p> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.twakJS')        
@endsection    
