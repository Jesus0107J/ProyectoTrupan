<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <form action="nuevoPostClienteJ.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cDescripcion">Nombres</label> <br>
                <input id="cNombreCliente" require class="form-control" name="cNombreCliente" type="text" placeholder="Ingrese nombres">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Apellidos</label> <br>
                <input id="cApellidoCliente" require class="form-control" name="cApellidoCliente" type="text" placeholder="Ingrese apellidos">  
            </div>
            <div class="form-group">
                <label for="cNombreVariable">DNI</label> <br>
                <input id="cDNICliente" require class="form-control" name="cDNICliente" type="text" placeholder="Ingrese DNI">  
            </div>
            <div class="form-group">
                <label for="cNombreVariable">Teléfono</label> <br>
                <input id="cTelefonoCliente" require class="form-control" name="cTelefonoCliente" type="text" placeholder="Ingrese teléfono">  
            </div>
            <div class="form-group">
                <label for="cNombreVariable">Correo Electrónico</label> <br>
                <input id="cCorreoCliente" require class="form-control" name="cCorreoCliente" type="text" placeholder="Ingrese correo electrónico">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Contraseña</label> <br>
                <input id="cContraseñaCliente" require class="form-control" name="cContraseñaCliente" type="password" placeholder="Ingrese la contraseña">  
            </div>
            <hr>
        </form>
        <div class="form-group">
            <button class="btn btn-success" onclick="GuardarCliente();">Registrar</button> <br><br>
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
    function GuardarCliente(){
        var cNombreCliente = $("#cNombreCliente").val();
        var cApellidoCliente = $("#cApellidoCliente").val();
        var cDNICliente = $("#cDNICliente").val();
        var cTelefonoCliente = $("#cTelefonoCliente").val();
        var cCorreoCliente = $("#cCorreoCliente").val();
        var cContraseñaCliente = $("#cContraseñaCliente").val();

        var formData = {
            "cNombreCliente" : cNombreCliente,
            "cApellidoCliente" : cApellidoCliente,
            "cDNICliente" : cDNICliente,
            "cTelefonoCliente" : cTelefonoCliente,
            "cCorreoCliente" : cCorreoCliente,
            "cContraseñaCliente" : cContraseñaCliente
        }

        $.post("/admin/clientes/nuevoPostClienteJ.php", formData, function(data){
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
