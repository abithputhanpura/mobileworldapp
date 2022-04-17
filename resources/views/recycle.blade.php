@extends('layouts.master')
  @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>recycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</head>
<body>
<h1 style="mx-auto">Recycling Mobile Devices</h1>
</br>
</br>
<div class="container">
<div class="row">
    <div class="col">

<p>Throwing away a cellular smartphone is banned in states like Maine and California. This is due to the damage due by cell phones to the surroundings. Therefore, to reduce this pollution, recycling cell phones is the best alternative available these days.</p></br>
<p>Another gain of recycling cellular telephones is that it enables energy conservation. According to current records, it’s far found that recycling an unmarried mobile smartphone allows the conservation of energy required by a PC to go on for forty hours. So, imagine the quantity of strength saved on recycling 1 thousand or 1 million mobile telephones. You might also surprise how does recycling assist in energy conservation? When the pre-present fabric is used or reused, the strength required to produce and transport the latest merchandise is saved.</p>

    </div>      
    <div class="col">

    <form method="POST" action="{{route('recycle.store')}}" >
    @csrf

      <div class="dropdown">
              <h5>brand</h5>
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
  {{ csrf_field() }}
<h5 style="align:center">Switch On
<input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btncheck1"></label>

  Broken
  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck2"></label></h5>
    </div>
    <div class="col">
    <img src="https://f3.onrecycle.co.uk/files/images/site-blog/large/536.jpg" class="img-thumbnail" alt="img1" width="400" height="200"></br>
    <img src="https://th.bing.com/th/id/OIP.uhhlF7dhJx7v4VMhifpDuQHaDW?pid=ImgDet&rs=1" class="img-thumbnail" alt="img2" width="400" height="200">
    </div>
  </div>
</br>
</br>
  <div class="row">
    <div class="col">  
</div>
    <div class="col"> 
  <div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input"><h6>I AGREE TERMS AND CONDITION</h6>   
  </div> 
</div>
<div class="col-12">
    <button type="submit" id="btn-recycle" class="btn btn-primary">RECYCLE</button>
  </div>
  </form>
    </div>
  </div>
</div>

</body>
</html>
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
    url:"{{ route('recycle.fetch') }}",
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
 });

 $('#model').change(function(){
  $('').val('');
 });
 

});
</script>
@endsection
