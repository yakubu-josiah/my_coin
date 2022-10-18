@extends('partials.layoutAdmin')
@section('title', '- Affiliates')
    
@section('content')
    <x-AdminComps.dashboard>
        <x-AdminComps.boardContent />
    </x-AdminComps.dashboard>

    <x-AdminComps.mainContent>
        <div class="page-header"></div>
        <div class="main-body">
            <div class="page-wrapper">

                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card daily-sales">
                            <div class="card-block">
                                <h6 class="mb-4">Monthly Top Sponsor ID (Earns R 1000 Bonus Coins)</h6>
                                <div class="row d-flex align-items-center">
                                    <div class="col-9">
                                        <h3 class="f-w-300 d-flex align-items-center m-b-0"><i
                                                class="feather icon-arrow-up text-c-green f-30 m-r-10"></i><a
                                                href=""></a></h3>
                                    </div>
                                    <div class="col-3 px-1 text-right">
                                        <p class="m-b-0"><a href=""> Recruits </a></p>
                                    </div>
                                </div>
                                <div class="progress m-t-30" style="height: 7px;">
                                    <div class="progress-bar progress-c-theme" role="progressbar"
                                        style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <div class="card Monthly-sales">
                            <div class="card-block">
                                <h6 class="mb-4">My Affiliates</h6>
                                <div class="row d-flex align-items-center">
                                    <div class="col-9">
                                        <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i
                                                class="feather icon-arrow-up text-c-green f-30 m-r-10"></i> 0
                                        </h3>
                                    </div>
                                    <div class="col-3 px-1 text-right">
                                        <p class="m-b-3 ">Affiliates</p>
                                    </div>
                                </div>
                                <div class="progress m-t-30" style="height: 7px;">
                                    <div class="progress-bar progress-c-theme2" role="progressbar"
                                        style="width: 100%;" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 col-xl-4">
                        <div class="card yearly-sales">
                            <div class="card-block">
                                <h6 class="mb-4">My Sponsor ID</h6>
                                <div class="row d-flex align-items-center">
                                    <div class="col-9">
                                        <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i
                                                class="feather icon-arrow-right text-c-green f-30 m-r-10"></i>
                                            100
                                        </h3>
                                    </div>
                                    <div class="col-3 text-right">
                                        <p class="m-b-0">For Bonus</p>
                                    </div>
                                </div>
                                <div class="progress m-t-30" style="height: 7px;">
                                    <div class="progress-bar progress-c-theme" role="progressbar"
                                        style="width: 100%;" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h5 class="mb-3">My Affiliates</h5>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </x-AdminComps.mainContent>

    @include('partials.twakJS')
@endsection