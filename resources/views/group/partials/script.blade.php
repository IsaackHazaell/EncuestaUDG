<script>
    $( document ).ready(function() {
        getSubject();
    });

    function getSubject()
    {
        $("#groupsubject_id").empty()
        group_id = document.getElementById("group_id").value;
        subjects = @json($groupsubjects);
        // console.log(subjects);
        subjects.forEach(function(subject){
            // console.log(subject['group_id']);
            if(group_id == subject['group_id'])
            {
                // document.getElementById("groupsubject_id").value = subject['subject_id'];
                var x = document.getElementById("groupsubject_id");
                var option = document.createElement("option");
                option.text = subject['subject']['name'];
                option.value = subject['subject_id'];
                x.add(option);
            }
        });
        // console.log(group_id);
    }
</script>