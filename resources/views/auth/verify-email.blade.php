@extends('partials.userLayout')
@section('title', '- Email Verification')

@section('content')

    <x-HomeComps.regForm>
            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('dashboard') }}" class="b-brand ">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title text-secondary">My Coin Auction</span>
                </a>
            </div> 
            <div class="card-body text-center">
            
            

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 p-4 font-medium text-sm text-success">
                    {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="btn btn-primary shadow-2 mb-4">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('profile.show') }}" class="btn btn-link">
                        {{ __('Edit Profile') }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf

                        <button type="submit" class="btn underline text-sm text-gray-600 hover:text-gray-900 ml-2 rounded">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </x-HomeComps.regForm>
@include('partials.twakJS')
@endsection
