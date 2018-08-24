<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHOA PHAM-@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('public/style/style.css') !!}">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            @section('sidebar')
                day la menu
            @show
        </div>
        <div id="content">
            {{--@include('views.marquee')--}}
            @yield('content')
        </div>
        <div id="footer"></div>
    </div>
    
</body>
</html>