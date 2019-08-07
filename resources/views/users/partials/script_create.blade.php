<script>


$(document).ready(function (){
    nameDepartment();
});

function nameDepartment()
{
    var type= $('#type').val();
    if (type=='1') {
        document.getElementById('department_name').style.display='block';
        document.getElementById('hdepartment').style.display='block';
    }else {
      document.getElementById('department_name').style.display='none';
      document.getElementById('hdepartment').style.display='none';
    }
}


</script>
