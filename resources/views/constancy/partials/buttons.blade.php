   
@if(\Auth::user()->employee->contract != 'admin')   
   @if($request == 0)
        <a class="btn btn-info" href=" {{route('constancy.request', $groupsubject_id)}} ">Solicitar</a>
    @elseif($request == 1)
        <button class="btn btn-success" disabled="disabled">Solicitado</button>
    @else
        <a  title="Descargar" class="btn btn-success" href=" {{route('constancy.download',['id' => $groupsubject_id, 'teacher' =>  $teachers_id, 'group' =>  $group_id, 'subject' =>  $subjects_id])}} "><i class="fa fa-download"></i></a> 
    @endif
@else   
<a  title="Descargar" class="btn btn-success" href=" {{route('constancy.download',['id' => $groupsubject_id, 'teacher' =>  $teachers_id, 'group' =>  $group_id, 'subject' =>  $subjects_id])}} "><i class="fa fa-download"></i></a> 
@if($request == 1)
        <a class="btn btn-primary btn-sm" href=" {{route('constancy.accept',['id' => $groupsubject_id, 'result' =>  1])}} "><i class="fa fa-check"></i></a> 
        <a class="btn btn-danger btn-sm" href=" {{route('constancy.accept',['id' => $groupsubject_id,'result' =>  0])}} "><i class="fa fa-times"></i></a> 
    @endif
@endif