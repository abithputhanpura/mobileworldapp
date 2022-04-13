<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<style>
.row {
    padding: 50px;
}

.row-height {
    height: 70px;
    text-align: center;
    padding-top: 25px;
}

.col-md-4,.col-md-2 {
    background-color: #e3e3e3;
}

.col-md-6 {
    background-color: #f5f3f3;
}

.col-md-4 {
    border-radius: 15px 0 0 15px;
}

.col-md-2 {
    border-radius: 0 15px 15px 0;
}

</style>



</head>
<body>
    <div class="container">
<h1>RECYCLED DETAILS:</h1>
<div class="row">
    <div class="col-md-4 row-height">
        <span>username</span>
    </div>
    <div class="col-md-6 row-height">
    brand
    </div>
    <div class="col-md-2 row-height">
    model
    </div>
</div>
@foreach ($man as $user)
<div class="row">
    <div class="col-md-4 row-height">
        <span>{{ $user->user}}</span>
    </div>
    <div class="col-md-6 row-height">
    {{ $user->brand}}
    </div>
    <div class="col-md-2 row-height">
    {{ $user->model}}
    </div>
</div>
@endforeach
</div>
</div>
</body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div>
                <!-- @yield('content') -->
            </div>
        </div>
    </div>
</x-app-layout>
