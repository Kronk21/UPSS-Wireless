<?php 
    include "../includes/conexion.php";

    session_start();

    $errores = "";

    $admin_usuario = "Kronk";
    $admin_password = "1234";

    if(isset($_POST["iniciar_sesion"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        if($usuario == $admin_usuario && $password == $admin_password) {
            $_SESSION["admin"] = true;
            header("Location: index.php");
        } else {
            $errores .= "Datos incorrectos";
        }
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

    <script defer src="../src/js/script.js"></script>
    
    <title>Crear productos</title>
</head>

<body>    
    <section id="contacto" class="seccion-crear">
        <div class="contenedor">
            <h2>
                <a href="../">&LeftArrow; Regresar</a>
            </h2>
            <div class="formulario__contenido">
                <h3>Inicia sesión</h3>
                <form action="" class="formulario" method="POST">
                    <div class="formulario__control">
                        <label for="usuario">Nombre de usuario:</label>
                        <input type="text" name="usuario" id="usuario">
                    </div>   
                    
                    <div class="formulario__control">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password">
                    </div>   

                    <input type="submit" name="iniciar_sesion" class="btn btn-secundario" value="Iniciar Sesión">
                </form>

                <p>
                    <?php echo $errores; ?>
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