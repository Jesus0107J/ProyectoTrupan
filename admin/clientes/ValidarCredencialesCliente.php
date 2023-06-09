<?php
    $cCorreoCliente = $_POST["cCorreoCliente"];
    $cContraseñaCliente = $_POST["cContraseñaCliente"];
    include '../configDB.php';
    $query = "CALL ValidarCredencialesCliente(?,?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ss", $cCorreoCliente, $cContraseñaCliente);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreCliente = "";
    $cApellidoCliente ="";
    while ($resultA = $result->fetch_assoc()){
        $cNombreCliente = $resultA["cNombreCliente"];
        $cApellidoCliente = $resultA["cApellidoCliente"];
    }

    if ($cNombreCliente != "") {
        header("location:/indexCliente.php");
    }
    else{
        $mensajeLogin = "Usuario o contraseña incorrecta!";
        $_SESSION["CorreoCliente"] = $cCorreoCliente;
        header("location:/admin/clientes/index.php?mensajeLogin=".$mensajeLogin);
    }
?>