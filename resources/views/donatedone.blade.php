@extends('layouts.master')
@section('content')
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.title-style{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 700;
font-size: 20px;
color: hsl(52, 0%, 98%);
}
.title-quote{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 400;
color: hsl(52, 0%, 98%);
}
</style>
</head>


<body>
<form method="POST" action="{{route('donated.store')}}">
  @csrf
  <div class="container py-5">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col">
      <div class="card my-4 shadow-3">
        <div class="row g-0">
          <div class="col-xl-6 d-xl-block bg-image">
            <img src="https://mdbcdn.b-cdn.net/img/Others/extended-example/delivery.webp" alt="Sample photo"
              class="img-fluid" />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
              <div class=" justify-content-center align-items-center h-100">
                <div class=" text-center" style="margin-top: 0px;">
                  <i class="fas fa-truck text-white fa-3x"></i>
                  <p class="text-white title-style">We will reach you in 24hrs</p>
                  <p class="text-white mb-0"></p>

                  <figure class="text-center mb-0">
                    <blockquote class="blockquote text-white">
                      <p class="pb-3">
                        <i class="fas fa-quote-left fa-xs text-primary"
                          style="color: hsl(210, 100%, 50%) ;"></i>
                        <span class="lead font-italic">Everything at your doorstep.</span>
                        <i class="fas fa-quote-right fa-xs text-primary"
                          style="color: hsl(210, 100%, 50%) ;"></i>
                      </p>
                    </blockquote>

                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
              <h3 class="mb-4 text-uppercase">Pickup Info</h3>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="firstname" class="form-control form-control-lg" placeholder="First name">
                    @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Last name">
                    @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="address" class="form-control form-control-lg" placeholder="Address">
                @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
              </div>
              


              <div class="row">
                <div class="col-md-6 mb-4">

                  <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
                <option value="">Select State</option>
               @foreach($country_list as $country)
                <option value="{{ $country->state}}">{{ $country->state}}</option>
                 @endforeach
                 </select>
                 @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                    </div>
                  <div class="col-md-6 mb-4">
                  <div class="col g-4"><select name="city" id="city" class="form-control input-lg dynamic">
                    <option value="">Select City</option>
                 </select>
                 @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                 </div>                           
              </div>
              {{ csrf_field() }}
              <div class="form-outline mb-4">
                <input type="text" name="pincode" class="form-control form-control-lg" placeholder="Pincode">
                @if ($errors->has('pincode'))
                <span class="text-danger">{{ $errors->first('pincode') }}</span>
                @endif
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="phone" class="form-control form-control-lg" placeholder="Phone">
                @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
              </div>

              <div class="d-flex justify-content-end pt-3">
                <button type="submit" class="btn btn-success btn-lg ms-2" 
                  style="background-color:hsl(210, 100%, 50%) ">Place Pickup</button>
</form>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</html>

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
    url:"{{ route('dynamic.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#state').change(function(){
  $('#city').val('');
 
 });
 $('#city').change(function(){
  $('').val('');
});


});
</script>
@endsection
 