@extends('partials.layoutAdmin')
@section('title', '- Notice!!')

@section('content')
    <x-AdminComps.dashboard>
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
            </li>
            <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                class="nav-item active">
                <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon">
                    <i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Auction</label>
            </li>
            <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                class="nav-item pcoded-hasmenu">
                <a href="javascript:" class="nav-link "><span class="pcoded-micon">
                    <i class="feather icon-box"></i></span><span class="pcoded-mtext">Auction Menu</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=""><a href="{{ route('viewAuction') }}" class="">View Auction</a></li>
                    <li class=""><a href="{{ route('payBids') }}" class="">Pay Bids</a></li>
                    <li class=""><a href="{{ route('receivePay') }}" class="">Receive Payments</a></li>
                    <li class=""><a href="{{ route('bidMsg') }}" class="">BID Messages</a></li>
                    <li class=""><a href="{{ route('sales') }}" class="">Sale On Auction</a></li>
                    <li class=""><a href="{{ route('bonus') }}" class="">Bonuses</a></li>
                    <li class=""><a href="{{ route('affiliates') }}" class="">Affiliates</a></li>
                    <li class=""><a href="{{ route('history') }}" class="">Auction History</a></li>
                </ul>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Advanced Settings</label>
            </li>
            <li data-username="form elements advance componant validation masking wizard picker select"
                class="nav-item">
                <a href="{{ route('banking') }}" class="nav-link "><span class="pcoded-micon">
                    <i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Banking Details</span>
                </a>
            </li>
            <li data-username="Table bootstrap datatable footable" class="nav-item">
                <a href="{{ route('account') }}" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-server"></i></span><span class="pcoded-mtext">Account
                        Password</span></a>
            </li>
            <li class="nav-item pcoded-menu-caption">
                <label>Authentication</label>
            </li>
            <li data-username="Sample Page" class="nav-item">
                <a href="{{ route('login') }}" class="nav-link"><span class="pcoded-micon">
                    <i class="feather icon-power"></i></span><span class="pcoded-mtext">Sign Out</span>
                </a>
            </li>
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
                                        <h5 class="mb-3">Pay Bids</h5>
                                        Please use correct REFERENCE as indicated when paying, after paying PLEASE
                                        attach PROOF OF PAYMENT
                                        <hr>

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
