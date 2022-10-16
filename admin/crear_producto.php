<?php 
    session_start();

    include "../includes/conexion.php";

    if(!isset($_SESSION["admin"])) {
        header("Location: login.php");
    }

    $errores = "";
    $exito = "";
    
    if(isset($_POST["enviar"])) {
        // Almacenar informacion en variables
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $caracteristicas = $_POST["caracteristicas"];
        $cantidad = $_POST["inventario"];
        $img1 = $_FILES["img1"]["name"];
        $img2 = $_FILES["img2"]["name"];
        $img3 = $_FILES["img3"]["name"];
        $img4 = $_FILES["img4"]["name"];
        $categoria = $_POST["categoria"];

        $imagenes = [
            $_FILES["img1"],
            $_FILES["img2"],
            $_FILES["img3"],
            $_FILES["img4"]
        ];

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

            // Insertar en la base de datos
            $query = "INSERT INTO productos (nombre, precio, descripcion, caracteristicas, cantidad, ";
            $query .= "imagen1, imagen2, imagen3, imagen4, categoria_id) ";
            $query .= "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $statement = $conexion->prepare($query);
            $statement->execute([$nombre, $precio, $descripcion, $caracteristicas, $cantidad, $img1, $img2, $img3, $img4, $categoria]);

            $exito = "Se agrego el producto a la base de datos";
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
    
    <title>Crear productos</title>
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
                        <textarea name="nombre" id="nombre"></textarea>
                    </div>

                    <div class="formulario__control">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" id="precio">
                    </div>

                    <div class="formulario__control">
                        <label for="descripcion">Descripcion:</label>
                        <textarea name="descripcion" id="descripcion"></textarea>
                    </div>

                    <div class="formulario__control">
                        <label for="caracteristicas">Caracteristicas:</label>
                        <textarea name="caracteristicas" id="caracteristicas"></textarea>
                    </div>

                    <div class="formulario__control">
                        <label for="inventario">Cantidad:</label>
                        <input type="number" name="inventario" id="inventario">
                    </div>

                    <div class="formulario__control">
                        <label for="categoria">Categoria:</label>
                        <select name="categoria" id="categoria">
                            <?php while($fila = $categorias->fetch_assoc()):?>
                                <option value="<?php echo $fila["id"]; ?>"><?php echo $fila["nombre"]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="formulario__control">
                        <label for="img">Imagenes:</label>
                        <input type="file" name="img1" id="img1">
                        <input type="file" name="img2" id="img2">
                        <input type="file" name="img3" id="img3">
                        <input type="file" name="img4" id="img4">
                    </div>

                    <input type="submit" name="enviar" class="btn btn-secundario" value="Enviar">
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