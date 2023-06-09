<?php
    $idusuario = $_POST["idusuario"];
    $cNombreUsuario = $_POST["cNombreUsuario"];
    $cContraseñaUsuario = $_POST["cContraseñaUsuario"];
    $cNombres = $_POST["cNombres"];
    $cApellidos = $_POST["cApellidos"];
    include '../configDB.php';
    $query = "CALL ActualizarUsuario(?, ?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("issss",$idusuario, $cNombreUsuario, $cContraseñaUsuario, $cNombres, $cApellidos);
    $sentencia->execute();

    echo "El usuario fue actualizado correctamente";
?>