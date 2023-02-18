@extends('partials.userLayout')
@section('title', '-Admin Login')

@section('content')

    <x-HomeComps.regForm>
        <form class="form-element" method="POST" action="{{ route('vrfy-code', [$userId->id])  }}" >
            @csrf
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-mail auth-icon"></i>
                </div>
                <h3 class="mb-4">Verification Code</h3>
                <p class="mb-0 text-muted">A verification code was sent to the email provided, kindly input the code below to continue password reset.</p>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ old('email') }}" placeholder="code here.." name="token" required>
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">Verify Code</button>
            </div>
            <x-HomeComps.errorBag/>
        </form>
    </x-HomeComps.regForm>
    @include('partials.twakJS')
@endsection