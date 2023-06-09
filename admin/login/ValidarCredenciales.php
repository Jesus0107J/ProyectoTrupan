<?php
    $cNombreUsuario = $_POST["cNombreUsuario"];
    $cContraseñaUsuario = $_POST["cContraseñaUsuario"];
    include '../configDB.php';
    $query = "CALL ValidarCredenciales(?,?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ss", $cNombreUsuario, $cContraseñaUsuario);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombres = "";
    $cApellidos ="";
    while ($resultA = $result->fetch_assoc()){
        $cNombres = $resultA["cNombres"];
        $cApellidos = $resultA["cApellidos"];
    }

    if ($cNombres != "") {
        header("location:/admin/");
    }
    else{
        $mensajeLogin = "Usuario o contraseña incorrecta";
        $_SESSION["NombreUsuario"] = $cNombreUsuario;
        header("location:/admin/login/index.php?mensajeLogin=".$mensajeLogin);
    }
?>