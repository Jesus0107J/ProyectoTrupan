<?php
    const host = "localhost:3333";
    const user = "root";
    const pass = "nailsergio1";
    const db = "proyectotrupan";
    $conn = new mysqli(host,user,pass,db);
    if ($conn->connect_error) {
        die($conn->connect_error);
    }
?>