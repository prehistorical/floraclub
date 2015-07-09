<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Панель администратора Floraclub</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/adminka/vendor/bootstrap/dist/css/bootstrap.css">

        <link href="/adminka/css/dashboard.css" rel="stylesheet">
        <link href="/adminka/css/table.css" rel="stylesheet">

        <link rel="stylesheet" href="/adminka/css/fileinput.css">

        <link rel="stylesheet" href="/adminka/vendor/trumbowyg/dist/ui/trumbowyg.css">
        <link rel="stylesheet" href="/adminka/vendor/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        @include('back/topmenu')

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">

                    @include('back/sidebar')

                </div>

                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                    @yield('content')

                </div>
            </div>
        </div>


        <script src="/adminka/vendor/jquery/dist/jquery.js"></script>
        <script src="/adminka/vendor/bootstrap/dist/js/bootstrap.js"></script>
        <script src="/adminka/vendor/moment/moment.js"></script>

        @yield('scriptsarea')

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/adminka/js/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

