

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

      <div>
        <h1>Encuestas</h1>
      </div>

    <div class="col-md-12">
        <form action="{{route('poll.evaluate')}}" method="POST">
            @csrf
            @for ($i = 0; $i <count($subjects); $i++)
                 @foreach ($polls as $poll)
                 <h2>{{$subjects[$i]->name}}</h2>
                 <h5>{{$teacher_subject[$i]->name}}</h5>
                 <input type="hidden" name="teacher_id[]" value="{{$teachers[$i]}}">
                 <input type="hidden" name="subject_id[]" value="{{$subjects[$i]->id}}">
                 <input type="hidden" name="poll_id[]" value="{{$poll->id}}">
                 <input type="hidden" name="poll_tyoe[]" value="{{$poll->type}}">
                 <input type="hidden" name="group_id" value="{{$group_id}}">
                 <table class="col-12 table table-striped">
                     <thead>
                         <tr>
                             <th>{{$poll->name}}</th>
                             <th>Respuesta</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($poll->questions as $question)
                         <tr class="col-12">
                             <td class="col-6"> {{$question->question}}</td>
                             @if($poll->type == 0)
                                 <td class="col-6">
                                     <div class="form-group">
                                         <select class="form-control" name="answer_5[]" id="">
                                             <option value="5">Excelente</option>
                                             <option value="4">Muy bueno</option>
                                             <option value="3">Bueno</option>
                                             <option value="2">Regular</option>
                                             <option value="1">Malo</option>
                                         </select>
                                     </div>
                                 </td>
                             @else
                                 <td class="col-6">
                                     <select name="answer_2[]" id="">
                                         <option value="1">Si</option>
                                         <option value="0">No</option>
                                     </select>
                                 </td>
                             @endif
                         </tr>  
                         @endforeach
                     </tbody>
                 </table>
             @endforeach
            @endfor
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

    </body>            
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{--     <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
 {{--    <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">
    {{-- <script src="{{asset('adminlte/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script> --}}
    @include('client_poll.partials.script')
</html>