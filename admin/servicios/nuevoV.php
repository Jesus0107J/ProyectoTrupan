<?php 
    include '../headerA.php';
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Registro de nuevo servicio y/o producto</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <form action="nuevoPost.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cNombreVariable">Nombre del servicio</label> <br>
                <input require class="form-control" name="cNombreServicio" type="text" placeholder="Ingrese el nombre del servicio">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Descripción del servicio</label> <br>
                <input require class="form-control" name="cDescripcion" type="text" placeholder="Ingrese la descripción del servicio">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Precio del servicio</label> <br>
                <input require class="form-control" name="nPrecioServicio" type="number" placeholder="Ingrese el precio del servicio">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Imagen</label> <br>
                <input require class="form-control" name="image" type="file">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="index.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button> <br><br>
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