<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <meta name="userId" content="{{auth()->id()??""}}">
    @stack('css')
</head>
<body>
    

@yield('content')
    <script src="{{asset('js/app.js')}}" ></script>
 
    @stack('js')
</body>
</html>