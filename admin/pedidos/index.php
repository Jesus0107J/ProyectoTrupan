<?php 
    include '../headerCliente2.php';
?>

<?php
    $idservicio = $_GET["idservicio"];
    include '../configDB.php';

    $datos="";
    $query = "CALL MostrarServicio(?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idservicio);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreServicio = "";
    $cDescripcion = "";
    $nPrecioServicio = 0;
    $cRutaImagenServicio="";

    while ($resultA = $result->fetch_assoc()){
        $cNombreServicio = $resultA["cNombreServicio"];
        $cDescripcion = $resultA["cDescripcion"];
        $nPrecioServicio = $resultA["nPrecioServicio"];
        $cRutaImagenServicio = $resultA["cRutaImagenServicio"];
    }    
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white ">Detalle de producto</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <form action="nuevoPostPedido.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value=<?php echo $idservicio?> name="idservicio">
            <div class="form-group" style="margin-bottom: 20px">
                <img class="img-fluid" src="<?php echo $cRutaImagenServicio ?>" alt="Imagen para actualizar">
            </div>
            <hr>
            <div class="form-group">
                <label for="cNombreVariable">Nombre del producto</label> <br>
                <input require class="form-control" name="cNombreServicio" type="text" 
                placeholder="Ingrese el nombre del servicio" value="<?php echo $cNombreServicio?>">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Descripción</label> <br>
                <input require class="form-control" name="cDescripcion" type="text" 
                placeholder="Ingrese la descripción del servicio" value="<?php echo $cDescripcion?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Precio</label> <br>
                <input require class="form-control" name="nPrecioServicio" type="number" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $nPrecioServicio?>">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="../../indexCliente.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Agregar</button> <br><br><br><br><br>
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