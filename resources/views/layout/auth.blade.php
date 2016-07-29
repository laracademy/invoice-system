<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Invoice System</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}"" rel="stylesheet" />

        <!--  Paper Dashboard core CSS    -->
        <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/paper-auth.css') }}" rel="stylesheet"/>

        <!--  Fonts and icons     -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">

    </head>
    <body>

        @yield('content')

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>


    </body>
</html>
