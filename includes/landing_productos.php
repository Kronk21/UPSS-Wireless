<?php
    function mostrarProductosPorCategoria($categoria, $conexion) {
        //  Obtener informacion de la categoria
        $query = "SELECT id, nombre FROM categorias WHERE id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$categoria]);
        $categoria_info = $statement->get_result();

        if($categoria_info->num_rows > 0) {
            $categoria_info = $categoria_info->fetch_assoc();
            $id_categoria = $categoria_info["id"];
            $nombre_categoria = $categoria_info["nombre"];

            //  Obtener la lista de 4 productos y almacenarlos en un array
            $query = "SELECT id, nombre, precio, imagen1 FROM productos WHERE categoria_id = ? LIMIT 4";
            $statement = $conexion->prepare($query);
            $statement->execute([$categoria]);
            $productos = $statement->get_result();

            if($productos->num_rows == 4) {
                //  Ejecutar la vista con los parametros correctos
                include "views/landing_productos.view.php";
            }
        }
    }    
?>