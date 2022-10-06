<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>My Coin Auction - 2022 Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="my coin auction login mca mca2022 new mca mycoin Auction" name="keywords">
        <meta content="" name="description">

        
        <meta name="google-site-verification" content="bA6-r8vyORyz1tc5IkPbdqVHTMV4NsElK8qQAWQM7ZU" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="assets/new/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
        
        
        <link href="{{ asset('Icons/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <link href="{{ asset('Icons/favicon.png') }}" rel="icon">
        <link href="{{ asset('css/animations.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/newFonts.css') }}" rel="stylesheet">
        <link href="{{ asset('css/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owlCarousel.min.css') }}" rel="stylesheet">

        {{-- 
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Best P2P Site In South Africa" />
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <link href="{{ asset('Icons/favicon.png') }}" rel="icon">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        
        --}}

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    </head>

    <body>

        <header id="header">
            <div class="container">
              <button type="button" id="mobile-nav-toggle"><i class="fas fa-bars"></i></button>
                <div id="logo" class="pull-left">
                    <a href="#intro" class="scrollto">My Coin Auction - 2022</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#intro">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#faq">Faq</a></li>
                        <li><a href="testimonial">Testimonials</a></li>
                        <li><a href="{{ route('Register.signUp') }}">Sign up</a></li>
                        <li class="buy-tickets"><a href="{{ route('Register.LoginIn') }}">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="intro">

            <div class="intro-container wow fadeIn">
                <h1 class="mb-4 pb-0">The Amazingly Impossible <br><span>ONLINE</span> Auction</h1>
                <p class="mb-4 pb-0">That empowers you to be better, don`t be fooled by those who say "Impossible is nothing!"</p>
                <a href="https://youtu.be/EHOL3E-na24" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                <a href="#about" class="about-btn scrollto">Auction Starts In</a>
                <a href="#about" class="about-btn scrollto at " id="demo"></a>
                <script type="2e0e928d6bf62a8ea0d2b6c2-text/javascript">
                // Set the date we're counting down to
                var countDownDate = new Date('May 31, 2021 09:00:00').getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = + hours + "h "
                + minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "OPEN NOW";
                }
                }, 1000);
                </script>
            </div>
        </section>
        <main id="main">

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>About The Auction</h2>
                        <p>My Coin Auction is a fast growing online platform that enables you to participate in a virtual auction where you can bid and buy virtual coins called "My Coin", sale them and make a small fortune in either 5 days, 10 days or 20 days. </p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Where</h3>
                        <p>In the comfort of your home. <br>In the palm of your hands.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p>Twice Everyday<br>08:30  AM and 18:30  PM</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Auction Schedule</h2>
                    <p>Here is what you need to do, to make a small fortune</p>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 5</a>
                    </li>
                </ul>
                <h3 class="sub-heading">This Schedule only applies to registered members. To be part of this, create an account today.</h3>
                <div class="tab-content row justify-content-center">

                <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
                    <div class="row schedule-item">
                        <div class="col-md-2"><time>09:20 AM <br> 19:20 PM</time></div>
                        <div class="col-md-10">
                            <h4>Login <span></span></h4>
                            <p>Be ready and be online to join others.</p>
                        </div>
                    </div>
                    <div class="row schedule-item">
                        <div class="col-md-2"><time>08:30  AM<br>18:30  PM</time></div>
                <div class="col-md-10">
                <h4>Access Auction<span></span></h4>
                <p>Go to the auction and place your bid.</p>
                </div>
                </div>
                <div class="row schedule-item">
                <div class="col-md-2"><time>09:40 AM <br> 19:40 PM</time></div>
                <div class="col-md-10">
                <h4>Payment<span></span></h4>
                <p>Complete payment as per your bids.</p>
                </div>
                </div>
                </div>


                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
                <div class="row schedule-item">
                <div class="col-md-2"><time>09:00 AM <br> 17:00 PM</time></div>
                <div class="col-md-10">
                <h4>Check Account <span></span></h4>
                <p>Ensure your paid bids are verified and your banking details are in order.</p>
                </div>
                </div>
                </div>


                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
                <div class="row schedule-item">
                <div class="col-md-2"><time>09:20 AM <br> 19:20 PM</time></div>
                <div class="col-md-10">
                <h4>Login <span></span></h4>
                <p>Login and place your coins on sale.</p>
                </div>
                </div>
                <div class="row schedule-item">
                <div class="col-md-2"><time>09:30 AM <br> 19:30 PM</time></div>
                <div class="col-md-10">
                <h4>Receive Payment<span></span></h4>
                <p>Receive payment and approve it.</p>
                </div>
                </div>
                </div>

                </div>
            </div>
        </section>
        <section id="about">
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <center><h2>6 members and counting</h2>
        <p>Ask yourself, why My Coin Auction is hot like a tea kettle? </p></center>
        </div>
        </div>
        </div>
        </section>

        <section id="faq" class="wow fadeInUp">
        <div class="container">
        <div class="section-header">
        <h2>F.A.Q </h2>
        </div>
        <div class="row justify-content-center">
        <div class="col-lg-9">
        <ul id="faq-list">
        <li>
        <a data-toggle="collapse" class="collapsed" href="#faq1">What is needed to register <i class="fas fa-minus-circle"></i></a>
        <div id="faq1" class="collapse" data-parent="#faq-list">
        <p>
        Registration is FREE and easy, simply enter your details, ensure you enter your correct WhatsApp number starting with country code (+27)
        </p>
        </div>
        </li>
        <li>
        <a data-toggle="collapse" href="#faq2" class="collapsed">How many Bids can i make? <i class="fas fa-minus-circle"></i></a>
        <div id="faq2" class="collapse" data-parent="#faq-list">
        <p>
        Your account allows you to enter a single bid, the more you make payments and get approved, the more bids you will be eligible for.
        </p>
        </div>
        </li>
        <li>
        <a data-toggle="collapse" href="#faq3" class="collapsed">What percentage do i get on the coins? <i class="fas fa-minus-circle"></i></a>
        <div id="faq3" class="collapse" data-parent="#faq-list">
        <p>
        Coins gives you 20% gains in 5 days, if you pick the 5 day bid.<br>
        Coins gives you 45% gains in 10 days, if you pick the 10 day bid.<br>
        Coins gives you 110% gains in 20 days, if you pick the 20 day bid.<br>
        </p>
        </div>
        </li>
        <li>
        <a data-toggle="collapse" href="#faq4" class="collapsed">What are coins and how much is a coin? <i class="fas fa-minus-circle"></i></a>
        <div id="faq4" class="collapse" data-parent="#faq-list">
        <p>
        My Coin is a virtual coin that has a pegged price of R1.00 per coin. The price of the coin will always remain the same. Each time coins gets transferred from one account to another, they increase with 20% in 5 days.
        </p>
        </div>
        </li>
        <li>
        <a data-toggle="collapse" href="#faq5" class="collapsed">Are there any bonus for referrals? <i class="fas fa-minus-circle"></i></a>
        <div id="faq5" class="collapse" data-parent="#faq-list">
        <p>
        Yes, for each member you refer, you earn 5% on each order that they make, bunus will be adjusted with membership growth.
        </p>
        </div>
        </li>
        <li>
        <a data-toggle="collapse" href="#faq6" class="collapsed">How many accounts can i use? <i class="fas fa-minus-circle"></i></a>
        <div id="faq6" class="collapse" data-parent="#faq-list">
        <p>
        Every individual is only allowed a single account.
        </p>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </section>
        </main>

        <footer id="footer">
        <div class="footer-top">
        <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-6 footer-info">
        <a href="#intro" class="scrollto">My Coin Auction</a>
        <p>The most futuristic platform that enables you to grow daily, that empowers you to be better, don`t be fooled by those who say "Impossible is nothing!"</p>
        <hr>
        <p><a href="https://play.google.com/store/apps/details?id=com.mycoinauctionapp" target="_blank"><img src="https://i.pinimg.com/originals/71/42/62/714262829697e9749a4aa86b3c1f5538.png"></a></p>
        <p hidden><a href="https://apps.apple.com/us/app/my-coin-auction/id1517870333?ls=1" target="_blank" class="btn btn-light"><span class="fas fa-apple"> Download Now</span></a></p>
        <br>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
        <li><i class="fas fa-angle-right"></i> <a href="#">Home</a></li>
        <li><i class="fas fa-angle-right"></i> <a href="https://mca-official.live/signup">Sign Up</a></li>
        <li><i class="fas fa-angle-right"></i> <a href="https://mca-official.live/signin">Login</a></li>
        <li><i class="fas fa-angle-right"></i> <a href="privacy">Privacy Policy</a></li>
        <li><i class="fas fa-angle-right"></i> <a href="terms">Terms And Conditions </a></li>
        </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
        <!--<li><i class="fas fa-angle-right"></i> <a href="password">Reset Password</a></li>-->
        <!--<li><i class="fas fa-angle-right"></i> <script type="2e0e928d6bf62a8ea0d2b6c2-text/javascript" src="https://widget.supercounters.com/ssl/online_t.js"></script><script type="2e0e928d6bf62a8ea0d2b6c2-text/javascript">sc_online_t(1577685,"Users Online","#000000");</script><br><noscript></noscript></li>-->
        <li><i class="fas fa-angle-right"></i> <a href="https://www.sslshopper.com/ssl-checker.html#hostname=www.mycoin.life" target="_blank">Our Security</a></li><strong></strong>
        </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Support</h4>
        <p>
        Our support is available during these hours <br>
        <br>
        08:00 AM<br>
        21:00 PM<br>
        </p>
        </div>
        </div>
        </div>
        </div>
        <div class="container">
        <div class="copyright">
        Ver 1.92 &copy; Copyright <strong>My Coin Auction</strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
        </div>
        </footer>
        <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>

        <script src="https://mca-official.live/assets/new/jquery.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/jquery-migrate.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/bootstrap.bundle.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/easing.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/hoverIntent.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/superfish.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/wow.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/venobox.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>
        <script src="https://mca-official.live/assets/new/owl.carousel.min.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>

        <script src="https://mca-official.live/assets/new/contactform.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>

        <script src="https://mca-official.live/assets/new/main.js" type="2e0e928d6bf62a8ea0d2b6c2-text/javascript"></script>





        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2e0e928d6bf62a8ea0d2b6c2-|49" defer=""></script>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>



        $(document).ready(function() {
            setInterval(timestamp, 1000);
            setInterval(timestampa,1000);
            // timestampa();
        });

        // function timestamp(){
        //     $.ajax({
        //         url : 'https://mca-official.live/mainsite/current_time',
        //         method: 'GET',
        //         success: function(data){
        //             // console.log(data);
        //             $('.current').html(data);
        //         }
        //     })
        // }
            
            
        // function timestampa(){
        //     $.ajax({
        //         url : 'https://mca-official.live/mainsite/auction_times',
        //         method: 'GET',
        //         success: function(data){
        //                 console.log(data);
        //                 if(data == 0){
        //                     $('.at').html('Open Now');
        //                 }
        //                 else if(data == 3){
        //                     $('.at').html('Tomorrow ');
        //                 }
        //                 else{
        //                  $('.at').html(data);
                            
        //                 }
        //             }
        //         })
        //     }
        </script>

    </body>
</html>


