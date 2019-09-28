<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Grazia</title>
    <link rel="shortcut icon" href="icon.ico">
    <link href="{{ url('grazia/css/style.css') }}" rel="stylesheet" type="text/css">
    
</head>

<body>
    <div class="d-flex" id="wrapper">

        @include('grazia.partials.sidemanu')
        
        <div id="page-content-wrapper">

            @include('grazia.partials.header')

            @yield('content')

            <div class="container-fluid p-0">
                
                @include('grazia.partials.footer')

            </div>
        </div>
    </div>
    <script src="{{ url('grazia/js/runtime.js') }}"></script>
    <script src="{{ url('grazia/js/vendor.js') }}"></script>
    <script src="{{ url('grazia/js/main.js') }}"></script>
</body>

</html>