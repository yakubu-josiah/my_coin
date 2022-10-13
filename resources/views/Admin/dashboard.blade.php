@extends('partials.layoutAdmin')
@section('title', '- Your Dashboard')

@section('content')

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
            <div class="slimScrollDiv"
                style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                <div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                    <ul class="nav pcoded-inner-navbar">
                        <li class="nav-item pcoded-menu-caption">
                            <label>Navigation</label>
                        </li>
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item active">
                            <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
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
                            <a href="{{ route('banking') }}" class="nav-link "><span class="pcoded-micon"><i
                                        class="feather icon-file-text"></i></span><span class="pcoded-mtext">Banking
                                    Details</span></a>
                        </li>
                        <li data-username="Table bootstrap datatable footable" class="nav-item">
                            <a href="{{ route('account') }}" class="nav-link "><span class="pcoded-micon"><i
                                        class="feather icon-server"></i></span><span class="pcoded-mtext">Account
                                    Password</span></a>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Authentication</label>
                        </li>
                        <li data-username="Sample Page" class="nav-item"><a href="{{ route('login') }}"
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
        <div class="collapse navbar-collapse"></div>
    </header>



    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">

                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Welcome to My Coin Auction</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dash"><i
                                                    class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">home of
                                                Doney                                                </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-body">
                        <div class="page-wrapper">

                            <div class="row">

                                <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Bids Income</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i
                                                            class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>R
                                                        0                                                        </h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">
                                                        0 Coins
                                                    </p>
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
                                            <h6 class="mb-4">Bonus Income</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-6">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i
                                                            class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>R
                                                        0                                                        
                                                    </h3>
                                                </div>
                                                <div class="col-6 text-right withdraw_button">
                                                    <p class="m-b-0">
                                                        0 Coins
                                                    </p>
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
                                            <h6 class="mb-4">Sponsor ID</h6>
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


                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Recent Bids </h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>

                                                        



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-6">
                                    <div class="card card-event">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">Next Auction Entries</h5>
                                                </div>
                                            </div>
                                            <h2 class="mt-3 f-w-300">
                                                
                                                2250                                                  <sub
                                                    class="text-muted f-14">Coins</sub>
                                            </h2>
                                            <h6 class="text-muted mt-4 mb-0">You can participate in event </h6>
                                            <h6 class="text-muted mt-4 mb-0">You have
                                                0 coins on sale
                                            </h6>
                                            <h6 class="text-muted mt-4 mb-0">


                                                <script type="text/javascript" async=""
                                                    src="//www.supercounters.com/fc.php?id=1577685&amp;w=1&amp;v=1&amp;ua=Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F91.0.4472.77%20Safari%2F537.36&amp;url=https%3A%2F%2Fmycoin.life%2Fdash&amp;ref=https%3A%2F%2Fmycoin.life%2Fsecurity&amp;sw=1536&amp;sh=864&amp;rand=53&amp;label=Users Online&amp;fcolor=#000000"></script>
                                                <!--<script type="text/javascript" src="https://widget.supercounters.com/ssl/online_t.js"></script>-->

                                                <!--<a href="http://www.supercounters.com/stats/1577685"-->
                                                <!--    title="Real-time web tracking from supercounters"-->
                                                <!--    target="_blank">-->
                                                <!--    <font color=""></font>-->
                                                <!--</a>-->

                                                <!--<script type="text/javascript">sc_online_t(1577685,"Users Online","#000000");</script>-->

                                                <br><noscript></noscript>
                                            </h6>
                                            <i class="fas fa-gavel text-c-purple f-50"></i>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-zap f-30 text-c-green"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300 at" id="demo"></h3>
                                                    <span class="d-block text-uppercase">Next Auction</span>
                                                    <script type="text/javascript">
                                                        // Set the date we're counting down to
                                                        var countDownDate = new Date("May 31, 2021 09:00:00").getTime();

                                                        // Update the count down every 1 second
                                                        var x = setInterval(function () {

                                                            // Get today's date and time
                                                            var now = new Date().getTime();

                                                            // Find the distance between now and the count down date
                                                            var distance = countDownDate - now;

                                                            // Time calculations for days, hours, minutes and seconds
                                                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                            // Display the result in the element with id="demo"
                                                            document.getElementById("demo").innerHTML = + hours + "h "
                                                                + minutes + "m " + seconds + "s ";

                                                            // If the count down is finished, write some text
                                                            if (distance < 0) {
                                                                clearInterval(x);
                                                                document.getElementById("demo").innerHTML = "OPEN NOW";
                                                            }
                                                        }, 1000);
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-map-pin f-30 text-c-blue"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300">Daily Auction Times</h3>
                                                    <span class="d-block text-uppercase">
                                                        06:30  Hrs
                                                    </span>
                                                    <span class="d-block text-uppercase">
                                                        18:30  Hrs
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-link-2 f-30 text-c-blue"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300">Social Groups</h3>
                                                    <span class="d-block text-uppercase"><a
                                                            href="#" target="_blank">Join
                                                            Telegram</a></span>
                                                    <span class="d-block text-uppercase"><a
                                                            href="" target="_blank">Join
                                                            WhatsApp</a></span>
                                                    <span class="d-block text-uppercase"><a
                                                            href="" target="_blank">Join
                                                            Facebook</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="card card-event">-->
                                    <!--    <div class="card-block">-->
                                    <!--        <div class="row align-items-center justify-content-center">-->
                                    <!--            <div class="col">-->
                                    <!--                <h5 class="m-0">Happy with our services?</h5>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <h2 class="mt-3 f-w-300">Help Us<sub class="text-muted f-14"></sub></h2>-->
                                    <!--        <h6 class="text-muted mt-4 mb-0">To keep this beautiful platform alive,-->
                                    <!--            please donate</h6>-->
                                    <!--        <h6 class="text-muted mt-4 mb-0">Donate BTC to : <a href="">-->
                                    <!--                -->
                                    <!--            </a></h6>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            setInterval(timestamp, 1000);
            setInterval(timestampa, 1000);
            // timestampa();
        });

        function timestamp() {
            $.ajax({
                url: 'https://mca-official.live/member/current_time',
                method: 'GET',
                success: function (data) {
                    // console.log(data);
                    $('.current').html(data);
                }
            })
        }


        function timestampa() {
            $.ajax({
                url: 'https://mca-official.live/member/auction_times',
                method: 'GET',
                success: function (data) {
                    //  console.log(data);
                    if (data == 0) {
                        $('.at').html('Open Now');
                    }
                    else if (data == 3) {
                        $('.at').html('Tomorrow ');
                    }
                    else {
                        $('.at').html(data);

                    }
                }
            })
        }
    </script>
    
    <script>
        
        $(document).ready(function(){
            $.get(
                'https://mca-official.live/member/bonus_withdrawl_status',function( data ){
                    var data  =  JSON.parse(data);
                    if(data.withdrawal_status == 'open'){
                        $('.withdraw_button').html('<span onclick="withdraw_bonus()" class="label theme-bg  text-white f-12">Withdraw</span>');
                    }
                }
                )
        })
        
        
        function withdraw_bonus(){
            var withdraw = confirm('Request Bonus Withdraw');
            
            if(withdraw){
                $.get(
                    'https://mca-official.live/member/final_withdraw',function(data){
                        
                        var data = JSON.parse(data);
                        console.log(data);
                        
                            swal(data.type,data.msg,data.type);
                        if(data.type == 'success'){
                    //  window.location.reload();
                        setTimeout(function () {
                                location.reload(true);
                            }, 4000);
                        }
                        
                    }
                    );
            }
        }
        
    </script>
    @include('partials.twakJS')

@endsection
