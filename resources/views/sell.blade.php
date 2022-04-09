  @extends('layouts.master')
  @section('content')
  <html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </style>

    <title>sell.me</title>

</head>
<body>
<div class="container">
    <h1 class="text-center">SELL YOUR PHONE HERE </h1>
</div>
<form  method="POST" action="{{route('sell.store')}}">
  @csrf
    <div class="container py-2" style="font-family: 'Montserrat', sans-serif;">
	  <div class="row">
    <div class="col">
    <div class="row row-cols-2">
	  <div class="col">Brand</div>
    <div class="col">   
    <select name="brand" id="brand" class="form-control input-lg dynamic" data-dependent="model">
     <option value="">Select Brand</option>
    @foreach($country_list as $country)
     <option value="{{ $country->brand}}">{{ $country->brand }}</option>
     @endforeach
    </select>
   </div>
<div class="col g-4">Model</div>
   <div class="col g-4"><select name="model" id="model" class="form-control input-lg dynamic" data-dependent="price">
     <option value="">Select Model</option>
  </select>
  </div>

 

  <div class="col g-4">Varient</div>
    <div class="col g-4">
    <select class="form-select" name='variant' aria-label="Default select example">
    <option selected>select varient</option>
    <option value="4gb">4gb</option> 
    <option value="6gb">6gb</option> 
    </select></div>
	
  <div class="col g-4">Gauranteed amount</div>
  <div class="col g-4">
    <select name="price" id="price" class="form-control input-lg">
     <option value="">Price</option>
    </select>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>
  
	<div class="g-4 py-2"><h4>Extra Credit After Analysis Please Check Below Applicable Conditions:</h4></span></div>
	<div class="col-lg">
    <div class="form-check">
  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="warranty" >
  <label class="ml-4 form-check-label">Warranty</label>
  <input class="ml-4form-check-input" type="checkbox" id="check2" name="option2" value="charger" >
  <label class="form-check-label">Charger</label>
  <input class="ml-4form-check-input" type="checkbox" id="check3" name="option3" value="original box" >
  <label class="form-check-label">Original Box</label>
  <input class="ml-4form-check-input" type="checkbox" id="check4" name="option4" value="original invoice" >
  <label class="form-check-label">Original Invoice</label>
  </div>
</div>
</div>
  <div class="col">
    <img src="https://www.quickmobile.in/assets/images/get_highest_value_sell_hide.webp"></div>
    </div>   
  </div>  
</div>
</div>
   <div class="float-end px-4 mt-4 mb-4">
    <button id ='sell-btn' type="submit" type="button" class="btn btn-primary">SELL PHONE</button> 
</form>
  </div>
</div>
</body>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#country').change(function(){
  $('#state').val('');
  $('#city').val('');
 });

 $('#state').change(function(){
  $('#city').val('');
 });
 

});
</script>
@endsection