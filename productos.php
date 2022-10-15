<?php
    include "includes/conexion.php";

    if(!isset($_COOKIE["pc_id"])) {       
        setcookie("pc_id", uniqid(), time() + 60 * 60 * 24 * 15, "/");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <!-- 
        Header 
    -->
    <?php 
        ob_start();
        include("includes/header.php");
        $buffer = ob_get_contents();
        ob_end_clean();

        $buffer = str_replace("%TITLE%","UPSS Wireless | La ultima tecnologia",$buffer);
        echo $buffer;
    ?>
<body>
    <!-- 
    |-----||-----||-----||-----||-----|
                    Navbar
    |-----||-----||-----||-----||-----|
    -->
    <?php include "includes/navbar.php"; ?>

    <!-- 
    |-----||-----||-----||-----||-----|
                    Productos
    |-----||-----||-----||-----||-----|
    -->
    <main>
        <div class="contenedor">
            <div class="categorias">
                <?php
                    include "includes/productos_categorias.php";
                    mostrarMenuCategorias($conexion);
                ?>
            </div>

            <div class="lista__productos">
                <?php
                    include "includes/productos_productos.php";
                    mostrarProductos(isset($_GET["categoria_id"]) ? (int)$_GET["categoria_id"] : 1, $conexion);
                ?>
            </div>
        </div>
    </main>

    <!-- 
    |-----||-----||-----||-----||-----|
                Formulario
    |-----||-----||-----||-----||-----|
    -->
    <?php include "includes/formulario.php"; ?>


    <!-- 
    |-----||-----||-----||-----||-----|
                Footer
    |-----||-----||-----||-----||-----|
    -->
    <?php include "includes/footer.php"; ?>
    
    <!-- 
    |-----||-----||-----||-----||-----|
                Scripts
    |-----||-----||-----||-----||-----|
    -->
    <?php include "includes/scripts.php"; ?>
</body>
</html>