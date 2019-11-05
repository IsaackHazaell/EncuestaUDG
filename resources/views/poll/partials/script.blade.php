<script>

  //DATATABLE
  var table=null;
  table = $('#polls_table').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('poll.showTableP')}}",
      "columns": [
          {data: 'name'},
          {data: 'type'},
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
    var id = button.data('poll_id')
    var name = button.data('name')
    var type = button.data('type')
    var modal = $(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #type').val(type);
});

//DELETE
$('body').delegate('.status-poll','click',function(){
  poll_id = $(this).attr('poll_id');
        var csrf_token=$('meta[name="csrf-token"]').attr('content');
        swal({
            title: "Estás seguro?",
            text: "Se eliminará la encuesta",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: "{{url('/poll')}}" + '/' + poll_id,
                headers: {'X-CSRF-TOKEN': csrf_token},
                type: 'DELETE',
                dataType: 'json',
                data: {id: poll_id}
            }).done(function(data){
              table.ajax.reload();
              sAlert(data.title, data.text, data.icon);
          });
        }
      });
  });

  function getAll(id)
  {
      // Recorremos todos los valores
    $("#"+id+" option").each(function(){
          // Marcamos cada valor como seleccionado
          $("#"+id+" option[value="+this.value+"]").prop("selected",true);
    });
  }

  function eraseAll(id)
  {
    // Recorremos todos los valores
    $("#"+id+" option").each(function(){
        // Marcamos cada valor como NO seleccionado
        $("#"+id+" option[value="+this.value+"]").prop("selected",false);
    });
  }

  $(document).ready(function(){
    var i = 1;
    $('#add').click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="question[]" id="question" placeholder="Pregunta" class="form-control question_list"></td><td><a name="remove" id="'+i+'" class="btn btn-danger btn_remove">Quitar pregunta</a></td></tr>');
    });

     $(document).on('click', '.btn_remove', function(){
       var button_id = $(this).attr("id");
       $("#row"+button_id+"").remove();
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