<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
    <title>@yield('title', 'Blog de prueba')</title>
</head>
<body>
    <div id="app">
        @include('partials/nav')
        @yield('content')
        @include('partials.session-status')
    </div>
</body>
</html>