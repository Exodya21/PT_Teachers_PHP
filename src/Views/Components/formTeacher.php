<form id="newTeacher" method="post" class="ms-1 me-1 mt-3 d-flex flex-column ">
    <header>
        <h6 class="fw-bold" style="color:rgba(73, 145, 204, 1);">DATOS</h6>
        <hr/>
    </header>
    <div>
        <div class="d-flex flex-row  align-items-center col ">
            <label for="name">Nombre</label>
            <input type="text" class="form-control ms-3" name="name" id="name">
        </div>
        <div class="d-flex flex-row justify-content-between col mt-3 mb-3">
            <div class="d-flex flex-row align-items-center col me-5">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control ms-3" name="telefono" id="telefono">
            </div>
            <div class="d-flex flex-row align-items-center col">
                <label for="email">Email</label>
                <input type="email" class="form-control ms-5" name="email" id="email">
            </div>
        </div>
        <div class="d-flex flex-row  align-items-center col ">
            <label for="centro">Centro</label>
            <input type="text" class="form-control ms-4" name="centro" id="centro">
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-3 ms-5 ps-4 w-25">
        <div>
            <input type="checkbox"  id="customCheck1">
            <label class="text-nowrap" for="customCheck1">Deseo recibir comunicaciones</label>
        </div>
        <button class="btn text-white mt-3 w-50 text-center text-wrap" style="background-color:rgba(50, 197, 210, 1)" type="submit">Modificar</button>
    </div>
</form>

<input type="button" value="SALUDAME" onclick="saludame();">
<div id="mostrar_mensaje"></div>


<script>
    function saludame() {
        var params = {
            "variable1" : "mensaje1",
            "variable2" : "mensaje2",
            "variable3" : "mensaje3"
        };

        $.ajax({
            data: params,
            url: 'codigo_php.php',
            type: 'POST',

            beforeSend: function() {
                $('#mostrar_mensaje').html('Mensaje antes de enviar');
            },

            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje);
            },
        });
    }

</script>