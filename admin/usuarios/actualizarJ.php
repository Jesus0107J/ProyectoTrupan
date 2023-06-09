<?php
    $idusuario = $_GET["idusuario"];
    include '../configDB.php';

    $datos="";
    $query = "CALL MostrarUsuario(?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idusuario);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreUsuario = "";
    $cContraseñaUsuario = "";
    $cNombres = "";
    $cApellidos="";

    while ($resultA = $result->fetch_assoc()){
        $cNombreUsuario = $resultA["cNombreUsuario"];
        $cContraseñaUsuario = $resultA["cContraseñaUsuario"];
        $cNombres = $resultA["cNombres"];
        $cApellidos = $resultA["cApellidos"];
    }    
?>

<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <form action="nuevoPost.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="idusuario" value="<?php echo $idusuario ?>">
            <div class="form-group">
                <label for="cNombreVariable">Nombre del usuario</label> <br>
                <input id="cNombreUsuario" require class="form-control" name="cNombreUsuario" type="text" 
                placeholder="Ingrese el nombre del usuario" value="<?php echo $cNombreUsuario ?>">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Contraseña del usuario</label> <br>
                <input id="cContraseñaUsuario" require class="form-control" name="cContraseñaUsuario" type="password" 
                placeholder="Ingrese la contraseña del usuario" value="<?php echo $cContraseñaUsuario ?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Nombres</label> <br>
                <input id="cNombres" require class="form-control" name="cNombres" type="text" 
                placeholder="Ingrese nombres" value="<?php echo $cNombres ?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Apellidos</label> <br>
                <input id="cApellidos" require class="form-control" name="cApellidos" type="text" 
                placeholder="Ingrese apellidos" value="<?php echo $cApellidos ?>">  
            </div>
            <hr>
        </form>
        <div class="form-group">
            <button class="btn btn-success" onclick="ActualizarUsuario();">Actualizar</button> <br><br>
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
    function ActualizarUsuario(){
        var idusuario = $("#idusuario").val();
        var cNombreUsuario = $("#cNombreUsuario").val();
        var cContraseñaUsuario = $("#cContraseñaUsuario").val();
        var cNombres = $("#cNombres").val();
        var cApellidos = $("#cApellidos").val();

        var formData = {
            "idusuario" : idusuario, 
            "cNombreUsuario" : cNombreUsuario,
            "cContraseñaUsuario" : cContraseñaUsuario,
            "cNombres" : cNombres,
            "cApellidos" : cApellidos
        }

        $.post("/admin/usuarios/actualizarPostJ.php", formData, function(data){
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