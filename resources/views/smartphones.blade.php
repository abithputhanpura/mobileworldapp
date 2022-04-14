<html>
    <head>
        <title> phones</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>       
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
<form method="POST" action="{{route('phone.store')}}">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Brand:</label>
    <input type="text" class="form-group mx-sm-3 mb-2 mt-4" name="brand" id="brand" placeholder="eg:SAMSUNG">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Model:</label>
    <input type="text" class="form-group mx-sm-3 mb-2 mt-4" name="model" id="model" placeholder="eg:M21">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Price:</label>
    <input type="text" class="form-group mx-sm-3 mb-2 mt-4" name="price" id="model" placeholder="eg:M21">
  </div>
  <a href="{{route('admin')}}" type="button" class="btn btn-warning float-end mx-2">Back</a>
  <button type="submit" class="btn btn-success float-end mb-2">ADD</button>
</form>
</div>    
</body>
</html>