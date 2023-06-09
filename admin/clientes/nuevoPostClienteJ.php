<?php
    $cNombreCliente = $_POST["cNombreCliente"];
    $cApellidoCliente = $_POST["cApellidoCliente"];
    $cDNICliente = $_POST["cDNICliente"];
    $cTelefonoCliente = $_POST["cTelefonoCliente"];
    $cCorreoCliente = $_POST["cCorreoCliente"];
    $cContraseñaCliente = $_POST["cContraseñaCliente"];
    include '../configDB.php';
    $query = "CALL InsertarCliente(?, ?, ?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ssssss", $cNombreCliente, $cApellidoCliente, $cDNICliente, $cTelefonoCliente, $cCorreoCliente, $cContraseñaCliente);
    $sentencia->execute();

    echo "El cliente fue registrado correctamente";
?>