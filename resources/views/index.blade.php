<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Counter</title>
</head>
<body>
@include('sidebar')
<div class="container text-center">
    @section('content')
        <br><br>
        <h2>Select page, please!</h2>
    @show
</div>
</body>
</html>
