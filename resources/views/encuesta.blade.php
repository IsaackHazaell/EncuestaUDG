<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>Preparatoria 13 - Encuestas</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
      
    <body>
      <div class="topnav" id="myTopnav">
        <img src="{{ Storage::url("../storage/logoudg.png") }}" style="width:65px;" alt="">
      </div>

      <div>
        <h1>Encuestas</h1>
      </div>

    </body>            
     
    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">
    {{-- <script src="{{asset('adminlte/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script> --}}
    
</html>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>