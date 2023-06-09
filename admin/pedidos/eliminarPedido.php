<?php
    $idservicio = $_GET["idservicio"];
    include '../configDB.php';
    $query = "CALL EliminarPedido(?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idservicio);
    $sentencia->execute();
    header("location:/admin/pedidos/mostrarPedido.php");
?>