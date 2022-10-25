{{-- =================  Dashboard Contents  ==================== --}}

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
                <li class=""><a href="{{ route('auctionViewIndex') }}" class="">View Auction</a></li>
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
            <a href="{{ route('account') }}" class="nav-link "><span class="pcoded-micon">
                <i class="feather icon-server"></i></span><span class="pcoded-mtext">Account Information</span></a>
        </li>
        <li class="nav-item pcoded-menu-caption">
            <label>Authentication</label>
        </li>
        <li data-username="Sample Page" class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
               <span class="pcoded-micon"><i class="feather icon-power"></i></span>
               <span class="pcoded-mtext">Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>

{{-- =================  Dashboard Contents  ==================== --}}
