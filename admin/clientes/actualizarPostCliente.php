<?php
    $idcliente = $_POST["idcliente"];
    $cNombreCliente = $_POST["cNombreCliente"];
    $cApellidoCliente = $_POST["cApellidoCliente"];
    $cDNICliente = $_POST["cDNICliente"];
    $cTelefonoCliente = $_POST["cTelefonoCliente"];
    $cCorreoCliente = $_POST["cCorreoCliente"];
    $cContraseñaCliente = $_POST["cContraseñaCliente"];
    include '../configDB.php';
    $query = "CALL ActualizarCliente(?, ?, ?, ?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("issssss", $idcliente, $cNombreCliente, $cApellidoCliente, $cDNICliente, $cTelefonoCliente, $cCorreoCliente, $cContraseñaCliente);
    $sentencia->execute();
    header("location:/admin/clientes/mostrarCliente.php");
?>