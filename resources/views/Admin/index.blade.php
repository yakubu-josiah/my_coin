@extends('partials.layoutAdmin')
@section('title', '- Welcome!!')

@section('content')
{{-- ========================== NavbarHead Start ===================== --}}
        <nav class="pcoded-navbar">
            <div class="navbar-wrapper">
                <div class="navbar-brand header-logo">
                    <a href="{{ route('dashboard') }}" class="b-brand">
                        <div class="b-bg">
                            <i class="feather icon-trending-up"></i>
                        </div>
                        <span class="b-title">My Coin Auction</span>
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
                    </div>

                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);"><div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                    {{-- ==================== Dashboard Navigation -- to -- Sign Out View Start =================== --}}

                    {{-- ==================== Dashboard Navigation -- to -- Sign Out View End =================== --}}
                    
                    </div>
                <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 595.2px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    

            </div>
        </nav>



        <header class="navbar pcoded-header navbar-expand-lg navbar-light">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
                <a href="{{ route('dashboard') }}" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">My Coin Auction</span>
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="javascript:">
                <i class="feather icon-more-horizontal"></i>
            </a>
            <div class="collapse navbar-collapse">
            </div>
        </header>

{{-- ========================== NavbarHead End ===================== --}}


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