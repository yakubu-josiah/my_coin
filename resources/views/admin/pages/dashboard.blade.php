@extends('partials.userLayout')
@section('title', '- Admin')

@section('content')
    <x-adminComps.dashboard>

    </x-adminComps.dashboard>

    <x-UserComps.mainContent>
        <div class="page-header">
                {{-- ======== THIS SHOULD GO IN MANUALLY ========= --}}
                <div class="page-block">
                    <div class="row align-items-center">
                    </div>
                </div>
                {{-- ======== THIS SHOULD GO IN MANUALLY ========= --}}                                     
        </div>

        <div class="main-body">
            <div class="page-wrapper">

                <div class="row">


                    <div class=" col-md-12">
                        <div class="card card-event">
                            <div class="card-block">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col">
                                        <h5 class="m-0"></h5>
                                    </div>
                                </div>

                                <h4 class="mt-3 f-w-300 font-italic"><b><span style="color:#A389D4">WELCOME!!!</span></b><sub class="text-muted f-14"></sub></h4>
                                <p> </p><h3 class="text-muted">
                                    <b>Admin dashboard </b>
                                </h3>   
                                <h6 class="text-muted mt-4 mb-0">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                                        <span class="pcoded-mtext">Sign Out</span>
                                     </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </h6>
                                <hr>
                                <a href="{{ route('adminDash') }}">View previous notifications</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </x-UserComps.mainContent>
    @include('partials.twakJS')
        
 @endsection