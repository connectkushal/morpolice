<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script >
    <style>
        body{
            background-color: #f6f6f6;
        }

        .level-is-shrinkable .level-left,
        .level-is-shrinkable .level-right {
            flex-shrink: 1;
        }
        
    </style>

    @yield('css')

</head>
<body>
    <div id="app">
      
        @include('layouts.navbar')
        
        <main class="section">
            @yield('content')
        </main>
    </div>

    <hr>

    <footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        {{-- powered by <strong> Winteso Services pvt ltd </strong> </a> --}}
      </p>
    </div>
  </div>
</footer>

    <!-- 
    <script src="{{ asset('js/app.js') }}" defer></script>
    -->
    @yield('js')

</body>
</html>
