<script>
  
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