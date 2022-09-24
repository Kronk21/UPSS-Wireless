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
    <section class="seccion-producto">
        <div class="contenedor">
            <div class="articulo">
                <div class="articulo__imagenes">
                    <div class="imagenes__secundarias">
                        <div class="imagen__secundaria">
                            <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                        </div>
                        <div class="imagen__secundaria imagen__inactiva">
                            <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                        </div>
                        <div class="imagen__secundaria imagen__inactiva">
                            <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                        </div>
                        <div class="imagen__secundaria imagen__inactiva">
                            <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                        </div>
                    </div>
                    <div class="imagen__primaria">
                        <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                    </div>
                </div>
                <div class="articulo__info">
                    <p class="info__nombre">
                        EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                    </p>
                    <p class="info__precio">$4,200.00</p>
                    <p class="info__desc">Sistema de seguridad de camara DVR 4 en 1 </p>
                    <p class="info__caracteristicas">
                        • Detección de Humanos con IA<br>
                        • Sistema de Vigilancia Inalámbrico Ultra HD 4K 3MP y Rango de Visión Nocturna de 25 m<br>
                        • Mire Videos en Vivo y Reprodúzcalos en Cualquier Momento y en Cualquier Lugar<br>
                        • Micrófono Integrado y Voz Bidireccional<br>
                        • Grabación 24 Horas al Día, 7 Días a la Semana para una Protección Constante
                    </p>
                    <div class="info__acciones">
                            <p class="info__cantidad">Cantidad que te interesa:</p>
                            <input type="number" name="cantidad">
                        <button class="btn btn-primario">Agregar al carrito</button>
                    </div>
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