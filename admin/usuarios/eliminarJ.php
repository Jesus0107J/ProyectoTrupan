<?php
    $MensajeFinal = "";
    try {
        $idusuario = $_GET["idusuario"];
        include '../configDB.php';
        $datos="";
        $query = "CALL EliminarUsuario(?);";
        $sentencia = $conn->prepare($query);
        $sentencia->bind_param("i", $idusuario);
        $sentencia->execute();
        $MensajeFinal = "Proceso correcto";
    } catch (\Throwable $th) {
        $MensajeFinal = "Ocurrio un error en la base de datos";
    }
    finally{
        echo $MensajeFinal;
    }
?>