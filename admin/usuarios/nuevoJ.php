<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <form action="nuevoPost.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cNombreVariable">Nombre del usuario</label> <br>
                <input id="cNombreUsuario" require class="form-control" name="cNombreUsuario" type="text" placeholder="Ingrese el nombre del usuario">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Contraseña del usuario</label> <br>
                <input id="cContraseñaUsuario" require class="form-control" name="cContraseñaUsuario" type="password" placeholder="Ingrese la contraseña del usuario">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Nombres</label> <br>
                <input id="cNombres" require class="form-control" name="cNombres" type="text" placeholder="Ingrese nombres">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Apellidos</label> <br>
                <input id="cApellidos" require class="form-control" name="cApellidos" type="text" placeholder="Ingrese apellidos">  
            </div>
            <hr>
        </form>
        <div class="form-group">
            <button class="btn btn-success" onclick="GuardarUsuario();">Guardar</button> <br><br>
        </div>
    </div>
    <div class="col-md-1">  
    </div>  
</div>

<?php
    /*
    GET--1ocalhost/admin/variables/nuevoV.php
    Parametros --> Modelo vacio
    */
?>

<script>
    function GuardarUsuario(){
        var cNombreUsuario = $("#cNombreUsuario").val();
        var cContraseñaUsuario = $("#cContraseñaUsuario").val();
        var cNombres = $("#cNombres").val();
        var cApellidos = $("#cApellidos").val();

        var formData = {
            "cNombreUsuario" : cNombreUsuario,
            "cContraseñaUsuario" : cContraseñaUsuario,
            "cNombres" : cNombres,
            "cApellidos" : cApellidos
        }

        $.post("/admin/usuarios/nuevoPostJ.php", formData, function(data){
            Swal.fire(
            'Proceso correcto',
            data,
            'success'
            ); 
            setTimeout(() => {
                window.location.reload();
            }, 2000);
        });
    }
</script>
