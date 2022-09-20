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
                    include "includes/productos_productos.php";
                    
                    mostrarMenuCategorias(3);
                ?>
                <!-- 
                <p class="categorias__titulo">Categorias</p>
                <ul>
                    <li>
                        <a href="" class="categoria__nombre">Camaras de seguridad</a>
                    </li>                    
                    <li>
                        <a href="" class="categoria__nombre">Modems</a>
                    </li>
                </ul> -->
            </div>

            <div class="lista__productos">
                <!-- <a href='#' class='producto'>
                    <div class='producto__img'>
                        <img src='src/img/productos/714slNN0VIL._AC_SL1500_.jpg' alt='Fotografia de blablabla'>
                    </div>
                    <div class='producto__info'>
                        <p class='producto__nombre'>
                            EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                        </p>
                        <p class='producto__precio'>$4,200.00</p>
                    </div>
                </a> -->

                <?php
                    mostrarProductos(3);
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