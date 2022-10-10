<!DOCTYPE html>
<html lang="en">
    <head>
     
        <title>My Coin Auction - 2022</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Best P2P Site In South Africa" />
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>
    
        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('Icons/favicon.png') }}" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('css/animate1.min.css') }}">
        <!-- vendor css -->
        <link rel="stylesheet" href="https://mca-official.live/assets/css/style.css">
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        <script src="{{ asset('js/sweetalert.min.js') }}"></script><title>My Coin Auction - 2022 Home -Login</title>
        <meta content="my coin auction login mca mca2022 new mca mycoin Auction" name="keywords">
    </head>
    {{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Best P2P Site In South Africa" />
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>

        <link href="{{ asset('Icons/favicon.png') }}" rel="icon" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>My Coin Auction - 2022 Home -Login</title>
        <meta content="my coin auction login mca mca2022 new mca mycoin Auction" name="keywords">
    </head> --}}

    <body>
        <div class="auth-wrapper">
            <div class="auth-content">
                <div class="auth-bg">
                    <span class="r"></span>
                    <span class="r s"></span>
                    <span class="r s"></span>
                    <span class="r"></span>
                </div>
                <div class="card">
                    <form class="form-element" method="get" action="https://mca-official.live/Login/login_submit" >
                        <!-- <input type="hidden" name="form_name" value="loginform"> -->
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <i class="feather icon-unlock auth-icon"></i>
                            </div>
                        <h3 class="mb-4">Login</h3>
                        <p class="mb-0 text-muted"> </p>
                        <hr>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username" required="">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Login</button>
                        <!--<p class="mb-2 text-muted">Forgot password? <a href="https://mca-official.live/password">Reset</a></p>-->
                        <p class="mb-2 text-muted">Don't have an account?  <a href="{{ route('signUp') }}">Signup</a></p>
                        <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="https://mca-official.live/signup">Signup</a></p> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/pcoded.min.js') }}"></script>
            
            

    </body>
</html>