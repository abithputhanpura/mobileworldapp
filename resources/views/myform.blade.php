<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="brand" id="brand" class="form-control input-lg dynamic" data-dependent="model">
     <option value="">Select Brand</option>
     @foreach($country_list as $country)
     <option value="{{ $country->brand}}">{{ $country->brand }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="model" id="model" class="form-control input-lg dynamic" >
     <option value="">Select Model</option>
    </select>
   </div>
   <br />
   <div class="">
    <ul><select name="price" id="price" class="form-control input-lg">
     <li value="">selected></li>
    </select>
    </ul>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
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
    url:"{{ route('home.fetch') }}",
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