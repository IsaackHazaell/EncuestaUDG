<script>

$( document ).ready(function() {
    nameDepartment();
});

function nameDepartment()
    {
        var jefe = document.getElementById("bossdepartment");
        var profesor = document.getElementById("teacher");
        
        if(jefe.checked)
            document.getElementById('div_boss').style.display="inline";
        else
            document.getElementById('div_boss').style.display="none";
        
            if(profesor.checked)
            document.getElementById('div_profesor').style.display="inline";
        else
            document.getElementById('div_profesor').style.display="none";
    }

</script>
