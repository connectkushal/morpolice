<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script >

    @yield('css')

</head>
<body>
    <div id="app">        
        <main class="section">
            <div class="content">
                {!! $aboutPolice->body  !!}
            </div>
        </main>
    </div>

    <hr>



    <!-- 
    <script src="{{ asset('js/app.js') }}" defer></script>
    -->
    @yield('js')

</body>
</html>
