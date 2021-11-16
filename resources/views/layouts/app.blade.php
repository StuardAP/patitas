<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

    @yield('content')
    <footer>@yield('footer')</footer>
</body>
</html>
