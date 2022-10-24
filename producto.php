<?php
    include "includes/conexion.php";

    if(!isset($_COOKIE["pc_id"])) {       
        setcookie("pc_id", uniqid(), time() + 60 * 60 * 24 * 15, "/");
    }

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

        header("Location: carrito.php");
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

    $buffer = str_replace("%TITLE%","UPSS Wireless | EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico",$buffer);
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
                Producto
    |-----||-----||-----||-----||-----|
    -->
    <?php
        if(!isset($_GET["producto_id"])) {
            header("Location: index.php");
        }
    
        //  Obtener info del producto segun $_GET[]
        $query = "SELECT * FROM productos WHERE id = ?";
        $statement = $conexion->prepare($query);
        $statement->execute([$_GET["producto_id"]]);
        $producto = $statement->get_result();

        if($producto->num_rows == 0) {
            header("Location: index.php");
        }
        
        $producto = $producto->fetch_assoc();

        //  Dar formato a la lista de las caracteristicas        
        function mapear_caracteristicas($linea) {
            return "• " . $linea;
        }
        
        $caracteristicas = explode("\n", $producto["caracteristicas"]);
        $caracteristicas = array_map("mapear_caracteristicas", $caracteristicas);
        $caracteristicas = join("<br>", $caracteristicas);

        include "views/producto.view.php";
    ?>

    <section id="productos" class="seccion-productos">
        <div class="contenedor">
            <h2>Productos relacionados</h2>

            <?php 
                include "includes/landing_productos.php";
                mostrarProductosPorCategoria($producto["categoria_id"], $conexion);
            ?>
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
    <script src="src/js/producto.js"></script>
</body>
</html>