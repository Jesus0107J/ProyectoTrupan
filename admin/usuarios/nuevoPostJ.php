<?php
    $cNombreUsuario = $_POST["cNombreUsuario"];
    $cContraseñaUsuario = $_POST["cContraseñaUsuario"];
    $cNombres = $_POST["cNombres"];
    $cApellidos = $_POST["cApellidos"];
    include '../configDB.php';
    $query = "CALL InsertarUsuario(?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ssss", $cNombreUsuario, $cContraseñaUsuario, $cNombres, $cApellidos);
    $sentencia->execute();

    echo "El usuario fue registrado correctamente";
?>