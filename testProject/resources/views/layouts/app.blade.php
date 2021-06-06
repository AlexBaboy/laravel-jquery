<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="script" src="{{ URL::asset('/libs/overHang/dist/overhang.min.css') }}" />
    <script  src="{{ URL::asset('/libs/overHang/dist/overhang.min.js') }}"></script>
</head>
<body>

    @include('inc.header')
    <div class="container">
        @yield('content')
    </div>

    <div class="container mt-5">
        @include('inc.messages')
    </div>

</body>
</html>
