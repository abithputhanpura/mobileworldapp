@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin.sell</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3>sold device details</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">brand</th>
      <th scope="col">model</th>
      <th scope="col">variant</th>
      <th scope="col">warranty_staus</th>
      <th scope="col">charger_included</th>
      <th scope="col">Original_box</th>
      <th scope="col">Invoice_deatils</th>
      <th scope="col">Gauranteed_price</th>
      <th scope="col">payment_mode</th>
      <th scope="col">email_id</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($man as $key => $user)
   
    <tr @if ($key === 0) class="active" @endif>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->brand}}</td>
      <td>{{$user->model}}</td>
      <td>{{$user->variant}}</td>
      <td>{{$user->warranty  ?? 'no'}}</td>
      <td>{{$user->charger ?? 'no' }}</td>
      <td>{{$user->box ?? 'no'}}</td>
      <td>{{$user->invoice ?? 'no'}}</td>
      <td>{{$user->amount}}</td>
      <td>{{$user->payment}}</td>
      <td>{{$user->email}}</td>
    </tr>
  </tbody>
  @endforeach
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">address</th>
      <th scope="col">state</th>
      <th scope="col">city</th>
      <th scope="col">pincode</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
    </tr>
    <h3>sell ordered address details</h3>
  </thead>
  <tbody>
  @foreach ($men as $key => $users)
   
   <tr @if ($key === 0) class="active" @endif>
      <th scope="row">{{$key+1}}</th>
      <td>{{$users->firstname}}</td>
      <td>{{$users->lastname}}</td>
      <td>{{$users->address_detail}}</td>
      <td>{{$users->state}}</td>
      <td>{{$users->city}}</td>
      <td>{{$users->pincode}}</td>
      <td>{{$users->phone}}</td>
      <td>{{$users->email}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
<a href="{{route('admin')}}" type="button" class="btn btn-outline-primary">Back</a>
</div>
</body>
</html>
@endsection