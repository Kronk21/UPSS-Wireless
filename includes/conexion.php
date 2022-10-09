<?php
    $conexion = new mysqli("localhost", "root", "", "upss");
    if($conexion->connect_errno) {
        header("Location: index.php");
    }
?>