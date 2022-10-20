@extends('partials.userLayout')
@section('title', '- Account Details')
    
@section('content')
    <x-UserComps.dashboard>
        <x-UserComps.boardContent />
    </x-UserComps.dashboard>

    <x-UserComps.mainContent>
        <div class="page-header"></div>
        <div class="main-body">
            <div class="page-wrapper">

                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="mb-3">Account Details</h5>
                        <hr>
                        <div class="accordion" id="accordionExample">
                            <h5 class="text-muted">Edit Contact Information</h5>
                            <form action="{{ route('accountUpdate') }}" role="form" class="forms-sample">
                                @csrf @method('PUT')
                                <x-HomeComps.errorBag/>
                                <div class="card mb-4 pb-3 border-left-primary">
                                    <div class="card-body">
                                        <label for="username" class="form-label h5">Username</label>
                                        <input type="text" class="custom-select" 
                                            name="username" value="{{ $user->username }}" readonly>
                                        <p class="text-muted font-italic ml-3">Username cannot be changed</p>
                                        
                                        <p></p>
                                        <label for="number" class="form-label h5">Mobile Number +27</label>
                                        <input type="text" class="custom-select" 
                                            name="number" value="{{ $user->number }}" >
                                        <p></p>
                                        
                                        <label for="email" class="form-label h5">Email</label>
                                        <input type="email" class="custom-select" 
                                            name="email" value="{{ $user->email }}" >
                                        <p></p>
                                        
                                        <label for="password" class="form-label h5">New Passcode</label>
                                        <input type="password" class="custom-select" 
                                            name="password">
                                        <p></p>
                                        
                                        <button type="submit" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Update Changes</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-UserComps.mainContent>
    @include('partials.twakJS')

@endsection