@extends('partials.layoutAdmin')
@section('title', '- Auction History')
    
@section('content')

    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="dash" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">My Coin Auction</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                <div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
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
                </div>
                <div class="slimScrollBar"
                    style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 595.2px;">
                </div>
                <div class="slimScrollRail"
                    style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                </div>
            </div>
        </div>
    </nav>


    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="dash" class="b-brand">
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

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">

                    <div class="page-header">
                    </div>

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
                </div>
            </div>
        </div>
    </div>
    @include('partials.twakJS')

@endsection