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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>