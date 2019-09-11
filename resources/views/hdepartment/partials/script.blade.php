<script>
    //DATATABLE
    var table=null;
    table = $('#hdeapartment_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{route('hdepartments.showTableHD')}}",
        "columns": [
            {data: 'name'},
            {data: 'department'},
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
    