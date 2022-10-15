<?php
    include "includes/conexion.php";

    if(!isset($_COOKIE["pc_id"])) {       
        setcookie("pc_id", uniqid(), time() + 60 * 60 * 24 * 15, "/");
    }
?>

<?php
    //  Se ejecuta cuando se agrega un producto desde el archivo producto.php
    if(isset($_POST["agregar"])) {
        $pc_id = $_COOKIE["pc_id"];
        $producto_id = $_POST["producto_id"];
        $cantidad = $_POST["cantidad"];

        //  Buscar si el producto ya esta en el carrito
        $query = "SELECT * FROM carritos WHERE producto_id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$producto_id]);
        $pr = $statement->get_result();

        if($pr->num_rows == 0) {
            //  Si el producto no esta en el carrito, insertarlo
            $query = "INSERT INTO carritos (id, producto_id, cantidad) VALUES (?, ?, ?)";
            $statement = $conexion->prepare($query);
            $statement->execute([$pc_id, $producto_id, $cantidad]);
        } else {
            //  Si el producto si esta en el carrito, actualizarlo
            $query = "UPDATE carritos SET cantidad = ? WHERE id = ? AND producto_id = ?";
            $statement = $conexion->prepare($query);
            $statement->execute([$cantidad, $pc_id, $producto_id]);
        }
    }

    //  Se ejecuta cuando el usuario actualiza la cantidad deseada de un producto
    if(isset($_POST["update"])) {
        $pc_id = $_COOKIE["pc_id"];
        $producto_id = $_POST["producto_id"];
        $cantidad = $_POST["cantidad"];

        $query = "UPDATE carritos SET cantidad = ? WHERE id = ? AND producto_id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$cantidad, $pc_id, $producto_id]);
    }

    //  Se ejecuta cuando el usuario hace click al boton de eliminar
    if(isset($_POST["delete"])) {        
        $pc_id = $_COOKIE["pc_id"];
        $producto_id = $_POST["producto_id"];

        $query = "DELETE FROM carritos WHERE id = ? AND producto_id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$pc_id, $producto_id]);
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
            <?php
                //  Obtener el total de productos en el carrito, si el total es 0 se mostrara un mensaje
                if(!isset($_COOKIE["pc_id"])) {
                    $total_de_productos = "0";
                } else {
                    $pc_id = $_COOKIE["pc_id"];

                    $query = "SELECT COUNT(*) AS total FROM carritos WHERE id = ?";
                    $statement = $conexion->prepare($query);
                    $statement->execute([$pc_id]);
                    
                    $total_de_productos = $statement->get_result()->fetch_assoc()["total"];
                    $total_de_productos = is_null($total_de_productos) ? "0" : $total_de_productos;
                }
            ?>

            <?php if($total_de_productos == "0"): ?>
                <h1 class="hero__titulo">No hay nada en tu carrito</h1>
            <?php else: ?>
                <div class="carrito__contenido">                    
                    <ul class="carrito__lista">
                        <?php
                            //  Obtener los productos asociados al carrito y guardarlos en un arreglo
                            $query = "
                                SELECT                                     
                                    productos.id AS producto_id,
                                    productos.nombre,
                                    productos.precio,
                                    productos.precio * carritos.cantidad AS precio_sum,
                                    productos.cantidad AS producto_cantidad,
                                    productos.cantidad,
                                    productos.imagen1,
                                    carritos.cantidad AS carrito_cantidad
                                FROM productos
                                JOIN carritos
                                    ON carritos.producto_id = productos.id
                                WHERE carritos.id = ?;
                            ";
                            $statement = $conexion->prepare($query);
                            $statement->execute([$pc_id]);
                            $productos = $statement->get_result();   
                        
                            //  Ejecutar la vista con el arreglo de productos
                            include "views/carrito_lista.view.php";
                        ?>      
                    </ul>          
                    <div class="carrito__detalles">
                        <?php
                            //  Obtener la info (precio final) del carrito y despleguarla en pantalla
                            $query = "
                                SELECT 
                                    SUM(productos.precio * carritos.cantidad) AS total
                                FROM productos 
                                JOIN carritos 
                                    ON carritos.producto_id = productos.id
                                WHERE carritos.id = ?
                            ";
                            $statement = $conexion->prepare($query);
                            $statement->execute([$pc_id]);
                            $total = $statement->get_result()->fetch_assoc()["total"];
                            
                            include "views/carrito_detalles.view.php";
                        ?>                    
                    </div>
                </div>
            <?php endif;?>
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