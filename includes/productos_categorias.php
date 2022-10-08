<?php
    function mostrarMenuCategorias() {
        //  Checar si $_GET["id o como sea que vaya a llamar"] esta seteado
        $focus = "";

        //  Obtener la info(nombre e id) de cada categoria y almacenar cada categoria en un array
        $categorias = ["", "", "", "", "", "", ""];

        include "views/productos_categorias.view.php";
    }

?>