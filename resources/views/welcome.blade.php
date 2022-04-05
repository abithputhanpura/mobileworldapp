<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PhoneBin</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.navbar-brand span {
    display: inline-block;
    color: #e99c2e;}

    .container py-2 span {
    display: inline-block;
    color: #e99c2e;}

    body{
        background: ;
                
            }

    </style>






</head>
<body>
    <div>
        <div>
        <nav class="navbar navbar-light" style="background-color: #C1F8CF;">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="https://re-collect.com.au/img/svg/stepone-green.svg" width="50" height="30" alt="logo image" >
      Phone<span>Bin</span>
    </a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Enter Pincode" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </nav>
  </div>

        </div>
    <div>
  <div class="position-absolute top-0 start-50 py-2">
      <nav class="nav nav-pills flex-column flex-sm-row">
<a href="{{ route('register') }}" class="navbar-brand">Home</a>
    <a href="{{ route('sell') }}" class="nav-link">Sell</a>
    <a href="{{ route('donate') }}" class="nav-link">Donate</a>
    <a href="{{ route('register') }}" class="nav-link">Recycle</a>
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                    <a class="nav-link active" href="{{ route('login') }}" class="">Log in</a>
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}" >Register</a>
                        @endif
                        </nav> 
                    @endauth
             @endif
             
             </div>
                    </div>
                    <div>
                <div class="w-50 p-3 h-80 d-inline-block" style="font-family: 'Montserrat', sans-serif;">
                <h2 class="color: #22577E"></h2>
                <h1 class="text-center color: #22577E ">Why recycling ?</h1>
        <p class="text-center">Most cell phones contain precious metals and plastics that can be recycled to save energy and resources that would otherwise be required to mine or manufacture. When placed in a landfill, these materials can pollute the air and contaminate soil and drinking water</p>
        <h3 class="color: #22577E">Let’s make the world a better place</h3>
        <h5 style="color: #78938A">Recycle your old phone now!</h5>
        <img src="https://9to5google.com/wp-content/uploads/sites/4/2022/02/05_Recycled-material-of-S22-Ultra_HI.jpg?quality=82&strip=all&w=1000" width="600" height="400" alt="phone recycle parts">
    </div>
         <div class="float-end px-2 py-2">
                    <img src="https://erth.app/wp-content/uploads/erth-img2.png"  alt="recycle-image">
                  
                </div>    
        </div>
        <div class="container">
  <div class="row">
    <div class="col text-center">
        <img src="https://www.cashify.in/static/recycle/phone.svg">
      <h6>Select Device</h6>
      <p>Tell us a little about the device you’d like to recycle</p>
    </div>
    <div class="col text-center">
    <img src="https://www.cashify.in/static/recycle/pick.svg">
      <h6>Book Pickup</h6>
      <p >We’ll then assign a date & time for the pickup from your address</p>
    </div>
    <div class="col text-center">
    <img src="https://www.cashify.in/static/recycle/reward.svg">
      <h6>Handover Device</h6>
      <p>Handover the device and sit relax</p>
    </div>
    <div class="col text-center">
    <img src="https://www.cashify.in/static/recycle/help/help-2.svg">
      <h6>Device Analysis</h6>
      <p>After analysis we will provide the best price</p>
    </div>
    <div class="col text-center">
    <img src="https://www.cashify.in/static/recycle/help/help-6.svg">
      <h6>Payment</h6>
      <p>We will process the payment to the selected payment mode</p>
    </div>
  </div>
</div>
        </div>
              
        <footer class="bd-footer py-2 mt-5 bg-light">
  <div class="container py-2">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
          <img src="https://re-collect.com.au/img/svg/stepone-green.svg" width="50" height="30" alt="logo image" >
          <span class="fs-5">PhoneBin</span>
        </a>
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">Designed and built with all the love in the world for the help of E-waste Management.</li>
          <li class="mb-2">A demo website on smartphone recycling</li>
  
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="/">About</a></li>
          <li class="mb-2"><a href="#">Sell</a></li>
          <li class="mb-2"><a href="">Donate</a></li>
          <li class="mb-2"><a href="">Recycle</a></li>
          <li class="mb-2"><a href="">Home</a></li>
        </ul>
      </div>
     
      <div class="col-6 col-lg-2 mb-3">
        <h5>Ewaste websites</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://www.attero.in/">Attero</a></li>
          <li class="mb-2"><a href="https://ncashjunk.com/">ncashjunk</a></li>
          <li class="mb-2"><a href="https://www.zolopik.com/">zolopik</a></li>
          <li class="mb-2"><a href="http://www.extracarbon.com/">extracarbon</a></li>
        </ul>
      </div>
      
    </div>
  </div>
  <div class="text-center p-3" style="background-color:#00AFC1;">
    <h6>Copyright @ 2022 PhoneBin All rights reserved</h6>
  </div>
</footer>

</body>
