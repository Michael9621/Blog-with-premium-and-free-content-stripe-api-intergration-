<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <link href="" stylesheet="" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        
    </head>
<body>

<div id="site-header">
    @include('partials.header')
</div>

<div id="site-main">
    @yield('content')
</div>



<div id="site-footer">
    @include('partials.footer')
</div>

<script src="" > </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>