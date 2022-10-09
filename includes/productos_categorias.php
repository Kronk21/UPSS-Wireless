<?php
    function mostrarMenuCategorias($conexion) {
        //  Checar si $_GET["id o como sea que vaya a llamar"] esta seteado
        $focus = isset($_GET["categoria_id"]) ? (int)$_GET["categoria_id"] : 1;

        //  Obtener la info(nombre e id) de cada categoria y almacenar cada categoria en un array
        $query = "SELECT id, nombre FROM categorias";
        $statement = $conexion->prepare($query);
        $statement->execute();
        
        $categorias = $statement->get_result();
        if($categorias->num_rows > 0) {
            include "views/productos_categorias.view.php";
        }
    }

?>