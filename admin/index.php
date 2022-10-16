<?php
    session_start();

    include "../includes/conexion.php";

    if(!isset($_SESSION["admin"])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a906dbdcb6.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../src/css/utilidades.css">
    <link rel="stylesheet" href="../src/css/estilos.css">
    <link rel="stylesheet" href="../src/css/queries.css">    
    <link rel="stylesheet" href="../src/css/admin.css">    

    <script defer src="../src/js/script.js"></script>
    
    <title>Administrador</title>
</head>
<body>
    <section class="seccion-admin">
        <div class="contenedor">
            <h1>Panel de administrador</h1>

            <div class="hero__botones">
                <a href="crear_producto.php" class="btn btn-primario">Crear producto</a>
                <a href="cerrar_sesion.php" class="btn btn-primario">Cerrar sesión</a>
            </div>

            <div class="paquetes__secundarios">
                <?php
                    $query = "SELECT id, nombre FROM productos";
                    $statement = $conexion->prepare($query);
                    $statement->execute();
                    $productos = $statement->get_result();

                    while($producto = $productos->fetch_assoc()):
                ?> 
                    <div class="paquete__secundario">
                        <p class="secundario__nombre">
                            <?php echo $producto["id"]; ?>.- <?php echo $producto["nombre"]; ?>
                        </p>
                        <div class="secundario__linea"></div>
                        <div class="admin__links">
                            <a href="update_producto.php?producto_id=<?php echo $producto["id"]; ?>" class="secundario__link">Editar</a>
                            <a target="_blank" href="../producto.php?producto_id=<?php echo $producto["id"]; ?>" class="secundario__link">Ver</a>                            
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</body>
</html>