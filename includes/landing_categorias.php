<?php
    function mostrarCategorias($categoria1, $categoria2, $conexion) {
        //  Obtener la info de las 2 categorias y almacenarlas en un array
        $query = "SELECT * FROM categorias WHERE id = ? OR id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$categoria1, $categoria2]);
        $categorias = $statement->get_result();

        if($categorias->num_rows == 2) {
            include "views/landing_categorias.view.php";
        }
    }
?>