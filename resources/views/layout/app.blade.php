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

        <!-- Animation library for notifications   -->
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
        <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>

        <!--  Fonts and icons     -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">

    </head>
    <body>

        <div class="wrapper">
            @include('layout.partials.sidebar')

            <div class="main-panel">
                @include('layout.partials.topbar')

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                    </div>
                </div>

                @include('layout.partials.footer')
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- sparkline NEW -->
        <script src="assets/js/sparkline.min.js" type="text/javascript"></script>

        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
        <script src="assets/js/paper-dashboard.js"></script>

        @stack('script')

        <script>
            $(function() {
                $(".inlinesparkline").sparkline(
                    'html',
                    {
                        type: 'bullet',
                        targetColor: '#EB5E28',
                        performanceColor: '#7AC29A',
                        tooltipFormat: '@{{isNull}}',
                    }
                );
            })
        </script>

    </body>
</html>
