@extends('partials.userLayout')

@section('content')
    <x-HomeComps.regForm>
        <div class="card-body ">
            <div class="card-header"><i class="feather icon-lock auth-icon mb-0"></i> {{ __('Reset Password') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row mb-6">
                        <label for="email" class="col-md-6 col-form-label text-md-end mb-2">{{ __('Email Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group text-left ">
                        <div class="col-md-6 mt-4">
                            <button type="submit" class="btn btn-info shadow-2">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-HomeComps.regForm>          
@endsection
