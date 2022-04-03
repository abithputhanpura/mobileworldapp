<html>
    <head>
        <title> sell</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h3> hi welcome</h3>
<div>
<h4>Brand</h4>
</div>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">choose
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    
    <li><a href="#">12</a></li>
    
    </ul>
    <select class="form-select" aria-label="Default select example">
  <option selected>select brand</option>
  @foreach ($name as $item)
  <option value="1">{{$item->brand}}</option>
  @endforeach
  </select>

<button type="button" class="btn btn-primary">test</button>
</div>

<h4>Model</h4>
<div>
<select class="form-select" aria-label="Default select example">
  <option selected>select model</option>
  @foreach ($name as $item)
  <option >{{$item->model}}</option>
   @endforeach
   </select>
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
  <div class='relative'>
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
</div>

<div>
    <img src="https://www.quickmobile.in/assets/images/get_highest_value_sell_hide.webp">
</div>
<div>
<button type="button" class="btn btn-danger">SELL PHONE</button>
</div>

      
</body>
</html>
