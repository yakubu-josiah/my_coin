@extends('partials.layoutAdmin')
@section('title', '- Affiliates')
    
@section('content')
    <x-AdminComps.dashboard>
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
            </li>
            <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                <a href="https://mca-official.live/dash" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Auction</label>
            </li>
            <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                class="nav-item pcoded-hasmenu">
                <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-box"></i></span><span class="pcoded-mtext">Auction Menu</span></a>
                <ul class="pcoded-submenu">
                    <li class=""><a href="https://mca-official.live/view_auction" class="">View Auction</a></li>
                    <li class=""><a href="https://mca-official.live/payment" class="">Pay Bids</a></li>
                    <li class=""><a href="https://mca-official.live/receive" class="">Receive Payments</a></li>
                    <li class=""><a href="https://mca-official.live/chat" class="">BID Messages</a></li>



                    <li class=""><a href="https://mca-official.live/sales" class="">Sale On Auction</a></li>







                    <li class=""><a href="https://mca-official.live/bonus" class="">Bonuses</a>









                    </li>
                    <li class=""><a href="https://mca-official.live/affiliates" class="">Affiliates</a></li>
                    <li class=""><a href="https://mca-official.live/track" class="">Auction History</a></li>
                </ul>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Advanced Settings</label>
            </li>
            <li data-username="form elements advance componant validation masking wizard picker select"
                class="nav-item">
                <a href="https://mca-official.live/banking" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-file-text"></i></span><span class="pcoded-mtext">Banking
                        Details</span></a>
            </li>
            <li data-username="Table bootstrap datatable footable" class="nav-item">
                <a href="https://mca-official.live/security" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-server"></i></span><span class="pcoded-mtext">Account
                        Password</span></a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Authentication</label>
            </li>
            <li data-username="Sample Page" class="nav-item"><a href="https://mca-official.live/Login/logout"
                    class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span
                        class="pcoded-mtext">Sign Out</span></a></li>
        </ul>
    </x-AdminComps.dashboard>


        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="page-header">
                        </div>

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
                    </div>
                </div>
            </div>
        </div>
    @include('partials.twakJS')
@endsection