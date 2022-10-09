<?php
    function mostrarProductos($categoria, $conexion) {
        //  Obtener todos los productos segun la categoria($categoria)
        $query = "SELECT id, nombre, precio, imagen1 FROM productos WHERE categoria_id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$categoria]);

        $productos = $statement->get_result();        

        include "views/productos_productos.view.php";
    }
?>