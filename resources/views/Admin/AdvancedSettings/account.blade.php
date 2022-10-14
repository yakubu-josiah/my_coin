@extends('partials.layoutAdmin')
@section('title', '- Account Details')
    
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
                        <h5 class="mb-3">Account Password</h5>
                        <hr>
                        <div class="accordion" id="accordionExample">
                            <form method="get" action="#"
                                role="form" class="forms-sample">

                                <div class="card mb-4 py-3 border-left-primary">
                                    <div class="card-body">
                                        <p></p>
                                        <input type="text" class="custom-select" placeholder="Username"
                                            name="username" value="Doney" readonly>
                                        <p></p>
                                        <input type="text" class="custom-select" placeholder="old"
                                            name="old">
                                        <p></p>

                                        <input type="text" class="custom-select" placeholder="new"
                                            name="new" required="">
                                        <p></p>
                                        <button type="submit" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Save</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </x-AdminComps.mainContent>
    @include('partials.twakJS')

@endsection