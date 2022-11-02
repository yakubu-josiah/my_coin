{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


@extends('partials.userLayout')
@section('title', '- Login')

@section('content')

    <x-HomeComps.regForm>
        <form class="form-element" method="POST" action="{{ route('login') }}" >
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
                {{-- <!--<p class="mb-2 text-muted">Forgot password? <a href="#">Reset</a></p>--> --}}
                <p class="mb-2 text-muted">Don't have an account?  <a href="{{ route('register') }}">Signup</a></p>
                {{-- <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="#">Signup</a></p> --> --}}
            </div>
            <x-HomeComps.errorBag/>

        </form>
    </x-HomeComps.regForm>
    @include('partials.twakJS')
@endsection