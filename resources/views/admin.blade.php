<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    hello admin
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div>
                <!-- @yield('content') -->
                <html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </style>

    <title>Admin</title>

</head>
<body>
                <a href="{{route('adminrecycle')}}" type="button" class="btn btn-outline-primary">Recycle Data</a>
                <a href="{{route('adminsell')}}" type="button" class="btn btn-outline-secondary">Sell Data</a>
                <a href="{{route('admindonate')}}" type="button" class="btn btn-outline-success">Donate Data</a>
                <a href="{{route('phone')}}" type="button" class="btn btn-outline-danger">update Phones Data</a>
                <a href="{{route('state')}}" type="button" class="btn btn-outline-warning">update States Data</a>
<button type="button" class="btn btn-outline-info">Users Data</button>

</body>
</html>
            </div>
        </div>
    </div>
</x-app-layout>
