<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel de administracion</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/panel/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/panel/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/panel/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/panel/css/_all-skins.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @include('include.header')
      @include('include.aside')
      @include('include.section')
      @include('include.footer')





      <!-- jQuery 2.1.4 -->
        <script src="/panel/js/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="/panel/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/panel/js/app.min.js"></script>

  </body>
</html>
