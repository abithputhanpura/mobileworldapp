@extends('layouts.master')
  @section('content')
<html>
    <head>
        <title> donate</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>       
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <div class="container">
<h3> hi welcome</h3>
<div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active mx-auto ">
      <img class="d-block w-80" src="https://www.chandigarhguide.com/2018/wp-content/uploads/2020/10/donate-a-phone.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="https://spiderimg.amarujala.com/assets/images/2020/06/22/750x506/donate-your-old-phone_1592814363.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="https://digitalinclusion.salford.gov.uk/media/1398/5737_de-donate-smartphone-2021_800x600_v1-01.jpg?anchor=center&mode=crop&width=700&height=600&rnd=132624473870000000" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<form method="POST" action="{{route('donate.store')}}">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Brand:</label>
    <input type="text" class="form-group mx-sm-3 mb-2 mt-4" name="brand" id="brand" placeholder="eg:SAMSUNG">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Model:</label>
    <input type="text" class="form-group mx-sm-3 mb-2 mt-4" name="model" id="model" placeholder="eg:M21">
  </div>
  <button type="submit" class="btn btn-success float-end mb-2">DONATE</button>
</form>
</div>    
</body>
</html>
@endsection
