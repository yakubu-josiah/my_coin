@extends('partials.layoutAdmin')
@section('title', '- Payments Received')

@section('content')
    <x-AdminComps.dashboard>
        <x-AdminComps.boardContent />
    </x-AdminComps.dashboard>


    <x-AdminComps.mainContent>
        <div class="page-header"></div>

        <div class="main-body">
            <div class="page-wrapper">

                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="mb-3">Receive Bids</h5>
                        <!-- Please use correct REFERENCE as indicated when paying, after paying PLEASE attach PROOF OF PAYMENT -->
                        <hr>

                    </div>
                </div>

            </div>
        </div>
    </x-AdminComps.mainContent>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $('.release').click(function(){
                var coins_id = $(this).data('id');
                
                var result = confirm('are you sure want to VERIFY this amount ?');
                
                if(result == true){
                
                                        $.ajax({
                                            url: 'https://mca-official.live/Member/release_coins',
                                            method: 'POST',
                                            data: {
                                                id: coins_id,
                                            },
                                            success: function (data) {
                                            console.log(data)
                                            
                                        
                                            swal('Confirmed', 'Coins Released Successfully', 'success');
                                        
                                            location.reload();
                                            }
                    /* location.href = 'https://mca-official.live/member/release_coins?id='+coins_id; */
                
            })
                }
            })
            
        </script>
    @include('partials.twakJS')

@endsection