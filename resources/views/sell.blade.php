@extends('dashboard')
@section('hello')
<html>
    <head>
        <title> sell</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>
<h3> hi welcome</h3>
<div class="container">
  <div class="row">
  <div class="row row-cols-2">
    <div class="col">
    <h4>Brand</h4>
    </div>
    <div class="col">
    <select class="form-select" aria-label="Default select example">
    <option selected>select brand</option>
    @foreach ($name as $item)
    <option value="1">{{$item->brand}}</option>
    @endforeach
    </select>
    </div>
  <div class="col-lg">
  <h4>Model</h4>
  </div>
  <div class="col-g-3">
  <select class="form-select" aria-label="Default select example">
  <option selected>select model</option>
  @foreach ($name as $item)
  @
  <option >{{$item->model}}</option>
   @endforeach
   </select>
    </div>
  <div class="col-lg">
  <h4>Varient</h4>
  </div>
  <div class="col-g-3">
  <select class="form-select" aria-label="Default select example">
  <option selected>select varient</option>
  <option >4gb</option>
  <option >6gb</option>
  </div>
  <div class="col-lg-g-3">
    <h3>Extra Credit After Analysis Please Check Below Applicable Conditions:</h3>
  </div>
  <div class="col-lg">
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
  <div class="col-4">
  <button type="button" class="btn btn-danger">SELL PHONE</button>
  </div>
</div>
<div class="col-lg-8">
    <img src="https://www.quickmobile.in/assets/images/get_highest_value_sell_hide.webp">
    </div>
</body>
</html>
@endsection
