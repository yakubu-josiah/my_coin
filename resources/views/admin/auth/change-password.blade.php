@extends('partials.userLayout')
@section('title', '-Admin Login')

@section('content')

    <x-HomeComps.regForm>
        <form class="form-element" method="POST" action="{{ route('vrfy-form')  }}" >
            @csrf
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-unlock auth-icon"></i>
                </div>
                <h3 class="mb-4">Change Password</h3>
                <p class="mb-0 text-muted">You can set up a new password now.</p>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="New Password" name="password" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Confirm Password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">Save Password</button>
            </div>
            <x-HomeComps.errorBag/>
        </form>
    </x-HomeComps.regForm>
    @include('partials.twakJS')
@endsection