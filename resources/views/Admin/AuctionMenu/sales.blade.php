@extends('partials.layoutAdmin')
@section('title', '- Sales on Auction')

@section('content')
    <x-AdminComps.dashboard>
        <x-AdminComps.boardContent />
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
                                        <h5 class="mb-3">Sale On Auction</h5>
                                        <hr>

                                    </div>



                                    <div class="col-sm-12">


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
            $('.release').click(function(){
                var coins_id = $(this).data('id');
                
                var result = confirm('Are you sure you want to Sale this amount on Auction? ?');
                
                if(result == true){
                    location.href = 'https://mca-official.live/member/approve_for_sale?coinsid='+coins_id;
                }
            })
            
        </script>
    @include('partials.twakJS')
  
@endsection