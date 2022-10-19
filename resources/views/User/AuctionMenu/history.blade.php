@extends('partials.layoutAdmin')
@section('title', '- Auction History')
    
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
                        <h5 class="mb-3">Auction History</h5>
                        <hr>
                        <div class="col-xl-12 col-md-12 m-b-30">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Sold</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Bought</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                        role="tab" aria-controls="contact" aria-selected="false">Bonus</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Coins</th>
                                                <th>Date</th>
                                                <th>BID #</th>
                                                <th class="text-right">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>





                                        </tbody>
                                    </table>
                                </div>




                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Coins</th>
                                                <th>Date</th>
                                                <th>BID #</th>
                                                <th class="text-right">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Coins</th>
                                                <th>Date</th>
                                                <th>From</th>
                                                <th class="text-right">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </x-UserComps.mainContent>

    @include('partials.twakJS')

@endsection