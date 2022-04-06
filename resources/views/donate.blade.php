@extends('layouts.master')
  @section('content')
<html>
    <head>
        <title> donate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h3> hi welcome</h3>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://www.chandigarhguide.com/2018/wp-content/uploads/2020/10/donate-a-phone.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://spiderimg.amarujala.com/assets/images/2020/06/22/750x506/donate-your-old-phone_1592814363.jpeg" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://digitalinclusion.salford.gov.uk/media/1398/5737_de-donate-smartphone-2021_800x600_v1-01.jpg?anchor=center&mode=crop&width=800&height=600&rnd=132624473870000000" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<h4>Brand</h4>
</div>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Apple</a></li>
      <li><a href="#">Samsung</a></li>
      <li><a href="#">MI</a></li>
      <li><a href="#">Vivo</a></li>
      <li><a href="#">Oppo</a></li>
      <li><a href="#">Oneplus</a></li>
      <li><a href="#">Others</a></li>
    </ul>
</div class="label">
<h4>Model</h4>
</div>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Apple</a></li>
      <li><a href="#">Samsung</a></li>
      <li><a href="#">MI</a></li>
</div>
<div>
<h4>Varient</h4>
</div>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">4gb</a></li>
      <li><a href="#">6gb</a></li>
</div>
<div>
    <h3>Extra Credit After Analysis Please Check Below Applicable Conditions:</h3>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
  <label class="form-check-label">Warranty</label>
  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
  <label class="ml-4 form-check-label">Charger</label>
  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
  <label class="ml-4 form-check-label">Original Box</label>
  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
  <label class="ml-4 form-check-label">Original Invoice</label>
</div>

<div>
<button type="button" class="btn btn-danger">DONATE PHONE</button>
</div>

      
</body>
</html>
@endsection
