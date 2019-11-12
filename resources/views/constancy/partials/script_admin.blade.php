<script>

        var table=null;
        table = $('#constancy_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('constancys.showTableC')}}",
            "columns": [
                {data: 'user_name'},
                {data: 'semester'},
                {data: 'letter'},
                {data: 'turn'},
                {data: 'subjects_name'},
                {data: 'department_name'},
                {data: 'btn'},

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