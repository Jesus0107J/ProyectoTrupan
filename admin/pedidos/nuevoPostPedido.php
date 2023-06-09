<?php
    $cNombreServicio= $_POST["cNombreServicio"];
    $cDescripcion = $_POST["cDescripcion"];
    $nPrecioServicio = $_POST["nPrecioServicio"];
    include '../configDB.php';
    $query = "CALL InsertarPedido(?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ssi", $cNombreServicio, $cDescripcion, $nPrecioServicio);
    $sentencia->execute();
    header("location:/indexCliente.php");

?>