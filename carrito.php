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
            <!-- <h1 class="hero__titulo">No hay nada en tu carrito</h1> -->
            <div class="carrito__contenido">
                <ul class="carrito__lista">
                    <li class="carrito__producto">
                        <div class="carrito__img">
                            <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                        </div>
                        <div class="carrito__info">
                            <a href="producto.php" class="info__nombre">
                                EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                            </a>
                            <p class="info__precio">$4,200.00</p>
                            <form method="POST" class="carrito__acciones">
                                <p class="info__cantidad">Cantidad:</p>
                                <input type="number" name="cantidad" value="1" min="1" max="4">
                                <input type="hidden" name="producto_id" value="">
                                <button type="submit"  class="carrito__btn">Actualizar</button>
                                <button type="submit" class="carrito__eliminar">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                    <li class="carrito__producto">
                        <div class="carrito__img">
                            <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
                        </div>
                        <div class="carrito__info">
                            <a href="producto.php" class="info__nombre">
                                EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                            </a>
                            <p class="info__precio">$4,200.00</p>
                            <form method="POST" class="carrito__acciones">
                                <p class="info__cantidad">Cantidad:</p>
                                <input type="number" name="cantidad" value="1" min="1" max="4">
                                <input type="hidden" name="producto_id" value="">
                                <button type="submit"  class="carrito__btn">Actualizar</button>
                                <button type="submit" class="carrito__eliminar">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
                <div class="carrito__detalles">
                    <p class="detalles__titulo">Detalles</p>
                    <p class="detalles__total">Total:</p>
                    <p class="detalles__num">$8,400.00</p>
                    <form action="" method="POST" class="form__detalles">                        
                        <label for="correo">Correo electronico:</label>
                        <input type="email" name="correo" id="correo">
                        <input type="hidden" name="carrito_id">

                        <button type="submit" class="btn btn-primario btn-detalles">Enviar solicitud</button>
                    </form>
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