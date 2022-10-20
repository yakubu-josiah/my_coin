<!DOCTYPE html >
<html lang="en">
    <head>
        <title>My Coin Auction @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>

        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('Icons/favicon.png') }}" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <!-- vendor css -->
        {{-- <link rel="stylesheet" href="https://mca-official.live/assets/css/style.css"> --}}
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
        </script><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    <body>

        @yield('content')

    </body>
</html>
