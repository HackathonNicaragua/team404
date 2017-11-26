<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')-Educarte
    </title>
   

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../font/css/font-awesome.css">
    <link rel="stylesheet" href="../../mdb/css/mdb.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/jquery-alert/jquery.alertable.css">
    <link rel="stylesheet" href="../../css/style.css">


    
</head>
<body>
   @include("layouts.nav")
    <div class="container">
        <div class="col-md-12">
            @yield('contenido')
        </div>
    </div>
    @include('layouts.footer')

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap3.js"></script>
    <script src="/mdb/js/mdb.js"></script>
    <script src="/jquery-alert/jquery.alertable.js"></script>
    @stack('scripts')
    @yield('script')

    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
    <script src="../../mdb/js/mdb.js"></script>

    <script src="/jquery-alert/jquery.alertable.js"></script>


</body>
</html>