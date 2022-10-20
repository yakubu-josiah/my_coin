@extends('partials.userLayout')
@section('title', '- Notice!!')

@section('content')
    <x-UserComps.dashboard>
        <x-UserComps.boardContent />
    </x-UserComps.dashboard>

    <x-UserComps.mainContent>
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
    </x-UserComps.mainContent>

        @include('partials.twakJS')

@endsection
