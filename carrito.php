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

        $buffer = str_replace("%TITLE%","UPSS Wireless | Tu carrito de compras",$buffer);
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
                    Carrito
    |-----||-----||-----||-----||-----|
    -->
    <section class="seccion-carrito">
        <div class="contenedor">
            <!-- <h1 class="hero__titulo">No hay nada en tu carrito</h1> -->
            <div class="carrito__contenido">
                <ul class="carrito__lista">
                    <?php
                        //  Obtener los productos asociados al carrito y guardarlos en un arreglo
                        $query = "";
                        $productos = ["", "", ""];
                    
                        //  Ejecutar la vista con el arreglo de productos
                        include "views/carrito_lista.view.php";
                    ?>      
                </ul>          
                <div class="carrito__detalles">
                    <?php
                        //  Obtener la info (precio final) del carrito y despleguarla en pantalla
                        include "views/carrito_detalles.view.php";
                    ?>                    
                </div>
            </div>
        </div>
    </section>

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