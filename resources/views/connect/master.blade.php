<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>My Cms - @yield('title')</title>

        {{-- CSS BOOTSTRAP --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        {{-- CSS PERSONALIZADO --}}
        <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">

        {{-- FONT AWESOME --}}
        <script src="https://kit.fontawesome.com/e74387740d.js" crossorigin="anonymous"></script>

    </head>
    <body>
        
        @section('content')
        @show
        
    </body>
</html>


