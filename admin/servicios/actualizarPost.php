<?php
    $idservicio = $_POST["idservicio"];
    $cNombreServicio = $_POST["cNombreServicio"];
    $cDescripcion = $_POST["cDescripcion"];
    $nPrecioServicio = $_POST["nPrecioServicio"];
    $cRutaImagenServicio = "../../img/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$cRutaImagenServicio);
    $cRutaImagenServicio = "/img/" . $_FILES['image']['name'];
    include '../configDB.php';
    $query = "CALL ActualizarServicio(?, ?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("issis", $idservicio, $cNombreServicio, $cDescripcion, $nPrecioServicio, $cRutaImagenServicio);
    $sentencia->execute();
    header("location:/admin/servicios/index.php");
?>