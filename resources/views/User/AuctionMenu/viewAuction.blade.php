@extends('partials.userLayout')
@section('title', '- View Auctions')
    
@section('content')
    <x-UserComps.dashboard>
        <x-UserComps.boardContent />
    </x-UserComps.dashboard>

    <x-UserComps.mainContent>
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dash"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:">All Auctions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>






        <div class="page-header">
        </div>

        <div class="main-body">
            <div class="page-wrapper">

                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-event">
                            <div class="card-block">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col">
                                        <h5 class="m-0">Next Auction Entries</h5>
                                    </div>
                                </div>
                                <h2 class="mt-3 f-w-300">
                                    
                                  450                                                  <sub
                                        class="text-muted f-14">Coins</sub>
                                </h2>
                                <h6 class="text-muted mt-4 mb-0">You can participate in event </h6>
                                <i class="fab fa-angellist text-c-purple f-50"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card">
                            <div class="card-block border-bottom">
                                <div class="row d-flex align-items-center">
                                    <div class="col-auto">
                                        <i class="feather icon-zap f-30 text-c-green"></i>
                                    </div>
                                    <div class="col">
                                        <h3 class="f-w-300 at " id="demo">TIMER WILL BE HERE</h3>
                                        <span class="d-block text-uppercase">Next Auction</span>

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
                                            08:30  Hrs
                                        </span>
                                        <span class="d-block text-uppercase">
                                            14:30  Hrs
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($auctions as $a)
                    
                    @endforeach
                </div>
            </div>
        </div>

        
    </x-UserComps.mainContent>



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

