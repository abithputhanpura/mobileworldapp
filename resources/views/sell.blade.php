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
    @if ($errors->has('brand'))
                    <span class="text-danger">{{ $errors->first('brand') }}</span>
                @endif
   </div>
<div class="col g-4">Model</div>
   <div class="col g-4"><select name="model" id="model" class="form-control input-lg dynamic" data-dependent="price">
     <option value="">Select Model</option>
  </select>
  @if ($errors->has('model'))
                    <span class="text-danger">{{ $errors->first('model') }}</span>
                @endif
  </div>

 

  <div class="col g-4">Variant</div>
    <div class="col g-4">
    <select name="variant" id ="variant" class="form-control input-lg" >
    <option selected>select variant</option>
    <option value="4gb">4gb</option> 
    <option value="6gb">6gb</option> 
    </select>
    @if ($errors->has('variant'))
                    <span class="text-danger">{{ $errors->first('variant') }}</span>
                @endif
    </div>
	
  <div class="col g-4">Gauranteed amount</div>
  <div class="col g-4">
    <select name="price" id="price" class="form-control input-lg">
     <option value="">Price</option>
    </select>
    @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>
  
	<div class="g-4 py-2"><h4>Extra Credit After Analysis Please Check Below Applicable Conditions:</h4></div>
	<div class="col-lg">
    <div class="form-check">
  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="yes" >
  <label class="ml-4 form-check-label">Warranty</label>
  <input class="ml-4form-check-input" type="checkbox" id="check2" name="option2" value="yes" >
  <label class="form-check-label">Charger</label>
  <input class="ml-4form-check-input" type="checkbox" id="check3" name="option3" value="yes" >
  <label class="form-check-label">Original Box</label>
  <input class="ml-4form-check-input" type="checkbox" id="check4" name="option4" value="yes" >
  <label class="form-check-label">Original Invoice</label>
  </div>
  <div class="col-lg mt-4">
  <div class="card text-white bg-info mb-3">
  <div class="card-header"><h4>Choose the Pyment method:</h4></div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="Radios" id="Radios1" value="instantcash" checked>
  <label class="form-check-label" for="exampleRadios1">
  Instant Cash
  </label>
</div>
<div class="form-check mt-4" id="Radios">
  <input class="form-check-input" type="radio" name="Radios" id="Radios2" value="Upi">
  <label class="form-check-label" for="exampleRadios1">
  Online Transaction
  </label>
</div>
<img src="https://tj-web-prod.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/06/Best-Payment-Gateways-in-India_Feature.jpg" width="200" height="100"  alt="">
</div>
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

 $('#brand').change(function(){
  $('#model').val('');
  $('#price').val('');
 });

 $('#model').change(function(){
  $('#price').val('');
 });
 

});
</script>
@endsection