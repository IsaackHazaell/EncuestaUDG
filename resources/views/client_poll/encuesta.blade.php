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
        <img src="{{ asset("img/logoudg.png") }}" style="width:65px;" alt="">
      </div>

      <div class="header-container">
        <div class="header">
          <h1>Encuesta</h1>
        </div>
      </div>

      <div class="poll-container">
        <section style="display: block;" class="body current" id="wizard-p-4" role="tabpanel" aria-labelledby="wizard-h-4" aria-hidden="false">
          <form action=" {{route('poll.show_polls')}} " method="POST">
            @csrf
                <div class="form-group">
                  <div class="poll-container select">
                    <select class="form-control" name="group" id="group" onchange="show();">
                        <option hidden disabled selected value> Selecciona tu grupo </option>
                        @foreach ($groups as $group)
                          <option value="{{$group->id}}">{{$group->semester}}-{{$group->letter}} - {{$group->turn}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="poll-container button">
                    <button id="send" class="btn btn-success" type="submit">Aceptar</button>
                  </div>
                </div>
            </form>
        </section>
      </div>

    </body>            
     
    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/client_poll.css')}}">
    {{-- <script src="{{asset('adminlte/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script> --}}
    @include('client_poll.partials.script')
</html>

