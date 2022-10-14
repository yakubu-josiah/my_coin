@extends('partials.layoutAdmin')
@section('title', '- See Bonuses!!')

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