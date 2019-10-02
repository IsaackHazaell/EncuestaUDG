<script>
    function addinput(){
        this.preventDefault();
        cosole.log('hola');
        var box = document.getElementById('addinput');
        var container = document.createElement("div");
        container.setAttribute("id", "question");
        box.appendChild(container);
        var div = document.createElement("div");
                    var h3 = document.createElement("h3");
                    h3.innerHTML = "Nueva pregunta";
                    div.appendChild(h3);
                    div.className = "form-group col-md-8";
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "Question_add";
                    input.className = "form-control";
                    input.required = true;
                    input.setAttribute("id", "Question_add");
                    div.appendChild(input);
                    container.appendChild(div);
    }
</script>