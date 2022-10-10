
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Coin Auction - 2022</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>

        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('Icons/favicon.ico') }}" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('css/animate1.min.css') }}">
        <!-- vendor css -->
        <link rel="stylesheet" href="https://mca-official.live/assets/css/style.css">

        <style>       
            .fixed-button.active {
                bottom: 50px;
                opacity: 1;
                visibility: hidden;
            }
            .fixed-button {
                bottom: 50px;
                opacity: 1;
                visibility: hidden;
            }
        </style>
    
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NGZW11GB1G"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-NGZW11GB1G');
        </script>

    </head>
    <body>

        <nav class="pcoded-navbar">
            <div class="navbar-wrapper">
                <div class="navbar-brand header-logo">
                        <a href="dash" class="b-brand">
                            <div class="b-bg">
                                <i class="feather icon-trending-up"></i>
                            </div>
                            <span class="b-title">My Coin Auction</span>
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
                        </div>
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);"><div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">

                        </div>
                <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 595.2px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
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
            <div class="collapse navbar-collapse">
            </div>
        </header>


        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                </div>
                            </div>
                        </div>

                        <div class="main-body">
                            <div class="page-wrapper">

                                <div class="row">


                                    <div class=" col-md-12">
                                        <div class="card card-event">
                                            <div class="card-block">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col">
                                                        <h5 class="m-0">System Notifications</h5>
                                                    </div>
                                                </div>

                                                <h3 class="mt-3 f-w-300"><b><span style="color:#A389D4">Welcome to the My Coin Auction</span></b><sub class="text-muted f-14"></sub></h3>
                                                <p> </p><p>
                                                    <b>BY popular demand MCA is here to stay!!! </b>
                                                </p>   
                                                <h6 class="text-muted mt-4 mb-0">
                                                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Got It</a>
                                                </h6>
                                                <hr>
                                                <a href="https://mca-official.live/archieve">View previous notifications</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/609f74d8b1d5182476b91339/1f5ne0t7c';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->


        <script src="{{ asset('js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/pcoded.min.js') }}"></script>
        
    </body>
</html>