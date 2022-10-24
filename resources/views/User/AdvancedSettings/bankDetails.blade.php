@extends('partials.userLayout')
@section('title', '- Bank Details')
    
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
                        <h5 class="mb-3">Banking Details</h5>
                        <hr>
                        <div class="accordion" id="accordionExample">
                            <form method="post" action="https://mca-official.live/member/update_profile">
                                <div class="card mb-4 py-3 border-left-primary">
                                    <div class="card-body">
                                        <p></p>
                                        <hr>
                                        <div id="cont" style="display: block;">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Bank To Receive Funds</label>
                                                <select  name="bank" class="form-control form-control-alternative" required=""  >
                                                    <option  value="" selected="" hidden="">Your Bank Is  </option>
                                                    <option value="Absa South Africa">Absa South Africa</option>
                                                    
                                                </select>
                                                <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Account Holder Name</label>
                                                <input type="text" class="custom-select" placeholder="Account Name" name="ah_name" value=""  >
                                                <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Account Number</label>
                                                <input type="text" class="custom-select" placeholder="Account Number" name="account_no" value=""  >
                                                <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Account Type</label>
                                                <select id="acc_type" name="bank_type" class="form-control form-control-alternative" required  >
                                                    <option selected hidden value="">  </option>
                                                    <option value="Savings">Savings</option>
                                                    <option value="Current">Current</option>
                                                </select>
                                                <small  class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                            </div>
                                            <hr>
                                        </div>
                                        <!--
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Notes To Display To The Buyer </label>
                                        <textarea cols="30" rows="10" class="form-control" name="notes"  ></textarea>
                                        <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                        </div>
                                        <hr>
                                        -->

                                        <button type="submit" class="btn btn-primary btn-icon-split"  >
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
    </x-UserComps.mainContent>

    @include('partials.twakJS')

@endsection



