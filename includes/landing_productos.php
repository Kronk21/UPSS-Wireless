<?php
    function mostrarProductosPorCategoria($categoria) {
        //  Obtener nombre de la categoria
        $nombre_categoria = "";
        $id_categoria = "";

        //  Obtener la lista de 4 productos y almacenarlos en un array
        $query = "";
        $productos = ["", "", "", ""];

        //  Ejecutar la vista con los parametros correctos
        include "views/landing_productos.view.php";
    }    
?>