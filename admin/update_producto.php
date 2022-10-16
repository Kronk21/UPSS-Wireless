<?php 
    session_start();

    include "../includes/conexion.php";

    if(!isset($_SESSION["admin"])) {
        header("Location: login.php");
    }

    if(!isset($_GET["producto_id"])) {
        header("Location: index.php");
    }
    
    //  Obtener la informacion del producto
    $query = "SELECT * FROM productos WHERE id = ?";
    $statement = $conexion->prepare($query);
    $statement->execute([$_GET["producto_id"]]);
    $producto = $statement->get_result()->fetch_assoc();

    if(is_null($producto)) {
        header("Location: index.php");
    }

    $errores = "";
    $exito = "";
    
    if(isset($_POST["update"])) {
        // Almacenar informacion en variables
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $caracteristicas = $_POST["caracteristicas"];
        $cantidad = $_POST["inventario"];
        $imagenes = [];
        
        $img1 = $_FILES["img1"];
        if(empty($img1["name"])) {
            $img1 = $_POST["img1-guardada"];
        } else {
            array_push($imagenes, $img1);
            $img1 = $_FILES["img1"]["name"];
        }

        $img2 = $_FILES["img2"];
        if(empty($img2["name"])) {
            $img2 = $_POST["img2-guardada"];
        } else {
            array_push($imagenes, $img2);
            $img2 = $_FILES["img2"]["name"];
        }

        $img3 = $_FILES["img3"];
        if(empty($img3["name"])) {
            $img3 = $_POST["img3-guardada"];
        } else {
            array_push($imagenes, $img3);
            $img3 = $_FILES["img3"]["name"];
        }

        $img4 = $_FILES["img4"];
        if(empty($img4["name"])) {
            $img4 = $_POST["img4-guardada"];
        } else {
            array_push($imagenes, $img4);
            $img4 = $_FILES["img4"]["name"];
        }

        $categoria = $_POST["categoria"];

        // Mover las imagenes a la carpeta src/img/db_productos
        $directorio = "../src/img/db_productos/";

        // Verificar que no existan las imagenes
        foreach($imagenes as $img) {
            if(file_exists($directorio . $img["name"])) {
                $errores .= "Ya existe una imagen con el nombre: ". $img["name"] . "<br>";
            }
        }
        
        // Si no existen las imagenes mover a la carpeta
        if($errores == "") {
            foreach($imagenes as $img) {
                move_uploaded_file($img["tmp_name"], $directorio . $img["name"]);
            }

            // Actualizar la base de datos
            $query = "UPDATE productos SET nombre = ?, precio = ?, descripcion = ?, caracteristicas = ?, cantidad = ?, ";
            $query .= "imagen1 = ?, imagen2 = ?, imagen3 = ?, imagen4 = ?, categoria_id = ? ";
            $query .= "WHERE id = ?";
            $statement = $conexion->prepare($query);
            $statement->execute([$nombre, $precio, $descripcion, $caracteristicas, $cantidad, $img1, $img2, $img3, $img4, $categoria, $_GET["producto_id"]]);

            $exito = "Se actualizo el producto de manera exitosa";
        }
    }    

    // Obtener las categorias que se mostraran en el formulario
    $query = "SELECT id, nombre FROM categorias";
    $statement = $conexion->prepare($query);
    $statement->execute();
    $categorias = $statement->get_result();
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

    <script defer src="../src/js/script.js"></script>
    
    <title>Actualizar producto</title>
</head>

<body>    
    <section id="contacto" class="seccion-crear">
        <div class="contenedor">
            <h2>
                <a href="index.php">&LeftArrow; Regresar</a>
            </h2>
            <div class="formulario__contenido">
                <h3>Crear producto</h3>
                <form action="" class="formulario" method="POST" enctype="multipart/form-data">
                    <div class="formulario__control">
                        <label for="nombre">Nombre del producto:</label>
                        <!-- <input type="text" name="nombre" id="nombre"> -->
                        <textarea name="nombre" id="nombre"><?php echo $producto["nombre"]; ?></textarea>
                    </div>

                    <div class="formulario__control">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" id="precio" value="<?php echo $producto["precio"]; ?>">
                    </div>

                    <div class="formulario__control">
                        <label for="descripcion">Descripcion:</label>
                        <textarea name="descripcion" id="descripcion"><?php echo $producto["descripcion"]; ?></textarea>
                    </div>

                    <div class="formulario__control">
                        <label for="caracteristicas">Caracteristicas:</label>
                        <textarea name="caracteristicas" id="caracteristicas"><?php echo $producto["caracteristicas"]; ?></textarea>
                    </div>

                    <div class="formulario__control">
                        <label for="inventario">Cantidad:</label>
                        <input type="number" name="inventario" id="inventario" value="<?php echo $producto["cantidad"]; ?>">
                    </div>

                    <div class="formulario__control">
                        <label for="categoria">Categoria:</label>
                        <select name="categoria" id="categoria">
                            <?php while($fila = $categorias->fetch_assoc()):?>
                                <?php if($producto["categoria_id"] == $fila["id"]): ?>
                                    <option selected value="<?php echo $fila["id"]; ?>"><?php echo $fila["nombre"]; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $fila["id"]; ?>"><?php echo $fila["nombre"]; ?></option>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="formulario__control">
                        <label for="img">Imagenes:</label>
                        <input type="file" name="img1" id="img1">
                        <input type="hidden" name="img1-guardada" value="<?php echo $producto["imagen1"]; ?>" id="img1">

                        <input type="file" name="img2" id="img2">
                        <input type="hidden" name="img2-guardada" value="<?php echo $producto["imagen2"]; ?>" id="img2">

                        <input type="file" name="img3" id="img3">
                        <input type="hidden" name="img3-guardada" value="<?php echo $producto["imagen3"]; ?>" id="img3">
                        
                        <input type="file" name="img4" id="img4">
                        <input type="hidden" name="img4-guardada" value="<?php echo $producto["imagen4"]; ?>" id="img4">
                    </div>

                    <input type="submit" name="update" class="btn btn-secundario" value="Enviar">
                </form>

                <p>
                    <?php echo $errores; ?>
                </p>

                <p>
                    <?php echo $exito; ?>
                </p>
            </div>
        </div>
    </section>
    
    <!-- 
    |-----||-----||-----||-----||-----|
                Scripts
    |-----||-----||-----||-----||-----|
    -->
    <?php include "../includes/scripts.php"; ?>
</body>
</html>