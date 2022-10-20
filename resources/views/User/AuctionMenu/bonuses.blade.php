@extends('partials.userLayout')
@section('title', '- See Bonuses!!')

@section('content')
    <x-UserComps.dashboard>
        <x-UserComps.boardContent />
    </x-UserComps.dashboard>

    <x-UserComps.mainContent>
        <div class="page-header"></div>
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
    </x-UserComps.mainContent>

    @include('partials.twakJS')
 

@endsection