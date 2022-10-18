@extends('partials.layoutAdmin')
@section('title', 'Your Dashboard')
    
    

@section('content')
    
    <x-AdminComps.dashboard></x-AdminComps.dashboard>
    
    <x-AdminComps.mainContent>
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                </div>
            </div>
        </div>

        <div class="main-body">
            <div class="page-wrapper">

                <div class="row">
                    <div class="col-md-12 col-xl-4 ">
                        <div class="card card-event">
                            <div class="card-block">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-sm-12">
                                        <h5 class="m-0">Archived System Notifications</h5>
                                    </div>
                                </div>
                                <h6 class="text-muted mt-4 mb-0"><a href="{{ route('dashboard') }}"
                                        class="btn btn-secondary">Go To Dashboard</a></h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12">


                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a href="#!" class="collapsed" data-toggle="collapse" data-target="#1"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            HAPPY NEW MONTH OF JULY TO ALL MEMBERS
                                        </a>
                                    </h5>
                                </div>
                                <div id="1" class="card-body collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    GOD BLESS YOU ALL.. HAPPY EARNINGS TO ALL THE MEMBERS OF MCA .WE APPRECIATE
                                    THE VALUE OF SUPPORT YOUR SHOWING US ????????

                                    STAY SAFE AND PROTECTED ????<p></p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </x-AdminComps.mainContent>

    @include('partials.twakJS')

@endsection
