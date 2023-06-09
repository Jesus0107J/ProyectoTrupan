<?php 
    include '../headerCliente2.php';
?>

<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarClientes();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreCliente = "";
    $cApellidoCliente = "";
    $cDNICliente = "";
    $cTelefonoCliente = "";
    $cCorreoCliente = "";
    $cContraseñaCliente = "";

    while ($resultA = $result->fetch_assoc()) {
        $idcliente = $resultA["idcliente"];
        $cNombreCliente = $resultA["cNombreCliente"];
        $cApellidoCliente = $resultA["cApellidoCliente"];
        $cDNICliente = $resultA["cDNICliente"];
        $cTelefonoCliente = $resultA["cTelefonoCliente"];
        $cCorreoCliente = $resultA["cCorreoCliente"];
        $cContraseñaCliente = $resultA["cContraseñaCliente"];
    }
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-primary text-white ">Actualizar Perfil</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <form action="actualizarPostCliente.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value=<?php echo $idcliente?> name="idcliente">
            <div class="form-group">
                <label for="cNombreVariable">Ingrese nombre</label> <br>
                <input require class="form-control"  name="cNombreCliente" type="text" 
                placeholder="Ingrese el nombre del servicio" value="<?php echo $cNombreCliente?>">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Ingrese apellido</label> <br>
                <input require class="form-control" name="cApellidoCliente" type="text" 
                placeholder="Ingrese la descripción del servicio" value="<?php echo $cApellidoCliente?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Ingrese DNI</label> <br>
                <input require class="form-control" name="cDNICliente" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cDNICliente?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Ingrese teléfono</label> <br>
                <input require class="form-control" name="cTelefonoCliente" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cTelefonoCliente?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Correo electrónico</label> <br>
                <input require class="form-control" name="cCorreoCliente" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cCorreoCliente?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Contraseña</label> <br>
                <input require class="form-control" name="cContraseñaCliente" type="password" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cContraseñaCliente?>">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="mostrarCliente.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button> <br><br><br><br><br>
            </div>
        </form>
    </div>
    <div class="col-md-4">  
    </div>  
</div>

<?php
    /*
    GET--1ocalhost/admin/variables/nuevoV.php
    Parametros --> Modelo vacio
    */
?>
<?php
    include '../footerA.php';
?> 
