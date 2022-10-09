<?php
    include "includes/conexion.php";
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

    $buffer = str_replace("%TITLE%","UPSS Wireless | Te mereces la mejor conexión",$buffer);
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
                    Hero
    |-----||-----||-----||-----||-----|
    -->
    <section class="seccion-hero">
        <div class="linea"></div>
        <div class="contenedor hero__contenido">
            <div class="hero__img">
                <img src="src/img/camara-de-seguridad-hero.jpg" alt="Foto de una camara de seguridad">
            </div>

            <div class="hero__info">
                <p class="hero__nombre">UPSS Wireless</p>
                <h1 class="hero__titulo">Te mereces la mejor conexión</h1>
                <p class="hero__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <div class="hero__botones">
                    <a href="#" class="btn btn-primario">Contrata ya</a>
                    <a href="#" class="btn btn-terciario">Ver más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 
    |-----||-----||-----||-----||-----|
                Internet
    |-----||-----||-----||-----||-----|
    -->
    <section id="internet" class="seccion-internet">
        <div class="contenedor">
            <h2>Internet para casa o negocio</h2>

            <div class="paquetes">
                <div class="paquetes__principal">
                    <img src="src/img/Blobs.png" alt="Figuras de color">
                    <div class="paquete__principal">
                        <p class="principal__nombre">Paquete Gamer</p>
                        <div class="principal__linea"></div>
                        <p class="principal__desc">Para usuarios que necesitan la conexión más veloz, para streaming HD, juegos y más.</p>
                        <p class="principal__precio">$<span>700</span>.00</p>
                        <a href="#" class="btn btn-primario">Contrata ya</a>
                    </div>
                </div>

                <div class="paquetes__secundarios">
                    <div class="paquete__secundario">
                        <p class="secundario__nombre">Paquete Basico - $300.00</p>
                        <div class="secundario__linea"></div>
                        <p class="secundario__desc">
                            Navega por la web, realiza tareas, checa tu correo electronico, mira Youtube y revisa Facebook.
                        </p>
                        <p class="secundario__desc">
                            Ve multimedia en plataformas de Streaming (Netflix, HBO, Amazon Prime, etc) en buena calidad.
                        </p>
                        <a href="#" class="secundario__link">Contrata ya</a>
                    </div>

                    <div class="paquetes__lineas"></div>

                    <div class="paquete__secundario">
                        <p class="secundario__nombre">Paquete Gold - $500.00</p>
                        <div class="secundario__linea"></div>
                        <p class="secundario__desc">
                            Diseñado para transmitir contenido de video en alta definición (720p y 1080p).
                        </p>
                        <p class="secundario__desc">
                            Esencial para cualquier tipo de trabajo en linea (Zoom, Meet, Skype, etc.) sin caidas y con conexión estable.
                        </p>
                        <a href="#" class="secundario__link">Contrata ya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
    |-----||-----||-----||-----||-----|
                Productos
    |-----||-----||-----||-----||-----|
    -->
    <section id="productos" class="seccion-productos">
        <div class="contenedor">
            <h2>Tenemos la ultima tecnologia</h2>

            <?php 
                include "includes/landing_productos.php";
                mostrarProductosPorCategoria(7, $conexion);
                mostrarProductosPorCategoria(2, $conexion);
                mostrarProductosPorCategoria(6, $conexion);

                include "includes/landing_categorias.php";
                mostrarCategorias(3, 4, $conexion);
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
</body>
</html>