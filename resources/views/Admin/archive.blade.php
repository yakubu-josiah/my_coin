@extends('Layouts.layoutAdmin')
@section('title', 'Your Dashboard')
    
    

@section('content')

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

</div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 595.2px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
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
<div class="col-md-12 col-xl-4 ">
<div class="card card-event">
<div class="card-block">
<div class="row align-items-center justify-content-center">
<div class="col-sm-12">
<h5 class="m-0">Archived System Notifications</h5>
</div>
</div>
<h6 class="text-muted mt-4 mb-0"><a href="{{ route('dashboard') }}" class="btn btn-secondary">Go To Dashboard</a></h6>
</div>
</div></div>


<div class="col-sm-12">

 
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingThree">
<h5 class="mb-0">
<a href="#!" class="collapsed" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="collapseThree">
HAPPY NEW MONTH OF JULY TO ALL MEMBERS      
</a></h5>
</div>
<div id="1" class="card-body collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
GOD BLESS YOU ALL.. HAPPY EARNINGS TO ALL THE MEMBERS OF MCA .WE APPRECIATE THE VALUE OF SUPPORT YOUR SHOWING US ????????

STAY SAFE AND PROTECTED ????<p></p>
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


<script src="https://mca-official.live/assets/js/vendor-all.min.js"></script>
	<script src="https://mca-official.live/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://mca-official.live/assets/js/pcoded.min.js"></script>
    
    
@endsection
