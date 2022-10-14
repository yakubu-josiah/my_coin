@extends('partials.layoutAdmin')
@section('title', '- See Bonuses!!')

@section('content')
    <x-AdminComps.dashboard>
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
            </li>
            <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                class="nav-item active">
                <a href="https://mca-official.live/dash" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Auction</label>
            </li>
            <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                class="nav-item pcoded-hasmenu">
                <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-box"></i></span><span class="pcoded-mtext">Auction
                        Menu</span></a>
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
                                <div class="col-sm-12">
                                    <h5 class="mb-3">Bonuses</h5>
                                    <hr>

                                </div>
                            </div>
                            <div class="row">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.twakJS')
 

@endsection