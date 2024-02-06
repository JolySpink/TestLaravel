<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Регистрация на экзамен</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">

    <title>Title</title>



    <link rel="stylesheet" href="css/bootstrap.min.css">



    <link rel="stylesheet" href="css/bootstrap-grid.rtl.min.css">

    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css">


    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">

    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">




    <script src="https://code.jquery.com/jquery-latest.min.js "></script>
    <script src="js/tablesort.min.js "></script>
    <script src="js/htmx.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>

<body>







<main class="py-0">
    @yield('NavBar1')
</main>
@stack('scripts')
</body>

</html>


