<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lib/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<div class="container">
    @if(Request::session()->get('user_data'))
        @include('layout.navbar')
    @endif

    @yield('content')
</div>

<script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/datetimepicker.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>


</body>
</html>