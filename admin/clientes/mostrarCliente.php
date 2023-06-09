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
        <h1 class="text-center bg-primary text-white ">Mi Perfil</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" value=<?php echo $idcliente?> name="idservicio">
            <div class="form-group">
                <br>
                <input require class="form-control"  name="cNombreCliente" type="text" 
                placeholder="Ingrese el nombre del servicio" value="<?php echo $cNombreCliente?>">  
            </div>
            <div class="form-group">
                <br>
                <input require class="form-control" name="cApellidoCliente" type="text" 
                placeholder="Ingrese la descripción del servicio" value="<?php echo $cApellidoCliente?>">  
            </div>
            <div class="form-group">
                <br>
                <input require class="form-control" name="cDNICliente" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cDNICliente?>">  
            </div>
            <div class="form-group">
                <br>
                <input require class="form-control" name="cTelefonoCliente" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cTelefonoCliente?>">  
            </div>
            <div class="form-group">
                <br>
                <input require class="form-control" name="cCorreoCliente" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cCorreoCliente?>">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="../../indexCliente.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
            <a href="actualizarCliente.php" class="btn btn-secondary">Actualizar</a> <br><br><br><br><br>
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
