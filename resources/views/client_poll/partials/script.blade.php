<script>
window.onload = show();
function show() {
    var group1 = document.getElementById('group').selectedIndex;
    if(group1 == 0)
    {
      document.getElementById('send').disabled = true;
    }
    else
    {
      document.getElementById('send').disabled = false;
    }
/*     console.log(polls[0]['groups'][0]['id']); */
/*         polls.forEach(function(poll)
        {
            poll['groups'].forEach(function(group) 
            {
                if(group['id'] == group1)
                {
                    console.log(group['semester'] + group['letter'] + group['turn']);
                }
            });
        }); */
    };
</script>

<script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
</script>