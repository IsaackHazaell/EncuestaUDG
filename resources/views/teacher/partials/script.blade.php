<script>
//DATATABLE
var table=null;
table = $('#teachers_table').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{route('teacher.showTableT')}}",
    "columns": [
        {data: 'id'},
        {data: 'code'},
        {data: 'name'},
        {data: 'contract_type'},
        {data: 'designation'},
        {data: 'user_type'},
        {data: 'btn'}
    ],
    "language": {
  "info": "_TOTAL_ registros",
  "search": "Buscar",
  "paginate": {
    "next": "Siguiente",
    "previous": "Anterior",
  },
  "lengthMenu": 'Mostrar <select>'+
      '<option value="10">10</option>'+
      '<option value="30">30</option>'+
      '<option value="-1">Todos</option>'+
      '</select> registros',
  "loadingRecords": "Cargando...",
  "processing": "Procesando...",
  "emptyTable": "No hay datos",
  "zeroRecords": "No hay coincidencias",
  "infoEmpty": "",
  "infoFiltered": ""
}
});


//EDIT
$('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var last_name = button.data('last_name')
    var first_name = button.data('first_name')
    var code = button.data('code')
    var user_type = button.data('user_type')

    var modal = $(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #last_name').val(last_name);
    modal.find('.modal-body #first_name').val(first_name);
    modal.find('.modal-body #code').val(code);
    modal.find('.modal-body #user_type').val(user_type);
});


//DELETE
$('body').delegate('.status-teacher','click',function(){
        id_teacher = $(this).attr('id_teacher');
        var csrf_token=$('meta[name="csrf-token"]').attr('content');
        swal({
            title: "Estás seguro?",
            text: "Se eliminará el profesor",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: "{{url('/teacher')}}" + '/' + id_teacher,
                headers: {'X-CSRF-TOKEN': csrf_token},
                type: 'DELETE',
                dataType: 'json',
                data: {id: id_teacher}
            }).done(function(data){
              table.ajax.reload();
              sAlert(data.title, data.text, data.icon);
            });
          }
        });
    });


//SWETALERT
@if (Session::has('message'))
        sAlert(
        "{{ Session::get('message.title') }}",
        "{{ Session::get('message.text') }}",
        "{{ Session::get('message.icon') }}"
    );
@endif

function sAlert(title, text, icon)
{
  swal({
    title: title,
    text: text,
    icon: icon,
    button: "Continue",
    timer: 3000
  });
}
</script>
