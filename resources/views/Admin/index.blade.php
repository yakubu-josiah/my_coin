@extends('partials.layoutAdmin')
@section('title', '- Welcome!!')

@section('content')
    <x-AdminComps.dashboard>

    </x-AdminComps.dashboard>


{{-- ========================== Content Section Starts ===================== --}}

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="page-header">
                        {{-- ============= $Slot Starts ======== --}}
                        {{-- ============= $Slot Ends ======== --}} 


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
                                                        <h5 class="m-0">System Notifications</h5>
                                                    </div>
                                                </div>

                                                <h3 class="mt-3 f-w-300"><b><span style="color:#A389D4">Welcome to the My Coin Auction</span></b><sub class="text-muted f-14"></sub></h3>
                                                <p> </p><p>
                                                    <b>BY popular demand MCA is here to stay!!! </b>
                                                </p>   
                                                <h6 class="text-muted mt-4 mb-0">
                                                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Got It</a>
                                                </h6>
                                                <hr>
                                                <a href="{{ route('archived') }}">View previous notifications</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{-- ========================== Content Section Ends ===================== --}}


    @include('partials.twakJS')
        
 @endsection